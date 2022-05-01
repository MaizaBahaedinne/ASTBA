<main class="page ourinit_details_page">

    <section class="page-section full_grid">
        <div class="container">
            <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
            <form method="POST" action="<?php echo base_url() ?>Media/addNew" enctype="multipart/form-data"  >
               <h2 class="text_">Ajouter un album</h2>
               <div class="contact-form-wrapper">
                
 

                  <div class="input_bg_body ">
                      <div class="input-field ">
                          <input  type="text" class="input_feild " name="titre" required>
                          <label class="feild_label"  for="name_id">Titre de l'album</label>
                      </div>
                  </div>
                </div>
                <div class="contact-form-wrapper">
                  <label class="feild_label" for="name_id">Description</label>
                  <textarea type="text" name="description" id="TinyMCE" class="input_feild " name="description" ></textarea> 
                </div>

                <div class="input_bg_body " style="max-height:200px ; max-width: 200px ">
                  <input type="file" class="dropify-fr"  name="media[]" accept="image/*" multiple  required>
                </div>

                 <input type="submit" class="btn btn-primary" value="envoyer">
            </form>
            </div>
            <div class="col-md-2">
            </div>
            </div>
            </div>
        

        </div>
    </section>

</main>