<br><br><br><br><br>

<main class="page media_page">
  <div class="float_nav_wrapper"> 
    <div class="abt-nav">
      <ul class="abt-nav-list">
        <li class="abt-nav-items ">
          <a data-href="#news" href="<?php echo base_url() ?>Media#news" class="link_ ">
            <div class="img_box">
              <div class="img_ b-lazy" data-src="https://arabyouthcenter.org/assets/frontend/dist/images/media_news.svg"></div>
            </div>

            <div class="title">
              <span>
                Nouvelles
              </span>
            </div>
          </a></li>
        <li class="abt-nav-items">
          <a data-href="#gallery" href="<?php echo base_url() ?>Media#gallery" class="link_">
            <div class="img_box">
              <div class="img_ b-lazy" data-src="https://arabyouthcenter.org/assets/frontend/dist/images/media_gallery.svg"></div>
            </div>
            <div class="title">
              <span>
                  Galerie
              </span>
            </div>
          </a>
        </li>
        <li class="abt-nav-items">
          <a data-href="#newsletter" href="<?php echo base_url() ?>Media#newsletter" class="link_">
            <div class="img_box">
              <div class="img_ b-lazy" data-src="https://arabyouthcenter.org/assets/frontend/dist/images/media_newsletter.svg"></div>
            </div>
            <div class="title">
              <span>
                Infolettre
              </span>
            </div>
          </a></li>
      </ul>
    </div>
  </div>  <section class="page-section who-we banner_section media_sec" >
    <div class="section-title">
      <span>Media</span>
    </div>
    <div class="container ">
      <div class="who-content-wrapper" id="news">
        <div class="inner_ ">
          
            <div class="news_container">
                <div class="subtitle_">
                    <h2>Nouvelles</h2>
                </div>

                <div class="news_wrapper">
                    <div class="swiper-container">
                        <div class="swiper-wrapper news_wrapper_new appendNews">
                            
                             
                             
                            <?php foreach ($newsRecords as $new ) { ?>
                            	
                       
                            <div class="swiper-slide news_slide news_slide_new"  >
                                <a href="<?php echo base_url() ?>News/new/<?php echo $new->newsId ?>" class="link_" title="News">
                                
                                <div class="content_">   

                                    <div class="img_sec">
                                        <div class="img-box">
                                            <div class="img_ b-lazy" data-src="<?php echo base_url() ?>uploads/news/<?php echo $new->media ?>"></div>
                                            <div class="date_">
                                              <span class="day_"><?php $date = new DateTime($new->createdDTM); echo $date->format('d'); ?></span>
                                                <span class="month_"><?php echo $date->format('M Y'); ?></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="desc_">
                                        <div class="text_box">
                                           <h4><?php echo $new->titreFr ?></h4>
                                        </div>

                                    </div>
                                </div>
                                </a>
                            </div>
                             <?php    }  ?>
                        </div>

                        <div id="loadMore" class="nav_box" data-redirect="https://arabyouthcenter.org/en/media?page=2">
                          <a href="#" class="read_more" title="Read More">
                              <span>Voir plus</span>
                          </a> 
                        </div>
                                            </div>
                </div>
            </div>

          <div class="content-wrapper md_no_pad" >
              <div class="img-box">
                  <div class="img_ b-lazy" data-src="<?php echo base_url() ?>uploads/bureau.jpg"></div>
              </div>
          </div>
        </div>

      </div>
    </div>
  </section>  <section class="page-section our-vision-mission bg_color gallery-sec" >
    <div class="container ">
      <div class="mission_vision_content_wrapper " id="gallery">
        <div class="gallery_inner">
            <div class="subtitle_ white_">
                <h2>Galerie</h2>
            </div>

            <div class="row">
              <?php foreach ($albums as $album ) {  ?>
                
                        <?php 
                        $i = -1 ; 
                        foreach ($album->contentRecords as $content ) {
                        $i++ ;
                        $cover =  $album->cover; ?>
                        <div class="col-md-4" <?php if ($i > 0){ echo "style='display:none'";} ?>>
                          <a href="<?php echo base_url() ?>uploads/media/<?php echo  $content->media  ?>" data-fancybox="Gallery<?php echo $album->albumId ?>" title="Gallery0">
                            <div class="img-box">
                                <img src="<?php echo base_url() ?>uploads/media/<?php echo  $content->media ?>" width="500px">
                                <h4 style="color: white;text-align: center;"><?php echo $album->titre ?></h4>
                              </div>
                            </a>

                        </div>

                           <?php  }   } ?>
                        </div>
               
              <br><br><br><br><br><br><br> <br><br><br><br><br><br><br> <br><br><br><br><br><br><br>
            </div>

            
            
        </div>
      </div>
    </div>
  </section>  

  <section class="page-section newsletter-sec">

    <div class="news_svg_icon">
        <div class="svg_">
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 384 384" enable-background="new 0 0 384 384" xml:space="preserve">
                <g>
                    <path fill="#231f20" d="M367.25,155.761v-0.032c0-0.293-0.018-0.582-0.039-0.87c-0.007-0.079-0.018-0.157-0.025-0.236
                        c-0.023-0.228-0.057-0.449-0.095-0.674c-0.016-0.081-0.029-0.164-0.047-0.249c-0.055-0.268-0.118-0.539-0.193-0.802
                        c-0.007-0.025-0.015-0.05-0.021-0.079c-0.078-0.267-0.172-0.535-0.274-0.795c-0.039-0.1-0.082-0.2-0.121-0.296
                        c-0.075-0.178-0.158-0.353-0.24-0.524c-0.05-0.101-0.098-0.2-0.149-0.299c-0.128-0.239-0.264-0.475-0.409-0.707
                        c-0.058-0.086-0.118-0.167-0.175-0.253c-0.114-0.167-0.231-0.332-0.356-0.492c-0.064-0.086-0.133-0.168-0.2-0.254
                        c-0.182-0.217-0.367-0.431-0.567-0.634c-0.015-0.018-0.027-0.032-0.046-0.05c-0.21-0.213-0.438-0.417-0.67-0.612
                        c-0.028-0.025-0.055-0.054-0.083-0.079l-17.51-14.529V88.641c0-13.21-10.75-23.96-23.96-23.96h-58.72l-47.303-39.256
                        c-13.935-11.563-34.158-11.563-48.092,0l-47.303,39.256h-58.72c-13.21,0-23.96,10.746-23.96,23.96v44.654l-17.51,14.532
                        c-0.028,0.021-0.053,0.05-0.082,0.076c-0.231,0.195-0.46,0.399-0.67,0.616c-0.018,0.015-0.032,0.032-0.047,0.047
                        c-0.199,0.204-0.384,0.417-0.567,0.634c-0.067,0.086-0.135,0.171-0.199,0.257c-0.125,0.16-0.243,0.324-0.357,0.492
                        c-0.061,0.082-0.122,0.163-0.174,0.249c-0.147,0.232-0.282,0.467-0.411,0.707c-0.053,0.1-0.099,0.199-0.149,0.299
                        c-0.086,0.174-0.164,0.346-0.238,0.524c-0.043,0.1-0.086,0.196-0.121,0.296c-0.104,0.264-0.197,0.528-0.275,0.799
                        c-0.007,0.024-0.015,0.05-0.021,0.078c-0.079,0.264-0.14,0.531-0.193,0.802c-0.018,0.082-0.033,0.165-0.046,0.25
                        c-0.04,0.222-0.071,0.446-0.097,0.67c-0.007,0.079-0.018,0.157-0.025,0.236c-0.021,0.289-0.039,0.577-0.039,0.87v173.866
                        c0,10.761,4.543,20.474,11.806,27.341c0.207,0.206,0.414,0.409,0.634,0.595c6.678,6.036,15.524,9.716,25.211,9.716h275.197
                        c9.691,0,18.533-3.683,25.215-9.716c0.218-0.186,0.425-0.39,0.628-0.592c7.263-6.867,11.809-16.583,11.809-27.344V155.764V155.761z
                        M61.932,85.218h260.137c1.886,0,3.423,1.536,3.423,3.423v79.876l-5.812,4.821L202.928,270.23c-6.332,5.255-15.523,5.251-21.856,0
                        L64.32,173.339l-5.812-4.821V88.641C58.509,86.754,60.046,85.218,61.932,85.218 M37.287,329.595V177.592l4.417,3.668
                        c0.004,0,0.004,0.004,0.008,0.004l100.268,83.211L38.338,335.503C37.658,333.66,37.287,331.67,37.287,329.595 M158.413,278.113
                        l9.542,7.919c13.934,11.563,34.157,11.563,48.091,0l9.541-7.919l100.097,68.596H58.313L158.413,278.113z M242.02,264.476
                        l100.27-83.212c0,0,0.004-0.004,0.007-0.004l4.418-3.668v152.003c0,2.074-0.371,4.065-1.052,5.908L242.02,264.476z M181.071,41.23
                        c6.333-5.255,15.524-5.255,21.856,0l28.261,23.451h-78.377L181.071,41.23z"/>
                    <rect x="16.75" y="16.75" fill="none" width="350.5" height="350.5"/>
                    <path fill="#231f20" d="M106.771,129.701c0,5.672,4.596,10.269,10.269,10.269h97.208c5.673,0,10.27-4.596,10.27-10.269
                        c0-5.669-4.597-10.269-10.27-10.269H117.04C111.367,119.432,106.771,124.031,106.771,129.701"/>
                    <path fill="#231f20" d="M117.04,181.043h149.921c4.784,0,8.792-3.277,9.933-7.705c0.211-0.821,0.335-1.676,0.335-2.564
                        c0-5.669-4.596-10.269-10.268-10.269H117.04c-5.673,0-10.269,4.599-10.269,10.269c0,0.888,0.125,1.743,0.335,2.564
                        C108.247,177.767,112.255,181.043,117.04,181.043"/>
                    <rect x="16.75" y="16.75" fill="none" width="350.5" height="350.5"/>
                </g>
            </svg>
        </div>
    </div>

      <div class="container">
          <div class="newsletter_top">
                <div class="news_top_img">
                    <div class="img-box">
                        <div class="img_ b-lazy" data-src="<?php echo base_url() ?>uploads/publique.jpg"></div>
                    </div>
                </div>
          </div>

            <div class="newsletter_bottom" id="newsletter">
                <div class="newsletter_form">
                        
                    <div class="loader_form">
                        <div class="icon_">

                            <svg version="1.1" id="loader-1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                width="40px" height="40px" viewBox="0 0 50 50" style="enable-background:new 0 0 50 50;" xml:space="preserve">
                            <path fill="#fff" d="M43.935,25.145c0-10.318-8.364-18.683-18.683-18.683c-10.318,0-18.683,8.365-18.683,18.683h4.068c0-8.071,6.543-14.615,14.615-14.615c8.072,0,14.615,6.543,14.615,14.615H43.935z">
                                <animateTransform attributeType="xml"
                                attributeName="transform"
                                type="rotate"
                                from="0 25 25"
                                to="360 25 25"
                                dur="0.6s"
                                repeatCount="indefinite"/>
                                </path>
                            </svg>

                        </div>
                    </div>
                    
                    <div class="subtitle_">
                        <h2>Infolettre</h2>
                    </div>

                    <div class="text_box">
                        <p>Pour des mises à jour sur nos événements actuels, sur les réalisations des jeunes et les nouvelles initiatives</p>
                    </div>

                    <div class="form_inner">
                        <!-- Begin Mailchimp Signup Form -->

