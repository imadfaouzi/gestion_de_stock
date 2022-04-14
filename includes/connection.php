<?php
        $servername = 'localhost';
        $dbname = 'GSTK';
        $username = 'root';
        $password = '';

        try
        {
            $BD_conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            //-------------------------------------------//
            $BD_conn->setAttribute(PDO::ATTR_ERRMODE ,PDO::ERRMODE_EXCEPTION);
        }
        catch (PDOException $exp)
        {
            die('ERREUR DE CONNCTION A LABASE DE DONNES'.$exp->getMessage());
        }

  ?>