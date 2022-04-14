<?php
    if(isset($_POST['change_img'])){
        if(isset($_FILES["image_art"])) {

            $name = $_FILES["image_art"]['name'];
            $type = $_FILES["image_art"]['type'];
            $tmp_name = $_FILES["image_art"]['tmp_name'];
            $error = $_FILES["image_art"]['error'];
            $size = $_FILES["image_art"]['size'];

            if($error > 0){
                header('Location:../../home1.php');
            }

            $ex_file = pathinfo($name,PATHINFO_EXTENSION); // extension image :::
            //$ex_file = strtolower($ex_file);

            if($ex_file != 'jpg' && $ex_file != 'jpeg' && $ex_file != 'png' ){

                header('Location:../../home1.php?erUimg=1');
                die();
            }

            if($size > 1000000){
                header('Location:../../home1.php?erUimg=2');
                die();
            }

            $name = uniqid('IMG-art',true).'.'.$ex_file;// renommer image


            $emplacement = '../../assets/img/Articles/'.$name;

            move_uploaded_file($tmp_name,$emplacement);

            $path = 'assets/img/Articles/'.$name;

            require '../connection.php';

            try{
                $STM = $BD_conn->prepare('Update Article set image = :img where Id_article = :id');
                $STM->execute([':img'=>$path,':id'=>$_POST['id_article']]);

            }catch (PDOException $exp){
                die('ERER upload image '.$exp->getMessage());
            }
            header('Location:../../home1.php?erUimg=3');
            die();
        }
    }