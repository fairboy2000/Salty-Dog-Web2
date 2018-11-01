<?php
define('DONOTCACHEPAGE',1);
//error_reporting(E_ALL);
//ini_set('display_errors', 1);
// =============================================================================
// VIEWS/INTEGRITY/TEMPLATE-BLANK-1.PHP (Container | Header, Footer)
// -----------------------------------------------------------------------------
// A blank page for creating unique layouts.
// =============================================================================

?>

<?php get_header(); ?>

<style>
.entry-wrap{
border: 2px dashed #eee !important;
box-shadow: 0 0 0 8px #fff !important;
border-radius: 0 !important;

}
.mega-hover{cursor:default !Important;}
.flogo{
	display:none;
}
#staff{
	list-style:none;
	width:97.48%;
	display:block;
	margin:0 auto;
}
#staff li{
	width:16.22%;
	height:150px;
	background:#ccc;
	margin-right:.5%;
	margin-bottom:5px;
	float:left;
	display:inline-block;
}
#staff li:nth-child(12),#staff li:nth-child(6){
	margin-right:0;
}
#staff li:after{
	content:"";
	width:100%;height:40px;background:#ccc;margin-top:10px;
}
#wpcf7-f1517-o1{
	width:80%;
	margin:0 auto;
	padding:20px;
}
#wpcf7-f1517-o1 input[type='text']{
	border:1px solid #ccc;
	line-height:90%;
}
#wpcf7-f1517-o1 input[type='submit']{
	background:transparent;
	border:0;
	box-shadow:none;
	color:#7b7b7b;
	width:auto;
	float:right;
	padding:0;
	margin:0;
}
#wpcf7-f1517-o1 select{
	line-height:normal;
	color:#7b7b7b;
}
#numbers{
	list-style:none;
	text-align:left;
	
}
#numbers li{
	border-bottom:1px solid rgba(0,0,0,.1);
	box-shadow:0 2px 0 rgba(255,255,255,1);
	padding:10px 0;
	font-size:14px;
	max-width:300px;
	width:90%;
	font-family: "Lato", "Helvetica Neue", Helvetica, Arial, sans-serif;
}
#numbers li:last-child{
	border-bottom:0 !important;
	box-shadow:none !important;
}
#numbers li span{
	display:block;
	color:#2980b9;
	font-size:12px;
	font-family: "Lato", "Helvetica Neue", Helvetica, Arial, sans-serif;
}
#staff .con{
	float:left;
	width:16.22%;
	margin-right:.5%;
	margin-bottom:.5%;
	padding-bottom:60px;
	position:relative;
	font-family:Arial, Helvetica, sans-serif;
	line-height:17px;
}
#staff .con:nth-child(6),#staff div:nth-child(12){
	margin-right:0;
}
em{
	font-size:12px;
}
@media only screen and (max-width:1024px){
	#numbers{
		text-align:center;
		border-top:1px dashed #bbb;
		padding-top:20px;
		margin-top:20px;
	}
	#numbers li{
				max-width:none;
	}
}
@media only screen and (max-width:400px){
	.members a{
		font-size:12px !important;
		line-height:13px !important;
	}
}
@media only screen and (min-width: 64.063em){
.large-2 {
    position: relative;
    width: 16.66667% !important;
}
}
</style>
<script>
jQuery(document).ready(function($){
	/*$('#staff a').each(function(){
		$(this).addClass('email');
	});*/
	
	
     //    $('#staff a').each(function() {
      //      var email_add = $(this).attr("href").replace(/\s*\(.+\)\s*/, "@");
      //      var email_text = $(this).html();
      //      $(this).before('<a href="mailto:' + email_add + '" rel="nofollow" class="email">' + email_text + '</a>').remove();
     //   });

        //$('.email').mailto();

$('.email').each(function(){
        var atsign = / at /;
        var dot = / dot /g;
        var name= $('.fn',this).text();
        var addr = $('.top',this).text().replace(atsign, "@").replace(dot, ".");
            
            $('.fn', this).html('<a href="mailto:' + addr + '">' + name + ' <i class="fa fa-external-link" style="padding-left:15px;"></i></a>');
			$('.top',this).text('');

});
	
	
	$('.con').each(function(){
    var h = ($(this).width()) + 40;
$(this).css('height',h);
	});
	
	$(window).resize(function(){
			$('.con').each(function(){
    var h = $(this).width()
$(this).css('height',h);
	});
	});
	
});


</script>
  <div class="x-main x-container-fluid max width offset" role="main" style="margin-top:0px;position:relative;z-index:100;width:99%;max-width:1100px;">
 
<div style="box-shadow:0 0 40px 10px rgba(0,0,0,1);width:auto;height:auto;max-width:1400px;margin:0 auto;display:block;">
<div style="width:99%;max-width:1400px;background:#fff;margin:30px auto;display:block;border: 2px dashed #eee;box-shadow: 0 0 0 8px #fff;position:relative;padding:10px;">
<a href="http://maps.google.com/maps?saddr=&daddr=232+S.+Sea+Pines+Dr,Hilton+Head,SC,29928" target="_blank"><img src="<?php bloginfo('stylesheet_directory');?>/img/contactMap.jpg" style="width:100%;" /></a>
<div class="" style="width:99%;text-align:center;color:#555;font-family:arial,helvetica,sans-serif;padding:20px 0 20px;margin-top:20px;">
<div class="fn org" style="text-indent:-99999px">The Salty Dog Cafe</div>
<div class="adr">
<div class="large-4 columns" style="text-align:center;"><span class="street-address">232 S. Sea Pines Dr.</span> <span class="locality">Hilton Head Island</span>, <span class="region">SC</span></div>
<div class="large-4 columns tel" style="text-align:center;">+1-843-671-2233</div>
</div>
<div class="large-4 columns" style="text-align:center;">
<a href="mailto:info@saltydog.com">info@saltydog.com</a>
</div>
<div style="clear:both;"></div>
</div>
<div class="" style="width:99%;text-align:left;color:#555;font-family:arial,helvetica,sans-serif;padding:0px 20px 0px;margin-top:20px;">
<i class="fa fa-paw" style="margin-right:10px"></i>Starting Year With Company
</div>
<div style="clear:both;"></div>

