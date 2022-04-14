<?php

if(isset($_POST['ajouterArticle'])){ 

    if(empty($_POST['nomarticle']) || empty($_POST['quantite']) || empty($_POST['fournisseur_id']) || empty($_POST['nom_categorie']) ){ 

        header('location:../../home1.php?erART=1');

        die('erreur de saisie');
    }

    $description_art = 'aucune description';

    if(!empty($_POST['DiscriptionArticle'])){
        $description_art = $_POST['DiscriptionArticle'];
    }

    // partie d'ajouter a la base de donnees

    require '../connection.php'; // l'apple de connection

    //-----------------------------------------------------------------------
      // VERFIER
    
       try {
             $stm = $BD_conn->prepare('select * from Article where nom = :nom');
             $stm->execute([':nom' => $_POST['nomarticle']]);

             if ($stm->fetchColumn()) { // existe deja
                 header('location:../../home1.php?erART=2');
                 die('deja ext');
             }

         }catch (PDOException $exp){
             die('ERERER     :'.$exp->getMessage());
         }

    //-----------------------------------------------------------------------
   try {

    $stm = $BD_conn->prepare('insert into  Article ( nom,description,nombe_en_stock,Id_Cat, Id_Fournissuer) value (?,?,?,?,?)');
    $stm->execute([$_POST['nomarticle'],$description_art,$_POST['quantite'],$_POST['nom_categorie'],$_POST['fournisseur_id']]);
    $result = $stm->fetch();

    }
    catch (PDOException $exp)
    {
             die('ERERER     :'.$exp->getMessage());
    }

    header('location:../../home1.php?erART=3'); // bien ajouter
    die('bien ajouter');

}else{
    header('location:../../home1.php');
    die();
}

















//    echo '<pre>';
//       print_r($_POST);
//    echo '<pre>';


