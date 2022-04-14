

    <div class="card" style="height: 530px;margin-bottom: 10px;">
                      <div class="card-header">
                        Feournisseurs
                      </div>
   <div class="card-body">

   

    <nav>
              <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" id="nav-addfour-tab" data-toggle="tab" href="#nav-addfour" role="tab" aria-controls="nav-addfour" aria-selected="true">Ajouter Fournisseur</a>
                <a class="nav-item nav-link" id="nav-mdfour-tab" data-toggle="tab" href="#nav-mdfour" role="tab" aria-controls="nav-mdfour" aria-selected="false">Modifier Fournisseur</a>
                <a class="nav-item nav-link" id="nav-supfour-tab" data-toggle="tab" href="#nav-supfour" role="tab" aria-controls="nav-supfour" aria-selected="false">Supprimer Fournisseur</a>
              </div>
        </nav>

        <div class="tab-content" id="nav-tabContent">

            <div class="tab-pane fade show active" id="nav-addfour" role="tabpanel" aria-labelledby="nav-addfour-tab">
                <div class="container-fluid" style="padding-top: 10px;">
    <!----[ Ajouter four ]---------------------------------------------------------------------------------------------------------->                 
                        <form action="includes/Ajouter/Ajouter_four.php" method="post">
                              <div class="form-row" style="display: flex;flex-direction: row;">

                                <div class="form-group col-md-3" style="display:inline-block padding-top: 10px;">
                                    <label for="itemDetailsItemNumber">Nom Fournisseur<span class="requiredIcon">*</span></label>
                                    <input type="text" class="form-control" name="nomFournisseur" id="itemDetailsItemNumber" autocomplete="off">
                                 </div>
                                 <div class="form-group col-md-3" style="display:inline-block padding-top: 10px;">
                                    <label for="itemDetailsItemNumber">prenom Fournisseur<span class="requiredIcon">*</span></label>
                                    <input type="text" class="form-control" name="prenomFournisseur" id="itemDetailsItemNumber" autocomplete="off">
                                 </div>
                                 <div class="form-group col-md-3" style="display:inline-block padding-top: 10px;">
                                    <label for="itemDetailsItemNumber">CIN Fournissuer<span class="requiredIcon">*</span></label>
                                    <input type="text" class="form-control" name="CINFournissuer" id="itemDetailsItemNumber" autocomplete="off">
                                 </div>

                              </div>
                              
                              <div class="form-row" style="display: flex;flex-direction: row;">

                                 <div class="form-group col-md-3" style="display:inline-block padding-top: 10px;">
                                    <label for="itemDetailsItemNumber">Email Fournissuer<span class="requiredIcon">*</span></label>
                                    <input type="text" class="form-control" name="EmailFournisseur" id="itemDetailsItemNumber" autocomplete="off">
                                 </div>
                                 <div class="form-group col-md-3" style="display:inline-block padding-top: 10px;">
                                    <label for="itemDetailsItemNumber">telephone four<span class="requiredIcon">*</span></label>
                                    <input type="text" class="form-control" name="teleFournisseur" id="itemDetailsItemNumber" autocomplete="off">
                                 </div>

                              </div>  
                               
                               <div class="form-group col-md-6" style="display:inline-block padding-top: 10px;">
                                    <label for="itemDetailsItemNumber">Adresse<span class="requiredIcon">*</span></label>
                                    <textarea rows="4" class="form-control" placeholder="Adresse" name="adressFournisseur" id="itemDetailsDescription"></textarea>
                               </div>
                               
                                <div class="form-group col-md-6" style="display:inline-block;padding-top: 10px;">
                                  <button type="submit" name="ajouter_Fournisseur" id="addItem" class="btn btn-success" >Ajouter Fournisseur</button>
                                </div>

                        </form>  

                </div>
            </div>
              <div class="tab-pane fade" id="nav-mdfour" role="tabpanel" aria-labelledby="nav-mdfour-tab">

                     <div class="container-fluid" style="padding-top: 10px;">
    <!----[ Modifier four ]-------------------------------------------------------------------------------------------------------->                  
                          <form action="includes/Modifier/Modifier_Four.php" method="post">
                                <div class="form-row">
                                    <div class="form-group col-md-12" style="display:inline-block padding-top: 10px;">
                                       <label for="itemDetailsItemNumber">Choisir fournisseur a Modifier <span class="requiredIcon">*</span></label>
                                        <select class="form-select" name="fournisseur_id" aria-label="Default select example" id="AJAXFOUR">
                                            <!--------------->
                                             
                                            <!---------------->  
                                        </select>
                                   </div>     
                                </div> 
                                <div class="form-row" style="display: flex;flex-direction: row;">

                                    <div class="form-group col-md-3" style="display:inline-block padding-top: 10px;">
                                        <label for="itemDetailsItemNumber">Nom Fournisseur<span class="requiredIcon">*</span></label>
                                        <input type="text" class="form-control" name="nomFournisseur" id="itemDetailsItemNumber" autocomplete="off">
                                     </div>
                                     <div class="form-group col-md-3" style="display:inline-block padding-top: 10px;">
                                        <label for="itemDetailsItemNumber">prenom Fournisseur<span class="requiredIcon">*</span></label>
                                        <input type="text" class="form-control" name="prenomFournisseur" id="itemDetailsItemNumber" autocomplete="off">
                                     </div>
                                     <div class="form-group col-md-3" style="display:inline-block padding-top: 10px;">
                                        <label for="itemDetailsItemNumber">CIN Fournissuer<span class="requiredIcon">*</span></label>
                                        <input type="text" class="form-control" name="CINFournissuer" id="itemDetailsItemNumber" autocomplete="off">
                                     </div>

                                </div> 
                                    <div class="form-row" style="display: flex;flex-direction: row;">

                                         <div class="form-group col-md-3" style="display:inline-block padding-top: 10px;">
                                            <label for="itemDetailsItemNumber">Email Fournissuer<span class="requiredIcon">*</span></label>
                                            <input type="text" class="form-control" name="EmailFournisseur" id="itemDetailsItemNumber" autocomplete="off">
                                         </div>
                                         <div class="form-group col-md-3" style="display:inline-block padding-top: 10px;">
                                            <label for="itemDetailsItemNumber">telephone four<span class="requiredIcon">*</span></label>
                                            <input type="text" class="form-control" name="teleFournisseur" id="itemDetailsItemNumber" autocomplete="off">
                                         </div>

                                    </div>  
                                   
                                   <div class="form-group col-md-6" style="display:inline-block padding-top: 10px;">
                                        <label for="itemDetailsItemNumber">Adresse<span class="requiredIcon">*</span></label>
                                        <textarea rows="4" class="form-control" placeholder="Adresse" name="adressFournisseur" id="itemDetailsDescription"></textarea>
                                   </div>

                                <div class="form-group col-md-6" style="display:inline-block;padding-top: 10px;">
                                  <button type="submit" name="modifier_Fournisseur" id="addItem" class="btn btn-success" >Modifier Fournisseur</button>
                                </div>  
                            </form>   
                     </div>
              </div>
              <div class="tab-pane fade" id="nav-supfour" role="tabpanel" aria-labelledby="nav-supfour-tab">
                     <div class="container-fluid" style="padding-top: 10px;">
    <!----[ supprimer four ]------------------------------------------------------------------------------------------------------->                  
                          <form action="includes/sup/supfour.php" method="POST">
                              <div class="form-row">
                                <div class="form-group col-md-3" style="display:inline-block padding-top: 10px;">
                                    <label for="itemDetailsItemNumber">choisir Categorie pour supprimer<span class="requiredIcon">*</span></label>
                                    <select class="form-select" name="id_four" aria-label="Default select example" id="AJAXFOUR1">
                                    <!-------------------------------->
                                    
                                    <!---------------------------------->
                                    </select>
                                </div>  
                              </div>
                                <div class="form-group col-md-6" style="display:inline-block;padding-top: 10px;">
                                  <button type="submit" name="sup_four" id="addItem" class="btn btn-danger" >Supprimer fournisseur</button>
                                </div>
                          </form>   
                     </div>
              </div>
       </div>

       </div>

   </div>

 