<div style="margin-top:20px;">
 <style>
@media only screen and (max-width:500px){
fa-external-link{display:none;}
}
.stf img{
min-width:141px;
}
.team-member {
    max-width: 500px;
    margin: 0 auto 20px auto;
    overflow: hidden;
    border-top: 0;
    border: 1px solid #f5f5f5;
    border-radius: 4px;
}
.img-responsive, .thumbnail > img, .thumbnail a > img, .carousel-inner > .item > img, .carousel-inner > .item > a > img {
    display: block;
    max-width: 100%;
    height: auto;
}
.team-details {
    padding: 20px;
}
.team-member .member-name {
    position: relative;
}
h4, .h4 {
    font-size: 23px;
}
h4, h5, h6 {
    margin-bottom: 15px;
    font-weight: 400;
}
.team-member .position {
    padding: 0;
    font-family: 'Montserrat', sans-serif;
    display: block;
}
p {
    font-family: "Open Sans", Helvetica, Arial, sans-serif;
    font-size: 14px;
    line-height: 1.6;
    margin: 15px 0;
    color: #515157;
}
.social {
    padding: 0;
    margin: 0;
    list-style: none;
    position: relative;
    z-index: 100;
}
.social li {
    display: inline-block;
    margin-right: 6px;
}
ul li, ol li {
    font-family: "Open Sans", Helvetica, Arial, sans-serif;
    font-size: 14px;
    color: #515157;
    margin-bottom: 5px;
}
.social li a {
    display: table;
    position: relative;
}
a {
    color: #1abc9c;
}
a {
    color: #337ab7;
    text-decoration: none;
}
.social-dark li a i {
    color: #666666;
}
.social li a i {
    text-align: center;
    display: table-cell;
    vertical-align: middle;
    width: 34px;
    height: 34px;
    font-size: 18px;
    -webkit-transition: all 200ms ease-out;
    -moz-transition: all 200ms ease-out;
    -o-transition: all 200ms ease-out;
    transition: all 200ms ease-out;
}
.fa-paw{
	margin-right:7px;
	font-size:12px;
	line-height:12px;
	position:relative;
	top:-1px;
	opacity:.5;
}
.social{
	margin-left:-13px;
}
</style>

<!-- Jake -->
<div class="large-3 medium-4 small-12 columns">
<div class="team-member" style="min-height:450px;max-height:450px;">
<img src="http://saltydog.com/wp-content/uploads/2014/02/contact_0011_Jake.jpg" class="img-responsive" style="margin: auto;"  alt="Member Image" data-selector="img">
<div class="team-details">
<div class="editContent" data-selector=".editContent">
<h4 class="member-name" style="text-align: center;">Jake the Salty Dog</h4>
</div>
<hr>
<div class="editContent" data-selector=".editContent">
<p class="position" style="text-align: center;">CEO<br><i class="fa fa-paw"></i>1987</p>
</div>
<div class="editContent" data-selector=".editContent">
<p></p>
</div>
<ul class="social social-dark">
<li><a href="https://www.facebook.com/SaltyDog/" target="facebook" data-selector=".social a"><i class="fa fa-2x fa-facebook"></i></a></li>
<li><a href="mailto:jakeATsaltydogDOTcom" data-selector=".social a"><i class="fa fa-2x fa-envelope"></i></a></li>
</ul><!-- /.social -->
</div>
</div>
</div>

<!-- Bob -->
<div class="large-3 medium-4 small-12 columns">
<div class="team-member" style="min-height:450px;max-height:450px;">
<img src="http://saltydog.com/wp-content/uploads/2014/02/contact_0010_Bob2.jpg" class="img-responsive" style="margin: auto;" alt="Member Image" data-selector="img">
<div class="team-details">
<div class="editContent" data-selector=".editContent">
<h4 class="member-name" style="text-align: center;">Bob Gossett</h4>
</div>
<hr>
<div class="editContent" data-selector=".editContent">
<p class="position" style="text-align: center;">President<br><i class="fa fa-paw"></i>1987</p>
</div>
<div class="editContent" data-selector=".editContent">
<p></p>
</div>
<ul class="social social-dark">
<li><a href="https://www.facebook.com/SaltyDog/" target="facebook" data-selector=".social a"><i class="fa fa-2x fa-facebook"></i></a></li>
<li><a href="mailto:bobATsaltydogDOTcom" data-selector=".social a"><i class="fa fa-2x fa-envelope"></i></a></li>
</ul><!-- /.social -->
</div>
</div>
</div>
                
 <!-- Tim -->
<div class="large-3 medium-4 small-12 columns">
<div class="team-member" style="min-height:450px;max-height:450px;">
<img src="http://saltydog.com/newstaff/timsterns.jpg" style="max-height:200px; margin: auto;" class="img-responsive" alt="Member Image" data-selector="img">
<div class="team-details">
<div class="editContent" data-selector=".editContent">
<h4 class="member-name" style="text-align: center;">Tim Stearns</h4>
</div>
<hr>
<div class="editContent" data-selector=".editContent">
<p class="position" style="text-align: center;">COO<br><i class="fa fa-paw"></i>2007</p>
</div>
<div class="editContent" data-selector=".editContent">
<p></p>
</div>
<ul class="social social-dark">
<li><a href="https://www.facebook.com/SaltyDog/" target="facebook" data-selector=".social a"><i class="fa fa-2x fa-facebook"></i></a></li>
<li><a href="mailto:timATsaltydogDOTcom" data-selector=".social a"><i class="fa fa-2x fa-envelope"></i></a></li>
</ul><!-- /.social -->
</div>
</div>
</div> 

