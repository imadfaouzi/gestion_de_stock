
$(document).ready(function(){
    
   
    $('#nav-tab a').on('click', function (e) {
        e.preventDefault()
        $(this).tab('show')
    });

    $('#v-pills-tab a').on('click', function (e) {
        e.preventDefault()
        $(this).tab('show')
    })


});

function show_image_modal(img,tite){

     var path = '<img width="250px" src="'+img+'" />';

     document.getElementById("exampleModalLabel").innerHTML = tite;
     document.getElementById("modal-body").innerHTML = path;

}


