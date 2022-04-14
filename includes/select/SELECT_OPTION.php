<?php

    if(isset($_GET['op'])){
        
    require '../connection.php';

    if($_GET['op'] == 'cat')
    {
               
               echo '<option value="0"  selected>Choisir une Categorie</option>';
               

                $STM = $BD_conn->prepare('select Id_cat,nom_cat from categorie order by Id_cat');
                $STM->execute();

                while ($row = $STM->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_NEXT)) 
                {
                    echo '<option value="' . $row['Id_cat'] . '">' . $row['nom_cat'] . '</option>';
                }
                  
                

  }
    else if($_GET['op'] == 'four')
  {       
               
               echo '<option value="0" selected>Choisir un fournisseur</option>';
               


                $STM = $BD_conn->prepare('select Id_fournisseur,nom,cin,prenom from fournisseur order by Id_fournisseur');
                $STM->execute();

                    while ($row = $STM->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_NEXT)) 
                    {
                        echo '<option value="' . $row['Id_fournisseur'] . '">' .$row['nom'].' '.$row['prenom'].' '.$row['cin']. '</option>';
                    }
                  
               
  }
   else if($_GET['op'] == 'art')
    {       
               
               echo '<option value="0" selected>Choisir un Article</option>';
               


                $STM = $BD_conn->prepare('select Id_article,nom from Article order by Id_article');
                $STM->execute();

                    while ($row = $STM->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_NEXT)) 
                    {
                        echo '<option value="' . $row['Id_article'] . '">' .$row['Id_article'].' '.$row['nom'].'</option>';
                    }
                  
               
  }

}else{

    die();
}

?>