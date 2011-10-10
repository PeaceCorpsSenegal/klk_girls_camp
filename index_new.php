<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Camp de Connaissance et Croissance</title>
	<script type="text/javascript" src="js/default.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<style type="text/css">
<!--

body  {
	background-color: #FFC; // background for whole page
	color: black; // color of whole page text
	position: relative;
	background-image: url(../images/gc_bg.png);
	background-repeat: no-repeat;
	font: 12px verdana,sans-serif;
	margin: 0; /* it's good practice to zero the margin and padding of the body element to account for differing browser defaults */
	padding: 0;
	text-align: center; /* this centers the container in IE 5* browsers. The text is then set to the left aligned default in the #container selector */
}

img#logo {
	width: 200px;
	height: 200px;
}


.oneColLiqCtrHdr #container0 {
	width: 100%;  /* this will create a container 80% of the browser width */
	margin: 0 auto; /* the auto margins (in conjunction with a width) center the page */
	border: 0px solid #000000;
	text-align: left; /* this overrides the text-align: center on the body element. */
}
.oneColLiqCtrHdr #header0 {
	padding: 0;  /* this padding matches the left alignment of the elements in the divs that appear beneath it. If an image is used in the #header instead of text, you may want to remove the padding. */
	background-image: url(../images/header_curve.png);
	background-repeat:repeat-x;
	height: 59px;
}
.oneColLiqCtrHdr #header0 h1 {
	margin: 0; /* zeroing the margin of the last element in the #header div will avoid margin collapse - an unexplainable space between divs. If the div has a border around it, this is not necessary as that also avoids the margin collapse */
	padding: 10px 0; /* using padding instead of margin will allow you to keep the element away from the edges of the div */
}
.oneColLiqCtrHdr #mainContent0 {
	padding: 0 20px; /* remember that padding is the space inside the div box and margin is the space outside the div box */
	//background: #FFFFFF;
}
.oneColLiqCtrHdr #footer0 { 
	padding: 0; /* this padding matches the left alignment of the elements in the divs that appear above it. */
	height: 59px;
	background-image: url(../images/footer_curve.png);
	background-repeat:repeat-x;
	margin: 0;
} 
.oneColLiqCtrHdr #footer0 p {
	margin: 0; /* zeroing the margins of the first element in the footer will avoid the possibility of margin collapse - a space between divs */
	padding: 10px 0; /* padding on this element will create space, just as the the margin would have, without the margin collapse issue */
}





#container { 
	width: 800px;  /* this will create a container */
	margin: 0 auto; /* the auto margins (in conjunction with a width) center the page */
	border: 0px solid #000000;
	text-align: left; /* this overrides the text-align: center on the body element. */
	background-image: url(../images/gc_bg_center.png);
	background-repeat: no-repeat;
	position: relative;
} 
.twoColHybLtHdr #header { 
	background: black; 
	padding: 0 0 0 210px;  /* this padding matches the left alignment of the elements in the divs that appear beneath it. If an image is used in the #header instead of text, you may want to remove the padding. */
	height: 0;
} 
h1 {
	margin-top: 0;
	margin-left: 10px;
}
p {
	text-align: justify;
}

/* Tips for sidebar1:
1. Since we are working in relative units, it's best not to use padding on the sidebar. It will be added to the overall width for standards compliant browsers creating an unknown actual width. 
2. Since em units are used for the sidebar value, be aware that its width will vary with different default text sizes.
3. Space between the side of the div and the elements within it can be created by placing a left and right margin on those elements as seen in the ".twoColHybLtHdr #sidebar1 p" rule.
*/
.twoColHybLtHdr #sidebar1 {
	float: left; 
	width: 200px; /* since this element is floated, a width must be given */
	padding: 0; /* top and bottom padding create visual space within this div  */
	/* RGBa with opacity */
	background: rgba(69,123,74,0.5);
	/* Fallback for web browsers that doesn't support RGBa */
	background: rgb(69, 123, 74) transparent;
	/* For IE 5.5 - 7*/
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#7f457b4a, endColorstr=#7f457b4a);
	/* For IE 8*/
	-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#7f457b4a, endColorstr=#7f457b4a)";
	border-top-left-radius: 95px;
	border-top-right-radius: 95px;
	-moz-border-radius-topleft: 95px;
	-moz-border-radius-topright: 95px;
	border-bottom-left-radius: 5px;
	border-bottom-right-radius: 5px;
	-moz-border-radius-bottomleft: 5px;
	-moz-border-radius-bottomright: 5px;
	padding-bottom: 10px;
}
.twoColHybLtHdr #sidebar1 h3, .twoColHybLtHdr #sidebar1 p {
	margin-left: 10px; /* the left and right margin should be given to every element that will be placed in the side columns */
	margin-right: 10px;
}
p {
	margin-left: 10px;
	margin-right: 10px;
}

