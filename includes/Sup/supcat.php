<?php

     if(!isset($_POST['sup_cat']))
     {
         header("location:../../home1.php");
         die("jiti ghi hakak");
     }

     if(empty($_POST['categorie_id'])){
         header("location:../../home1.php?erSCAT=1");
         die('choisi une categorie !!');
     }

     require '../connection.php';
     //-------------------------------------------------------------------------------------------
        try{
            $STM = $BD_conn->prepare('select * from categorie where Id_cat = :id');
            $STM->execute([':id'=>$_POST['categorie_id']]);

            if(!$STM->fetchColumn())
            {
                header('location:../../home1.php?erSCAT=2');
                die('categorie n\'existe ');
            }
        }
        catch (PDOException $exp)
        {
            die('ERERER     :'.$exp->getMessage());
        }
    //-------------------------------------------------------------------------------------------

 $stm= $BD_conn->prepare("delete from Categorie where Id_cat =:id");
 $stm->execute([":id"=>$_POST['categorie_id']]);
    header('location:../../home1.php?erSCAT=3');
    die('bien supprimmer');

 ?>


