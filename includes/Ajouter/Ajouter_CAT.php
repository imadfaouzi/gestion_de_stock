<?php

if(isset($_POST['ajouter_cat'])){ // par le form d'ajouter une cat

       if(empty($_POST['nom_cat'])){ // le nom de produit
           header('location:../../home1.php?erCAT=1');
           die('ma3titich smya');
       }

       $nom_cat = $_POST['nom_cat'];
       $description = 'this is '.$nom_cat.' Categorie';

       if(!empty($_POST['CATDescription'])){ // choisir une discription
           $description = $_POST['CATDescription'];
       }

       // partie d'ajouter a la base de donnees
        require '../connection.php'; // l'apple de connection
      //-----------------------------------------------------------------------
     try {
             $stm = $BD_conn->prepare('select * from categorie where nom_cat = :nom');
             $stm->execute([':nom' => $nom_cat]);

             if ($stm->fetchColumn()) { // existe deja
                 header('location:../../home1.php?erCAT=2');
                 die();
             }

         }catch (PDOException $exp){
             die('ERERER     :'.$exp->getMessage());
         }
      //-----------------------------------------------------------------------
        $stm = $BD_conn->prepare('insert into categorie (nom_cat,description) value (:nom,:desc)');
        $stm->execute([':nom'=>$nom_cat,':desc'=>$description]);

         header('location:../../home1.php?erCAT=3'); // bien ajouter
         die();

 }else{
    header('location:../../home1.php');
    die();
}

















//    echo '<pre>';
//       print_r($_POST);
//    echo '<pre>';


