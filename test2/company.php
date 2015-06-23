<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

<meta charset="utf-8" />
<title>ASN Informatics - A Service Network </title>
<meta name="description" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<link media="screen" charset="utf-8" rel="stylesheet" href="css/base.css" />
<link media="screen" charset="utf-8" rel="stylesheet" href="css/skeleton.css" />
<link media="screen" charset="utf-8" rel="stylesheet" href="css/layout.css" />
<link media="screen" charset="utf-8" rel="stylesheet" href="css/child.css" />
<link rel="stylesheet" href="css/animate.min.css" type="text/css" media="screen" charset="utf-8" />
<link rel="stylesheet" href="css/jquery.onebyone.css" type="text/css" media="screen" charset="utf-8" />
<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" charset="utf-8" />
<!--[if (IE 6)|(IE 7)]>
    <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen" />
<![endif]-->
<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>    <![endif]-->
	<style>
	#menu, #menu ul {
		margin: 0;
		padding: 0;
		list-style: none;
	}
	
	#menu {
		width: 818px;
		margin: 17px auto;
		border: 1px solid #222;
		background-color: #111;
		background-image: -moz-linear-gradient(#444, #111); 
		background-image: -webkit-gradient(linear, left top, left bottom, from(#444), to(#111));	
		background-image: -webkit-linear-gradient(#444, #111);	
		background-image: -o-linear-gradient(#444, #111);
		background-image: -ms-linear-gradient(#444, #111);
		background-image: linear-gradient(#444, #111);
		-moz-border-radius: 6px;
		-webkit-border-radius: 6px;
		border-radius: 6px;
		-moz-box-shadow: 0 1px 1px #777, 0 1px 0 #666 inset;
		-webkit-box-shadow: 0 1px 1px #777, 0 1px 0 #666 inset;
		box-shadow: 0 1px 1px #777, 0 1px 0 #666 inset;
			padding-top:0;position:relative;

	}
	
	#menu:before,
	#menu:after {
		content: "";
		display: table;
	}
	
	#menu:after {
		clear: both;
	}
	
	#menu {
		zoom:1;
	}
	
	#menu li {
		float: left;
		border-right: 1px solid #222;
		-moz-box-shadow: 1px 0 0 #444;
		-webkit-box-shadow: 1px 0 0 #444;
		box-shadow: 1px 0 0 #444;
		position: relative;
	}
	
	#menu a {
		float: left;
		padding: 12px 30px;
		color: #999;
		text-transform: uppercase;
		font: bold 12px Arial, Helvetica;
		text-decoration: none;
		text-shadow: 0 1px 0 #000;
	}
	
	#menu li:hover > a {
		color: #fafafa;
	}
	
	*html #menu li a:hover { /* IE6 only */
		color: #fafafa;
	}
	
	#menu ul {
		margin: 20px 0 0 0;
		_margin: 0; /*IE6 only*/
		opacity: 0;
		visibility: hidden;
		position: absolute;
		top: 38px;
		left: 0;
		z-index: 1;    
		background: #444;
		background: -moz-linear-gradient(#444, #111);
		background-image: -webkit-gradient(linear, left top, left bottom, from(#444), to(#111));
		background: -webkit-linear-gradient(#444, #111);    
		background: -o-linear-gradient(#444, #111);	
		background: -ms-linear-gradient(#444, #111);	
		background: linear-gradient(#444, #111);
		-moz-box-shadow: 0 -1px rgba(255,255,255,.3);
		-webkit-box-shadow: 0 -1px 0 rgba(255,255,255,.3);
		box-shadow: 0 -1px 0 rgba(255,255,255,.3);	
		-moz-border-radius: 3px;
		-webkit-border-radius: 3px;
		border-radius: 3px;
		-webkit-transition: all .2s ease-in-out;
		-moz-transition: all .2s ease-in-out;
		-ms-transition: all .2s ease-in-out;
		-o-transition: all .2s ease-in-out;
		transition: all .2s ease-in-out;  
	}

	#menu li:hover > ul {
		opacity: 1;
		visibility: visible;
		margin: 0;
	}
	
	#menu ul ul {
		top: 0;
		left: 150px;
		margin: 0 0 0 20px;
		_margin: 0; /*IE6 only*/
		-moz-box-shadow: -1px 0 0 rgba(255,255,255,.3);
		-webkit-box-shadow: -1px 0 0 rgba(255,255,255,.3);
		box-shadow: -1px 0 0 rgba(255,255,255,.3);		
	}
	
	#menu ul li {
		float: none;
		display: block;
		border: 0;
		_line-height: 0; /*IE6 only*/
		-moz-box-shadow: 0 1px 0 #111, 0 2px 0 #666;
		-webkit-box-shadow: 0 1px 0 #111, 0 2px 0 #666;
		box-shadow: 0 1px 0 #111, 0 2px 0 #666;
	}
	
	#menu ul li:last-child {   
		-moz-box-shadow: none;
		-webkit-box-shadow: none;
		box-shadow: none;    
	}
	
	#menu ul a {    
		padding: 10px;
		width: 130px;
		_height: 10px; /*IE6 only*/
		display: block;
		white-space: nowrap;
		float: none;
		text-transform: none;
	}
	
	#menu ul a:hover {
		background-color: #0186ba;
		background-image: -moz-linear-gradient(#04acec,  #0186ba);	
		background-image: -webkit-gradient(linear, left top, left bottom, from(#04acec), to(#0186ba));
		background-image: -webkit-linear-gradient(#04acec, #0186ba);
		background-image: -o-linear-gradient(#04acec, #0186ba);
		background-image: -ms-linear-gradient(#04acec, #0186ba);
		background-image: linear-gradient(#04acec, #0186ba);
	}
	
	#menu ul li:first-child > a {
		-moz-border-radius: 3px 3px 0 0;
		-webkit-border-radius: 3px 3px 0 0;
		border-radius: 3px 3px 0 0;
	}
	
	#menu ul li:first-child > a:after {
		content: '';
		position: absolute;
		left: 40px;
		top: -6px;
		border-left: 6px solid transparent;
		border-right: 6px solid transparent;
		border-bottom: 6px solid #444;
	}
	
	#menu ul ul li:first-child a:after {
		left: -6px;
		top: 50%;
		margin-top: -6px;
		border-left: 0;	
		border-bottom: 6px solid transparent;
		border-top: 6px solid transparent;
		border-right: 6px solid #3b3b3b;
	}
	
	#menu ul li:first-child a:hover:after {
		border-bottom-color: #04acec; 
	}
	
	#menu ul ul li:first-child a:hover:after {
		border-right-color: #0299d3; 
		border-bottom-color: transparent; 	
	}
	
	#menu ul li:last-child > a {
		-moz-border-radius: 0 0 3px 3px;
		-webkit-border-radius: 0 0 3px 3px;
		border-radius: 0 0 3px 3px;
	}
	
	/* Mobile */
	#menu-trigger {
		position:relative;
		z-index:99999;
		max-width:960px;
	}

	@media screen and (max-width: 600px) {

		/* nav-wrap */
		#menu-wrap {
			position: relative;
		}

		#menu-wrap * {
			-moz-box-sizing: border-box;
			-webkit-box-sizing: border-box;
			box-sizing: border-box;
		}

		/* menu icon */
		#menu-trigger {
