<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
<head>
<title>CBIT</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />



<style type="text/css">
#mask {
	display: none;
	background: #000; 
	position: fixed; left: 0; top: 0; 
	z-index: 10;
	width: 100%; height: 100%;
	opacity: 0.8;
	z-index: 999;
}

.login-popup{
	display:none;
	background: #333;
	padding: 10px; 	
	border: 2px solid #ddd;
	float: left;
	font-size: 1.2em;
	position: fixed;
	top: 50%; left: 50%;
	z-index: 99999;
	box-shadow: 0px 0px 20px #999;
	-moz-box-shadow: 0px 0px 20px #999; /* Firefox */
    -webkit-box-shadow: 0px 0px 20px #999; /* Safari, Chrome */
	border-radius:3px 3px 3px 3px;
    -moz-border-radius: 3px; /* Firefox */
    -webkit-border-radius: 3px; /* Safari, Chrome */
}

img.btn_close {
	float: right; 
	margin: -28px -28px 0 0;
}



form.signin .textbox input { 
	background:#666666; 
	border-bottom:1px solid #333;
	border-left:1px solid #000;
	border-right:1px solid #333;
	border-top:1px solid #000;
	color:#fff; 
	border-radius: 3px 3px 3px 3px;
	-moz-border-radius: 3px;
    -webkit-border-radius: 3px;
	font:13px Arial, Helvetica, sans-serif;
	padding:6px 6px 4px;
	width:200px;
}





</style>





<link href="style.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" type="text/css" href="css/coin-slider.css" />
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-titillium-250.js"></script>
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/coin-slider.min.js"></script>

<link type="text/css" href="menu.css" rel="stylesheet" />
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="menu.js"></script>
<script type="text/javascript" src="accordian.js"></script>

<script type="text/javascript" src="ddaccordion.js"></script>
<script type="text/javascript" src="scroll.js"></script>
<script type="text/javascript">
<!--
var image1=new Image()
image1.src="images/cw.png"
var image2=new Image()
image2.src="images/kb.png"
var image3=new Image()
image3.src="images/lib.png"
//-->
</script>

<script type="text/javascript">





ddaccordion.init({ //top level headers initialization

	headerclass: "expandable", //Shared CSS class name of headers group that are expandable

	contentclass: "categoryitems", //Shared CSS class name of contents group

	revealtype: "click", //Reveal content when user clicks or onmouseover the header? Valid value: "click", "clickgo", or "mouseover"

	mouseoverdelay: 200, //if revealtype="mouseover", set delay in milliseconds before header expands onMouseover

	collapseprev: true, //Collapse previous content (so only one open at any time)? true/false 

	defaultexpanded: [0], //index of content(s) open by default [index1, index2, etc]. [] denotes no content

	onemustopen: false, //Specify whether at least one header should be open always (so never all headers closed)

	animatedefault: false, //Should contents open by default be animated into view?

	persiststate: true, //persist state of opened contents within browser session?

	toggleclass: ["", "openheader"], //Two CSS classes to be applied to the header when it's collapsed and expanded, respectively ["class1", "class2"]

	togglehtml: ["prefix", "", ""], //Additional HTML added to the header when it's collapsed and expanded, respectively  ["position", "html1", "html2"] (see docs)

	animatespeed: "fast", //speed of animation: integer in milliseconds (ie: 200), or keywords "fast", "normal", or "slow"

	oninit:function(headers, expandedindices){ //custom code to run when headers have initalized

		//do nothing

	},

	onopenclose:function(header, index, state, isuseractivated){ //custom code to run whenever a header is opened or closed

		//do nothing

	}

})



ddaccordion.init({ //2nd level headers initialization

	headerclass: "subexpandable", //Shared CSS class name of sub headers group that are expandable

	contentclass: "subcategoryitems", //Shared CSS class name of sub contents group

	revealtype: "click", //Reveal content when user clicks or onmouseover the header? Valid value: "click" or "mouseover

	mouseoverdelay: 200, //if revealtype="mouseover", set delay in milliseconds before header expands onMouseover

	collapseprev: true, //Collapse previous content (so only one open at any time)? true/false 

	defaultexpanded: [], //index of content(s) open by default [index1, index2, etc]. [] denotes no content

	onemustopen: false, //Specify whether at least one header should be open always (so never all headers closed)

	animatedefault: false, //Should contents open by default be animated into view?

	persiststate: true, //persist state of opened contents within browser session?

	toggleclass: ["opensubheader", "closedsubheader"], //Two CSS classes to be applied to the header when it's collapsed and expanded, respectively ["class1", "class2"]

	togglehtml: ["none", "", ""], //Additional HTML added to the header when it's collapsed and expanded, respectively  ["position", "html1", "html2"] (see docs)

	animatespeed: "fast", //speed of animation: integer in milliseconds (ie: 200), or keywords "fast", "normal", or "slow"

	oninit:function(headers, expandedindices){ //custom code to run when headers have initalized

		//do nothing

	},

	onopenclose:function(header, index, state, isuseractivated){ //custom code to run whenever a header is opened or closed

		//do nothing

	}

})





</script>










</head>
<body>