/* Tips for mainContent:
1. The space between the mainContent and sidebar1 is created with the left margin on the mainContent div.  No matter how much content the sidebar1 div contains, the column space will remain. You can remove this left margin if you want the #mainContent div's text to fill the #sidebar1 space when the content in #sidebar1 ends.
2. Be aware it is possible to cause float drop (the dropping of the non-floated mainContent area below the sidebar) if an element wider than it can contain is placed within the mainContent div. WIth a hybrid layout (percentage-based overall width with em-based sidebar), it may not be possible to calculate the exact width available. If the user's text size is larger than average, you will have a wider sidebar div and thus, less room in the mainContent div. You should be aware of this limitation - especially if the client is adding content with Contribute.
3. In the Internet Explorer Conditional Comment below, the zoom property is used to give the mainContent "hasLayout." This may help avoid several IE-specific bugs.
*/
.twoColHybLtHdr #mainContent { 
	margin: 0 0 0 210px; /* the right margin can be given in percentages or pixels. It creates the space down the right side of the page. */
	/* RGBa with opacity */
	background: rgba(86,153,92,0.5);
	/* Fallback for web browsers that doesn't support RGBa */
	background: rgb(69, 123, 74) transparent;
	/* For IE 5.5 - 7*/
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#7f56995c, endColorstr=#7f56995c);
	/* For IE 8*/
	-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#7f56995c, endColorstr=#7f56995c)";
	border-bottom-left-radius: 5px;
	border-bottom-right-radius: 5px;
	-moz-border-radius-bottomleft: 5px;
	-moz-border-radius-bottomright: 5px;
} 
.twoColHybLtHdr #footer { 
	padding: 0; /* this padding matches the left alignment of the elements in the divs that appear above it. */
	background:#DDDDDD;
	margin: 0;
	height: 0;
} 

/* Miscellaneous classes for reuse */
.intext_right { /* this class can be used to float an element right in your page. The floated element must precede the element it should be next to on the page. */
	float: right;
	margin-left: 8px;
}
.intext_left { /* this class can be used to float an element left in your page */
	float: left;
	margin-right: 8px;
}
.clearfloat { /* this class should be placed on a div or break element and should be the final element before the close of a container that should fully contain a float */
	clear:both;
    height:0;
    font-size: 1px;
    line-height: 0px;
}

div#menu {
	margin: 0 auto;
	padding-left: 210px;
	width: 590px;
	padding-top: 35px;
}
#footer_content {
	width: 590px;
	padding-left: 210px;
	margin: 0 auto;
	text-align: center;
}
a, a:visited {
	color: yellow;
	text-decoration: none;
}
a:hover {
	text-decoration: underline;
}



#sddm {
	margin: 0;
	padding: 0;
	z-index: 30;
}
#sddm li {
	margin: 0;
	padding: 0;
	list-style: none;
	float: left;
	font: bold 11px arial;
}