position:relative;
		z-index:99999;
		max-width:960px;		
	
			-moz-border-radius: 6px;
			-webkit-border-radius: 6px;
			border-radius: 6px;
			-moz-box-shadow: 0 1px 1px #777, 0 1px 0 #666 inset;
			-webkit-box-shadow: 0 1px 1px #777, 0 1px 0 #666 inset;
			box-shadow: 0 1px 1px #777, 0 1px 0 #666 inset;
		}
		
		/* main nav */
		#menu {
			margin: 0; padding: 9px;
			position: absolute;
			top: 40px;
			width: 100%;
			z-index: 1;
			background-color: #444;
			display: none;
			-moz-box-shadow: none;
			-webkit-box-shadow: none;
			box-shadow: none;		
		}

		#menu:after {
			content: '';
			position: absolute;
			left: 25px;
			top: -8px;
			border-left: 8px solid transparent;
			border-right: 8px solid transparent;
			border-bottom: 8px solid #444;
		}	

		#menu ul {
			position: static;
			visibility: visible;
			opacity: 1;
			margin: 0;
			background: none;
			-moz-box-shadow: none;
			-webkit-box-shadow: none;
			box-shadow: none;				
		}

		#menu ul ul {
			margin: 0 0 0 20px !important;
			-moz-box-shadow: none;
			-webkit-box-shadow: none;
			box-shadow: none;		
		}

		#menu li {
			position: static;
			display: block;
			float: none;
			border: 0;
			margin: 5px;
			-moz-box-shadow: none;
			-webkit-box-shadow: none;
			box-shadow: none;			
		}

		#menu ul li{
			margin-left: 20px;
			-moz-box-shadow: none;
			-webkit-box-shadow: none;
			box-shadow: none;		
		}

		#menu a{
			display: block;
			float: none;
			padding: 0;
			color: #999;
		}

		#menu a:hover{
			color: #fafafa;
		}	

		#menu ul a{
			padding: 0;
			width: auto;		
		}

		#menu ul a:hover{
			background: none;	
		}

		#menu ul li:first-child a:after,
		#menu ul ul li:first-child a:after {
			border: 0;
		}		

	}

	@media screen and (min-width: 600px) {
		#menu {
			display: block !important;
		}
	}	

	/* iPad */
	.no-transition {
		-webkit-transition: none;
		-moz-transition: none;
		-ms-transition: none;
		-o-transition: none;
		transition: none;
		opacity: 1;
		visibility: visible;
		display: none;  		
	}

	#menu li:hover > .no-transition {
		display: block;
	}
	</style>

