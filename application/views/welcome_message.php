<section class="home-banner" id="banner">
   <div class="container-fluid">
    <div class="banner-slider">
        <div class="swiper-container banner-swiper-container">
            <div class="swiper-wrapper">
                <?php foreach ($newsRecords as $new) {?>
                <?php if ($new->mediaType=="video"){?>
                <div class="swiper-slide slides_">
                    <div class="inner_">

                        <div class="overlay_">
                            <svg version="1.1" baseProfile="tiny" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                x="0px" y="0px" viewBox="0 0 50 50" xml:space="preserve" preserveAspectRatio="none">
                                <polygon fill="#2E2C54" points="0,0 50,50 0,50 "/>
                            </svg>
                        </div>

                        <div class="videoWrap hidden-xs" style="background-image:url('index.html')">
                            <div id="container">

                            <video id="background_video" loop="" muted="" autoplay="" playinline>
                            	<source src="<?php echo base_url() ?>assets/frontend/dist/video/<?php echo $new->media; ?>" type="video/mp4">
                            	<source src="<?php echo base_url() ?>assets/frontend/dist/video/AYC-banner.webm" type="video/webm;codecs=&quot;vp8, vorbis&quot;">
                            </video>






                            <div id="video_cover" style="display: none;"></div>

                            </div>
                        </div>


                         <div class="content-box">
                            <div class="content_">
                                <h1>

                                    <?php echo $new->titre; ?>

                                                                    </h1>
                            </div>
                        </div>
                    </div>
                </div>
                <?php }?>
                <!-- image -->
                <?php if ($new->mediaType=="image"){?>
                <div class="swiper-slide slides_">
                                    <div class="inner_">

                                        <div class="overlay_">
                                            <svg version="1.1" baseProfile="tiny" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                                x="0px" y="0px" viewBox="0 0 50 50" xml:space="preserve" preserveAspectRatio="none">
                                                <polygon fill="#2E2C54" points="0,0 50,50 0,50 "/>
                                            </svg>
                                        </div>

                                        <div class="img-box">
                                            <div class="b-lazy img_" data-src="<?php echo base_url() ?>assets/frontend/dist/images/<?php echo $new->media; ?>"></div>
                                        </div>

                                        <div class="content-box">
                                            <a href="https://arabyouthcenter.org/ar/article/our-research/100-questions-about-arab-youth-1" target="blank_" class="white_">
                                            <div class="content_">
                                                <h1><p><?php echo $new->titre; ?></p></h1>
                                                <div class="read_ ">



                                                </div>
                                            </div>
                                                </a>
                                        </div>
                                    </div>
                 </div>
                  <?php }?>
                <?php } ?>





            </div>
        </div>

    </div>
   </div>

   <div class="banner-navigation">
        <div class="navigator_ banner-prev">
             <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="-14 8 38.3 50" style="enable-background:new -14 8 38.3 50;" xml:space="preserve">
                <g id="red">
                    <path class="p-red" d="M-9.1,32.2l29-20c0.3-0.2,0.7-0.2,1-0.1c0.3,0.2,0.5,0.5,0.5,0.9v40c0,0.4-0.2,0.7-0.5,0.9
                        C20.8,54,20.7,54,20.5,54c-0.2,0-0.4-0.1-0.6-0.2l-29-20c-0.3-0.2-0.4-0.5-0.4-0.8C-9.5,32.7-9.3,32.4-9.1,32.2z"/>
                </g>
                <g id="white">
                    <polygon class="p-white" points="-7.8,33 20.2,52.6 20.2,14.3 	"/>
                    <path class="p-black" d="M-9.4,33c0,0.3,0.2,0.6,0.4,0.8l29,20c0.2,0.1,0.4,0.2,0.6,0.2c0.2,0,0.3,0,0.5-0.1c0.3-0.2,0.5-0.5,0.5-0.9V13
                        c0-0.4-0.2-0.7-0.5-0.9c-0.3-0.2-0.7-0.1-1,0.1l-29,20C-9.3,32.4-9.4,32.7-9.4,33z M-6.7,33l26.2-18.1v36.2L-6.7,33z"/>
                </g>
                </svg>

        </div>
       <div class="navigator_ banner-next">
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="-14 8 38.3 50" style="enable-background:new -14 8 34.6 50;" xml:space="preserve">

                <g id="red">
                    <path class="p-red" d="M19.2,32.2l-29-20c-0.3-0.2-0.7-0.2-1-0.1c-0.3,0.2-0.5,0.5-0.5,0.9v40c0,0.4,0.2,0.7,0.5,0.9
                        c0.1,0.1,0.3,0.1,0.5,0.1c0.2,0,0.4-0.1,0.6-0.2l29-20c0.3-0.2,0.4-0.5,0.4-0.8C19.6,32.7,19.4,32.4,19.2,32.2z"/>
                </g>
                <g id="white">
                    <polygon  class="p-white" points="17.9,33 -10.1,52.6 -10.1,14.3 	"/>
                    <path class="p-black" d="M19.1,32.2l-29-20c-0.3-0.2-0.7-0.2-1-0.1c-0.3,0.2-0.5,0.5-0.5,0.9v40c0,0.4,0.2,0.7,0.5,0.9c0.1,0.1,0.3,0.1,0.5,0.1
                        c0.2,0,0.4-0.1,0.6-0.2l29-20c0.3-0.2,0.4-0.5,0.4-0.8C19.5,32.7,19.3,32.4,19.1,32.2z M-9.5,51.1V14.9L16.7,33L-9.5,51.1z"/>
                </g>
            </svg>


       </div>

   </div>
</section>
