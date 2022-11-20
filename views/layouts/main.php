<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/bootstrap-5.2.2-dist/css/bootstrap.css">
<!-- Meta -->
  
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="description" content="">
    <meta name="author" content="">    
    <link rel="shortcut icon" href="/assets/images/logo_small.png">  
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!-- FontAwesome JS -->
    <script defer src="/assets/fontawesome/js/all.js"></script>
       
    <!-- Plugins CSS -->    
    <link rel="stylesheet" href="/assets/plugins/elegant_font/css/style.css">    
    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="/assets/css/styles.css">
     
   
   
    <title><?php echo $this->title ?></title>
</head>
<body>

        <?php use systemx\SystemxCore\Application;?>
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

<div class="container">
    <?php if (Application::$app->session->getFlash('success')): ?>
        <div class="alert alert-success">
            <p><?php echo Application::$app->session->getFlash('success') ?></p>
        </div>
    <?php endif; ?>
    {{content}}
</div>
  <footer class="footer text-center">
        <div class="container">
		
                        <small class="copyright">Systemx is open source project released under the MIT open source licence</small>
            
        </div><!--//container-->
    </footer><!--//footer-->
    
     
    <!-- Main Javascript -->       
    <script src="/assets/plugins/bootstrap/js/bootstrap.min.js"></script>     
    <script src="/assets/plugins/stickyfill/dist/stickyfill.min.js"></script>                                                                
    <script src="/assets/js/main.js"></script>
    
</body>
</html> 
