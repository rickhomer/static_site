<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="not-ie" lang="en"><!-- InstanceBegin template="/Templates/HOMER3.dwt" codeOutsideHTMLIsLocked="false" -->
<!--<![endif]-->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
<!-- InstanceBeginEditable name="doctitle" -->
<meta name="description" content="HOMER software for microgrid and distributed generation power system design and optimization" />
<meta name="keywords" content="renewable energy, microgrid, distributed generation, off-grid power systems"/>
<title>Microgrid Market Access Services Through HOMER Energy</title>
<!-- InstanceEndEditable -->
<!--Fav and touch icons-->
<link rel="shortcut icon" href="img/icons/favicon.ico">
<link rel="apple-touch-icon" href="img/icons/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/icons/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/icons/apple-touch-icon-114x114.png">
<!--google web font-->
<link href='http://fonts.googleapis.com/css?family=Raleway:400,600,700' rel='stylesheet' type='text/css'>
<!--style sheet-->
<link rel="stylesheet" media="screen" href="css/bootstrap.css"/>
<link rel="stylesheet" media="screen" href="css/bootstrap-responsive.css"/>
<link rel="stylesheet" media="screen" href="css/bootstrap-override.css"/>
<link rel="stylesheet" media="screen" href="css/style.css"/>
<link rel="stylesheet" media="screen" href="css/custom.css">
<link rel="stylesheet" media="screen" href="css/custom2.css"/>
<link href="css/zozo.tabs.min.css" rel="stylesheet">

<!--Google analytics-->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-9723743-1', 'auto');
  ga('send', 'pageview');

</script>

<!--jquery libraries / others are at the bottom-->
<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
<script src="js/modernizr.js" type="text/javascript"></script>
<!--elastislide carousel script starts-->
<link rel="stylesheet" media="screen" href="css/elastislide.css"/>
<script type="text/javascript" src="js/jquery.elastislide.js"></script>
<script type="text/javascript">
$(document).ready(function() {
$('#carousel').elastislide({
		imageW 		: 300,
		margin		: 20,
		border		: 0,
		easing		: 'easeInBack'
});
});
</script>
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
<!-- InstanceParam name="Marketing" type="boolean" value="false" -->
<!-- InstanceParam name="Subheader" type="boolean" value="true" -->

<!--elastislide carousel script ends-->

<!--prettyphoto scripts starts-->
<link rel="stylesheet" media="screen" href="css/prettyPhoto.css"/>
<script src="js/jquery.prettyPhoto.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function() {
		$('a[data-rel]').each(function() {
		$(this).attr('rel', $(this).data('rel'));
		});
		$("a[rel^='prettyPhoto[gallery1]']").prettyPhoto({
		animation_speed: 'fast',
		slideshow: 5000,
		autoplay_slideshow: false,
		opacity: 0.80,
		show_title: false,
		theme: 'pp_default', /* light_rounded / dark_rounded / light_square / dark_square / facebook */
		overlay_gallery: false,
		social_tools: false,
		changepicturecallback: function(){
		var $pp = $('.pp_default');
		if( parseInt( $pp.css('left') ) < 0 ){
		$pp.css('left', 0 );
		}
		}
		});
});
</script>
<!--prettyphoto scripts ends-->



<!-- zozo tabs scripts -->
<script src="js/zozo.tabs.min.js"></script>
<!-- zozo tabs end -->



</head>
<body>

