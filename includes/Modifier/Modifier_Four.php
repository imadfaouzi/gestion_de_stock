<?php


   if(!isset($_POST['modifier_Fournisseur']))
   {
       header('location:../../home1.php');
       die('jiti ghi hkk');
   }

   if(empty($_POST['fournisseur_id'])){
       die('ma3zeeeti ta fournisseur');
   }

   if(empty($_POST['nomFournisseur']) and empty($_POST['prenomFournisseur']) and empty($_POST['CINFournissuer'])
      and empty($_POST['EmailFournisseur']) and empty($_POST['teleFournisseur']) and empty($_POST['adressFournisseur']))
   {
       header('location:../../home1.php?erMFour=1');
       die('3titini kolchi khawi mabdeltlt wall');
   }

   require '../connection.php';

   try{
      $STM = $BD_conn->prepare('select * from fournisseur where Id_fournisseur = :id');
      $STM->execute([':id'=>$_POST['fournisseur_id']]);

      if(!$STM->fetchColumn())
      {
          header('location:../../home1.php?erMFour=2');
          die('fournisseuur makynech');
      }
   }
   catch (PDOException $exp)
   {
      die('ERERER     :'.$exp->getMessage());
   }

//----------------------------------------------------------------------------------
   
   if(!empty($_POST['nomFournisseur']))
   {
         $STM = $BD_conn->prepare('update fournisseur set nom = :val where Id_fournisseur = :id');
         $STM->execute([':val'=>$_POST['nomFournisseur'],':id'=>$_POST['fournisseur_id']]);
   }

   if(!empty($_POST['prenomFournisseur']))
   {
      $STM = $BD_conn->prepare('update fournisseur set prenom = :val where Id_fournisseur = :id');
      $STM->execute([':val'=>$_POST['prenomFournisseur'],':id'=>$_POST['fournisseur_id']]);
   }

    if(!empty($_POST['CINFournissuer']))
    {
        $STM = $BD_conn->prepare('update fournisseur set cin = :val where Id_fournisseur = :id');
        $STM->execute([':val'=>$_POST['CINFournissuer'],':id'=>$_POST['fournisseur_id']]);
    }

    if(!empty($_POST['EmailFournisseur']))
    {
        $STM = $BD_conn->prepare('update fournisseur set email = :val where Id_fournisseur = :id');
        $STM->execute([':val'=>$_POST['EmailFournisseur'],':id'=>$_POST['fournisseur_id']]);
    }

    if(!empty($_POST['teleFournisseur']))
    {
        $STM = $BD_conn->prepare('update fournisseur set telephone = :val where Id_fournisseur = :id');
        $STM->execute([':val'=>$_POST['teleFournisseur'],':id'=>$_POST['fournisseur_id']]);
    }

    if(!empty($_POST['adressFournisseur']))
    {
        $STM = $BD_conn->prepare('update fournisseur set adresse = :val where Id_fournisseur = :id');
        $STM->execute([':val'=>$_POST['adressFournisseur'],':id'=>$_POST['fournisseur_id']]);
    }

      header('location:../../home1.php?erMFour=3');
      die();
   




//  echo '<pre>';
//     print_r($_POST);
//  echo '<pre>';

?>
