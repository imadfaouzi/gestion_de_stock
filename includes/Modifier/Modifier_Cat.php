<?php 


   if(isset($_POST['Modifier_id']))
   {
       header('location:../../home1.php');
   }

   if(empty($_POST['categorie_id']) and empty($_POST['Nvnom_cat']) and empty($_POST['itemDetailsDescription']))
   {
       header('location:../../home1.php?erMCAT=1');
       die();
   }

   require '../connection.php';

   try{
      $STM = $BD_conn->prepare('select * from categorie where Id_cat = :id');
      $STM->execute([':id'=>$_POST['categorie_id']]);

      if(!$STM->fetchColumn())
      {
          header('location:../../home1.php?erMCAT=2');
          die();
      }
   }
   catch (PDOException $exp)
   {
      die('ERERER     :'.$exp->getMessage());
   }

//----------------------------------------------------------------------------------
   
   if(!empty($_POST['Nvnom_cat']))
   {
         $STM = $BD_conn->prepare('update categorie set nom_cat = :val where Id_cat = :id');
         $STM->execute([':val'=>$_POST['Nvnom_cat'],':id'=>$_POST['categorie_id']]);
   }

   if(!empty($_POST['itemDetailsDescription']))
       {
             $STM = $BD_conn->prepare('update categorie set description = :val where Id_cat = :id');
             $STM->execute([':val'=>$_POST['itemDetailsDescription'],':id'=>$_POST['categorie_id']]);
       }

      header('location:../../home1.php?erMCAT=3');
      die();
   




//  echo '<pre>';
//     print_r($_POST);
//  echo '<pre>';

?>