<!-- Chris -->
<div class="large-3 medium-4 small-12 columns">
<div class="team-member" style="min-height:450px;max-height:450px;">
<img src="http://saltydog.com/newstaff/chriscrowe.jpg" style="max-height:200px; margin: auto;" class="img-responsive" alt="Member Image" data-selector="img">
<div class="team-details">
<div class="editContent" data-selector=".editContent">
<h4 class="member-name" style="text-align: center;">Chris Crowe</h4>
</div>
<hr>
<div class="editContent" data-selector=".editContent">
<p class="position" style="text-align: center;">CFO<br><i class="fa fa-paw"></i>2013</p>
</div>
<div class="editContent" data-selector=".editContent">
<p></p>
</div>
<ul class="social social-dark">
<li><a href="https://www.facebook.com/SaltyDog/" target="facebook" data-selector=".social a"><i class="fa fa-2x fa-facebook"></i></a></li>
<li><a href="mailto:chrisATsaltydogDOTcom" data-selector=".social a"><i class="fa fa-2x fa-envelope"></i></a></li>
</ul><!-- /.social -->
</div>
</div>
</div> 

<!-- Herb -->
<div class="large-3 medium-4 small-6 columns">
<div class="team-member" style="min-height:450px;max-height:450px;">
<img src="http://saltydog.com/newstaff/herbbritton.jpg" class="img-responsive" style="margin: auto;" alt="Member Image" data-selector="img">
<div class="team-details">
<div class="editContent" data-selector=".editContent">
<h4 class="member-name" style="text-align: center;">Herb Britton</h4>
</div>
<hr>
<div class="editContent" data-selector=".editContent">
<p class="position" style="text-align: center;">Co-Director of Food and Beverage<br><i class="fa fa-paw"></i>2002</p>
</div>
<div class="editContent" data-selector=".editContent">
<p></p>
</div>
<ul class="social social-dark">
<li><a href="https://www.facebook.com/SaltyDog/" target="facebook" data-selector=".social a"><i class="fa fa-2x fa-facebook"></i></a></li>
<li><a href="mailto:herbATsaltydogDOTcom" data-selector=".social a"><i class="fa fa-2x fa-envelope"></i></a></li>
</ul><!-- /.social -->
</div>
</div>
</div>             

 <!-- Zach -->
<div class="large-3 medium-4 small-6 columns">
<div class="team-member" style="min-height:450px;max-height:450px;">
<img src="http://saltydog.com/newstaff/zachdrescher.jpg" class="img-responsive" style="margin: auto;" alt="Member Image" data-selector="img">
<div class="team-details">
<div class="editContent" data-selector=".editContent">
<h4 class="member-name" style="text-align: center;">Zach Drescher</h4>
</div>
<hr>
<div class="editContent" data-selector=".editContent">
<p class="position" style="text-align: center;">Co-Director of Food and Beverage<br><i class="fa fa-paw"></i>2014</p>
</div>
<div class="editContent" data-selector=".editContent">
<p></p>
</div>
<ul class="social social-dark">
<li><a href="https://www.facebook.com/SaltyDog/" target="facebook" data-selector=".social a"><i class="fa fa-2x fa-facebook"></i></a></li>
<li><a href="mailto:zachATsaltydogDOTcom" data-selector=".social a"><i class="fa fa-2x fa-envelope"></i></a></li>
</ul><!-- /.social -->
</div>
</div>
</div>             

 <!-- Michael Blackmon -->
<div class="large-3 medium-4 small-6 columns">
<div class="team-member" style="min-height:450px;max-height:450px;max-height:450px;">
<img src="http://saltydog.com/newstaff/mb.jpg" class="img-responsive" style="margin: auto;" alt="Member Image" data-selector="img">
<div class="team-details">
<div class="editContent" data-selector=".editContent">
<h4 class="member-name" style="text-align: center;">Michael Blackmon</h4>
</div>
<hr>
<div class="editContent" data-selector=".editContent">
<p class="position" style="text-align: center;">Property Manager South Beach Inn and Vacation Rentals<br><i class="fa fa-paw"></i>2018</p>
</div>
<div class="editContent" data-selector=".editContent">
<p></p>
</div>
<ul class="social social-dark">
<li><a href="https://www.facebook.com/SaltyDog/" target="facebook" data-selector=".social a"><i class="fa fa-2x fa-facebook"></i></a></li>
<li><a href="mailto:michaelATsbinnDOTcom" data-selector=".social a"><i class="fa fa-2x fa-envelope"></i></a></li>
</ul><!-- /.social -->
</div>
</div>
</div>

<!-- Mike -->
<div class="large-3 medium-4 small-6 columns">
<div class="team-member" style="min-height:450px;max-height:450px;">
<img src="http://saltydog.com/newstaff/mikeedwards.jpg" class="img-responsive" style="margin: auto;" alt="Member Image" data-selector="img">
<div class="team-details">
<div class="editContent" data-selector=".editContent">
<h4 class="member-name" style="text-align: center;">Mike Edwards</h4>
</div>
<hr>
<div class="editContent" data-selector=".editContent">
<p class="position" style="text-align: center;">Salty Dog Cafe General Manager<br><i class="fa fa-paw"></i>2007</p>
</div>
<div class="editContent" data-selector=".editContent">
<p></p>
</div>
<ul class="social social-dark">
<li><a href="https://www.facebook.com/SaltyDog/" target="facebook" data-selector=".social a"><i class="fa fa-2x fa-facebook"></i></a></li>
<li><a href="mailto:mikeedwardsATsaltydogDOTcom" data-selector=".social a"><i class="fa fa-2x fa-envelope"></i></a></li>
</ul><!-- /.social -->
</div>
</div>
</div> 

