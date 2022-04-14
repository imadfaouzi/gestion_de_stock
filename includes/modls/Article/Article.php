

     <div class="card" style="height: 640px;margin-bottom: 10px;">
                      <div class="card-header">
                        Articles
                      </div>
                   <div class="card-body">

   

    <nav>
              <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" id="nav-addArticle-tab" data-toggle="tab" href="#nav-addArticle" role="tab" aria-controls="nav-addArticle" aria-selected="true">Ajouter article</a>
                <a class="nav-item nav-link" id="nav-mdArticle-tab" data-toggle="tab" href="#nav-mdArticle" role="tab" aria-controls="nav-mdArticle" aria-selected="false">Modifier Article</a>
                <a class="nav-item nav-link" id="nav-supArticle-tab" data-toggle="tab" href="#nav-supArticle" role="tab" aria-controls="nav-supArticle" aria-selected="false">Supprimer Article</a>
                <a class="nav-item nav-link" id="nav-imgarticle-tab" data-toggle="tab" href="#nav-imgarticle" role="tab" aria-controls="nav-imgarticle" aria-selected="false">Ajouter Image Article</a>
              </div>
        </nav>

        <div class="tab-content" id="nav-tabContent">

            <div class="tab-pane fade show active" id="nav-addArticle" role="tabpanel" aria-labelledby="nav-addArticle-tab">
                <div class="container-fluid" style="padding-top: 10px;">
                     
                        <form action="includes/Ajouter/Ajouter_article.php" method="post">
                              <div class="form-row" style="display: flex;flex-direction: row;">

                                <div class="form-group col-md-3" style="margin: 0 10 0 0;">
                                    <label for="itemDetailsItemNumber">Nom Article<span class="requiredIcon">*</span></label>
                                    <input type="text" class="form-control" name="nomarticle" id="itemDetailsItemNumber" autocomplete="off">
                                 </div>
                                 <div class="form-group col-md-3" style="display:inline-block padding-top: 10px;">
                                    <label for="itemDetailsItemNumber">Quantite<span class="requiredIcon">*</span></label>
                                    <input type="number" class="form-control" name="quantite" id="itemDetailsItemNumber" autocomplete="off">
                                 </div>
                                 

                              </div>
                              
                              <div class="form-row col-md-3">
                                        <label for="itemDetailsItemNumber">Choisir un fournisseur<span class="requiredIcon">*</span></label>
                                        <select class="form-select" name="fournisseur_id" aria-label="Default select example" id="AJAXFOUR2">
                                            <!--------------->
                                              
                                            <!---------------->  
                                        </select>
                              </div> 
                              <div class="form-row col-md-3">
                                        <label for="itemDetailsItemNumber">Choisir une Categorie<span class="requiredIcon">*</span></label>
                                        <select class="form-select" name="nom_categorie" aria-label="Default select example" id="AJAXCATEGORIES2">
                                            <!--------------->
                                              
                                            <!---------------->  
                                        </select>
                              </div>  
                               
                               <div class="form-group col-md-6" style="display:inline-block padding-top: 10px;">
                                    <label for="itemDetailsItemNumber">Description Article<span class="requiredIcon">*</span></label>
                                    <textarea rows="4" class="form-control" placeholder="Description" name="DiscriptionArticle" id="itemDetailsDescription"></textarea>
                               </div>

                              <!---- <div class="form-group col-md-6" style="display:inline-block padding-top: 10px;">
                                    <label for="itemDetailsItemNumber">Image</label>
                                    <input type="file" name="imagearticle">
                               </div>  ----->
                               
                                <div class="form-group col-md-6" style="display:inline-block;padding-top: 10px;">
                                  <button type="submit" name="ajouterArticle" id="addItem" class="btn btn-success" >Ajouter Article</button>
                                </div>

                        </form>  

                </div>
            </div>
              <div class="tab-pane fade" id="nav-mdArticle" role="tabpanel" aria-labelledby="nav-mdArticle-tab">

                     <div class="container-fluid" style="padding-top: 10px;">
                          <form action="includes/Modifier/Modifier_Art.php" method="post">
                                <div class="form-row">
                                    <div class="form-group col-md-6" style="display:inline-block padding-top: 10px;">
                                        <label for="itemDetailsItemNumber">Donner Id Article<span class="requiredIcon">*</span></label>
                                        <input type="text" class="form-control" name="id_article" id="itemDetailsItemNumber" autocomplete="off">
                                   </div>     
                                </div> 
                                <!----------------------------------------------------------------------->
                                    <div class="form-row" style="display: flex;flex-direction: row;">

                                    <div class="form-group col-md-3" style="margin: 0 10 0 0;">
                                        <label for="itemDetailsItemNumber">Nom Article<span class="requiredIcon">*</span></label>
                                        <input type="text" class="form-control" name="nomarticle" id="itemDetailsItemNumber" autocomplete="off">
                                     </div>
                                     <div class="form-group col-md-3" style="display:inline-block padding-top: 10px;">
                                        <label for="itemDetailsItemNumber">Quantite<span class="requiredIcon">*</span></label>
                                        <input type="number" class="form-control" name="quantite" id="itemDetailsItemNumber" autocomplete="off">
                                     </div>
                                     

                                  </div>
                                  
                                  <div class="form-row col-md-3">
                                            <label for="itemDetailsItemNumber">Choisir un fournisseur<span class="requiredIcon">*</span></label>
                                            <select class="form-select" name="fournisseur_id" aria-label="Default select example" id="AJAXFOUR4">
                                                <!--------------->
                                                  
                                                <!---------------->  
                                            </select>
                                  </div> 
                                  <div class="form-row col-md-3">
                                            <label for="itemDetailsItemNumber">Choisir une Categorie<span class="requiredIcon">*</span></label>
                                            <select class="form-select" name="categorie_id" aria-label="Default select example" id="AJAXCATEGORIES3"> 
                                                <!--------------->
                                                <!---------------->  
                                            </select>
                                  </div>  
                                   
                                   <div class="form-group col-md-6" style="display:inline-block padding-top: 10px;">
                                        <label for="itemDetailsItemNumber">Adresse<span class="requiredIcon">*</span></label>
                                        <textarea rows="4" class="form-control" placeholder="Description" name="DiscriptionArticle" id="itemDetailsDescription"></textarea>
                                   </div>

                                   
                                   

                                <div class="form-group col-md-6" style="display:inline-block;padding-top: 10px;">
                                  <button type="submit" name="modifier_Article" id="addItem" class="btn btn-danger" >Modifier Article</button>
                                </div>  

                            </form>   
                     </div>
              </div>
              <div class="tab-pane fade" id="nav-supArticle" role="tabpanel" aria-labelledby="nav-supArticle-tab">
                     <div class="container-fluid" style="padding-top: 10px;">
                          <form action="includes/sup/supart.php" method="POST">
                              <div class="form-row">
                                <div class="form-group col-md-3" style="display:inline-block padding-top: 10px;">
                                    <label for="itemDetailsItemNumber">Donner Id Article<span class="requiredIcon">*</span></label>
                                    <input type="text" class="form-control" name="id_article" id="itemDetailsItemNumber" autocomplete="off">
                                </div>  
                              </div>
                                <div class="form-group col-md-6" style="display:inline-block;padding-top: 10px;">
                                  <button type="submit" name="sup_Article" id="addItem" class="btn btn-danger" >Supprimer Article</button>
                                </div>
                          </form>   
                     </div>
              </div>
              <div class="tab-pane fade" id="nav-imgarticle" role="tabpanel" aria-labelledby="nav-imgarticle-tab">
                <form action="includes/Ajouter/image_art.php" method="post" enctype="multipart/form-data">
                    <div class="form-group col-md-3" style="margin: 0 10 0 0;" >
                        <label for="itemDetailsItemNumber">Id Article<span class="requiredIcon">*</span></label>
                        <input type="text" class="form-control" name="id_article" id="itemDetailsItemNumber" autocomplete="off">
                    
                        <label class="form-label" for="customFile">choisir image (jpg,jpeg ou png)</label>
                        <input type="file" name="image_art" class="form-control" id="customFile" />
                        <input type="submit" class="form-control button btn-success" name="change_img" value="Ajouter Image" style="margin-top:10px;">
                    </div>
                </form>
              </div>  
       </div>

    </div></div>

 