#sddm li a {
	display: block;
	margin: 0 1px 0 0;
	padding: 4px 8px;
	width: 130px;
	color: yellow;
	text-align: center;
	text-decoration: none;
	font-size: 14px;
}
#sddm li a:hover {
	background: green; // menu hover background
	
}
#sddm div
{	position: absolute;
	visibility: hidden;
	margin: 0;
	padding: 0;
	border: 0px solid #5970B2;
	border-right: 2px solid black;
	border-bottom: 2px solid black;
	z-index: 31;
	
}
#sddm div a {
	position: relative;
	display: block;
	margin: 0;
	padding: 5px 10px;
	width: auto;
	white-space: nowrap;
	text-align: left;
	text-decoration: none;
	background: black; // dropdown menu background
	color: white; // dropdown menu text color
	font: 11px arial;
}

#sddm div a:hover {
	background: green; // dropdown hover background color
	color: black; // dropdown hover text color
}


-->
</style></head>

<body class="oneColLiqCtrHdr">

<div id="container0">
  <div id="header0">
    	<?php
			include('menu2.inc');
		?>
  <!-- end #header --></div>
  <div id="mainContent0">



<div id="container" class="twoColHybLtHdr">
  <div id="header">
  	&nbsp;
  <!-- end #header --></div>
  <div id="sidebar1">
		<?php
			include('sidebar.inc');
		?>

  <!-- end #sidebar1 --></div>
  <div id="mainContent">
        	&nbsp;
     <h1><em>Camp de Connaissance et Croissance</em></h1>
	 <p><img alt="and another here" class="intext_right" src="photos/IMG_2644.png" width="223px">Thank you to everyone who made <em>Camp de Connaissance et Croissance 2010</em> a great success! We thank all of the donors, Peace Corps volunteers, local teachers, and especially the campers for turning our simple idea of a leadership camp for girls, into the experience of a lifetime for the 40 young women who participated. Check out our <a href="photos.php">photo page</a> to see for yourself!</p>
	 
	 <p><em>Camp de Connaissance et Croissance</em> is a week-long leadership development program for girls just finishing their <em>cinquième</em> year of school. Through an interview process, we select those girls who show leadership ability, motivation, and a strong desire to pursue their dreams. We aspire to empower and inspire girls from central Senegal to become strong and independent community leaders who have a positive impact on their communities. By meeting other girls their own age from a wide range of backgrounds and communities, we aim to provide summer camp memories that can serve as inner resources for each participant throughout her life.</p>
	 
	 <p>By providing this experience, we hope to open participants' eyes to opportunities in regards to traditional norms and expectations. Girls in Senegal are less likely to receive encouragement to excel academically and to pursue their goals because of social pressure to marry early. This weeklong camp is an opportunity for forty girls from twelve different communities to learn how to achieve their full potential.</p>
	 
	 <p><img alt="Photo here" class="intext_left" src="photos/writing.jpg" width="200px">Through a variety of workshops, games, and other activities these girls are able to recognize that they have the agency to set and achieve their own goals. They will discuss topics such as health, career options, environmental protection, and gender roles. The girls will also meet successful women whom they can look up to as role models. Women from the local teachers' union act as counselors, and facilitate daily discussion sessions in small groups to address issues that girls face in their daily lives. In addition, women in other career fields will participate as guest speakers to allow the girls to understand fully their options in life. In only one week, we hope to give every participant an experience which will stay with her for a lifetime. We work hard to ensure that every girl says goodbye at the end of the week with increased self-confidence, improved communication skills, a greater capacity for leadership, lifelong friendships, and higher self-esteem.</p>
	 
	 <p>The chance to provide the young women of Senegal with this opportunity is entirely reliant upon grants, donations, and the hard work of local volunteers. We appreciate any donation you can afford and invite you to check out our photos, testimonials, and detailed camp information. Thank you for your interest, and as they say here in Senegal, Bismillah!</p>
	<!-- end #mainContent --></div>
	<!-- This clearing element should immediately follow the #mainContent div in order to force the #container div to contain all child floats -->
	<br class="clearfloat" />
	<div id="footer">
    &nbsp;
  <!-- end #footer --></div>
<!-- end #container --></div>




	<!-- end #mainContent --></div>
  <div id="footer0">
    <?php
		include('footer.inc');
	?>
  <!-- end #footer --></div>
<!-- end #container --></div>
</body>
</html>