<!-- header starts
================================================== -->
<section id="header" class="clearfix">
	<div class="container">
    	<div class="row">

      <!--logo starts-->
      		<div class="span4 logo"><a href="index.html"><img src="img/HOMERwttr300x90.png" alt="HOMER Energy Logo"></a></div>
      <!--logo ends-->

      		<div class="span8 clearfix">

        <!--login section-->
        		<a class="btn btn-info floatright" rel="nofollow" data-method="delete" href="http://users.homerenergy.com" target="_blank">Login</a>

        <!--login ends-->

        <!--menu starts-->
        			<div id="smoothmenu" class="ddsmoothmenu">
        				<ul>
            				<li><a href="index.html" class="selected">Home</a></li>
             				<li><a href="software.html">Products</a>
                                <ul>
                                    <!--<li><a href="../HOMER_quickstart.html">HOMER Quickstart</a></li>
                                    <li><a href="../HOMER_explorer.html">HOMER Explorer</a></li>-->
                                    <li><a href="HOMER_pro.html">HOMER Pro</a>
										<ul><li><a href="HOMER_pro.html">Information</a></li>
											<li><a href="pro-pricing.html">Pricing</a></li>
											<li><a href="HOMER-Pro-features.html">Features</a></li>
                                             <li><a href="HOMER-testimonials.html">Testimonials</a></li>
										</ul>

									</li>
                                    <!--<li><a href="../compare.html">Compare all</a></li>-->

                                    <li><a href="HOMER_customization.html">Custom HOMER versions</a></li>
                                    <!--<li><a href="#">Retired products</a>
                                   			<ul>
                                    			<li><a href="../HOMER_2.html">HOMER 2</a></li>
                                   				<li><a href="../HOMER_legacy.html">HOMER Legacy</a></li>
                                     		</ul>
                                     </li>-->
                                </ul>
            				</li>
             				<li><a href="services.html">Services</a>
              					<ul>
                                    <li><a href="HOMER_consulting_analysis.html">Consulting</a></li>
                                    <li><a href="HOMER_training.html">HOMER Training</a></li>
                                    <li><a href="microgrid_power_system_design_services.html">Microgrid Power System Design Services</a></li>
                                    <li><a href="microgrid-market-access-services.html">Market Access Services</a></li>
								</ul>
							</li>
                			<li><a href="support.html">Support</a>
                                <ul>
                                    <li><a href="pro-faq.html">Frequently asked Questions</a></li>
                                    <li><a href="http://usersupport.homerenergy.com" target="_blank">Support Portal</a></li>
                                    <li><a href="http://usersupport.homerenergy.com" target="_blank">Knowledgebase</a></li>
                                    <li><a href="http://homerusersgroup.ning.com" target="_blank">Community Forum</a></li>
                                    <li><a href="HOMER_training.html">HOMER Training</a></li>
                                    <!--<li><a href="../HOMER-getting-started-guide.html">Getting Started Guide</a></li>-->
                                    <li><a href="HOMER-documentation.html">HOMER Documentation</a></li>
                                </ul>
                			</li>
             				<li><a href="connect.html">Connect</a>
              					<ul>
                                    <li><a href="http://microgridnews.com/industry-partners/">Industry Partners</a></li>
                                    <li><a href="http://microgridnews.com/homer-energy-component-partners/">Component Partners</a></li>
                                    <li><a href="http://microgridnews.com/category/events/homer-events/">Events</a></li>
                                    <li><a href="http://homerusersgroup.ning.com" target="_blank">Online User Group</a></li>
                                    <li><a href="microgrid-market-access-services.html">Market Access Services</a></li>
								</ul>
							</li>

                            <li><a href="learn-more-about-HOMER-Energy.html">Learn More</a>
                                <ul>
                                    <!--<li><a href="../microgrids.html">Why microgrids?</a> </li>-->
                                    <li><a href="http://microgridnews.com/category/homer-energy/blog-opinion/" target="_blank">Blog</a> </li>
                                    <li><a href="http://microgridnews.com/homer-energy-bibliography/">HOMER Bibliography</a> </li>
                                    <li><a href="http://microgridnews.com/microgrid-white-papers/">White Papers</a></li>
                                    <li><a href="http://microgridnews.com/homer-energy-user-presentations/">Presentations</a></li>
                                    <li><a href="HOMER-testimonials.html">Testimonials</a></li>
                                </ul>
                            </li>
                            <li><a href="company.html">Company</a>
                                <ul>
                                    <li><a href="contact.html">Contact</a></li>
                                    <li><a href="team.html">Team</a></li>
                                    <li><a href="http://microgridnews.com/homer-energy-news/">In the News</a></li>
                                    <li><a href="http://microgridnews.com/category/homer-energy/press-releases/">Press Releases</a></li>
                                    <li><a href="http://microgridnews.com/homer-energy-newsletters/">Newsletters</a></li>
                                    <li><a href="jobs.html">Jobs</a></li>
                                </ul>
                            </li>
                        </ul>
        			</div>
        <!--menu ends-->

      </div>
    </div>
  </div>