<!-- Chris -->
<div class="large-3 medium-4 small-6 columns">
<div class="team-member" style="min-height:450px;max-height:450px;">
<img src="http://saltydog.com/newstaff/chrismarshall.jpg" style="max-height:200px; margin: auto;" class="img-responsive" alt="Member Image" data-selector="img">
<div class="team-details">
<div class="editContent" data-selector=".editContent">
<h4 class="member-name" style="text-align: center;">Chris Marshall</h4>
</div>
<hr>
<div class="editContent" data-selector=".editContent">
<p class="position" style="text-align: center;">Assistant General Manager of the Salty Dog Cafe<br><i class="fa fa-paw"></i>2009</p>
</div>
<div class="editContent" data-selector=".editContent">
<p></p>
</div>
<ul class="social social-dark">
<li><a href="https://www.facebook.com/SaltyDog/" target="facebook" data-selector=".social a"><i class="fa fa-2x fa-facebook"></i></a></li>
<li><a href="mailto:chrismarshallATsaltydogDOTcom" data-selector=".social a"><i class="fa fa-2x fa-envelope"></i></a></li>
</ul><!-- /.social -->
</div>
</div>
</div>

<!-- Lindsey -->
<div class="large-3 medium-4 small-6 columns">
<div class="team-member" style="min-height:450px;max-height:450px;">
<img src="http://saltydog.com/newstaff/lindseystearns.jpg" class="img-responsive" style="margin: auto;" alt="Member Image" data-selector="img">
<div class="team-details" style="padding-right:10px;">
<div class="editContent" data-selector=".editContent">
<h4 class="member-name" style="text-align: center;">Lindsey May Stearns</h4>
</div>
<hr>
<div class="editContent" data-selector=".editContent">
<p class="position" style="text-align: center;">Cruise Coordinator<br><br><i class="fa fa-paw"></i>2009</p>
</div>
<div class="editContent" data-selector=".editContent">
<p></p>
</div>
<ul class="social social-dark">
<li><a href="https://www.facebook.com/SaltyDog/" target="facebook" data-selector=".social a"><i class="fa fa-2x fa-facebook"></i></a></li>
<li><a href="mailto:boatrideATsaltydogDOTcom" data-selector=".social a"><i class="fa fa-2x fa-envelope"></i></a></li>
</ul><!-- /.social -->
</div>
</div>
</div> 


<!-- Tony -->
<div class="large-3 medium-4 small-6 columns">
<div class="team-member" style="min-height:450px;max-height:450px;">
<img src="http://saltydog.com/newstaff/calen.jpg" class="img-responsive" style="margin: auto;" alt="Member Image" data-selector="img">
<div class="team-details" style="padding-right:10px;">
<div class="editContent" data-selector=".editContent">
<h4 class="member-name" style="text-align: center;">Calen Reagin</h4>
</div>
<hr>
<div class="editContent" data-selector=".editContent">
<p class="position" style="text-align: center;">Web Design<br><br><i class="fa fa-paw"></i>2018</p>
</div>
<div class="editContent" data-selector=".editContent">
<p></p>
</div>
<ul class="social social-dark">
<li><a href="https://www.facebook.com/SaltyDog/" target="facebook" data-selector=".social a"><i class="fa fa-2x fa-facebook"></i></a></li>
<li><a href="mailto:calenATsaltydogDOTcom" data-selector=".social a"><i class="fa fa-2x fa-envelope"></i></a></li>
</ul><!-- /.social -->
</div>
</div>
</div>

<!-- Andy -->
<div class="large-3 medium-4 small-6 columns">
<div class="team-member" style="min-height:450px;max-height:450px;">
<img src="http://saltydog.com/newstaff/andyjeffrey.jpg" class="img-responsive" style="margin: auto;" alt="Member Image" data-selector="img">
<div class="team-details" style="padding-right:10px;">
<div class="editContent" data-selector=".editContent">
<h4 class="member-name" style="text-align: center;">Andy Jeffrey</h4>
</div>
<hr>
<div class="editContent" data-selector=".editContent">
<p class="position" style="text-align: center;"> Blue Water Tackle General Manager / Dockmaster<br><i class="fa fa-paw"></i>1991</p>
</div>
<div class="editContent" data-selector=".editContent">
<p></p>
</div>
<ul class="social social-dark">
<li><a href="https://www.facebook.com/SaltyDog/" target="facebook" data-selector=".social a"><i class="fa fa-2x fa-facebook"></i></a></li>
<li><a href="mailto:fishATsaltydogDOTcom" data-selector=".social a"><i class="fa fa-2x fa-envelope"></i></a></li>
</ul><!-- /.social -->
</div>
</div>
</div>  

<!-- Steve -->
<div class="large-3 medium-4 small-6 columns">
<div class="team-member" style="min-height:450px;max-height:450px;">
<img src="http://saltydog.com/newstaff/stevehughes.jpg" class="img-responsive" style="margin: auto;" alt="Member Image" data-selector="img">
<div class="team-details" style="padding-right:10px;">
<div class="editContent" data-selector=".editContent">
<h4 class="member-name" style="text-align: center;">Steve Hughes</h4>
</div>
<hr>
<div class="editContent" data-selector=".editContent">
<p class="position" style="text-align: center;">Director of Screen Print Operations<br><i class="fa fa-paw"></i>1993</p>
</div>
<div class="editContent" data-selector=".editContent">
<p></p>
</div>
<ul class="social social-dark">
<li><a href="https://www.facebook.com/SaltyDog/" target="facebook" data-selector=".social a"><i class="fa fa-2x fa-facebook"></i></a></li>
<li><a href="mailto:ordersATsaltydogDOTcom" data-selector=".social a"><i class="fa fa-2x fa-envelope"></i></a></li>
</ul><!-- /.social -->
</div>
</div>
</div>

