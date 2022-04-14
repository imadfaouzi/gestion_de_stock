<?php


     if(!isset($_POST['sup_Article']))
    {
        header("location:../../home1.php");
        die("jiti ghi hakak");
    }

    if(empty($_POST['id_article'])){
        header("location:../../home1.php");
        die('choisi une categorie !!');
    }

     require '../connection.php';

    //-------------------------------------------------------------------------------------------
    try{
        $STM = $BD_conn->prepare('select * from Article where Id_article = :id');
        $STM->execute([':id'=>$_POST['id_article']]);

        if(!$STM->fetchColumn())
        {
            header('location:../../home1.php?erSart=1');
            die('categorie n\'existe ');
        }
    }
    catch (PDOException $exp)
    {
        die('ERERER     :'.$exp->getMessage());
    }
    //-------------------------------------------------------------------------------------------

    $stm= $BD_conn->prepare("delete from Article where Id_article =:id");
    $stm->execute([":id"=>$_POST['id_article']]);

    header('location:../../home1.php?erSart=2');
    die('bien supprimmer');



?>