</section>
<!-- header ends
================================================== -->


<!-- header-btm starts
================================================== -->
<!-- InstanceBeginEditable name="EditRegion5" -->
<section id="header-btm" class="clearfix">
  <div class="container">
    <div class="row">
    <div class="span12">
      <h4 class="heading-icon"> <img src="img/icons/heading-icon-1.png" width="40" height="40" alt="icon" class="icon-small-bg">Microgrid Market Access Services</h4>
    </div>

    </div>
  </div>
</section>
<!-- InstanceEndEditable -->
<!-- header-btm ends
================================================== -->

<!-- content starts
================================================== -->
<section id="content" class="clearfix">
<!--slider-bg starts-->

<!--slider-bg ends-->
  <div class="container">
    <!--features starts-->
    <!-- InstanceBeginEditable name="Main" -->

    <script language="javascript" type="text/javascript">
$(document).ready(function(){
	document.getElementById('oid').value = '00D61000000ZrBq';

    var $newDiv = jQuery("<div> </div>");
    var $newInput = jQuery("<input type='checkbox' style='margin-top:12px;'>");
        $newInput
        .attr("name", "hvcscrib")
        .attr("id", "hvcscrib")
        .attr("value", "Yes")
        .attr("class", "nowidth")
        jQuery("#hvm").append($newInput);

    $('#MyForm').submit(function() {
    var captcha = $('#hvcscrib').is(":checked");

    if(!captcha){
       alert('Please check the box you are human..');$('#hvcscrib').focus();return false;
    }
    if(captcha){ return true;}

    });
});

</script>


<div class="span10">
  <p style="font-style:italic"><strong>Because of its reputation as a neutral platform for microgrid design, and HOMER&rsquo;s large and growing user base, HOMER Energy is the microgrid starting point &mdash; your unique resource for reaching innovators wanting clean, reliable, cost-effective power</strong>.</p>
    <p>We started the Microgrid Market Access Services program because of strong marketplace demand. Finding this dispersed but growing market is the most important thing you must do to succeed. With over 100,000 users in 193 countries, HOMER is the  undisputed leader in microgrid planning software. The following programs and options are available to get your name in front of your customers and partners:</p>
<table class="table">
  <tr>
    <td width="35%"><strong>Component  Library</strong></td>
    <td width="65%">Display your products within the HOMER software</td>
  </tr>
  <tr>
    <td><strong>Webinars</strong></td>
    <td>Reach  thousands of participants with our hosted webinars</td>
  </tr>
  <tr>
    <td><strong>Newsletter and Website Advertising</strong></td>
    <td>Broadcast your message to over 55,000 participants  in the microgrid market. Tens of thousands of people in your target market will  read your banners in our newsletters and websites, generating thousands of  unique click-throughs each month</td>
  </tr>
  <tr>
    <td><strong>HOMER Analysis Certification</strong></td>
    <td>Get an official stamp of approval for your HOMER  models</td>
  </tr>
  <tr>
    <td><strong>Conferences &amp; Workshops</strong></td>
    <td>Event sponsors have direct, unique access to people  and organizations designing microgrids</td>
  </tr>
  <tr>
    <td><strong>Whitepapers</strong></td>
    <td>Distribute your whitepapers to our network</td>
  </tr>
  <tr>
    <td><strong>Market Intelligence Reports</strong></td>
    <td>Benefit from our unique insight and experience on  microgrids and the marketplace surrounding them</td>
  </tr>
</table>
    <p>Call +1-720-565-4046 or fill out the form below to learn how you can access the customers who need your products or services. </p>
    <fieldset >
        <legend class="small-width">Send us a Message</legend>
		<form action="submit-form.php" method="post" id="MyForm">
            <input type=hidden name="oid" id="oid">
            <input type=hidden name="retURL" value="http://www.homerenergy.com">
            <input type=hidden name="lead_source" value="Website">
