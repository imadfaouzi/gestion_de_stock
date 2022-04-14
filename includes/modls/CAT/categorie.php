

  <div class="card" style="height: 530px;margin-bottom: 10px;">
                      <div class="card-header">
                        Categories
                      </div>
   <div class="card-body">

   

            <nav>
              <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Ajouter Categorie</a>
                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Modifier Categorie</a>
                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Supprimer Categorie</a>
              </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
              <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                     <div class="container-fluid" style="padding-top: 10px;">
                          <form action="includes/Ajouter/ajouter_CAT.php" method="post">
                              <div class="form-row">
                                <div class="form-group col-md-3" style="display:inline-block padding-top: 10px;">
                                    <label for="itemDetailsItemNumber">Nome Categorie<span class="requiredIcon">*</span></label>
                                    <input type="text" class="form-control" name="nom_cat" id="itemDetailsItemNumber" autocomplete="off">
                                 </div>
                              </div>
                                 <div class="form-group col-md-6" style="display:inline-block;padding-top: 10px;">
                                    <label for="itemDetailsDescription">Description</label> 
                                    <textarea rows="4" class="form-control" placeholder="Description" name="CATDescription" id="itemDetailsDescription"></textarea>
                                </div>
                                <div class="form-group col-md-6" style="display:inline-block;padding-top: 10px;">
                                  <button type="submit" name="ajouter_cat" id="addItem" class="btn btn-success" >Ajouter Categorie</button>
                                </div>
                          </form>   
                     </div>
              </div>
              <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                     <div class="container-fluid" style="padding-top: 10px;">
              <!--------------------------------------------------------------------------------------------------------->        
                          <form action="includes/Modifier/Modifier_Cat.php" method="post">
                              <div class="form-row">
                                <div class="form-group col-md-3" style="display:inline-block padding-top: 10px;">
                                    <label for="itemDetailsItemNumber">Nom Categorie<span class="requiredIcon">*</span></label>
                                    <select class="form-select" name="categorie_id" aria-label="Default select example" id="AJAXCATEGORIES">
                                      <!-------------------------------------------->
                                         
                                      <!-------------------------------------------->
                                    </select>
                                    <label for="itemDetailsItemNumber">Choisir Un nouveau nom<span class="requiredIcon">*</span></label>
                                    <input type="text" class="form-control" name="Nvnom_cat" id="itemDetailsItemNumber" autocomplete="off">
                                </div>
                              </div>
                                 <div class="form-group col-md-6" style="display:inline-block;padding-top: 10px;">
                                    <label for="itemDetailsDescription">Description</label> 
                                    <textarea rows="4" class="form-control" placeholder="Description" name="itemDetailsDescription" id="itemDetailsDescription"></textarea>
                                </div>
                                <div class="form-group col-md-6" style="display:inline-block;padding-top: 10px;">
                                  <button type="submit" name="Modifier_cat" id="addItem" class="btn btn-success" >Modifier Categorie</button>
                                </div>
                          </form>   
                     </div>
              </div>
              <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                     <div class="container-fluid" style="padding-top: 10px;">
                          <form action="includes/Sup/supcat.php" method="post" onsubmit="return confirm('attention tous les articles de cette Categorie vont etre suprimé')">
                              <div class="form-row">
                                <div class="form-group col-md-3" style="display:inline-block padding-top: 10px;">
                                    <label for="itemDetailsItemNumber">choisir Categorie pour supprimer<span class="requiredIcon">*</span></label>
                                    <select class="form-select" name="categorie_id" aria-label="Default select example" id="AJAXCATEGORIES1">
                                      <!-------------------------------------------->
                                         
                                      <!-------------------------------------------->
                                    </select>
                                </div>
                              </div>
                                <div class="form-group col-md-6" style="display:inline-block;padding-top: 10px;">
                                  <button type="submit" name="sup_cat" id="addItem" class="btn btn-danger" >Supprimer Categorie</button>
                                </div>
                          </form>   
                     </div>
              </div>
            </div>

     </div>
   </div>