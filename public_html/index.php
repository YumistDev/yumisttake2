<?php 

require 'vendor/autoload.php'; 
use Parse\ParseClient;
 
ParseClient::initialize('EiWx1ykE6MHUjmnFwzoLvufUlsdtLUEO5mUuHwpv', 'FtJ7IIwGG5cBKMCMW8XfBg3vowVz7Gp81CDxSUzW', 'Q95YnjuuAwZJKldilMc6lAtxxStZmDw5Tiqa2VbW');

use Parse\ParseObject;
use Parse\ParseQuery;

class Building
    {
        public $ObjID, $bldgName, $lat, $long, $ClusteriD;
        function __construct($_ObjID, $_BldgName, $_lat, $_long, $_ClusterID)
        {
            $this->ObjID =$_ObjID;
            $this->bldgName = $_BldgName;
            $this->lat = $_lat;
            $this->long = $_long;
            $this->ClusterID = $_ClusterID;
        }
    }
	
	$building = new Building("", "", 0, 0, "what id?!");

    // fetch workers (drivers)*******************************
        $query = new ParseQuery("Building");
        $results = $query->find();
       //echo "this many rows ".count($results);
	   
	   for($i=0; $i<count($results); $i++) {
	   $object = $results[$i];
	   $buildings[$i] = new Building(0, $object->get('BldgName'), $object->get('Latitude'), 0, $object->get('ClusterId'));
	   $buildings[$i]->bldgName;
	   
	   }
	   
	   
	   ?>
	   
	   
	 <html>
    <head>
        <title>Yumist</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="content-type" content="text/html; charset=windows-1250">
  <meta name="generator" content="Andy Moore: http://locationdetection.mobi/">
        <link href="css/style.css" rel='stylesheet' type='text/css' />
		<script src="JS/inc.js" type="text/javascript"></script>
		<link  rel="stylesheet" href="css/inc-css.css"/>
		<script>
		function function1(){
		// var x = document.getElementById("location").value;
		// alert(x);
		}
		</script>
    </head>
    <body>
	
	
        
        <div class="logos" style="background-color:#fa463e;">
            <img class="logoimg" src="media/yumistlogo.png"/>
        </div>
		<div id="geo" class="">  <?php ?> </div>
		<script type="text/JavaScript" src="geo.js"></script>
		<div class="header" style="height: 120px;padding-top: 36px;">
		<div style="float:left; border:1px solid; border-radius:50%; width:70px; height:70px;">  <div style="padding-top: 26px; padding-left: 7px;"> 21 mins </div> 
		</div>
		
		<div style="border:1px solid; width:300px; height:70px; float:left; text-align:center; margin-left:4%;"> 
		<!-- box with dropdown list -->
		<form action="newserver.php"> 
		<div style="padding-top:11px;">  Deliver to: </div>
		<div> <select name="location" id="location" onchange="function1()">
		<?php for($i=0; $i<count($results); $i++) { ?>
		<option value="<?php echo $buildings[$i]->bldgName ;?>"> <?php echo $buildings[$i]->bldgName ;?> </option>
		
		<?php
		}
		
		?>
		</select> </div>
		
		</div>
		
		<div style="float:right; float: right;padding-left: 50px;padding-right: 100px;">Total : Rs xxxx <br/> <input type="submit" value="checkout"/>
		
		</div>
		<div style="float:right; border:2px solid; border-radius:100px; height:70px; width:70px;"> 
		
		<div style="padding: 17px 0px 0px 10px;"> <img src="media/shopkart.png" height="40" width="40"/> </div> 
		
		</div>
		
		</div>
		<div class="clear">&nbsp;</div>
		
		 <div class="mymenu"> <center> <h3> Today's Menu </h3> </center>
		 <span class="linet-red"> </span>
		 </div>
		 <br> 
		 
		 <div>  <div class="play-icon popup-with-zoom-anim menu-img pic menu-items" style="margin-left:3%;"> 
                        <div class="text">
                            this is the details of the image!!
                        </div>
						<div class="details">
						Aloo puri!<br/>
						Rs. 105/-
						</div>
						<div style="float:right;" class="back">

<button id="btnvalue" onclick="decrease();" type="button" class="btnclass">-</button>
<input type="text" id="txtvalue" value="0" name="dish1" class="textboxclass" />
<button id="btnvalue" onclick="increase();" type="button" class="btnclass">+</button>
                    </div></div>
					
					<div class="play-icon popup-with-zoom-anim menu-img pic menu-items" style="margin-left:3%;"> 
                        <div class="text">
                            Here details will come!
                        </div>
						<div class="details">
						Keema! <br/>
						Rs. 105/- 
						</div>
						<div style="float:right;" class="back">
<button id="btnvalue" onclick="decrease1();" type="button" class="btnclass">-</button>
<input type="text" id="txtvalue1" name="dish2" value="0" class="textboxclass" />
<button id="btnvalue" onclick="increase1();" type="button" class="btnclass">+</button>
                    </div>
                    </div>
					
		</div>
		 
		 <div class="clear">&nbsp;</div>
		 <div class="clear">&nbsp;</div>
 <div class="clear">&nbsp;</div>
 <div class="clear">&nbsp;</div> 
		 <div style="background-color:#f1f1f2;width:100%;">
		 <center>HOW IT WORKS</center>
		 <div style="text-align: center; margin-left: 11%"> <div style="float:left; padding: 0px 95px 0px 0px;">
		 <img src="media/step1.png"/> <br>
		 <center> Visit yumist.com or<br> download our app</center>
		 </div>
		 <div style="float:left;padding: 0px 95px 0px 0px;">
		 <img src="media/step2.png"/> <br>
		 <center> We pick your office <br> location automatically<br> and provide a real time ETA</center>
		 </div>
		
		<div style="float:left;padding: 0px 110px 0px 0px;">
		 <img src="media/step3.png"/> <br>
		 <center> Order a delicious, <br>homely meal in less <br>than 30 seconds</center>
		 </div>
		 
		 <div style="float:left;padding: 0px 19px 0px 0px;">
		 <img src="media/step4.png" width="170" height="170"/> <br>
		 <center> Your meal arrives at <br>lightning speed, hot <br>and fresh</center>
		 </div>
		</div>
		
		 <div class="clear"></div>
		 
		 <div style="background-color:grey;">
		<div class="container">
			<div class="row interduce-row">
				<div class="col-md-6 inter-row-column">
					<img class="phoneimg" src="media/yumistphone.png" alt=""/>
				</div>
				<div class="col-md-6 inter-row-column">
					<h4><span>INTRODUCING</span> THE YUMIST APP</h4>
					<p>Yumist has been created to get rid of this pain once and forever. We believe that a happy meal is not just about the food, it's the overall experience surrounding it. Let's face it - we have all been spoilt by our Mothers growing up. Why did she have to bring a sumptuous, steamy, fresh meal in 20 mins every time we screamed hunger? :P </p>
					<p>Agreed we cannot replicate your Mom's taste; heck no one can. But we do aim to bring your way some deliciousness in the same on-demand fashion we got used to as kids.. </p>
					
					<ul class="inter-duce">
						
						<li><a class="icon5" href="https://play.google.com/store/apps/details?id=com.slashg.yumist"></a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
		</form> 
		<div class="clear"></div>
		<div class="footer">
		<div style="float:left; padding: 20px 0px 0px 63px;font-size: smaller;color: #fefefe;"> Contact us : <br> hello@yumist.com </div>
		
		<div>
		 </body>
		 </html>
		 
	   
	   