<input type=hidden name="rating" value="Hot">
          <input type=hidden id="00N6100000Aw7Zm" name="Form_Name" value="MarketAccess">

            <!--  ----------------------------------------------------------------------  -->
            <!--  NOTE: These fields are optional debugging elements. Please uncomment    -->
            <!--  these lines if you wish to test in debug mode.                          -->
            <!--  <input type="hidden" name="debug" value=1>                              -->
            <!--  <input type="hidden" name="debugEmail" value="will@homerenergy.com">    -->
            <!--  ----------------------------------------------------------------------  -->

            <label for="first_name">First Name</label>
            <input  id="first_name" maxlength="40" name="first_name" size="20" type="text" required/>
            <br>
            <label for="last_name">Last Name</label>
            <input  id="last_name" maxlength="80" name="last_name" size="20" type="text" required/>
            <br>
            <label for="email">Email</label>
            <input  id="email" maxlength="80" name="email" size="20" type="text" required/>
            <br>
            <label for="company">Organization</label>
            <input  id="company" maxlength="40" name="company" size="20" type="text" />
            <br>
            <label for="country">Country</label>
            <input  id="country" maxlength="40" name="country" size="20" type="text" />
            <br>
            <label for="phone">Phone</label>
            <input  id="phone" maxlength="40" name="phone" size="20" type="text" />
            <br><br>
            <label for="description">Message</label>
            <textarea name="description" required></textarea>
            <br>
             <!-- Captcha//-->
					<div class="form-group" id="hvm">
					    <label for="description">Please check this box if not a bot:</label>
					</div>
            <!-- Captcha //-->
            <!-- Captcha//-->
        <?

echo recaptcha_get_html($publickey);

         ?>
        <!-- Captcha //-->
            <br>
            <input type="submit" name="submit" class="mybtn">
          </form>
</fieldset>
</div>
    <!-- InstanceEndEditable -->
    <!--box ends-->
  </div>
</section>
<!-- content ends
================================================== -->

<!-- footer starts
================================================== -->
<footer id="footer" class="clearfix">
  <div class="container">

    <!--row starts-->
    <div class="row">

      <!--column one / social icon list starts-->
      <div class="span2">
        <ul class="social clearfix">
          <li><a href="http://linkedin.com/company/homer-energy" target="_blank"><img src="img/icons/social-icon-linkedin.png" width="28" height="28" alt="icon"></a></li>
          <li><a href="http://facebook.com/homerenergy" target="_blank"><img src="img/icons/social-icon-facebook.png" width="28" height="28" alt="icon"></a></li>
			<li><a href="http://twitter.com/homerenergy" target="_blank"><img src="img/icons/social-icon-twitter.png" width="28" height="28" alt="icon"></a></li>
        </ul>
      </div>
      <!--column one ends-->

      <!--column two starts-->
      <div class="span2 text-center"> Follow on Twitter
        <h5><a href="http://twitter.com/homerenergy" target="_blank">@homerenergy</a></h5>
      </div>
      <!--column two ends-->

      <!--column three / twitter feed starts-->
