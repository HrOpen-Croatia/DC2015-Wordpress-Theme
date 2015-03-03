<?php 
	if ($lang == "en") : /* English banner part goes below:*/
?> 

	<div class="row header-image">
	    <div class="col-md-12">
            <div class="row">
                <div class="col-md-12 main-title">
        	        <a href="<?php echo home_url(); ?>"><img class="img-responsive main_img" src="<?php bloginfo('template_url');?>/main_logo.png"></a>
	            </div>
	        </div>
	        
	        <div class="row">
                <div class="col-md-12 date">
                    May, 18<sup>th</sup> - 20<sup>th</sup>, 2015</span><span class="sub_date"><br>
                    <a class="where" href="http://osm.org/go/0Ismjz4s1?m=&node=635075827" target="_blank">Unska 3,</a> <a  class="where" href="http://www.fer.hr">FER - Zagreb, Croatia</a> 
                </div>
            </div>
            
            <div class="row">
                <div class="container sponsor-message">
                    <h3>Want to be a sponsor?</h3>
                    <h4>
                    Want to connect with your users or introduce yourself to the open source community?<br>There is no better place than the biggest croatian open technology conference
                    </h4>
                    <a href="mailto:info@dorscluc.org">contact us!</a>
                </div>
           </div>
           
        </div>
    </div>
    
    
    <div class="row gray-bg action-links">
        <div class="container">
            <div class="row gray-bg">
                <div class="col-md-8 ">
                    <a href="/en/talk-and-workshop-applications/" class="subbanner-link">
                        <div>Keynote and workshop,</div>
                        <div>applications are open!</div>
	                </a>
                </div>
                <div class="col-md-4">
	                <!--<a class="subbanner-link-blue" href="/hr/raspored-predavanja" >Conference schedule</a>-->
	                <a class="subbanner-link-blue" href="http://www.open.hr/2015/02/natjecaj-za-dodjelu-nagrade-otvorena-informatika-za-postignuca-u-2014-godini/" >Open IT award</a>
	                <span class="white-text">Croatian only</span>
                </div>
            </div>
        </div>
    </div>
      
        
<?php 
	else: /*Croatian banner part goes below:*/ 
?>

        
    <div class="row header-image">
	    <div class="col-md-12">
            <div class="row">
                <div class="col-md-12 main-title">
        	        <a href="<?php echo home_url(); ?>"><img class="img-responsive main_img" src="<?php bloginfo('template_url');?>/main_logo.png"></a>
	            </div>
	        </div>
	        
	        <div class="row">
                <div class="col-md-12 date">
                    18. - 20. svibnja, 2015.<span class="sub_date"><br>
                    <a class="where" href="http://osm.org/go/0Ismjz4s1?m=&node=635075827" target="_blank">Unska 3,</a> <a  class="where" href="http://www.fer.hr">FER - Zagreb</a> 
                </div>
            </div>
            
            <div class="row">
                <div class="container sponsor-message">
                    <h3>Zainteresirani ste postati sponzor?</h3>
                    <h4>
                    Želite li se povezati s krajnjim korisnicima, predstaviti open source zajednici?<br>DORS/CLUC je odlično mjesto za to - najveća regionalna konferencija posvećena otvorenim tehnologijama.
                    </h4>
                    <a href="mailto:info@dorscluc.org">kontaktirajte nas!</a>
                </div>
           </div>
           
        </div>
    </div>
    
    
    <div class="row gray-bg action-links">
        <div class="container">
            <div class="row gray-bg">
                <div class="col-md-8 ">
                    <a href="/hr/prijave-predavanja-i-radionica/" class="subbanner-link">
                        <div>Prijave predavanja i</div>
                        <div>radionica su otvorene</div>
	                </a>
                </div>
                <div class="col-md-4">
	                <!--<a class="subbanner-link-blue" href="/hr/raspored-predavanja" >Conference schedule</a>-->
	                <a class="subbanner-link-blue" href="http://www.open.hr/2015/02/natjecaj-za-dodjelu-nagrade-otvorena-informatika-za-postignuca-u-2014-godini/" >Nagrada Otvorena informatika</a>
                </div>
            </div>
        </div>
    </div>
        
<?php endif; ?>