<!-- Holly -->
<div class="large-3 medium-4 small-6 columns">
<div class="team-member" style="min-height:450px;max-height:450px;">
<img src="http://saltydog.com/newstaff/hollybingham.jpg" style="max-height:200px; margin: auto;" class="img-responsive" alt="Member Image" data-selector="img">
<div class="team-details" style="padding-right:10px;">
<div class="editContent" data-selector=".editContent">
<h4 class="member-name" style="text-align: center;">Holly Bingham</h4>
</div>
<hr>
<div class="editContent" data-selector=".editContent">
<p class="position" style="text-align: center;">Private Events Coordinator<br><br><i class="fa fa-paw"></i>2016</p>
</div>
<div class="editContent" data-selector=".editContent">
<p></p>
</div>
<ul class="social social-dark">
<li><a href="https://www.facebook.com/SaltyDog/" target="facebook" data-selector=".social a"><i class="fa fa-2x fa-facebook"></i></a></li>
<li><a href="mailto:hollyATsaltydogDOTcom" data-selector=".social a"><i class="fa fa-2x fa-envelope"></i></a></li>
</ul><!-- /.social -->
</div>
</div>
</div>                                                               
                                               
<!-- Brian -->
<div class="large-3 medium-4 small-6 columns">
<div class="team-member" style="min-height:450px;max-height:450px;">
<img src="http://saltydog.com/newstaff/brianstroh.jpg" class="img-responsive" style="margin: auto;" alt="Member Image" data-selector="img">
<div class="team-details" style="padding-right:10px;">
<div class="editContent" data-selector=".editContent">
<h4 class="member-name" style="text-align: center;">Brian Stroh</h4>
</div>
<hr>
<div class="editContent" data-selector=".editContent">
<p class="position" style="text-align: center;">Warehouse &amp; Inventory Operations Manager<br><i class="fa fa-paw"></i>2006</p>
</div>
<div class="editContent" data-selector=".editContent">
<p></p>
</div>
<ul class="social social-dark">
<li><a href="https://www.facebook.com/SaltyDog/" target="facebook" data-selector=".social a"><i class="fa fa-2x fa-facebook"></i></a></li>
<li><a href="mailto:brianATsaltydogDOTcom" data-selector=".social a"><i class="fa fa-2x fa-envelope"></i></a></li>
</ul><!-- /.social -->
</div>
</div>
</div>

<!-- Rob -->


<!-- Christine -->
<div class="large-3 medium-4 small-6 columns">
<div class="team-member" style="min-height:450px;max-height:450px;">
<img src="http://saltydog.com/newstaff/christinevandenberghe.jpg" style="max-height:200px; margin: auto;" class="img-responsive" alt="Member Image" data-selector="img">
<div class="team-details" style="padding-right:10px;">
<div class="editContent" data-selector=".editContent">
<h4 class="member-name" style="text-align: center;">Christine Vandenberghe</h4>
</div>
<hr>
<div class="editContent" data-selector=".editContent">
<p class="position" style="text-align: center;">Human Resources<br><br><i class="fa fa-paw"></i>2013</p>
</div>
<div class="editContent" data-selector=".editContent">
<p></p>
</div>
<ul class="social social-dark">
<li><a href="https://www.facebook.com/SaltyDog/" target="facebook" data-selector=".social a"><i class="fa fa-2x fa-facebook"></i></a></li>
<li><a href="mailto:christineATsaltydogDOTcom" data-selector=".social a"><i class="fa fa-2x fa-envelope"></i></a></li>
</ul><!-- /.social -->
</div>
</div>
</div>
 
 <!-- Renee -->
<div class="large-3 medium-4 small-6 columns">
<div class="team-member" style="min-height:450px;max-height:450px;">
<img src="http://saltydog.com/newstaff/reneetroia.jpg" style="max-height:200px; margin: auto;" class="img-responsive" alt="Member Image" data-selector="img">
<div class="team-details" style="padding-right:10px;">
<div class="editContent" data-selector=".editContent">
<h4 class="member-name" style="text-align: center;">Renée Troia</h4>
</div>
<hr>
<div class="editContent" data-selector=".editContent">
<p class="position" style="text-align: center;">Staff Accountant<br><br><i class="fa fa-paw"></i>2013</p>
</div>
<div class="editContent" data-selector=".editContent">
<p></p>
</div>
<ul class="social social-dark">
<li><a href="https://www.facebook.com/SaltyDog/" target="facebook" data-selector=".social a"><i class="fa fa-2x fa-facebook"></i></a></li>
<li><a href="mailto:reneeATsaltydogDOTcom" data-selector=".social a"><i class="fa fa-2x fa-envelope"></i></a></li>
</ul><!-- /.social -->
<br><br>
</div>
</div>
</div>

 <!-- Jackie -->
