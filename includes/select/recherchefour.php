<?php

    require ('../connection.php');

       

       $STM = $BD_conn->prepare('select * from fournisseur order by Id_fournisseur');
       $STM->execute();

       $result = $STM->fetchAll(PDO::FETCH_ASSOC);

       if(!$result){
          echo '<tr style="text-align: center;">';
           echo '<td colspan="4">rien trouver</td>';
          echo '<tr>';

           die();
       }


       foreach ($result as $val){


           echo '<tr>';

               echo '<td>'.$val['Id_fournisseur'].'</td>';

               echo '<td>'.$val['nom'].' '.$val['prenom'].'</td>';

               echo '<td>'.$val['cin'].'</td>';

               echo '<td>'.$val['telephone'].'</td>';

               echo '<td>'.$val['email'].'</td>';

           echo '</tr>';
           
       }
