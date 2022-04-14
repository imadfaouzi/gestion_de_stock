<?php

    require ('../connection.php');

       $what = $_GET['q'];
    
       if(!isset($_GET['key'])){
          echo '<tr style="text-align: center;">';
           echo '<td colspan="5">rien trouver</td>';
          echo '<tr>';

           die('------------------');
       }
         
        $key = $_GET['key'];

       if($key == 2){
            $STM = $BD_conn->prepare('select * from Article where nom like ?');
            $STM->execute([$what]);
       }else if($key == 1){
            $STM = $BD_conn->prepare('select * from Article where Id_article = ?');
            $STM->execute([$what]);
       }else if($key == 3){
            $STM = $BD_conn->prepare('select * from Article where Id_Cat = ?');
            $STM->execute([$what]);
       }else if($key == 4){
            $STM = $BD_conn->prepare('select * from Article where Id_Fournissuer = ?');
            $STM->execute([$what]);
       }else if($key == 0){
            $STM = $BD_conn->prepare('select * from Article');
            $STM->execute();
       }

       

       $result = $STM->fetchAll(PDO::FETCH_ASSOC);

       if(!$result){
          echo '<tr style="text-align: center;">';
           echo '<td colspan="5">rien trouver</td>';
          echo '<tr>';

           die();
       }

       require '../functions.php';

       foreach ($result as $val){

           $name_four = GET_four_name($val['Id_Fournissuer']);
           $name_cat = GET_CAT_name($val['Id_Cat']);


          echo '<tr>';

               echo '<td>'.$val['Id_article'].'</td>';

               echo '<td>';
               //if(!empty($val['Id_article'])) {
                   echo '<button type="button" onclick="show_image_modal(\''.$val['image'].'\',\''.$val['nom'].'\')"
                          class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                          im
                        </button>';
               //}
               echo '</td>';

               echo '<td>';
                   echo '<button type="button" class="btn btn-sm">'.$val['nom'].'</button>';
               echo '</td>';

               echo '<td>'.$name_four.' '.$val['Id_Fournissuer'].'</td>';
               echo '<td>'.$name_cat.'</td>';
               echo '<td>'.$val['description'].'</td>';
               
           echo '</tr>';
       }
