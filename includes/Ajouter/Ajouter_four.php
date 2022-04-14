<?php
if(isset($_POST['ajouter_Fournisseur'])){

    if(empty($_POST['nomFournisseur']) || empty($_POST['prenomFournisseur']) || empty($_POST['CINFournissuer']) || empty($_POST['EmailFournisseur']) || empty($_POST['teleFournisseur']) )
    {
        header('location:../../home1.php?erFOUR=1');
        die('erreur de saisie');
    }

    $NF= $_POST['nomFournisseur'];
    $PRF= $_POST['prenomFournisseur'];
    $CINF= $_POST['CINFournissuer'];
    $EMF= $_POST['EmailFournisseur'];
    $TELF= $_POST['teleFournisseur'];
    $ADRF = 'aucune adresse';

     if(!empty($_POST['adressFournisseur']))
     {
          $ADRF = $_POST['adressFournisseur'];
     }

    // partie d'ajouter a la base de donnees
    require '../connection.php'; // l'apple de connection
    //-----------------------------------------------------------------------
    try {

        $stm = $BD_conn->prepare('select * from Fournisseur where  cin= :cin or telephone = :tele or email=:email ');

        $stm->execute([':cin'=>$_POST['CINFournissuer'],':tele'=>$_POST['teleFournisseur'],':email'=>$_POST['EmailFournisseur']]);

        if ($stm->fetchColumn()) { // existe deja
              header('location:../../home1.php?erFOUR=2');
              die();
         }

    }catch (PDOException $exp){
        die('ERERER    :'.$exp->getMessage());
    }
    //-----------------------------------------------------------------------
    try {

        $stm = $BD_conn->prepare('insert into  Fournisseur (nom,prenom,cin,adresse,email,telephone) value (:nom,:prenom,:cin,:adresse,:email,:tele)');
        $stm->execute([':nom'=>$NF,':prenom'=>$PRF,':cin'=>$CINF,':adresse'=>$ADRF,':email'=>$EMF,'tele'=>$TELF]);
    
    }catch (PDOException $exp){
        die('ERERER    :'.$exp->getMessage());
    }

    header('location:../../home1.php?erFOUR=3'); // bien ajouter
    die();

}else{
    header('location:../../home1.php');
    die();
}

















//    echo '<pre>';
//       print_r($_POST);
//    echo '<pre>';