<!--  <div class="span8">
        <div class="twitter"></div>

      </div>   -->
      <!--column three / twitter feed ends-->

    </div>
    <!--row ends-->

    <!--spacer here-->
    <div class="spacer-30px"></div>

    <!--row starts-->
    <div class="row">

      <!--column one starts-->
      <div class="span4">
        <p> <img src="http://www.homerenergy.com/img/HOMERwttr200x60.png" alt="HOMER Energy logo"></p>
        <p class="footer-text">HOMER Energy LLC is the world’s leading microgrid modeling software company. The HOMER (Hybrid Optimization of Multiple Energy Resources) microgrid software navigates the complexities of building cost effective and reliable microgrids that combine traditionally generated and renewable power, storage, and load management. With over 120,000 users in 193 countries, HOMER is the established global leader for microgrid design optimization and feasibility, and HOMER Energy is a nexus for the microgrid market.</p>
       </div>
      <!--column one ends-->

      <!--column two starts-->
      <div class="span4">
        <h5>Top Content</h5>
        <ul class="list-unstyled">
          <li><a href="http://microgridnews.com/microgrid-value-propositions/" target="_blank"><img src="http://www.homerenergy.com/img/microgrid-market-growth.jpg" width="70" alt="Microgrid Market Growth"></a>
            <h6>Microgrid Value Propositions</h6>
            <span>123 Jan 2012 | <a href="http://microgridnews.com/microgrid-value-propositions/" target="_blank">by Peter Lilienthal</a></span> </li>
          <li><a href="http://microgridnews.com/how-to-classify-microgrids-setting-the-stage-for-a-distributed-generation-energy-future/" target="_blank"><img src="http://www.homerenergy.com/img/scaling_microgrids.png" alt="Scaling Microgrids"/></a>
            <h6>Classifying Microgrids</h6>
            <span>2 Apr 2013 | <a href="http://microgridnews.com/how-to-classify-microgrids-setting-the-stage-for-a-distributed-generation-energy-future/" target="_blank">by Peter Lilienthal</a></span> </li>
          <li><a href="http://microgridnews.com/the-problem-with-100-renewable-energy/" target="_blank"><img src="http://www.homerenergy.com/img/solar-photovoltaics-sunrise.jpg" width="70" alt="Solar PV cells with sunrise"></a>
            <h6>100% Renewable Energy Challenges</h6>
            <span>24 Apr 2013 | <a href="http://microgridnews.com/the-problem-with-100-renewable-energy/" target="_blank">by Peter Lilienthal</a></span> </li>
        </ul>
      </div>
      <!--column two ends-->

      <!--column three starts-->
      <div class="span4">
        <h5>Get in touch</h5>
        <ul class="list-info">
          <li><img src="http://www.homerenergy.com/img/icons/icon-18-address.png" alt="icon" style="margin-bottom:30px;">HOMER Energy<br/>
            1790 30th St, Suite 100<br/>
            Boulder, CO 80301 USA </li>
          <li><img src="http://www.homerenergy.com/img/icons/icon-18-phone.png" alt="icon">+(1) 720-565-4046</li>
          <li><img src="http://www.homerenergy.com/img/icons/icon-18-mail.png" alt="icon"><a href="http://homerenergy.com/contact.html">Contact Us</a></li>
         <!-- <li><img src="http://www.homerenergy.com/img/icons/icon-18-skype.png" alt="icon" class="mar-btm"><a href="#">http://skype.com/skypename</a></li>-->
        </ul>
      </div>
      <!--column three ends-->

    </div>
    <!--row ends-->

  </div>
</footer>
<!-- footer ends
================================================== -->


<!--other jqueries required-->
<!-- copyright starts
================================================== -->
<section id="copyright" class="clearfix">
  <div class="container">
    <div class="row">
      <div class="span12">
        <p> © Copyright 2014-2015 HOMER Energy LLC</p>

        <!--copyright menu starts-->
        <ul class="copyright-menu">
          <li><a href="http://www.homerenergy.com/index.html">Home</a></li>
          <li><a href="http://usersupport.homerenergy.com" target="_blank">Support</a></li>
          <li><a href="http://blog.homerenergy.com" target="_blank">Blog</a></li>
          <li><a href="http://www.homerenergy.com/sitemap.html">Site Map</a></li>
          <li><a href="http://www.homerenergy.com/contact.html">Contact</a></li>
          <li><a href="http://www.homerenergy.com/privacy.html">Privacy</a></li>
          <li><a href="http://www.homerenergy.com/terms-of-use.html">Terms of Use</a></li>
        </ul>
        <!--copyright menu ends-->

      </div>
    </div>
  </div>
</section>
<!-- copyright ends
================================================== -->

<script src="js/bootstrap.js" type="text/javascript" ></script>
<script src="js/ddsmoothmenu.js" type="text/javascript" ></script>
<script src="twitter/twitter.js" type="text/javascript" ></script>
<script src="js/jquery.easing.1.3.js" type="text/javascript" ></script>
<script src="js/custom.js" type="text/javascript" ></script>
<script src="js/comparetable.js" type="text/javascript"></script>
</body>
<!-- InstanceEnd --></html>
