  
<meta property="og:url"           content="<?php echo base_url() ?>News/new/<?php echo $new->newsId ?>" />
<meta property="og:type"          content="website" />
<meta property="og:title"         content="<?php echo $new->titreFr ?>" />

<meta property="og:image"         content="<?php echo base_url() ?>uploads/news/<?php echo $new->media ?>" />



<main class="page ourinit_details_page">

    <section class="page-section full_grid">
        <div class="container">
            <div class="breadCrumbWrap ">
               <ol class="breadcrumb">
                  <li><a href="<?php echo base_url() ?>" class="homebrc">Acceuil</a></li>                    
                  <li class="current"><?php echo $new->titreFr ?></li>
               </ol>
         </div>

         <div class="news_wrapper_new">
             <div class="n_img_box">
                   <div class="inner_">
                       <div class="img-box">
                        <div class="img_ b-lazy" data-src="<?php echo base_url() ?>uploads/news/<?php echo $new->media ?>"></div>
                    </div>
                   </div>
             </div>

             <div class="n_cont_box">
                    <div class="content_">
                        <span class="title_"><?php echo $new->titreFr ?></span>
                        <span class="date_"><?php echo $new->createdDTM ?></span>
                        <div class="text_box">
                           <?php echo $new->contentFr ?>

                        <p>&nbsp;</p>

                        <b>USERNAME</b>
                        <br>
                        <div id="fb-root"></div>
                        <script>(function(d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (d.getElementById(id)) return;
                        js = d.createElement(s); js.id = id;
                        js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
                        fjs.parentNode.insertBefore(js, fjs);
                        }(document, 'script', 'facebook-jssdk'));</script>

                        <!-- Your share button code -->
                        <div class="fb-share-button" 
                        data-href="<?php echo base_url() ?>News/new/<?php echo $new->newsId ?>" 
                        data-layout="button_count">
                        </div>

                        </div>

                        
                    </div>
             </div>
         </div>


        </div>
    </section>

</main>