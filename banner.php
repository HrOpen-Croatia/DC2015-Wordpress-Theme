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
	        
	        <!--
	        <div class="row">
                <div class="col-md-12 date">
                    May, 18<sup>th</sup> - 20<sup>th</sup>, 2015</span><span class="sub_date"><br>
                    <a class="where" href="http://osm.org/go/0Ismjz4s1?m=&node=635075827" target="_blank">Unska 3,</a> <a  class="where" href="http://www.fer.hr">FER - Zagreb, Croatia</a> 
                </div>
            </div>-->
            <div class="row">
                <div class="container sponsor-message">
                    <h3>May 18<sup>th</sup> - 20<sup>th</sup>, 2015</h3>
                    <h4>ZAGREB</h4>
                    <h4>
                    <a href="http://osm.org/go/0Ismjz4s1?m=&node=635075827">Faculty of Electrical Engineering and Computing, Unska 3</a>
                    </h4>
                </div>
           </div>
           
        </div>
    </div>
    
    
    <div class="row gray-bg action-links">
        <div class="container">
            <div class="row gray-bg">
                <div class="col-md-8 ">
                    <a href="/en/keynotes/" class="subbanner-link">
                        <div>Take a look at</div>
                        <div>the keynotes!</div>
	                </a>
                </div>
                <div class="col-md-4">
	                <!--<a class="subbanner-link-blue" href="/hr/raspored-predavanja" >Conference schedule</a>-->
	                <a class="subbanner-link-blue" href="http://www.open.hr/2015/02/natjecaj-za-dodjelu-nagrade-otvorena-informatika-za-postignuca-u-2014-godini/" >Open IT award</a>
	                <br><span class="white-text">Croatian only</span>
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
	        
	        <!--<div class="row">
                <div class="col-md-12 date">
                    18. - 20. svibnja, 2015.<span class="sub_date"><br>
                    <a class="where" href="http://osm.org/go/0Ismjz4s1?m=&node=635075827" target="_blank">Unska 3,</a> <a  class="where" href="http://www.fer.hr">FER - Zagreb</a> 
                </div>
            </div>-->
            
            <div class="row">
                <div class="container sponsor-message">
                    <h3>18. - 20. svibnja 2015.</h3>
                    <h4>ZAGREB</h4>
                    <h4>
                    <a href="http://osm.org/go/0Ismjz4s1?m=&node=635075827">Fakultet elektrotehnike i računarstva, Unska 3</a>
                    </h4>
                </div>
           </div>
           
        </div>
    </div>
    
    
    <div class="row gray-bg action-links">
        <div class="container">
            <div class="row gray-bg">
                <div class="col-md-8 ">
                    <a href="/hr/keynote-predavaci" class="subbanner-link">
                        <div>Pogledajte ovogodišnja</div>
                        <div>uvodna predavanja!</div>
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