<script async="" src="./CSS3 animated dropdown menu - demo_files/adpacks-demo.js"></script><style type="text/css">				#adpacks-wrapper{font-family: Arial, Helvetica;width:280px;position:fixed;_position: absolute;bottom: 0;right: 5px;z-index: 9999;background: #eee;padding: 15px;box-shadow: 0 0 2px #444;border-radius: 5px 5px 0 0;}				body .adpacks{background:#fff;padding:15px;margin:15px 0 0;border:3px solid #eee;}				.adpacks-wrap { 				    display: block;				    overflow: hidden;				}				.adpacks-img {				    float: left;				    margin-right: 10px;				    width: 130px;				    height: 100px;				}				.adpacks-text {				    display: block;				    line-height: normal;				    color: #333;				    font-size: 12px;				    text-decoration: none;				    text-align: left;				}				.adpacks-poweredby {				    display: none;				}				</style>
<script type="text/javascript" language="javascript" src="js/jquery-1-8-2.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.carousel.js"></script>
<script type="text/javascript" src="js/jquery.color.animation.js"></script>
<script type="text/javascript" src="js/jquery.prettyPhoto.js" charset="utf-8"></script>
<script type="text/javascript" src="js/default.js"></script>
<script type="text/javascript" src="js/jquery.onebyone.min.js"></script>
<script type="text/javascript" src="js/jquery.touchwipe.min.js"></script>

<!-- color pickers -->
<link rel="stylesheet" media="screen" type="text/css" href="css/colorpicker.css" />
<script type="text/javascript" src="js/colorpicker.js"></script>
<!-- end of color pickers -->

</head>

