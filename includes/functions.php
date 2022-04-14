<?php

   // fonction retun true si un ARTICLE existe et false si non
// function article_exist_ou_non($id){
//           require 'connection.php';
//             try {
//                 $STM = $BD_conn->prepare('select * from Article where Id_article = :id');
//                 $STM->execute([':id' => $id]);
//             }catch (PDOException $exp){
//                 die('ereeeur : '.$exp->getMessage());
//             }
//
//          if (!$STM->fetchColumn()) { // existe dej
//              return false;
//          }
//          return true;
//      }

    //return nom de fournisseur

function GET_four_name($id){

           require'connection.php';
           try {
               $STM = $BD_conn->prepare('select * from fournisseur where Id_fournisseur = :id');
               $STM->execute([':id' => $id]);
           }catch (PDOException $exp){
               die('ereeeur : '.$exp->getMessage());
           }
           $result = $STM->fetchall(PDO::FETCH_ASSOC);
           // echo '<pre>'; print_r($result); echo '</pre>';
           return $result[0]['nom'].' '.$result[0]['prenom'];
}

//return nom de CAT

function GET_CAT_name($id){
    require 'connection.php';
    try {
        $STM = $BD_conn->prepare('select * from categorie where Id_cat = :id');
        $STM->execute([':id' => $id]);
    }catch (PDOException $exp){
        die('ereeeur : '.$exp->getMessage());
    }
    $result = $STM->fetchall(PDO::FETCH_ASSOC);
    //echo '<pre>'; print_r($result); echo '</pre>';
    return $result[0]['nom_cat'];
}


//echo GET_CAT_name(2);