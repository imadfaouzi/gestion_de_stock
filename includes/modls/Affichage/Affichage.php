<div class="card" style="height: 640px;margin-bottom: 10px;overflow: scroll;">
                      <div class="card-header">
                        Articles
                      </div>
                   <div class="card-body">

   

    <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link active" id="lsta-tab" data-bs-toggle="tab" data-bs-target="#lsta" type="button" role="tab" aria-controls="lsta" aria-selected="true">liste des Articles</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="lstc-tab" data-bs-toggle="tab" data-bs-target="#lstc" type="button" role="tab" aria-controls="lstc" aria-selected="false">Liste des Categorie</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="lstf-tab" data-bs-toggle="tab" data-bs-target="#lstf" type="button" role="tab" aria-controls="lstf" aria-selected="false">Liste des fournisseur</button>
              </li>
        </ul>
        <div class="tab-content" id="myTabContent">
<!---------------------------------------------------------------------------------------------------------------------->  
              <div class="tab-pane fade show active" id="lsta" role="tabpanel" aria-labelledby="lsta-tab">
              <!--  <div class="container-fluid">
                    <div class="input-group" style="padding:10px 25%;">
                      <input type="search" class="form-control rounded" onkeyup="chercherart(this.value)" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                      <button type="button" class="btn btn-outline-primary">search</button> 
                    </div>
                </div>  -->
                  <div class="container-fluid"> 
                    <!------------------------------------------------------------------------------------------------------->     
                           <table class="table">
                              <thead>
                                <tr>
                                  <th class="col-md-1"><input type="text" class="form-control" placeholder="ID" onkeyup="chercherart(this.value,1)"></th>
                                  <th class="col-md-1"></th>
                                  <th class="col-md-2"><input type="text" class="form-control" placeholder="NOM" onkeyup="chercherart(this.value,2)"></th>
                                  <th class="col-md-2"><input type="text" class="form-control" placeholder="ID Fournisseur" onkeyup="chercherart(this.value,4)"></th>
                                  <th class="col-md-2"><input type="text" class="form-control" placeholder="ID Categorie" onkeyup="chercherart(this.value,3)"></th>
                                  <th class="col-md-5"></th>
                                </tr>
                                <tr>
                                  <th class="col-md-1">#id</th>
                                  <th class="col-md-1">image</th>
                                  <th class="col-md-2">Nom</th>
                                  <th class="col-md-2">Fournisseur</th>
                                  <th class="col-md-2">Categorie</th>
                                  <th class="col-md-5">Descripton</th>
                                </tr>
                              </thead>
                              <tbody id="affart">
                    <!----------------------------------------------------------------------------------------------------------->

                    <!----------------------------------------------------------------------------------------------------------->
                              </tbody>
                           </table>
                  </div>
              </div>
<!-------------------------------------------------------------------------------------------------------------------------->
              <div class="tab-pane fade" id="lstc" role="tabpanel" aria-labelledby="lstc-tab">

            <!------------------------------------------------------------------------------------------------------->     
                    <table class="table">
                      <thead>
                      <tr>
                          <th>
                              <input type="text" placeholder="idcat"  class="form-control" onkeyup="cherchercat(this.value,1)">
                          </th>
                          <th>
                              <input type="text" placeholder="nom" class="form-control"  onkeyup="cherchercat(this.value,2)">
                          </th>
                          <th>
                              <button class="btn btn-success" onclick="cherchercat()">reload</button>
                          </th>
                      </tr>
                        <tr>
                          <th class="col-md-2">#id</th>
                          <th class="col-md-3">Nom Categorie</th>
                          <th class="col-md-2">Description</th>
                        </tr>
                      </thead>
                      <tbody id="affcat">
            <!----------------------------------------------------------------------------------------------------------->

            <!----------------------------------------------------------------------------------------------------------->
                      </tbody>
                    </table>

              </div>
              <!-------------------------------------------------------------------------------------->
              <div class="tab-pane fade" id="lstf" role="tabpanel" aria-labelledby="lstf-tab">
                    <div class="input-group" style="padding:10px;">
                       <button class="btn btn-success" onclick="chercherfour()">reload</button>
                    </div>
                     <table class="table">
                      <thead>
                        <tr>
                          <th class="col-md-2">#id</th>
                          <th class="col-md-3">Nom Complet</th>
                          <th class="col-md-3">Cin</th>
                          <th class="col-md-2">telephone</th>
                          <th class="col-md-2">email</th>
                        </tr>
                      </thead>
                      <tbody id="affour">
            <!----------------------------------------------------------------------------------------------------------->
                     
            <!----------------------------------------------------------------------------------------------------------->
                      </tbody>
                    </table>
              </div>      
        </div>
<!-------------------------------------------------------------------------------------------------------------------------->
        
<!-------------------------------------------------------------------------------------------------------------------------->
      </div>
       <script type="text/javascript">
        $(document).ready(function(){
         $('[data-toggle=popover]').popover({ // image article show
            container: 'body',  
            html: true,
            trigger: 'hover',
            placement: 'bottom',
            content: function () { return '<img style="width:100px;" src="' + $(this).data('img') + '" />'; }
          });
        });
       </script>
    </div>
