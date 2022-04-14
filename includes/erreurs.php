<?php 

    $csser = 'none';
    $mes   = '';
    $color = 'bg-danger';
    
    

    if( isset($_GET['erART'])||isset($_GET['erMart'])||isset($_GET['erSart'])||
    	isset($_GET['erCAT'])||isset($_GET['erSCAT']) ||isset($_GET['erMCAT'])
    	 ||isset($_GET['erFOUR']) ||isset($_GET['erMFour'])||isset($_GET['erSfour']) ||isset($_GET['erUimg'])  ) 
    {
       $csser = 'block';
    }


    //------------------------------------------------------------------------------------------
    if( isset($_GET['erART']) )
    {
    	if($_GET['erART'] == 1){
              $mes =  'remplire les champs';
    	}else if($_GET['erART'] == 2){
    		  $mes =  'Article existe déjà';
    	}else if($_GET['erART'] == 3){
    		 $mes =  'Article bien ajouter bien Ajouté';  // vert
    		 $color = 'bg-success';
    	}
    }
    if( isset($_GET['erMart']) )
    {
    	if($_GET['erMart'] == 1){
              $mes =  'Choisir un Article';
    	}else if($_GET['erMart'] == 2){
    		  $mes =  'Rien Changer '; // ora
    		  $color = 'bg-warning';
    	}else if($_GET['erMart'] == 3){
    		 $mes =  'Article n\'existe ';  
    	}else if($_GET['erMart'] == 4){
    		 $mes =  'Article bien modifié'; // vert 
    		 $color = 'bg-success';
    	}
    }
    if( isset($_GET['erSart']) )
    {
    	if($_GET['erSart'] == 1){
              $mes =  'Choisir un Article existe';
    	}else if($_GET['erSart'] == 2){
    		  $mes =  'Article bien supprimmer'; 
    		  $color = 'bg-success';
    	}
    }

    //------------------------------------------------------------------------------------------

    if( isset($_GET['erCAT']) )
    {
    	if($_GET['erCAT'] == 1){
              $mes= 'donner un nom au Cat';
    	}else if($_GET['erCAT'] == 2){
    		  $mes= 'Categorie existe déjà';
    	}else if($_GET['erCAT'] == 3){
    		 $mes= 'la categorie bien ajouter';  // vert 
    		 $color = 'bg-success';
    	}
    }
    if( isset($_GET['erSCAT']) )
    {
    	if($_GET['erSCAT'] == 1){
              $mes= 'choisi une categorier';
    	}else if($_GET['erSCAT'] == 2){
    		  $mes= 'categorie n\'existe pas';
    	}else if($_GET['erSCAT'] == 3){
    		 $mes = 'bien supprimmé';  // vert 
    		 $color = 'bg-success';
    	}
    }


     if( isset($_GET['erMCAT']) )
    {
    	if($_GET['erMCAT'] == 1){
              $mes= 'selectionner le champ voulu modifier';
    	}else if($_GET['erMCAT'] == 2){
    		  $mes= 'cette categorie n existe pas';
    	}else if($_GET['erMCAT'] == 3){
    		 $mes = 'bien modifié';  // vert
    		 $color = 'bg-success';
    	}
    }






    //------------------------------------------------------------------------------------------



    if( isset($_GET['erFOUR']) )
    {
    	if($_GET['erFOUR'] == 1){
              $mes= 'donner des informations au FOURNISSEUR';
    	}else if($_GET['erFOUR'] == 2){
    		  $mes= 'fournisseuur existe déjà';
    	}else if($_GET['erFOUR'] == 3){
    		 $mes= 'LE FOURNISSEUR bien Ajouté';  // vert
    		 $color = 'bg-success';
    	}
    }
  
    
   

   
   if( isset($_GET['erMFour']) )
    {
    	if($_GET['erMFour'] == 1){
              $mes = 'Rien modifié';
    	}else if($_GET['erMFour'] == 2){
    		  $mes = 'ce fournisseur n\'existe pas';
    	}else if($_GET['erMFour'] == 3){
    		 $mes = 'bien modifié';  // vert
    	}
    }

    if( isset($_GET['erSfour']) )
    {
    	if($_GET['erSfour'] == 1){
              $mes = 'Choisi un FOURNISSEUR';
    	}else if($_GET['erSfour'] == 2){
    		  $mes = 'ce fournisseur n\'existe pas';
    	}else if($_GET['erSfour'] == 3){
    		 $mes = 'bien supprimmé';  // vert
    	}
    }
    //------------------------------------------------------------------------------------------
    if( isset($_GET['erUimg']) )
    {
    	if($_GET['erUimg'] == 1){
              $mes = 'le type doit etre (jpg , jpeg ou png ) ';
    	}else if($_GET['erUimg'] == 2){
    		  $mes = 'la taille d\'image élvé';
    	}else if($_GET['erUimg'] == 3){
    		 $mes = 'image bien ajouter';  // vert
                 $color = 'bg-success';
    	}
    }


/*



erCAT=1	donner un nom au Cat
erCAT=2	existe déjà
erCAT=3	la categorie bien a jouter

erFOUR=1	donner un nom au FOURNISSEUR
erFOUR=2	existe déjà
erFOUR=3	LE FOURNISSEUR bien Ajouté

erART=1	donner un nom au FOURNISSEUR
erART=2	existe déjà
erART=3	LE FOURNISSEUR bien Ajouté

erMCAT=0	cliquer sur modifier
erMCAT=1	selectionner le champ voulu modifier
erMCAT=2	cette categorie n existe pas
erMCAT=3	bien modifié

erFOUR=0	cliquer sur modifier
erFOUR=1	selectionner le champ voulu modifier
erFOUR=2	ce fournisseur existe déjà
erFOUR=3	bien modifié
  
  

*/

  ?>