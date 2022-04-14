<?php

    require ('../connection.php');
    $val=$_GET['val'];
    $col=$_GET['col'];
    if($col==1)//rcherche par id
    {
        $STM = $BD_conn->prepare('select * from categorie where Id_cat=?');
        $STM->execute([$val]);
    }
    elseif($col==2)// recherche le nom
    {
        $val="%".$val."%";
        $STM = $BD_conn->prepare('select * from categorie where nom_cat like ?');
        $STM->execute([$val]);
    }
    else //select tous les cat
    {
        $STM = $BD_conn->prepare('select * from categorie');
        $STM->execute();
    }

       $result = $STM->fetchAll(PDO::FETCH_ASSOC);


       if(!$result){
          echo '<tr style="text-align: center;">';
           echo '<td colspan="3">rien trouver</td>';
          echo '<tr>';

           die();
       }


       foreach ($result as $val){


           echo '<tr>';

               echo '<td>'.$val['Id_cat'].'</td>';

               echo '<td>'.$val['nom_cat'].'</td>';

               echo '<td>'.$val['description'].'</td>';

           echo '</tr>';
       }