<div class="large-3 medium-4 small-6 columns">
<div class="team-member" style="min-height:450px;max-height:450px;">
<img src="http://saltydog.com/newstaff/jackiestillman.jpg" style="max-height:200px; margin: auto;" class="img-responsive" alt="Member Image" data-selector="img">
<div class="team-details" style="padding-right:10px;">
<div class="editContent" data-selector=".editContent">
<h4 class="member-name" style="text-align: center;">Jackie Skillman</h4>
</div>
<hr>
<div class="editContent" data-selector=".editContent">
<p class="position" style="text-align: center;">Ice Cream Manager and Flavor Designer<br><br><i class="fa fa-paw"></i>2005</p>
</div>
<div class="editContent" data-selector=".editContent">
<p></p>
</div>
<ul class="social social-dark">
<li><a href="https://www.facebook.com/SaltyDog/" target="facebook" data-selector=".social a"><i class="fa fa-2x fa-facebook"></i></a></li>
<li><a href="mailto:icecreamATsaltydogDOTcom" data-selector=".social a"><i class="fa fa-2x fa-envelope"></i></a></li>
</ul><!-- /.social -->
</div>
</div>
</div>

 <!-- Captain Phil  -->
<div class="large-3 medium-4 small-6 columns">
<div class="team-member" style="min-height:450px;max-height:450px;">
<img src="http://saltydog.com/newstaff/captain_phil.jpg" style="max-height:200px; margin: auto;" class="img-responsive" alt="Member Image" data-selector="img">
<div class="team-details" style="padding-right:10px;">
<div class="editContent" data-selector=".editContent">
<h4 class="member-name" style="text-align: center;">Phil Smith</h4>
</div>
<hr>
<div class="editContent" data-selector=".editContent">
<p class="position" style="text-align: center;">Salty Dog Cruise Boat Captain<br><br><i class="fa fa-paw"></i>2016</p>
</div>
<div class="editContent" data-selector=".editContent">
<p></p>
</div>
<ul class="social social-dark">
<li><a href="https://www.facebook.com/SaltyDog/" target="facebook" data-selector=".social a"><i class="fa fa-2x fa-facebook"></i></a></li>
<li><a href="#" data-selector=".social a"><i class="fa fa-2x fa-envelope"></i></a></li>
</ul><!-- /.social -->
</div>
</div>
</div>

    
    
<!-- Brittany-->
<div class="large-3 medium-4 small-6 columns">
<div class="team-member" style="min-height:450px;max-height:450px;">
<img src="http://saltydog.com/newstaff/brit.jpg" class="img-responsive" style="margin: auto;" alt="Member Image" data-selector="img">
<div class="team-details" style="padding-right:10px;">
<div class="editContent" data-selector=".editContent">
<h4 class="member-name" style="text-align: center;"> Brittany Jackett</h4>
</div>
<hr>
<div class="editContent" data-selector=".editContent">
<p class="position" style="text-align: center;">Marketing Director<br><br><i class="fa fa-paw"></i>2017</p>
</div>
<div class="editContent" data-selector=".editContent">
<p></p>
</div>
<ul class="social social-dark">
<li><a href="https://www.facebook.com/SaltyDog/" target="facebook" data-selector=".social a"><i class="fa fa-2x fa-facebook"></i></a></li>
<li><a href="mailto:brittanyATsaltydogDOTcom" data-selector=".social a"><i class="fa fa-2x fa-envelope"></i></a></li>
</ul><!-- /.social -->
</div>
</div>
</div>
    
    
    
    <!-- Mackenzie-->
<div class="large-3 medium-4 small-6 columns">
<div class="team-member" style="min-height:450px;max-height:450px;">
<img src="http://saltydog.com/newstaff/mak.jpg" class="img-responsive" style="margin: auto;" alt="Member Image" data-selector="img">
<div class="team-details" style="padding-right:10px;">
<div class="editContent" data-selector=".editContent">
<h4 class="member-name" style="text-align: center;">Mackenzie Moss</h4>
</div>
<hr>
<div class="editContent" data-selector=".editContent">
<p class="position" style="text-align: center;">Online Store Manager<br><br><i class="fa fa-paw"></i>2012</p>
</div>
<div class="editContent" data-selector=".editContent">
<p></p>
</div>
<ul class="social social-dark">
<li><a href="https://www.facebook.com/SaltyDog/" target="facebook" data-selector=".social a"><i class="fa fa-2x fa-facebook"></i></a></li>
<li><a href="mailto:mackenzieATsaltydogDOTcom" data-selector=".social a"><i class="fa fa-2x fa-envelope"></i></a></li>
</ul><!-- /.social -->
</div>
</div>
</div> 
	
	<!-- Patricia -->
<div class="large-3 medium-4 small-6 columns">
<div class="team-member" style="min-height:450px;max-height:450px;">
<img src="http://saltydog.com/newstaff/triciasexton.jpg" style="max-height:200px; margin: auto;" class="img-responsive" alt="Member Image" data-selector="img">
<div class="team-details" style="padding-right:10px;">
<div class="editContent" data-selector=".editContent">
<h4 class="member-name" style="text-align: center;">Patricia Sexton</h4>
</div>
<hr>
<div class="editContent" data-selector=".editContent">
<p class="position" style="text-align: center;">Jake's Cargo Store Manager<br><br><i class="fa fa-paw"></i>2015</p>
</div>
<div class="editContent" data-selector=".editContent">
<p></p>
</div>
<ul class="social social-dark">
<li><a href="https://www.facebook.com/SaltyDog/" target="facebook" data-selector=".social a"><i class="fa fa-2x fa-facebook"></i></a></li>
<li><a href="mailto:cargoATsaltydogDOTcom" data-selector=".social a"><i class="fa fa-2x fa-envelope"></i></a></li>
</ul><!-- /.social -->
</div>
</div>
</div>
  
    
    
    <!-- Steve-->
