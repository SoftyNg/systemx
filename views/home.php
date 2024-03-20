<?php
$this->title = 'Systemx-home';

use systemx\SystemxCore\Application;?>
<div class="page-wrapper">
      <!-- ******HEADER****** --> 
    <header  class="header text-center"> 
<nav class="main-nav navbar-expand-md" role="navigation">  
	       
	        <div class="container-fluid position-relative">
                           
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-collapse"  aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button><!--//nav-toggle-->
                
                <div id="navbar-collapse" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav ms-md-auto">
                        <li class="nav-item"><a class="nav-link scrollto" href="#">Home</a></li>
                        <li class="nav-item"><a class="nav-link scrollto" href="#">Documentations</a></li>
                        <li class="nav-item"><a class="nav-link scrollto" href="#">Contribute</a></li>                        
                       
                    </ul><!--//nav-->
                </div><!--//navabr-collapse-->
            </div><!--//container-->
            
        </nav><!--//main-nav--> 	
      <div class="container">
                <div class="branding">
                    <h1 class="logo">
					 <span class="logo-icon-wrapper"><img class="logo-icon" src="assets/images/logo_small.png" alt="icon"></span>
                        
                        <span class="text-highlight">System</span><span class="text-bold">X</span>
                    </h1>
                </div><!--//branding-->
                <div class="tagline">
                    <p><h3><b>The framework which simplifies building of complex applications</b></h3></p>
                    <p>Version<i class="fas fa-heart"></i> v1.0.4</p>
                </div><!--//tagline-->
                
	             
                 
                <div class="social-container">
	                <!-- Replace with your Github Button -->
	                <div class="github-btn mb-2">
						<a class="github-button" href="https://github.com/SoftyNg/systemx/" data-size="large" aria-label="Star xriley/PrettyDocs-Theme on GitHub"></a>
                        <a class="github-button" href="https://github.com/SoftyNg" data-size="large" aria-label="Follow @xriley on GitHub">Follow @SoftyNg</a>
	                </div>
	                <!-- Replace with your Twitter Button -->
                    <div class="twitter-tweet">
                        <a href="https://twitter.com/systemx_mvc?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-show-count="false">Follow @Systemx_mvc</a>
						<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </div><!--//tweet-->
                    <!-- Replace with your Facebook Button -->
                    <div class="fb-like" data-href="https://themes.3rdwavemedia.com/" data-width="" data-layout="button_count" data-action="like" 
					data-size="small" data-share="true"></div>         
                 </div><!--//social-container-->
                 
                
            </div><!--//container-->		
    </header><!--//header-->



<section class="cards-section text-center">
            <div class="container">
                <h2 class="title">Getting started is easy!</h2>
                <div class="intro">
                    <p>Welcome to <?php echo $name ?>. This landing page is dynamically generated by
systemx, feel free to go through the available simple tutorials to guide you in building complex applications easily. Fully customizable with powerful features.</p>
                   
                </div><!--//intro-->
                <div id="cards-wrapper" class="cards-wrapper row">
                    <div class="item item-green col-lg-4 col-6">
                        <div class="item-inner">
                            <div class="icon-holder">
                                <i class="icon fa fa-paper-plane"></i>
                            </div><!--//icon-holder-->
                            <h3 class="title">Quick Guide</h3>
                            <p class="intro">The Quick Guide has tutorials and reference documentation for the components that make up the framework. Visit the <a href>Quick Guide !</a>
							</p>
                            <a class="link" href="start.html"><span></span></a>
                        </div><!--//item-inner-->
                    </div><!--//item-->
                    <div class="item item-pink item-2 col-lg-4 col-6">
                        <div class="item-inner">
                            <div class="icon-holder">
                                <span aria-hidden="true" class="icon fa fa-puzzle-piece"></span>
                            </div><!--//icon-holder-->
                            <h3 class="title">Components</h3>
                            <p class="intro">Systemx is a community-developed open source project, feel free to join our community so as to add
create and add your favourite components <a href>Systemx forum</>!</p>
                            <a class="link" href="components.html"><span></span></a>
                        </div><!--//item-inner-->
                    </div><!--//item-->
                    
                    <div class="item item-purple col-lg-4 col-6">
                        <div class="item-inner">
                            <div class="icon-holder">
                                <span aria-hidden="true" class="icon fa fa-code"></span>
                            </div><!--//icon-holder-->
                            <h3 class="title">Contribute</h3>
                            <p class="intro">Contribute your code using github <a href>Join us now</a></p>
                            <a class="link" href="faqs.html"><span></span></a>
                        </div><!--//item-inner-->
                    </div><!--//item-->
                    
                </div><!--//cards-->
                
            </div><!--//container-->
        </section>
		</div>


        <footer class="footer text-center">
        <div class="container">
		
                        <small class="copyright">Systemx is open source project released under the MIT open source licence</small>
            
        </div><!--//container-->
    </footer><!--//footer-->
    
     
    
    <script src="/assets/plugins/stickyfill/dist/stickyfill.min.js"></script>                                                                
    <script src="/assets/js/main.js"></script>