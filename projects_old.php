<?php include('header.php')?>

    <div class="inner_main_header">
        <div class="container">
            <h3>Projects</h3>
        </div>
    </div>
    <div class="projects_main_page">
    <div class="inner_main_page">
            
            
            <h3 class="main_subtitle">Our Projects</h3>
            
    <style>
.projects_main_page .main_subtitle  { margin-bottom:50px; }
.projects_main_page .inner_main_page { padding-bottom:0; }

.gallery{}
.gallery .row {margin: 0;}
ul.tab_nav.main_nav_gallery { width: 800px !important; font-size: 0 !important;}
.gallery_filter .main_nav_gallery {width:900px !important; font-size: 0 !important; padding:0;}
.gallery_filter .main_nav_gallery li {display:inline;text-align: center;}
.project_main_page { margin-top: 90px;}
.banner_bottom_margin { padding:0 !important;}
.g_box { position: relative; overflow: hidden;}
.g_box:hover .black_shade { top:0;}
.white_box_hover {background: #fff; position: absolute; bottom:-31%; width: 100%; padding:3%; transition:all 0.8s ease; z-index: 2;}
.white_box_hover h3 { font-size: 16px; color: #000;}
.white_box_hover p { font-size:13px; color: #555;}
.black_shade { width: 100%; height: 100%; position: absolute; top:100%; left: 0; background: #000; opacity: 0.5; transition: all 0.5s ease; z-index: 1;}
.aaa {background: none; border:0; outline:0;}
.aaa:focus {outline:0;}
.g_box:hover .white_box_hover { bottom: 0;}
.g_box:hover .fa {left: 6%; z-index: 99999999999999999999;}
.g_box:hover img {transform: scale(1.1);}
.g_box:hover .iconms {left:8%; display: none;}
.iconms {position: absolute; top:5%; left:-7%; z-index: 5;  width: 32px !important; height: 32px; !important; transition: all 0.8s ease !important;}

.g_box img { width: 100%; transition:all 0.5s ease;}
        ul.tab_nav.main_nav_gallery {
    width: 800px !important;
    font-size: 0 !important;
}
.gallery_filter .main_nav_gallery {width:900px !important; font-size: 0 !important; padding:0;}
.gallery_filter .main_nav_gallery li {display:inline;text-align: center;}
.gallery_filter .main_nav_gallery li button {display:inline-block;width:15%;padding: .75rem 0;margin: 0;text-decoration: none;color: #333;font-size: 13px; cursor:pointer; font-weight:600;}
.tab_gallery_nav_line { height: .15rem; width: 15%; margin: 0; background: #ed1c24; border: none; transition: .8s ease-in-out;}
@media only screen and ( max-width: 414px ) {
    .gallery_filter .main_nav_gallery li button { width: auto; font-size: 11px; text-transform: lowercase; margin-left:10px;}
    .tab_gallery_nav_line { display: none;}
    ul.tab_nav.main_nav_gallery { width:100% !Important;}
}
    </style>
    
    <div class="gallery gallery_main">
       <div class="container">
            <div class="gallery_filter ma">
             
              <script>
        $(document).ready(function(){
            
    $(".filter-button").click(function(){
        var value = $(this).attr('data-filter');
        if(value == "all")
        {
            //$('.filter').removeClass('hidden');
            $('.filter').show('1000');
        }
        else
        {
//            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
//            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
           $(".filter").not('.'+value).hide('3000');
            $('.filter').filter('.'+value).show('3000');
            
        }
    });
    
    if ($(".filter-button").removeClass("active")) {    
        $(this).removeClass("active");
    }    
    
    $(this).addClass("active");

});
    </script>
            
             
             <style>
                   .harsh { color: #ed1c24 !important;} 
               </style>
             
              <script>
                  
                  
                  
                  function stopp(val,id){
                      var raj= $('#hidden').val();
                     
                    switch(val){
                            
                    case 1:
                        $('.tab_gallery_nav_line').css({'margin-left':'0%'});
                        $(id).addClass('harsh');
                             
                        $(raj).removeClass('harsh'); 
                            
                    break
                    case 2:
                        $('.tab_gallery_nav_line').css({'margin-left':'15%'});
                            $(id).addClass('harsh');
                            $("#aa1").removeClass('harsh');
                        $(raj).removeClass('harsh');
                    break   
                    case 3:
                        $('.tab_gallery_nav_line').css({'margin-left':'30%'});
                            $("#aa1").removeClass('harsh');
                            
                            $(id).addClass('harsh');
                        $(raj).removeClass('harsh'); 
                    break   
                    case 4:
                        $('.tab_gallery_nav_line').css({'margin-left':'45%'});
                            $("#aa1").removeClass('harsh');
                            $(id).addClass('harsh');
                        $(raj).removeClass('harsh'); 
                    break   
                    case 5:
                        $('.tab_gallery_nav_line').css({'margin-left':'60%'});  
                            $("#aa1").removeClass('harsh');
                            $(id).addClass('harsh');
                        $(raj).removeClass('harsh'); 
                    break
                    case 6:
                        $('.tab_gallery_nav_line').css({'margin-left':'75%'}); 
                            $("#aa1").removeClass('harsh');
                            $(id).addClass('harsh');
                        $(raj).removeClass('harsh'); 
                    break
                    }
                    $('#hidden').val(id);
                  }
                </script>
                  
                  <input type="hidden" id="hidden">
                  
               
                <ul class="tab_nav main_nav_gallery">
                    <li class="one"><button id="aa1" onclick="stopp(1,'#aa1')" class="filter-button aaa harsh" data-filter="Bathroom">Food & Beverage</button></li>
                    <li class="two"><button  id="aa2" onclick="stopp(2,'#aa2')" class="filter-button aaa" data-filter="Bedroom">House Keeping</button></li>
                    <li class="three"><button id="aa3" onclick="stopp(3,'#aa3')" class="filter-button aaa" data-filter="Board_Room">Kitchen Steward</button></li>
                    <li class="four"><button id="aa4" onclick="stopp(4,'#aa4')" class="filter-button aaa" data-filter="Cabin">Bar Tender</button></li>
                    <li class="five"><button id="aa5" onclick="stopp(5,'#aa5')" class="filter-button aaa" data-filter="Kitchen">Bouncer</button></li>
                    <li class="six"><button id="aa6" onclick="stopp(6,'#aa6')" class="filter-button aaa" data-filter="Living_Room">Web Developer</button></li>
                    <hr class="tab_gallery_nav_line">
                </ul>
                  
            <!--<button class="filter-button" data-filter="all">ALL</button><button class="filter-button" data-filter="hdpe">BEDROOM</button><button class="filter-button" data-filter="sprinkle">FURNITURE</button><button class="filter-button" data-filter="spray">INTERIOR</button><button class="filter-button" data-filter="irrigation">LIVING</button>-->
            </div>
        </div>
        <div class="container-fluent">
            <div class="row">

            <div class="col-md-3 col-xs-12 banner_bottom_margin filter Bathroom">
                <div class="g_box">
                    <div class="black_shade"></div>
                    <img src="img/food_berver.jpg">
                    <!--<div class="white_box_hover">
                    <h3>Modern home redesign</h3>
                    <p>Credibly innovate granular internal or "organic" sources whereas high standards in web-readiness. Energistically scale future-proof core competencies vis-a-vis impactful experiences.</p>
                    </div>-->
                    <a href=""><img src="http://www.togglebits.com/aidesign/img/our_product.jpg" class="iconms"></a>
                </div>
            </div>
            <div class="col-md-3 col-xs-12 banner_bottom_margin filter Bathroom">
                <div class="g_box">
                    <div class="black_shade"></div>
                    <img src="img/kitchen_stive.jpg">
                    <!--<div class="white_box_hover">
                    <h3>Modern home redesign</h3>
                    <p>Credibly innovate granular internal or "organic" sources whereas high standards in web-readiness. Energistically scale future-proof core competencies vis-a-vis impactful experiences.</p>
                    </div>-->
                    <a href=""><img src="http://www.togglebits.com/aidesign/img/our_product.jpg" class="iconms"></a>
                </div>
            </div>
            <div class="col-md-3 col-xs-12 banner_bottom_margin filter Bathroom">
                <div class="g_box">
                    <div class="black_shade"></div>
                    <img src="img/house_keeping.jpg">
                   <!-- <div class="white_box_hover">
                    <h3>Modern home redesign</h3>
                    <p>Credibly innovate granular internal or "organic" sources whereas high standards in web-readiness. Energistically scale future-proof core competencies vis-a-vis impactful experiences.</p>
                    </div>-->
                    <a href=""><img src="http://www.togglebits.com/aidesign/img/our_product.jpg" class="iconms"></a>
                </div>
            </div>
            <div class="col-md-3 col-xs-12 banner_bottom_margin filter Bathroom">
                <div class="g_box">
                    <div class="black_shade"></div>
                    <img src="img/food_berver.jpg">
                   <!-- <div class="white_box_hover">
                    <h3>Modern home redesign</h3>
                    <p>Credibly innovate granular internal or "organic" sources whereas high standards in web-readiness. Energistically scale future-proof core competencies vis-a-vis impactful experiences.</p>
                    </div>-->
                    <a href=""><img src="http://www.togglebits.com/aidesign/img/our_product.jpg" class="iconms"></a>
                </div>
            </div>
            <div class="col-md-3 col-xs-12 banner_bottom_margin filter Bathroom">
                <div class="g_box">
                    <div class="black_shade"></div>
                    <img src="img/food_berver.jpg">
                    <!--<div class="white_box_hover">
                    <h3>Modern home redesign</h3>
                    <p>Credibly innovate granular internal or "organic" sources whereas high standards in web-readiness. Energistically scale future-proof core competencies vis-a-vis impactful experiences.</p>
                    </div>-->
                    <a href=""><img src="http://www.togglebits.com/aidesign/img/our_product.jpg" class="iconms"></a>
                </div>
            </div>
            <div class="col-md-3 col-xs-12 banner_bottom_margin filter Bathroom">
                <div class="g_box">
                    <div class="black_shade"></div>
                    <img src="img/kitchen_stive.jpg">
                    <!--<div class="white_box_hover">
                    <h3>Modern home redesign</h3>
                    <p>Credibly innovate granular internal or "organic" sources whereas high standards in web-readiness. Energistically scale future-proof core competencies vis-a-vis impactful experiences.</p>
                    </div>-->
                    <a href=""><img src="http://www.togglebits.com/aidesign/img/our_product.jpg" class="iconms"></a>
                </div>
            </div>
            <div class="col-md-3 col-xs-12 banner_bottom_margin filter Bathroom">
                <div class="g_box">
                    <div class="black_shade"></div>
                    <img src="img/house_keeping.jpg">
                   <!-- <div class="white_box_hover">
                    <h3>Modern home redesign</h3>
                    <p>Credibly innovate granular internal or "organic" sources whereas high standards in web-readiness. Energistically scale future-proof core competencies vis-a-vis impactful experiences.</p>
                    </div>-->
                    <a href=""><img src="http://www.togglebits.com/aidesign/img/our_product.jpg" class="iconms"></a>
                </div>
            </div>
            <div class="col-md-3 col-xs-12 banner_bottom_margin filter Bathroom">
                <div class="g_box">
                    <div class="black_shade"></div>
                    <img src="img/food_berver.jpg">
                   <!-- <div class="white_box_hover">
                    <h3>Modern home redesign</h3>
                    <p>Credibly innovate granular internal or "organic" sources whereas high standards in web-readiness. Energistically scale future-proof core competencies vis-a-vis impactful experiences.</p>
                    </div>-->
                    <a href=""><img src="http://www.togglebits.com/aidesign/img/our_product.jpg" class="iconms"></a>
                </div>
            </div>
           

            <!-- Bathroom  End -->
            <!-- Bedroom  Start -->

            <div class="col-md-3 col-xs-12 banner_bottom_margin filter Bedroom" style="display:none">
                <div class="g_box">
                    <div class="black_shade"></div>
                    <img src="img/food_berver.jpg">
                    <!--<div class="white_box_hover">
                    <h3>Modern home redesign</h3>
                    <p>Credibly innovate granular internal or "organic" sources whereas high standards in web-readiness. Energistically scale future-proof core competencies vis-a-vis impactful experiences.</p>
                    </div>-->
                    <a href=""><img src="http://www.togglebits.com/aidesign/img/our_product.jpg" class="iconms"></a>
                </div>
            </div>
            <div class="col-md-3 col-xs-12 banner_bottom_margin filter Bedroom" style="display:none">
                <div class="g_box">
                    <div class="black_shade"></div>
                    <img src="img/kitchen_stive.jpg">
                    <!--<div class="white_box_hover">
                    <h3>Modern home redesign</h3>
                    <p>Credibly innovate granular internal or "organic" sources whereas high standards in web-readiness. Energistically scale future-proof core competencies vis-a-vis impactful experiences.</p>
                    </div>-->
                    <a href=""><img src="http://www.togglebits.com/aidesign/img/our_product.jpg" class="iconms"></a>
                </div>
            </div>
            <div class="col-md-3 col-xs-12 banner_bottom_margin filter Bedroom" style="display:none">
                <div class="g_box">
                    <div class="black_shade"></div>
                    <img src="img/house_keeping.jpg">
                    <!--<div class="white_box_hover">
                    <h3>Modern home redesign</h3>
                    <p>Credibly innovate granular internal or "organic" sources whereas high standards in web-readiness. Energistically scale future-proof core competencies vis-a-vis impactful experiences.</p>
                    </div>-->
                    <a href=""><img src="http://www.togglebits.com/aidesign/img/our_product.jpg" class="iconms"></a>
                </div>
            </div>
            <div class="col-md-3 col-xs-12 banner_bottom_margin filter Bedroom" style="display:none">
                <div class="g_box">
                    <div class="black_shade"></div>
                    <img src="img/house_keeping.jpg">
                    <!--<div class="white_box_hover">
                    <h3>Modern home redesign</h3>
                    <p>Credibly innovate granular internal or "organic" sources whereas high standards in web-readiness. Energistically scale future-proof core competencies vis-a-vis impactful experiences.</p>
                    </div>-->
                    <a href=""><img src="http://www.togglebits.com/aidesign/img/our_product.jpg" class="iconms"></a>
                </div>
            </div>
            <div class="col-md-3 col-xs-12 banner_bottom_margin filter Bedroom" style="display:none">
                <div class="g_box">
                    <div class="black_shade"></div>
                    <img src="img/food_berver.jpg">
                    <!--<div class="white_box_hover">
                    <h3>Modern home redesign</h3>
                    <p>Credibly innovate granular internal or "organic" sources whereas high standards in web-readiness. Energistically scale future-proof core competencies vis-a-vis impactful experiences.</p>
                    </div>-->
                    <a href=""><img src="http://www.togglebits.com/aidesign/img/our_product.jpg" class="iconms"></a>
                </div>
            </div>
            <div class="col-md-3 col-xs-12 banner_bottom_margin filter Bedroom" style="display:none">
                <div class="g_box">
                    <div class="black_shade"></div>
                    <img src="img/kitchen_stive.jpg">
                    <!--<div class="white_box_hover">
                    <h3>Modern home redesign</h3>
                    <p>Credibly innovate granular internal or "organic" sources whereas high standards in web-readiness. Energistically scale future-proof core competencies vis-a-vis impactful experiences.</p>
                    </div>-->
                    <a href=""><img src="http://www.togglebits.com/aidesign/img/our_product.jpg" class="iconms"></a>
                </div>
            </div>
            <div class="col-md-3 col-xs-12 banner_bottom_margin filter Bedroom" style="display:none">
                <div class="g_box">
                    <div class="black_shade"></div>
                    <img src="img/house_keeping.jpg">
                    <!--<div class="white_box_hover">
                    <h3>Modern home redesign</h3>
                    <p>Credibly innovate granular internal or "organic" sources whereas high standards in web-readiness. Energistically scale future-proof core competencies vis-a-vis impactful experiences.</p>
                    </div>-->
                    <a href=""><img src="http://www.togglebits.com/aidesign/img/our_product.jpg" class="iconms"></a>
                </div>
            </div>
            <div class="col-md-3 col-xs-12 banner_bottom_margin filter Bedroom" style="display:none">
                <div class="g_box">
                    <div class="black_shade"></div>
                    <img src="img/house_keeping.jpg">
                    <!--<div class="white_box_hover">
                    <h3>Modern home redesign</h3>
                    <p>Credibly innovate granular internal or "organic" sources whereas high standards in web-readiness. Energistically scale future-proof core competencies vis-a-vis impactful experiences.</p>
                    </div>-->
                    <a href=""><img src="http://www.togglebits.com/aidesign/img/our_product.jpg" class="iconms"></a>
                </div>
            </div>

            

           

            
            <!-- Bedroom  End -->
            <!-- Board Room Start -->
            <div class="col-md-3 col-xs-12 banner_bottom_margin filter Board_Room" style="display:none">
                <div class="g_box">
                    <div class="black_shade"></div>
                    <img src="img/house_keeping.jpg">
                    <!--<div class="white_box_hover">
                    <h3>Modern home redesign</h3>
                    <p>Credibly innovate granular internal or "organic" sources whereas high standards in web-readiness. Energistically scale future-proof core competencies vis-a-vis impactful experiences.</p>
                    </div>-->
                    <a href=""><img src="http://www.togglebits.com/aidesign/img/our_product.jpg" class="iconms"></a>
                </div>
            </div>
            <div class="col-md-3 col-xs-12 banner_bottom_margin filter Board_Room" style="display:none">
                <div class="g_box">
                    <div class="black_shade"></div>
                    <img src="img/food_berver.jpg">
                    <!--<div class="white_box_hover">
                    <h3>Modern home redesign</h3>
                    <p>Credibly innovate granular internal or "organic" sources whereas high standards in web-readiness. Energistically scale future-proof core competencies vis-a-vis impactful experiences.</p>
                    </div>-->
                    <a href=""><img src="http://www.togglebits.com/aidesign/img/our_product.jpg" class="iconms"></a>
                </div>
            </div>
            <div class="col-md-3 col-xs-12 banner_bottom_margin filter Board_Room" style="display:none">
                <div class="g_box">
                    <div class="black_shade"></div>
                    <img src="img/kitchen_stive.jpg">
                    <!--<div class="white_box_hover">
                    <h3>Modern home redesign</h3>
                    <p>Credibly innovate granular internal or "organic" sources whereas high standards in web-readiness. Energistically scale future-proof core competencies vis-a-vis impactful experiences.</p>
                    </div>-->
                    <a href=""><img src="http://www.togglebits.com/aidesign/img/our_product.jpg" class="iconms"></a>
                </div>
            </div>
            <div class="col-md-3 col-xs-12 banner_bottom_margin filter Board_Room" style="display:none">
                <div class="g_box">
                    <div class="black_shade"></div>
                    <img src="img/kitchen_stive.jpg">
                    <!--<div class="white_box_hover">
                    <h3>Modern home redesign</h3>
                    <p>Credibly innovate granular internal or "organic" sources whereas high standards in web-readiness. Energistically scale future-proof core competencies vis-a-vis impactful experiences.</p>
                    </div>-->
                    <a href=""><img src="http://www.togglebits.com/aidesign/img/our_product.jpg" class="iconms"></a>
                </div>
            </div>
            <div class="col-md-3 col-xs-12 banner_bottom_margin filter Board_Room" style="display:none">
                <div class="g_box">
                    <div class="black_shade"></div>
                    <img src="img/house_keeping.jpg">
                    <!--<div class="white_box_hover">
                    <h3>Modern home redesign</h3>
                    <p>Credibly innovate granular internal or "organic" sources whereas high standards in web-readiness. Energistically scale future-proof core competencies vis-a-vis impactful experiences.</p>
                    </div>-->
                    <a href=""><img src="http://www.togglebits.com/aidesign/img/our_product.jpg" class="iconms"></a>
                </div>
            </div>
            <div class="col-md-3 col-xs-12 banner_bottom_margin filter Board_Room" style="display:none">
                <div class="g_box">
                    <div class="black_shade"></div>
                    <img src="img/food_berver.jpg">
                    <!--<div class="white_box_hover">
                    <h3>Modern home redesign</h3>
                    <p>Credibly innovate granular internal or "organic" sources whereas high standards in web-readiness. Energistically scale future-proof core competencies vis-a-vis impactful experiences.</p>
                    </div>-->
                    <a href=""><img src="http://www.togglebits.com/aidesign/img/our_product.jpg" class="iconms"></a>
                </div>
            </div>
            <div class="col-md-3 col-xs-12 banner_bottom_margin filter Board_Room" style="display:none">
                <div class="g_box">
                    <div class="black_shade"></div>
                    <img src="img/kitchen_stive.jpg">
                    <!--<div class="white_box_hover">
                    <h3>Modern home redesign</h3>
                    <p>Credibly innovate granular internal or "organic" sources whereas high standards in web-readiness. Energistically scale future-proof core competencies vis-a-vis impactful experiences.</p>
                    </div>-->
                    <a href=""><img src="http://www.togglebits.com/aidesign/img/our_product.jpg" class="iconms"></a>
                </div>
            </div>
            <div class="col-md-3 col-xs-12 banner_bottom_margin filter Board_Room" style="display:none">
                <div class="g_box">
                    <div class="black_shade"></div>
                    <img src="img/kitchen_stive.jpg">
                    <!--<div class="white_box_hover">
                    <h3>Modern home redesign</h3>
                    <p>Credibly innovate granular internal or "organic" sources whereas high standards in web-readiness. Energistically scale future-proof core competencies vis-a-vis impactful experiences.</p>
                    </div>-->
                    <a href=""><img src="http://www.togglebits.com/aidesign/img/our_product.jpg" class="iconms"></a>
                </div>
            </div>

    

            <!-- Board Room End -->

            <!-- Cabin Start -->
            <div class="col-md-3 col-xs-12 banner_bottom_margin filter Cabin" style="display:none">
                <div class="g_box">
                    <div class="black_shade"></div>
                    <img src="img/kitchen_stive.jpg">
                    <!--<div class="white_box_hover">
                    <h3>Modern home redesign</h3>
                    <p>Credibly innovate granular internal or "organic" sources whereas high standards in web-readiness. Energistically scale future-proof core competencies vis-a-vis impactful experiences.</p>
                    </div>-->
                    <a href=""><img src="img/plus.png" class="iconms"></a>
                </div>
            </div>
            <div class="col-md-3 col-xs-12 banner_bottom_margin filter Cabin" style="display:none">
                <div class="g_box">
                    <div class="black_shade"></div>
                    <img src="img/house_keeping.jpg">
                    <!--<div class="white_box_hover">
                    <h3>Modern home redesign</h3>
                    <p>Credibly innovate granular internal or "organic" sources whereas high standards in web-readiness. Energistically scale future-proof core competencies vis-a-vis impactful experiences.</p>
                    </div>-->
                    <a href=""><img src="img/plus.png" class="iconms"></a>
                </div>
            </div>
            <div class="col-md-3 col-xs-12 banner_bottom_margin filter Cabin" style="display:none">
                <div class="g_box">
                    <div class="black_shade"></div>
                    <img src="img/kitchen_stive.jpg">
                    <!--<div class="white_box_hover">
                    <h3>Modern home redesign</h3>
                    <p>Credibly innovate granular internal or "organic" sources whereas high standards in web-readiness. Energistically scale future-proof core competencies vis-a-vis impactful experiences.</p>
                    </div>-->
                    <a href=""><img src="img/plus.png" class="iconms"></a>
                </div>
            </div>
            <div class="col-md-3 col-xs-12 banner_bottom_margin filter Cabin" style="display:none">
                <div class="g_box">
                    <div class="black_shade"></div>
                    <img src="img/house_keeping.jpg">
                    <!--<div class="white_box_hover">
                    <h3>Modern home redesign</h3>
                    <p>Credibly innovate granular internal or "organic" sources whereas high standards in web-readiness. Energistically scale future-proof core competencies vis-a-vis impactful experiences.</p>
                    </div>-->
                    <a href=""><img src="img/plus.png" class="iconms"></a>
                </div>
            </div>
            <div class="col-md-3 col-xs-12 banner_bottom_margin filter Cabin" style="display:none">
                <div class="g_box">
                    <div class="black_shade"></div>
                    <img src="img/kitchen_stive.jpg">
                    <!--<div class="white_box_hover">
                    <h3>Modern home redesign</h3>
                    <p>Credibly innovate granular internal or "organic" sources whereas high standards in web-readiness. Energistically scale future-proof core competencies vis-a-vis impactful experiences.</p>
                    </div>-->
                    <a href=""><img src="img/plus.png" class="iconms"></a>
                </div>
            </div>
            <div class="col-md-3 col-xs-12 banner_bottom_margin filter Cabin" style="display:none">
                <div class="g_box">
                    <div class="black_shade"></div>
                    <img src="img/house_keeping.jpg">
                    <!--<div class="white_box_hover">
                    <h3>Modern home redesign</h3>
                    <p>Credibly innovate granular internal or "organic" sources whereas high standards in web-readiness. Energistically scale future-proof core competencies vis-a-vis impactful experiences.</p>
                    </div>-->
                    <a href=""><img src="img/plus.png" class="iconms"></a>
                </div>
            </div>
            <div class="col-md-3 col-xs-12 banner_bottom_margin filter Cabin" style="display:none">
                <div class="g_box">
                    <div class="black_shade"></div>
                    <img src="img/kitchen_stive.jpg">
                    <!--<div class="white_box_hover">
                    <h3>Modern home redesign</h3>
                    <p>Credibly innovate granular internal or "organic" sources whereas high standards in web-readiness. Energistically scale future-proof core competencies vis-a-vis impactful experiences.</p>
                    </div>-->
                    <a href=""><img src="img/plus.png" class="iconms"></a>
                </div>
            </div>
            <div class="col-md-3 col-xs-12 banner_bottom_margin filter Cabin" style="display:none">
                <div class="g_box">
                    <div class="black_shade"></div>
                    <img src="img/house_keeping.jpg">
                    <!--<div class="white_box_hover">
                    <h3>Modern home redesign</h3>
                    <p>Credibly innovate granular internal or "organic" sources whereas high standards in web-readiness. Energistically scale future-proof core competencies vis-a-vis impactful experiences.</p>
                    </div>-->
                    <a href=""><img src="img/plus.png" class="iconms"></a>
                </div>
            </div>

            

            
            <!-- Cabin End -->
            <!-- Kitchen Start -->
            <div class="col-md-3 col-xs-12 banner_bottom_margin filter Kitchen" style="display:none">
                <div class="g_box">
                    <div class="black_shade"></div>
                    <img src="img/house_keeping.jpg">
                    <!--<div class="white_box_hover">
                    <h3>Modern home redesign</h3>
                    <p>Credibly innovate granular internal or "organic" sources whereas high standards in web-readiness. Energistically scale future-proof core competencies vis-a-vis impactful experiences.</p>
                    </div>-->
                    <a href=""><img src="img/plus.png" class="iconms"></a>
                </div>
            </div>
            <div class="col-md-3 col-xs-12 banner_bottom_margin filter Kitchen" style="display:none">
                <div class="g_box">
                    <div class="black_shade"></div>
                    <img src="img/house_keeping.jpg">
                    <!--<div class="white_box_hover">
                    <h3>Modern home redesign</h3>
                    <p>Credibly innovate granular internal or "organic" sources whereas high standards in web-readiness. Energistically scale future-proof core competencies vis-a-vis impactful experiences.</p>
                    </div>-->
                    <a href=""><img src="img/plus.png" class="iconms"></a>
                </div>
            </div>
            <div class="col-md-3 col-xs-12 banner_bottom_margin filter Kitchen" style="display:none">
                <div class="g_box">
                    <div class="black_shade"></div>
                    <img src="img/house_keeping.jpg">
                    <div class="white_box_hover">
                    <!--<h3>Modern home redesign</h3>
                    <p>Credibly innovate granular internal or "organic" sources whereas high standards in web-readiness. Energistically scale future-proof core competencies vis-a-vis impactful experiences.</p>
                    </div>-->
                    <a href=""><img src="img/plus.png" class="iconms"></a>
                </div>
            </div>
                </div>
            <div class="col-md-3 col-xs-12 banner_bottom_margin filter Kitchen" style="display:none">
                <div class="g_box">
                    <div class="black_shade"></div>
                    <img src="img/house_keeping.jpg">
                    <!--<div class="white_box_hover">
                    <h3>Modern home redesign</h3>
                    <p>Credibly innovate granular internal or "organic" sources whereas high standards in web-readiness. Energistically scale future-proof core competencies vis-a-vis impactful experiences.</p>
                    </div>-->
                    <a href=""><img src="img/plus.png" class="iconms"></a>
                </div>
            </div>
            <div class="col-md-3 col-xs-12 banner_bottom_margin filter Kitchen" style="display:none">
                <div class="g_box">
                    <div class="black_shade"></div>
                    <img src="img/house_keeping.jpg">
                    <!--<div class="white_box_hover">
                    <h3>Modern home redesign</h3>
                    <p>Credibly innovate granular internal or "organic" sources whereas high standards in web-readiness. Energistically scale future-proof core competencies vis-a-vis impactful experiences.</p>
                    </div>-->
                    <a href=""><img src="img/plus.png" class="iconms"></a>
                </div>
            </div>
            <div class="col-md-3 col-xs-12 banner_bottom_margin filter Kitchen" style="display:none">
                <div class="g_box">
                    <div class="black_shade"></div>
                    <img src="img/house_keeping.jpg">
                    <!--<div class="white_box_hover">
                    <h3>Modern home redesign</h3>
                    <p>Credibly innovate granular internal or "organic" sources whereas high standards in web-readiness. Energistically scale future-proof core competencies vis-a-vis impactful experiences.</p>
                    </div>-->
                    <a href=""><img src="img/plus.png" class="iconms"></a>
                </div>
            </div>
            <div class="col-md-3 col-xs-12 banner_bottom_margin filter Kitchen" style="display:none">
                <div class="g_box">
                    <div class="black_shade"></div>
                    <img src="img/house_keeping.jpg">
                    <div class="white_box_hover">
                    <!--<h3>Modern home redesign</h3>
                    <p>Credibly innovate granular internal or "organic" sources whereas high standards in web-readiness. Energistically scale future-proof core competencies vis-a-vis impactful experiences.</p>
                    </div>-->
                    <a href=""><img src="img/plus.png" class="iconms"></a>
                </div>
            </div>
                </div>
            <div class="col-md-3 col-xs-12 banner_bottom_margin filter Kitchen" style="display:none">
                <div class="g_box">
                    <div class="black_shade"></div>
                    <img src="img/house_keeping.jpg">
                    <!--<div class="white_box_hover">
                    <h3>Modern home redesign</h3>
                    <p>Credibly innovate granular internal or "organic" sources whereas high standards in web-readiness. Energistically scale future-proof core competencies vis-a-vis impactful experiences.</p>
                    </div>-->
                    <a href=""><img src="img/plus.png" class="iconms"></a>
                </div>
            </div>

           

            <!-- Kitchen End -->

            <!-- Living_Room Start -->
            <div class="col-md-3 col-xs-12 banner_bottom_margin filter Living_Room" style="display:none">
                <div class="g_box">
                    <div class="black_shade"></div>
                    <img src="img/house_keeping.jpg">
                    <!--<div class="white_box_hover">
                    <h3>Modern home redesign</h3>
                    <p>Credibly innovate granular internal or "organic" sources whereas high standards in web-readiness. Energistically scale future-proof core competencies vis-a-vis impactful experiences.</p>
                    </div>-->
                    <a href=""><img src="img/plus.png" class="iconms"></a>
                </div>
            </div>

            <div class="col-md-3 col-xs-12 banner_bottom_margin filter Living_Room" style="display:none">
                <div class="g_box">
                    <div class="black_shade"></div>
                    <img src="img/food_berver.jpg">
                    <!--<div class="white_box_hover">
                    <h3>Modern home redesign</h3>
                    <p>Credibly innovate granular internal or "organic" sources whereas high standards in web-readiness. Energistically scale future-proof core competencies vis-a-vis impactful experiences.</p>
                    </div>-->
                    <a href=""><img src="img/plus.png" class="iconms"></a>
                </div>
            </div>

            <div class="col-md-3 col-xs-12 banner_bottom_margin filter Living_Room" style="display:none">
                <div class="g_box">
                    <div class="black_shade"></div>
                    <img src="img/house_keeping.jpg">
                    <!--<div class="white_box_hover">
                    <h3>Modern home redesign</h3>
                    <p>Credibly innovate granular internal or "organic" sources whereas high standards in web-readiness. Energistically scale future-proof core competencies vis-a-vis impactful experiences.</p>
                    </div>-->
                    <a href=""><img src="img/plus.png" class="iconms"></a>
                </div>
            </div>

            <div class="col-md-3 col-xs-12 banner_bottom_margin filter Living_Room" style="display:none">
                <div class="g_box">
                    <div class="black_shade"></div>
                    <img src="img/food_berver.jpg">
                    <!--<div class="white_box_hover">
                    <h3>Modern home redesign</h3>
                    <p>Credibly innovate granular internal or "organic" sources whereas high standards in web-readiness. Energistically scale future-proof core competencies vis-a-vis impactful experiences.</p>
                    </div>-->
                    <a href=""><img src="img/plus.png" class="iconms"></a>
                </div>
            </div>

            
            


           
            <!-- Living_Room End -->

           <!-- Office Start -->

            <div class="col-md-3 col-xs-12 banner_bottom_margin filter office" style="display:none">
                <div class="g_box">
                    <div class="black_shade"></div>
                    <img src="img/food_berver.jpg">
                    <div class="white_box_hover">
                    <h3>Modern home redesign</h3>
                    <p>Credibly innovate granular internal or "organic" sources whereas high standards in web-readiness. Energistically scale future-proof core competencies vis-a-vis impactful experiences.</p>
                    </div>
                    <a href=""><img src="img/plus.png" class="iconms"></a>
                </div>
            </div>

            <div class="col-md-3 col-xs-12 banner_bottom_margin filter office" style="display:none">
                <div class="g_box">
                    <div class="black_shade"></div>
                    <img src="img/food_berver.jpg">
                    <div class="white_box_hover">
                    <h3>Modern home redesign</h3>
                    <p>Credibly innovate granular internal or "organic" sources whereas high standards in web-readiness. Energistically scale future-proof core competencies vis-a-vis impactful experiences.</p>
                    </div>
                    <a href=""><img src="img/plus.png" class="iconms"></a>
                </div>
            </div>

            <div class="col-md-3 col-xs-12 banner_bottom_margin filter office" style="display:none">
                <div class="g_box">
                    <div class="black_shade"></div>
                    <img src="img/house_keeping.jpg">
                    <div class="white_box_hover">
                    <h3>Modern home redesign</h3>
                    <p>Credibly innovate granular internal or "organic" sources whereas high standards in web-readiness. Energistically scale future-proof core competencies vis-a-vis impactful experiences.</p>
                    </div>
                    <a href=""><img src="img/plus.png" class="iconms"></a>
                </div>
            </div>

            <div class="col-md-3 col-xs-12 banner_bottom_margin filter office" style="display:none">
                <div class="g_box">
                    <div class="black_shade"></div>
                    <img src="img/house_keeping.jpg">
                    <div class="white_box_hover">
                    <h3>Modern home redesign</h3>
                    <p>Credibly innovate granular internal or "organic" sources whereas high standards in web-readiness. Energistically scale future-proof core competencies vis-a-vis impactful experiences.</p>
                    </div>
                    <a href=""><img src="img/plus.png" class="iconms"></a>
                </div>
            </div>

            
            <!-- Office End -->
            <!-- Workstations Start -->
            <div class="col-md-3 col-xs-12 banner_bottom_margin filter Workstations" style="display:none">
                <div class="g_box">
                    <div class="black_shade"></div>
                    <img src="img/kitchen_stive.jpg">
                    <div class="white_box_hover">
                    <h3>Modern home redesign</h3>
                    <p>Credibly innovate granular internal or "organic" sources whereas high standards in web-readiness. Energistically scale future-proof core competencies vis-a-vis impactful experiences.</p>
                    </div>
                    <a href=""><img src="img/plus.png" class="iconms"></a>
                </div>
            </div>

            <div class="col-md-3 col-xs-12 banner_bottom_margin filter Workstations" style="display:none">
                <div class="g_box">
                    <div class="black_shade"></div>
                    <img src="img/kitchen_stive.jpg">
                    <div class="white_box_hover">
                    <h3>Modern home redesign</h3>
                    <p>Credibly innovate granular internal or "organic" sources whereas high standards in web-readiness. Energistically scale future-proof core competencies vis-a-vis impactful experiences.</p>
                    </div>
                    <a href=""><img src="img/plus.png" class="iconms"></a>
                </div>
            </div>

            <div class="col-md-3 col-xs-12 banner_bottom_margin filter Workstations" style="display:none">
                <div class="g_box">
                    <div class="black_shade"></div>
                    <img src="img/house_keeping.jpg">
                    <div class="white_box_hover">
                    <h3>Modern home redesign</h3>
                    <p>Credibly innovate granular internal or "organic" sources whereas high standards in web-readiness. Energistically scale future-proof core competencies vis-a-vis impactful experiences.</p>
                    </div>
                    <a href=""><img src="img/plus.png" class="iconms"></a>
                </div>
            </div>

            <div class="col-md-3 col-xs-12 banner_bottom_margin filter Workstations" style="display:none">
                <div class="g_box">
                    <div class="black_shade"></div>
                    <img src="img/house_keeping.jpg">
                    <div class="white_box_hover">
                    <h3>Modern home redesign</h3>
                    <p>Credibly innovate granular internal or "organic" sources whereas high standards in web-readiness. Energistically scale future-proof core competencies vis-a-vis impactful experiences.</p>
                    </div>
                    <a href=""><img src="img/plus.png" class="iconms"></a>
                </div>
            </div>

            
            <!-- Workstations End -->
            

            </div>
            </div>  
    </div>
    
            
        </div>
        
        
        
        
    </div>
<?php include('footer.php')?>