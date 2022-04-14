
// ajax get text from php file
function Get_Cat_list(str) {

        const xmlhttp = new XMLHttpRequest();
        xmlhttp.onload = function() {
            if(str == 'cat'){
            document.getElementById("AJAXCATEGORIES").innerHTML = this.responseText;
            document.getElementById("AJAXCATEGORIES1").innerHTML = this.responseText;
            document.getElementById("AJAXCATEGORIES2").innerHTML = this.responseText;
            document.getElementById("AJAXCATEGORIES3").innerHTML = this.responseText;
            //document.getElementById("AJAXCATEGORIES4").innerHTML = this.responseText;
            }
            else if(str == 'four')
            {
                 document.getElementById("AJAXFOUR").innerHTML = this.responseText;
                 document.getElementById("AJAXFOUR1").innerHTML = this.responseText;
                 document.getElementById("AJAXFOUR2").innerHTML = this.responseText;
                 document.getElementById("AJAXFOUR4").innerHTML = this.responseText;
            } 
            else if(str == 'art')
            {
                 document.getElementById("ARTICLE").innerHTML = this.responseText;
                 document.getElementById("ARTICLE1").innerHTML = this.responseText;
            }    
        }
        xmlhttp.open("GET", "includes/select/SELECT_OPTION.PHP?op="+str);
        xmlhttp.send();

}

// APPEL fonction
Get_Cat_list('cat');  // affichage de la liste 
Get_Cat_list('four');

//------------------------------- ARTICLE AFFICHE -----------------------------------------------
function chercherart(str,key) {
       
        if(key == 2){
             str = "%"+str+"%";
        }
        
        if((key==1 || key==3 || key==4)&&(str=="")){
            key = 0;
        }

        var str1 = str+"&key="+key;

        //alert("includes/select/recherche.php?q="+str1);
        const xmlhttp = new XMLHttpRequest();
        xmlhttp.onload = function() {
            document.getElementById("affart").innerHTML = this.responseText;
        }
        xmlhttp.open("GET", "includes/select/recherche.php?q="+str1);
        xmlhttp.send();

}

chercherart('11',0);// poour afficher tous

//------------------------------- CAT AFFICHE -----------------------------------------------
function cherchercat(val,col) {
       if(val=="")
       {
           col=0;
       }


        const xmlhttp = new XMLHttpRequest();
        xmlhttp.onload = function() {
            document.getElementById("affcat").innerHTML = this.responseText;
        }
        //alert("\"includes/select/recherchecat.php?val=\"+val+\"&col\"+col")
        xmlhttp.open("GET", "includes/select/recherchecat.php?val="+val+"&col="+col);
        xmlhttp.send();

}

cherchercat(0,0);// poour afficher tous

//---------------------------------------------------------------------------------------------
function chercherfour() {

        const xmlhttp = new XMLHttpRequest();
        xmlhttp.onload = function() {
            document.getElementById("affour").innerHTML = this.responseText;
        }
        xmlhttp.open("GET", "includes/select/recherchefour.php?q="+1);
        xmlhttp.send();

}

chercherfour();// poour afficher tous