<div class="main">
	
  
	<div class="header">
  
		<div class="header_resize">

			<div class="aboveMenu">
				<img src="images/logo.jpeg" class="cbitlogo"></img>
			
				<div class="title"> Chaitanya Bharathi Institute Of Technology</div>
				
			
			
		
						<div id="menu">
						<ul class="menu">
							<li><a href="#" class="parent"><span>Home</span></a> </li>
							<li><a href="academics.html" class="parent"><span>Admission</span></a>
							<ul>
								<li><a href="#"><span>B.E</span></a></li>
								
								<li><a href="#"><span>B.Tech</span></a></li>
								<li><a href="#"><span>MCA</span></a></li>
								<li><a href="#"><span>MBA</span></a></li>
							</ul>
							</li>
							<li><a href="#"><span>Departments</span></a>
						<ul>
						    <li><a href="#"><span>CSE</span></a></li>
							<li><a href="#"><span>ECE </span></a></li>
							<li><a href="#"><span>EEE</span></a></li>
					        <li><a href="#"><span>CIVIL</span></a></li>
							<li><a href="#"><span>MECH</span></a></li>
							<li><a href="#"><span>IT</span></a></li>
							<li><a href="#"><span>PRODUCTION</span></a></li>
							
							
						</ul>
					</li>
					<li><a href="#"><span>Students</span></a>
						<ul>
						<li><a href="#login-box" class="login-window"><span>Login</span></a></li>
							<li><a href="#"><span>Student Info. System</span></a></li>
							<li><a href="#"><span>IEEE</span></a></li>
							<li><a href="#"><span>Research</span></a></li>
							<li><a href="#"><span>OnlineLibrary</span></a></li>
						
						</ul>
					</li>
					<li><a href="#"><span>CLUBS </span></a>
						<ul>
							<li><a href="#"><span>NSS</span></a></li>
							<li><a href="#"><span>Cultural CLub</span></a></li>
							<li><a href="#"><span>Communicando</span></a></li>
							<li><a href="#"><span>Sports Club</span></a></li>
						</ul>
					</li>
				
					<li class="last"><a href="contact.php"><span>Contact Us</span></a>
						<ul>
							
							<li><a href="#"><span>Principal Office</span></a></li>
							<li><a href="#"><span>Department</span></a></li>
							
						</ul>
					</li>
				</ul>
				
			</div>			
		</div>
			<div class="clr"></div>
		  
		</div>
	</div>

	

				
			
</div>

	</div>		
			
		</div>
	</div>
<!-- login box start-->
	
	<div id="login-box" class="login-popup">
        <a href="#" class="close"><img src="close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>
          <form method="post" class="signin" action="#">
		  <table >
		  <tr>
		  <th>Email:</th>
		  <td><input id="email" name="email" value="" type="text" autocomplete="on" ></td>
		  
               
		  </tr>
		  <tr>
		  <th>Password:</th>
		  <td><input id="pwd" name="pwd" value="" type="text" autocomplete="off" ></td>
		  </tr>
		  <tr>
               
		
                
              <th>  <input type="submit" value="Register" onSubmit=""/></th>
               <td> <input type="submit" value="Cancel" /></td>
				
			</tr>
			
               
             
             </table>   
			  <p>
                <a class="forgot" href="#">Forgot your password?</a>
                </p>
          </form>
		</div>
		
		
		
	<!-- login box end-->
	
<!-- vertical drop down menu -->	
	
	<div class="arrowlistmenu">



<h3 class="menuheader expandable">Placements</h3>

<ul class="categoryitems">

<li><a href="#">Internships</a></li>

<li><a href="#">Downloads</a></li>


</ul>



<h3 class="menuheader expandable">About CBIT</h3>

<ul class="categoryitems">

<li><a href="http://www.cbit.ac.in">Students</a></li>
<li><a href="http://www.cbit.ac.in">Faculty</a></li>
<li><a href="http://www.cbit.ac.in">Alumni</a></li>



</ul>



<h3 class="menuheader expandable">Links</h3>

<ul class="categoryitems">

<li><a href="http://www.cbit.ac.in/po" >Placement Office</a></li>





</ul>





<h3 class="menuheader"><a href="feedback.html" >FeedBack</a></h3>
</div>
 <!-- vertical drop down menu  close--> 
 <!-- image sliding start-->
<div class="slider">
<img border="0" src="images/cw.png" name="slide" width="680" height="278">
<script type="text/javascript">
<!--
//variable that will increment through the images
var step=1
function slideit(){
 effect:'random'
//if browser does not support the image object, exit.
if (!document.images)
return
document.images.slide.src=eval("image"+step+".src")
if (step<3)
step++
else
step=1
//call function "slideit()" every 2.5 seconds
setTimeout("slideit()",2500)
}
slideit()
//-->
            </script>

</div>

<!-- image sliding end-->
  
<!-- news scroll start-->
  <div class="abovenewsscroll">
  Latest News:
  </div>
  
  </div>
  
  <div class="newsScroller" id="newsScroll">
   
    <ul>


    <a class="title" > Latest News</a>
    <li>This will be the sample text Mr.Pramod Jella</li>

	
    <a class="title" href="www.osmania.ac.in">Results</a>
	<li>This will be the sample text Mr.Pramod Jella</li>

	<li>This will be the sample text Mr.Pramod Jella</li>

	<li>This will be the sample text Mr.Pramod Jella</li>

	<li>This will be the sample text Mr.Pramod Jella</li>



</ul>

</div>
  <!-- news scroll end-->
<div id="logoscroll">

<marquee align="center" direction="left" scrollamount="10" scrolldelay="10" ONMOUSEOVER="this.stop();" ONMOUSEOUT="this.start();"> 

hello
</marquee> 


</div>
  


<div class="fbg">
		<div class="fbg_resize">
			
		</div>
</div>



<div class="footer">
		<div class="footer_resize" align="center">
			<div style="color:#dedede;">
				2012 &copy; Chaitanya Bharathi Institute Of Technology
			</div>
		</div>
</div>
	
<a href="http://apycom.com/" style="display:none;"></a>

</div>

</body>

</html>

