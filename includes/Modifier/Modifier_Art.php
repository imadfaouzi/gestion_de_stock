<?php

   if(!isset($_POST['modifier_Article']))
   {
       header('location:../../home1.php');
       die('jiti ghi hkk');
   }

   if(empty($_POST['id_article'])){
       header('location:../../home1.php?erMart=1');
       die('ma3zeeelti ta Article');
   }

   if(empty($_POST['nomarticle']) and empty($_POST['prenomFournisseur']) and empty($_POST['fournisseur_id'])
      and empty($_POST['DiscriptionArticle']) and empty($_POST['modifier_Article']) and empty($_POST['categorie_id']))
   {
       header('location:../../home1.php?erMart=2');
       die('3titini kolchi khawi mabdeltlt wall');
   }

   require '../connection.php';
   //-----------------------------------------------------------------------------------
   try{
      $STM = $BD_conn->prepare('select * from Article where Id_article = :id');
      $STM->execute([':id'=>$_POST['id_article']]);

      if(!$STM->fetchColumn())
      {
          header('location:../../home1.php?erMart=3');
          die('article makayeeench makynech');
      }
   }
   catch (PDOException $exp)
   {
      die('ERERER     :'.$exp->getMessage());
   }

//----------------------------------------------------------------------------------
   try {
       if (!empty($_POST['nomarticle'])) // changer nom d'article
       {
           $STM = $BD_conn->prepare('update Article set nom = :val where Id_article = :id');
           $STM->execute([':val' => $_POST['nomarticle'], ':id' => $_POST['id_article']]);
       }
       if (!empty($_POST['quantite'])) // changer l article
       {
           $STM = $BD_conn->prepare('update Article set nombe_en_stock = :val where Id_article = :id');
           $STM->execute([':val' => $_POST['quantite'], ':id' => $_POST['id_article']]);
       }
       if (!empty($_POST['fournisseur_id'])) // changer id fournisseur
       {
           $STM = $BD_conn->prepare('update Article set Id_Fournissuer = :val where Id_article = :id');
           $STM->execute([':val' => $_POST['fournisseur_id'], ':id' => $_POST['id_article']]);
       }
       if (!empty($_POST['categorie_id'])) // changer cat
       {
           $STM = $BD_conn->prepare('update Article set Id_Cat = :val where Id_article = :id');
           $STM->execute([':val' => $_POST['categorie_id'], ':id' => $_POST['id_article']]);
       }
       if (!empty($_POST['DiscriptionArticle'])) {
           $STM = $BD_conn->prepare('update Article set description = :val where Id_article = :id');
           $STM->execute([':val' => $_POST['DiscriptionArticle'], ':id' => $_POST['id_article']]);
       }

   }
   catch (PDOException $exp)
   {
      die('ERERER     :'.$exp->getMessage());
   }
      header('location:../../home1.php?erMart=4');
      die();
   






?>
