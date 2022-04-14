<?php

    if(!isset($_POST['sup_four']))
    {
        header("location:../../home1.php");
        die("jiti ghi hakak");
    }

    if(empty($_POST['id_four'])){
        header("location:../../home1.php?erSfour=1");
        die('choisi une categorie !!');
    }

    require '../connection.php';
    //-------------------------------------------------------------------------------------------
    try{
        $STM = $BD_conn->prepare('select * from fournisseur where Id_fournisseur = :id');
        $STM->execute([':id'=>$_POST['id_four']]);

        if(!$STM->fetchColumn())
        {
            header('location:../../home1.php?erSfour=2');
            die('fournisseuur n\'existe ');
        }
    }
    catch (PDOException $exp)
    {
        die('ERERER     :'.$exp->getMessage());
    }
    //-------------------------------------------------------------------------------------------

    $stm= $BD_conn->prepare("delete from fournisseur where Id_fournisseur =:id");
    $stm->execute([":id"=>$_POST['id_four']]);
    header('location:../../home1.php?erSfour=3');
    die('bien supprimmer');
?>