<style type="text/css">
	/*#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }*/
	/* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
	We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */    
  /*id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form"*/
</style>
<div id="mc_embed_signup">

	<form action="<?= base_url('Newletter/save') ?>" method="post"class="validate form-v3" target="_blank" novalidate>
		<div id="mc_embed_signup_scroll" class="input_box">
			
			
			<div class="mc-field-group input-field">
				<label for="mce-EMAIL">Email <span class="asterisk">*</span></label>
				<input type="email" value="" name="email" class="required email" id="mce-EMAIL">
			</div>
			<div class="mc-field-group input-field">
				<label for="mce-FNAME">Prénom<span class="asterisk">*</span></label>
				<input type="text" value="" name="prenom" class="required" id="prenom">
			</div>
			<div class="mc-field-group input-field">
				<label for="mce-LNAME">Nom</label>
				<input type="text" value="" name="nom" class="" id="nom">
			</div>
			<div class="mc-field-group size1of2 input-field">
				<label style="width: 100%;" for="mce-MMERGE5" >Date de naissance<span class="asterisk">*</span>
				<input type="date" name="ddn" class="required" value="" id="ddn">
			</div>
			<div class="mc-field-group input-field" style="border-bottom: 1px solid black">
				<label for="mce-MMERGE8">Région<span class="asterisk">*</span></label><br>
				<select  class="border-bottom-0" name="gouvernorat" id="gouvernorat" >
                                        <option value="Ariana">Ariana</option>
                                        <option value="Béja">Béja</option>
                                        <option value="Ben Arous">Ben Arous</option>
                                        <option value="Bizerte">Bizerte</option>
                                        <option value="Gabes">Gabès</option>
                                        <option value="Gafsa">Gafsa</option>
                                        <option value="Jendouba">Jendouba</option>
                                        <option value="Kairouan">Kairouan</option>
                                        <option value="Kasserine">Kasserine</option>
                                        <option value="Kébili">Kébili</option>
                                        <option value="Kef">Kef</option>
                                        <option value="Mahdia">Mahdia</option>
                                        <option value="Manouba">Manouba</option>
                                        <option value="Médenine">Médenine</option>
                                        <option value="Monastir">Monastir</option>
                                        <option value="Nabeul">Nabeul</option>
                                        <option value="Sfax">Sfax</option>
                                        <option value="Sidi Bouzid">Sidi Bouzid</option>
                                        <option value="Siliana">Siliana</option>
                                        <option value="Sousse">Sousse</option>
                                        <option value="Tataouine">Tataouine</option>
                                        <option value="Tozeur">Tozeur</option>
                                        <option value="Tunis">Tunis</option>
                                        <option value="Zaghouan">Zaghouan</option>
                                     </select>
			</div>
			<div id="mce-responses" class="clear">
				<div class="response" id="mce-error-response" style="display:none"></div>
				<div class="response" id="mce-success-response" style="display:none"></div>
			</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
			<div style="position: absolute; left: 0; pointer-events: none; opacity: 0" aria-hidden="true"><input type="text" name="b_200eff7a676a14e91f985c515_ec72026ad1" tabindex="-1" value=""></div>
			<div class="clear btn_wrapper">
      <span class="read_more" id="mc-embedded-subscribe"></span>
				<input class="read_more" type="submit" value="Inscription" name="abonner" id="mc-embedded-subscribe"/> 
			<!--	<input type="submit" class="read_more "  id="abonner" name="abonner" value="Iscription"/>-->
			</div>
		</div>
</form>
</div>

</div>
                </div>
            </div>
      </div>
  </section></main>