<div class="large-3 medium-4 small-6 columns">
<div class="team-member" style="min-height:450px;max-height:450px;">
<img src="http://saltydog.com/newstaff/stevetaylor.jpeg" class="img-responsive" style="margin: auto;" alt="Member Image" data-selector="img">
<div class="team-details" style="padding-right:10px;">
<div class="editContent" data-selector=".editContent">
<h4 class="member-name" style="text-align: center;">Steve Taylor</h4>
</div>
<hr>
<div class="editContent" data-selector=".editContent">
<p class="position" style="text-align: center;">South Beach T-shirt Shop Manager<br><br><i class="fa fa-paw"></i>2009</p>
</div>
<div class="editContent" data-selector=".editContent">
<p></p>
</div>
<ul class="social social-dark">
<li><a href="https://www.facebook.com/SaltyDog/" target="facebook" data-selector=".social a"><i class="fa fa-2x fa-facebook"></i></a></li>
<li><a href="mailto:t-shirtATsaltydogDOTcom" data-selector=".social a"><i class="fa fa-2x fa-envelope"></i></a></li>
</ul><!-- /.social -->
</div>
</div>
</div>
	
	
	
	<!-- Erin-->
<div class="large-3 medium-4 small-6 columns">
<div class="team-member" style="min-height:450px;max-height:450px;"><span class="team-member" style="min-height:450px;max-height:450px;"><img src="http://saltydog.com/newstaff/erinsoja.jpeg" class="img-responsive" style="margin: auto;" alt="Member Image" data-selector="img"></span>
  <div class="team-details" style="padding-right:10px;">
  <div class="editContent" data-selector=".editContent">
<h4 class="member-name" style="text-align: center;">Erin Soja</h4>
</div>
<hr>
<div class="editContent" data-selector=".editContent">
<p class="position" style="text-align: center;">Arrow Road T-shirt Factory Manager<br><br><i class="fa fa-paw"></i>2017</p>
</div>
<div class="editContent" data-selector=".editContent">
<p></p>
</div>
<ul class="social social-dark">
<li><a href="https://www.facebook.com/SaltyDog/" target="facebook" data-selector=".social a"><i class="fa fa-2x fa-facebook"></i></a></li>
<li><a href="mailto:arrowATsaltydogDOTcom" data-selector=".social a"><i class="fa fa-2x fa-envelope"></i></a></li>
</ul><!-- /.social -->
</div>
</div>
</div>
	
	
	<!-- Inertia-->
<div class="large-3 medium-4 small-6 columns">
<div class="team-member" style="min-height:450px;max-height:450px;"><span class="team-member" style="min-height:450px;max-height:450px;"><img src="http://saltydog.com/newstaff/Inertia.jpeg" class="img-responsive" style="margin: auto;" alt="Member Image" data-selector="img"></span>
  <div class="team-details" style="padding-right:10px;">
  <div class="editContent" data-selector=".editContent">
<h4 class="member-name" style="text-align: center;">Inertia Brown</h4>
</div>
<hr>
<div class="editContent" data-selector=".editContent">
<p class="position" style="text-align: center;">Tanger 2 T-shirt Factory Manager<br><br><i class="fa fa-paw"></i>2015</p>
</div>
<div class="editContent" data-selector=".editContent">
<p></p>
</div>
<ul class="social social-dark">
<li><a href="https://www.facebook.com/SaltyDog/" target="facebook" data-selector=".social a"><i class="fa fa-2x fa-facebook"></i></a></li>
<li><a href="mailto:tangerATsaltydogDOTcom" data-selector=".social a"><i class="fa fa-2x fa-envelope"></i></a></li>
</ul><!-- /.social -->
</div>
</div>
</div>
	
	<!-- Terrell-->
<div class="large-3 medium-4 small-6 columns">
<div class="team-member" style="min-height:450px;max-height:450px;">
<img src="http://saltydog.com/newstaff/terrell.jpg" class="img-responsive" style="margin: auto;" alt="Member Image" data-selector="img">
<div class="team-details" style="padding-right:10px;">
<div class="editContent" data-selector=".editContent">
<h4 class="member-name" style="text-align: center;">Terrell Scott</h4>
</div>
<hr>
<div class="editContent" data-selector=".editContent">
<p class="position" style="text-align: center;">Kitchen Manager<br><br><i class="fa fa-paw"></i>2009</p>
</div>
<div class="editContent" data-selector=".editContent">
<p></p>
</div>
<ul class="social social-dark">
<li><a href="https://www.facebook.com/SaltyDog/" target="facebook" data-selector=".social a"><i class="fa fa-2x fa-facebook"></i></a></li>
<li><a href="mailto:bobATsaltydogDOTcom" data-selector=".social a"><i class="fa fa-2x fa-envelope"></i></a></li>
</ul><!-- /.social -->
</div>
</div>
</div>
	
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
              
<script>
jQuery(document).ready(function($){
	$('.social li a').each(function(){
		$(this).on('click',function(){
			var hr = $(this).attr('href');
			$(this).attr('href',hr.replace(/AT/,'@').replace(/DOT/,'.'));
		})
	})
})
</script>

				    <script>
jQuery(document).ready(function($){
	$('.members').each(function(){
var teamW = $(this).width();
//$(this).css('height',teamW);
	});
});
</script>

 </div>
 
 
<!--<div id="staff" style="margin-top:20px;">
 <?php
 /*
		$args = array(
			'post_type' => 'team',
			'posts_per_page'=>-1,
			'order'=>'ASC',
		);
		$team = new WP_Query( $args );
		if( $team->have_posts() ) {
			while( $team->have_posts() ) {
				$team->the_post();
				?>
                <?php
				$img = get_the_post_thumbnail();
				?>
                <style>
				@media only screen and (max-width:500px){
					.fa-external-link{display:none;}
				}
				.stf img{
					min-width:141px;
				}
				</style>



<div class="large-2 medium-3 small-4 xsmall-6 columns">

<?php the_post_thumbnail('full');?>
<div style="width:100%;text-align:center;font-size:14px;color:#3b3b3b;line-height:20px;display:block;padding-top:10px;font-family:arial,helvetica,sans-serif;height:80px;overflow:hidden;">
<a href="<?php echo the_field('team_email')?>" class="email"><span class="fn"><?php echo the_field('team_name');?></span><i class="fa fa-external-link" style="padding-left:15px;"></i></a><br>
<div style="font-size:12px;font-style:italic;color:#555;line-height:14px;font-family:arial,helvetica,sans-serif;"><?php echo the_field('team_position');?></div>
<div style="clear:both;"></div>
</div>
</div>




				<?php
			}
		}
		
		else {
			
		}
	*/?>
    <script>