<body>
    <div class="page-wrapper">
        <div class="slug-pattern slider-expand">
            <div class="background-image" id="1"></div>
            <div class="overlay"><div class="slug-cut"></div>
        </div></div>
        <div class="header slider-expand" style="height: 150px;">
            <div class="nav">
             
				<div class="container" style="
    height: 89px;
    width: 1350px;
    padding-right: 0px;
	background-image: linear-gradient(#444, #111);
">

                
                    <!-- Standard Nav (x >= 768px) -->
                   <div class="standard">
                    
                        <div class="five column alpha" style="
    margin-right: 0px;
	background-image: linear-gradient(#444, #111);
	height: 88px;
">
                            <div class="logo">
                                <a href="index.html"><img src="images/logo.png" /></a><!-- Large Logo -->
                            </div>
                        </div>
                    
                       <div class="eleven column omega tabwrapper" style="
    margin-left: 347px;
">

                            <nav id="menu-wrap"><!--<div id="menu-trigger"></div> -->    
	<ul id="menu">

                                    <li>
                                       <a href="index.html" class="active"><span>Home</span></a>
                                      <!-- 
									   <ul class="child">
                                            <li><a href="index-nivo.html">Alternate</a></li>
                                            <li><a href="index-async.html">Alternate 2</a></li>
                                            <li><a href="index-flex.html">Alternate 3</a></li>
                                            <li><a href="index-style-5.html">Alternate 4</a></li>
                                            <li><a href="index-style-6.html">Alternate 5</a></li>
                                        </ul>
										-->
                                    </li>
                                    <li><a href="company.php">About Us</a>
                                        <ul class="child">
											<li><a href="company.php">Company</a></li>
                                             <li><a href="404.html">Who We Are</a></li>
											 <li><a href="404.html">What We Do</a></li>
                                            <li><a href="404.html">Why Choose Us</a></li>
                                            <li><a href="404.html">Our Team</a></li>
										    
                                        </ul>
                                    
                                    <li>
                                        <a href="blog.html">Services</a>
                                        <ul class="child">
										
										
										<!--Education-->
										<li><a href="#">Education</a>
											<ul>
												<li><a href="#">Operating System</a>
												
												<ul>
																<li><a href="#">Linux</a>
																<ul>
																<li><a href="#">Overview</a></li>
																<li><a href="index-flex.html">Linux Expert ASN001L</a></li>
																<li><a href="index-flex.html">Linux Advance ASN002L</a></li>
																<li><a href="index-flex.html">Linux Specialist ASN003L</a></li>
																<li><a href="index-flex.html">Linux Cluster ASN004L</a></li>
																<li><a href="index-flex.html">Linux Virtualization ASN005L</a></li> 
																</ul>
															</li>
												
												<li><a href="index-flex.html">Oracle Solaris</a>
															<ul>
																<li><a href="#">SA-I ASN001SL</a></li>
																<li><a href="index-flex.html">SA-II ASN002SL</a></li>
																<li><a href="index-flex.html">Solaries HA Cluster ASN003SL</a></li>
															</ul>
														
														</li>
												
												
												
												</li>
												
										</li>
													
														<li><a href="index-flex.html">IBM AIX</a>
															<ul>
																<li><a href="#">AIX Basic ASN001AX</a></li>
																<li><a href="index-flex.html">OS Advance ASN002AX</a></li>
															</ul>
														
														</li>
														<li><a href="index-flex.html">HPUX</a>
															<ul>
																<li><a href="#">HPUX ASN001HX</a></li>
															</ul>
														</li>
														</ul>
												
												</li>
												
												<li><a href="index-flex.html">Products Based Training</a>
														<ul>
															<li><a href="#">Symantec</a>
															
																<ul>
																	<li><a href="index-flex">Veritas Cluster ASN001V</a></li>
																	<li><a href="index-flex.html">VXVM ASN002V</a></li>
																	<li><a href="index-flex.html">VVR ASN003V</a></li>
														
																</ul>
															
															</li>
															<li><a href="index-flex.html">Backup</a>
																<ul>
																	<li><a href="index-flex">Veritas Netbackup ASN004BKP</a></li>
																	<li><a href="index-flex.html">HP Data Protector ASN005BKP</a></li>
																	<li><a href="index-flex.html">EMC Networker ASN006BKP</a></li>
																	
																</ul>
															</li>
															
															<li><a href="index-flex.html">Storage </a>
																<ul>
																	<li><a href="index-flex">EMC ASN007STG</a></li>
																	<li><a href="index-flex.html">Netapp ASN008STG</a></li>
																</ul>
															</li>
														</ul>
												
												</li>
												
												
												<li><a href="index-flex.html">Process Base Training </a>
														<ul>
															<li><a href="index-flex">DC_Migration_ASN001DC</a></li>
															<li><a href="index-flex.html">ITIL</a></li>
												
														</ul>
												
												</li>
												<li><a href="index-flex.html">Hardware & Networking </a>
														<ul>
															<li><a href="index-flex">Hardware and Networking ASN001HN</a></li>
															<li><a href="index-flex.html">CCNA</a></li>
													</ul>
												
												</li>
											 </ul>
										
										</li>
										
										<!-- Education closed-->
										
										
										
										
										
                                         <li><a href="index-flex.html">IT Services</a>
											<ul>
												<li><a href="index-flex.html">Overview</a></li>
												<li><a href="index-flex.html">IT Resource Consulting</a></li>
												<li><a href="index-flex.html">IT Infrastructure Services</a></li>
												<li><a href="index-flex.html">Platform & Storage</a></li>
												<li><a href="index-flex.html">Network & Security</a></li>
												<li><a href="index-flex.html">Database & Application</a></li> 
												<li><a href="index-flex.html">System Integration</a></li>
                                            </ul>
										</li>
										
										<li><a href="blog.html">Telecom Services</a>
											<ul>
												<li><a href="#">Development Services</a></li>
												<li><a href="#">Manage Services</a></li>
												<li><a href="#">Onsite Maintenance</a></li>
												<li><a href="#">Remote Maintenance</a></li> 
												<li><a href="#">Spare Maintenance</a></li>
                                            </ul>
										</li>
										
										
											
                                            <li><a href="#">ERP Consulting Services</a></li>
                                            
                                           
                                        </ul>
                                    </li>
                                    <li>
									
										
                                    <li>
                                        <a href="blog.html">Products</a>
                                        <ul class="child">
                                            <li><a href="#">High Availability</a></li>
                                            <li><a href="#">Disaster Recovery</a></li>
                                            <li><a href="#">Performance Optimization</a></li>
                                           
                                        </ul>
                                    </li>
                                    <li>
									
										
                                    <li>
                                        <a href="blog.html">Blog</a>
                                        <ul class="child">
                                            <li><a href="blog.html">Standard Blog</a></li>
                                            <li><a href="#">Blog Style 2</a></li>
                                            <li><a href="#">Blog Style 3</a></li>
                                            <li><a href="#">Blog Style 4</a></li>
                                            <li><a href="#">Blog Post (Single)</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="portfolio-standard-3.html">
									Portfolio   </a>
                                        <ul class="child">
                                            
                                            <li><a href="#">Standard 1 Column</a></li>
                                            <li><a href="#">Standard 2 Columns</a></li>
                                            <li><a href="#">Standard 3 Columns</a></li>
                                            <li><a href="#">Standard 3 Alternate</a></li><li><a href="portfolio-standard-4.html">Standard 4 Columns</a></li>
                                            <li><a href="#">Standard 5 Columns</a></li>
                                            <li><a href="#">Info Style</a></li>
                                            <li><a href="#">Basic Style</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="contact.html">Contact                                        </a>                                    </li>
                                </ul>
                          </div>
                        </div></nav>
                    </div>
                    <!-- Standard Nav Ends, Start of Mini -->
                    
                    <div class="mini">
                        <div class="twelve column alpha omega mini">
                            <div class="logo">
                                <a href="index.html"><img src="images/logoMINI.png" /></a><!-- Small Logo -->
                            </div>
                        </div>
                        
                        <div class="twelve column alpha omega navagation-wrapper">
                            <select class="navagation">
                                <option value="" selected="selected">Site Navagation</option>
                            </select>
                        </div>
                    </div>
                    <!-- Start of Mini Ends -->
                </div> 
                
            </div>
            
            <div class="shadow"></div>
            <div class="container">
                <div class="page-title">
                    <div class="rg"></div>
                    <h1>About Us</h1>
                </div>
            </div>
        </div>
        
        <div class="body">
            <div class="body-round"></div>
            <div class="body-wrapper">
                <div class="side-shadows"></div>
                <div class="content">
                    <div class="container callout standard">
                        
                        <div class="twelve columns">
                            <h4>Company</h4>
                           
                        </div>
                        
                        <div class="four columns button-wrap">
                             <div class="wrapper search">
                                <form action="">
                                    <input type="text" class="search-box" name="" value="" placeholder='Search...' />
                                    <input type="image" src="images/design/search-icon.png" class="searchbox-submit" value=""/>
                                </form>
                            </div>	
                        </div>
                    </div>
                    <div class="callout-hr"></div>                        
                    <div class="container">
                    
                        <div class="twelve columns">
                        
                            <div class="blog">
                              
                               <div class="border shadow">
                                   <img class="scale-with-grid" src="images/company.jpg" />
                                    <a class='link' href="blog-post.html"></a>
                                </div>
                              <p>ANS Informatics is an IT Infrastructure and Service Management (IMS) company headquartered in Ghaziyabad, with its presence in tier 1 & tier 2 cities, as well as most of tier 3 cities in INDIA and global presence in USA.</p>

<p class='extra'>As long term strategic business partners, ANS Informatics delivers IMS Excellence through Managed IT Services, Consulting & Training Services, Infrastructure & Technology Solutions and Service Management Consulting Solutions to its customers, globally. Its customers are medium to large businesses where IT function plays a vital role as business driver.

 <p class='extra'>ANS Informatics Incorporated in 2000 determined to provide top class business consulting services to companies around the world to realize the full potential and maximum return on their investment in Information Technology. It offers extensive industry experience in developing and implementing high-value solutions that optimize and integrate the enterprises with lower costs and on-time delivery.

As a customer focused organization consistently delivering services that exceed your expectations, our corporate standards have been paramount to our success in new account acquisitions, client satisfaction and retention, consistent growth of our consultants' competency and skill development. We deliver professional, practical, efficient and cost effective solutions virtually anytime, anywhere in staffing, project delivery and outsourcing/offshore support, by blending experience, commitment and innovation with personal service.

<p class='extra'>ANS Informatics is a resource center in scientific and engineering excellence, entered in Learning & Development domain in the view of the ever growing demands of the market in the area of system administration, for the skilled manpower in high end technologies like System Administration and Storage Management and Networking by bridging the gap between academics to Industry.

<p class='extra'>ANS Informatics professional staff comprises mainly personnel with academic degree in various scientific fields, computer science and electrical engineering. All of them have detailed knowledge about system administration and storage technologies with a great deal of exposure.

<p class='extra'>ANS Informatics has proven consultancy experience in placing the most qualified professional and consultants in system administration and storage area network fields. Our clients include a list of fortune companies. ANS Informatics is capable of providing the specific skill sets to complement existing staff or to provide for complete project solutions.</p>
                                
                               
                            </div><!-- Blog Ends -->
                            
                             
                              
                              <div>
                                    
                                    <p class="right"><a href="#">Read More</a></p>
                                   
                                </div>
                            
                            
                        </div>
                        <div class="four columns">
                            <div class="sidebar">
                                <div class="sideborder"></div>
                                <h5>More</h5>
                                <ul class="blogs">
                                    <li>
                                        <div class="border">
                                            <img src="images/icons/176.png" width="15px" height="15px"/>
                                   			<a class='link' href="blog-post.html"></a>
                                    	</div>
                                        <p>
                                            <a href="company.php">Company</a>
                                           
                                        </p>
                                        <div class="clear"></div>
                                    </li>
                                    
                                    <li>
                                        <div class="border">
                                             <img src="images/icons/201.png" width="15px" height="15px"/>
                                   			<a class='link' href="blog-post.html"></a>
                                        </div>
                                        <p>
                                            <a href="WhoWeAre.php">Who We Are</a>
                                           
                                        </p>
                                        <div class="clear"></div>
                                    </li>
                                    
                                     <li>
                                        <div class="border">
                                           <img src="images/icons/201.png" width="15px" height="15px"/>
                                   			<a class='link' href="blo2g-post.html"></a>
                                        </div>
                                        <p>
                                            <a href="WhatWeDo.php">What We Do</a>
                                            
                                        </p>
                                        <div class="clear"></div>
                                    </li>
									
									                                     <li>
                                        <div class="border">
                                             <img src="images/icons/201.png" width="15px" height="15px"/>
                                   			<a class='link' href="blog-post.html"></a>
                                        </div>
                                        <p>
                                            <a href="WhyChooseUs.php">Why Choose Us </a>
                                            
                                        </p>
                                        <div class="clear"></div>
                                    </li>
                                </ul>
                                
                                <h5>From the Portfolio</h5>
                                <ul class="img-list">
                                    <li class="nosp"><div class="border"><a href="#"><img src="images/sidebar-mountain.jpg" /></a></div></li>
                                    <li><div class="border"><a href="#"><img src="images/sidebar-beach.jpg" /></a></div></li>
                                    <li><div class="border"><a href="#"><img src="images/sidebar-train.jpg" /></a></div></li>
                                    <li class="nosp"><div class="border"><a href="#"><img src="images/sidebar-beach.jpg" /></a></div></li>
                                    <li><div class="border"><a href="#"><img src="images/sidebar-train.jpg" /></a></div></li>
                                    <li><div class="border"><a href="#"><img src="images/sidebar-mountain.jpg" /></a></div></li>
                                    <div class="clear"></div>
                                </ul>
                                <div class="clear"></div>
                                
                                <div class="tabbed-area">  
                                    <ul class="tabs">  
                                        <li><a href="#" title="content_1" class="tab active">Most Viewed</a></li>  
                                        <li><a href="#" title="content_2" class="tab">Recent</a></li>
                                        <div class="clear"></div>
                                    </ul>  
                                    
                                    <div id="content_1" class="tcontent">  
                                        <ul class="blogs">
                                            <li>
                                                <div class="border">
                                                    <a href="#"><img src="images/sidebar-train.jpg" /></a>                                            </div>
                                                <p>
                                                    <a href="#">Responsive and Professional Design</a>
                                                    <span>September 27, 2012</span>                                            </p>
                                                <div class="clear"></div>
                                            </li>
                                            
                                            <li>
                                                <div class="border">
                                                    <a href="#"><img src="images/sidebar-mountain.jpg" /></a>                                            </div>
                                                <p>
                                                    <a href="#">Responsive and Professional Design</a>
                                                    <span>September 23, 2012</span>                                            </p>
                                                <div class="clear"></div>
                                            </li>
                                            
                                             <li>
                                                <div class="border">
                                                    <a href="#"><img src="images/sidebar-beach.jpg" /></a>                                            </div>
                                                <p>
                                                    <a href="#">Responsive and Professional Design</a>
                                                    <span>September 20, 2012</span>                                            </p>
                                                <div class="clear"></div>
                                            </li>
                                        </ul>
                                    </div>  
                                    <div id="content_2" class="tcontent">  
                                       <ul class="blogs">
                                            <li>
                                                <div class="border">
                                                    <a href="#"><img src="images/sidebar-beach.jpg" /></a>                                            </div>
                                                <p>
                                                    <a href="#">Random Title Goes Right Over Here</a>
                                                    <span>September 27, 2012</span>                                            </p>
                                                <div class="clear"></div>
                                            </li>
                                            
                                            <li>
                                                <div class="border">
                                                    <a href="#"><img src="images/sidebar-train.jpg" /></a>                                            </div>
                                                <p>
                                                    <a href="#">Responsive and Professional Design</a>
                                                    <span>September 23, 2012</span>                                            </p>
                                                <div class="clear"></div>
                                            </li>
                                            
                                             <li>
                                                <div class="border">
                                                    <a href="#"><img src="images/sidebar-mountain.jpg" /></a>                                            </div>
                                                <p>
                                                    <a href="#">Responsive and Professional Design</a>
                                                    <span>September 20, 2012</span>                                            </p>
                                                <div class="clear"></div>
                                            </li>
                                            
                                            <li>
                                                <div class="border">
                                                    <a href="#"><img src="images/sidebar-train.jpg" /></a>                                            </div>
                                                <p>
                                                    <a href="#">Random Title</a>
                                                    <span>September 27, 2012</span>                                            </p>
                                                <div class="clear"></div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <h5>Tag Cloud</h5>
                                <ul class="cloud">
                                    <li><a href="#">Networking</a></li>
                                    <li><a href="#">Security</a></li>
                                    <li><a href="#">Certification</a></li>
                                    <li><a href="#">MIA WEB</a></li>
                                    <li><a href="#">OS</a></li>
                                    <div class="clear"></div>
                                </ul>
                            </div>
                      </div>    
                                
                        <div class="clear"></div>
                                            
                        <div class="sixteen columns">
                       		<span class="hr lip-quote"></span>
                            <blockquote class="standard bottom">
                                "Making the simple complicated is commonplace; making the complicated simple, awesomely simple, that's creativity" <br />- Charles Mingus
                            </blockquote>
                        </div>
        
                    </div>
                </div>
            </div><div class="footer style-2">
            	<div class="background"><div class="stitch"></div></div>
                <div class="foot-nav-bg"></div>
            	<div class="content">
                    <div class="patch"></div>
                    <div class="blur"></div>
                    <div class="pattern">
                        <div class="container">
                        	<div class="stitch"></div>
                            <div class="sixteen columns">
                                <div class="first column alpha">
                                
                                    <div class="left">
                                        <div class="logo-caption"></div>
                                        <h5>ANS Informatics</h5>
                                        <p>
                                            Integer eu ante in arcu viverra vehicula donec tempus consequat faucibus. Donec ne thomp nibh egestas suscipit. Donec sed lacus at massa lorem
                     pharetra id eleifend leo.
                     					</p>
                                        <p class="extra">
                                            Pellentesque quis felis neque, id adipiscing nunc. Ipsum elit, vitae tempus tellus. Class aptent taciti sociosq desis torquent per conubia nostra, per inceptos himenae dolar eget lacinia sem.
                                        </p>
                                    </div>
                                </div>
                                <div class="column ct">
                                    <h5>Recent Tweets:</h5>
                                    <ul class="twitter" id="twitter_update_list"><li>Twitter is loading</li></ul>
                                </div>
                                <div class="last column omega">
                                    <h5>Join our Mailing List</h5>
                                    
                                    <div class="input-wrapper">
                                        <input type="text" placeholder="Email..." id="email" name="email" />
                                    </div>
                                    <div class="right">
                                    	<a href="#" class="button color"><span>Join</span></a>
                                    </div>
                                    <div class="clear"></div>
                                    <span class="hr"></span>
                                    <h5>Stay in Touch</h5>
                                    <ul class="sm foot">
                                        <li class="facebook"><a href="#facebook">Facebook</a></li>
                                        <li class="twitter"><a href="#twitter">LinkedIn</a></li>
                                        <li class="linkedin"><a href="#linkedin">Pinterest</a></li>
                                        <li class="pinterest"><a href="#pinterest">Pinterest</a></li>
                                        <li class="dribbble"><a href="#dribbble">Pinterest</a></li>
                                        <li class="flickr"><a href="#flickr">Pinterest</a></li>
                                        <li class="flavors"><a href="#flavors">Pinterest</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="sixteen columns alpha omega">
                        	<div class="foot-nav-bg"></div>
                            <div class="foot-nav">
                                <div class="copy">
                                    Coptyright © 2011-2012 ANS Informatics. By Empirical Themes - Remove upon purchase
                                </div>
                                <div class="nav">
                                    <a href="#">Home</a>
                                    <a href="#">Portfolio</a>
                                    <a href="#">Contact Us</a>
                                    <a href="#">Terms of Use</a>
                                    <a href="#">Privacy</a>
                               	</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
        
    <script type="text/javascript">
        $(document).ready(function() {
            $('.slidewrap2').carousel({
                slider: '.slider',
                slide: '.slide',
                slideHed: '.slidehed',
                nextSlide : '.next',
                prevSlide : '.prev',
                addPagination: false,
                addNav : false
            });
        });
    </script>
	<script type="text/javascript" src="http://twitter.com/javascripts/blogger.js"></script>
    <script type="text/javascript" src="http://api.twitter.com/1/statuses/user_timeline/EmpiricalThemes.json?callback=twitterCallback2&count=2"></script>

	</div>
</body>

</html>