jQuery(document).ready(function($){
	$('.members').each(function(){
var teamW = $(this).width();
//$(this).css('height',teamW);
	});
});
</script>
</ul>
 </div>-->

 <div style="clear:both;"></div>
 <div style="clear:both;"></div>
 <div style="width:97.48%;height:6px;background:url(<?php bloginfo('stylesheet_directory');?>/img/header-bg.png) repeat-x;display:block;margin:30px auto 0"></div>
 <div style="width:97.48%;background:#eee;display:block;margin:0 auto;padding:40px 0;">
 <div class="small-12 medium-12 large-9 columns">
 	<div style="float:left;font-size:12px;padding:0 0 10px;font-family:helvetica,arial,sans-serif;">
 		User's IP: <?php echo $_SERVER["REMOTE_ADDR"];?>
 	</div>
 	<div style="clear:both;"></div>
 <?php //echo do_shortcode('[contact-form-7 id="7442" title="Contact Form2"]');?>
 


<form enctype="multipart/form-data" method="post" name="contactform" id="contactform" action="http://saltydog.com/contact_send.php">

	<div id="ninja_forms_form_3_all_fields_wrap" class="ninja-forms-all-fields-wrap">
		<div class="ninja-forms-required-items">Fields marked with a * are required.</div>
			<div class="field-wrap text-wrap label-inside" id="ninja_forms_field_38_div_wrap">
				<input style="width:100%;" id="name" name="name" type="text" placeholder="Your Name" >
			</div>

			<div class="field-wrap text-wrap label-inside" id="ninja_forms_field_38_div_wrap">
				<input style="width:100%;" id="email" name="email" type="email" placeholder="Your Email" >
			</div>

			<div class="field-wrap text-wrap label-inside" id="ninja_forms_field_38_div_wrap">
				<input style="width:100%;" id="subject" name="subject" type="text" placeholder="Subject" >
			</div>

			<div class="field-wrap text-wrap label-inside" id="ninja_forms_field_38_div_wrap">
				<textarea style="width:100%;" rows="5" id="message" name="message" placeholder="Message" ></textarea>
			</div>			

			<div class="field-wrap spam-wrap label-above">
				<label for="ninja_forms_field_42" id="ninja_forms_field_42_label" class="">Let's make sure you're not a robot. What is 5 + 2?</label>
				<input style="width:100%;" required id="spam" name="spam" type="text" >
			</div>

			<div class="field-wrap text-wrap label-inside" id="ninja_forms_field_38_div_wrap">
				<input type="submit" value="Submit">
			</div>		
    	</div>

</form>

 </div>
 
 <div class="small-12 medium-12 large-3 columns" style="text-align:center;">
  <ul id="numbers">
 <li><span>Information</span>843-671-CAFE</li>
 <li><span>Employment Opportunities</span><a href="http://saltydog.com/employment">Visit Web Page</a></li>
 <li><span>The Salty Dog Cafe</span>843-671-5199</li>
 <li><span>The Wreck of the Salty Dog Cafe</span>843-671-SEAS</li>
 <li><span>Land's End Tavern</span>843-671-5456</li>
 <li><span>Jake's Salty Dog Pizza</span>843-671-2020</li>
 <li><span>Salty Dog Ice Cream</span>843-683-6459</li>
 <li><span>Salty Dog T-Shirt Shop</span>843-671-2232</li>
 <li><span>Salty Dog T-Shirt Factory</span>843-842-6331</li>
 <li><span>Jake's Cargo</span>843-671-5022</li>
 <li><span>Salty Dog Online Store</span>877-725-8936</li>
  <div style="clear:both;"></div>
 </ul>
 </div>
 <div style="clear:both;"></div>
 </div>
 <div style="width:97.48%;height:6px;background:url(<?php bloginfo('stylesheet_directory');?>/img/foot-bg.png) repeat-x;display:block;margin:0 auto 0"></div>
 

  </div>
  <style>
  .numbers{padding-bottom:10px;margin-bottom:10px;border-bottom:1px dotted #ccc;}
  input[type="text"],input[type="email"],textarea{
	  padding:10px;
	  border-radius:0;
	  border:1px solid #ccc;
	  box-shadow:none;
  }
  .numberBox{
	  text-align:center;line-height:20px;padding-top:30%;padding-left:20px;padding-right:20px;
  }
  </style>
    <div style="clear:both;"></div>
  </div> <!-- end .x-main.x-container-fluid.max.width.offset -->
  </div>
  <script>
jQuery(document).ready(function($){
	if( $(window).width() > 600){
$.backstretch("<?php echo bloginfo('stylesheet_directory');?>/img/eventbg.jpg");
	}
});
</script>

<script>
jQuery(document).ready(function($){
var touchTime;
$('.eml').each(function(){
var eml = $('span.fn a',this).attr('href');	
$(this).on('click touchstart mousedown',function(){
touchTime = new Date();
})
$(this).on('click touchend mouseup',function(){
var diff = new Date() - touchTime;
if (diff < 100){
	window.location.href = eml;
}
})
})
})
</script>

<?php get_footer(); ?>