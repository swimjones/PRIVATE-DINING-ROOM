<!DOCTYPE html>
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,700,700italic,800,800italic,300italic,300" rel="stylesheet">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>TurnoverBnB</title>
<meta name="description" content="Archer - Responsive Landing Page">

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!-- Favicons-->
<!--<link rel="icon" href="favicon.ico" sizes="32x32">-->
<link rel="apple-touch-icon" sizes="180x180" href="favicons/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicons/favicon-16x16.png">
<link rel="manifest" href="favicons/manifest.json">
<link rel="mask-icon" href="favicons/safari-pinned-tab.svg" color="#5bbad5">
<meta name="apple-mobile-web-app-title" content="TurnoverBnB">
<meta name="application-name" content="TurnoverBnB">
<meta name="theme-color" content="#ffffff">
<!-- Favicons-->
<link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
<!-- For iPhone -->
<meta name="msapplication-TileColor" content="#00bcd4">
<meta name="msapplication-TileImage" content="favicon/mstile-144x144.png">


<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="css/magnific-popup.css" rel="stylesheet">
<link href="css/owl.carousel.css" rel="stylesheet">
<link href="css/main.css" rel="stylesheet">
</head>
<body>

<!-- SVG -->
<svg style="position: absolute; width: 0; height: 0; overflow: hidden;" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
<defs>
<symbol id="icon-coin-dollar" viewBox="0 0 32 32">
<title>coin-dollar</title>
<path d="M15 2c-8.284 0-15 6.716-15 15s6.716 15 15 15c8.284 0 15-6.716 15-15s-6.716-15-15-15zM15 29c-6.627 0-12-5.373-12-12s5.373-12 12-12c6.627 0 12 5.373 12 12s-5.373 12-12 12zM16 16v-4h4v-2h-4v-2h-2v2h-4v8h4v4h-4v2h4v2h2v-2h4l-0-8h-4zM14 16h-2v-4h2v4zM18 22h-2v-4h2v4z"></path>
</symbol>
<symbol id="icon-credit-card" viewBox="0 0 32 32">
<title>credit-card</title>
<path d="M29 4h-26c-1.65 0-3 1.35-3 3v18c0 1.65 1.35 3 3 3h26c1.65 0 3-1.35 3-3v-18c0-1.65-1.35-3-3-3zM3 6h26c0.542 0 1 0.458 1 1v3h-28v-3c0-0.542 0.458-1 1-1zM29 26h-26c-0.542 0-1-0.458-1-1v-9h28v9c0 0.542-0.458 1-1 1zM4 20h2v4h-2zM8 20h2v4h-2zM12 20h2v4h-2z"></path>
</symbol>
<symbol id="icon-alarm" viewBox="0 0 32 32">
<title>alarm</title>
<path d="M16 4c-7.732 0-14 6.268-14 14s6.268 14 14 14 14-6.268 14-14-6.268-14-14-14zM16 29.25c-6.213 0-11.25-5.037-11.25-11.25s5.037-11.25 11.25-11.25c6.213 0 11.25 5.037 11.25 11.25s-5.037 11.25-11.25 11.25zM29.212 8.974c0.501-0.877 0.788-1.892 0.788-2.974 0-3.314-2.686-6-6-6-1.932 0-3.65 0.913-4.747 2.331 4.121 0.851 7.663 3.287 9.96 6.643v0zM12.748 2.331c-1.097-1.418-2.816-2.331-4.748-2.331-3.314 0-6 2.686-6 6 0 1.082 0.287 2.098 0.788 2.974 2.297-3.356 5.838-5.792 9.96-6.643z"></path>
<path d="M16 18v-8h-2v10h8v-2z"></path>
</symbol>
<symbol id="icon-bell" viewBox="0 0 32 32">
<title>bell</title>
<path d="M32.047 25c0-9-8-7-8-14 0-0.58-0.056-1.076-0.158-1.498-0.526-3.532-2.88-6.366-5.93-7.23 0.027-0.123 0.041-0.251 0.041-0.382 0-1.040-0.9-1.891-2-1.891s-2 0.851-2 1.891c0 0.131 0.014 0.258 0.041 0.382-3.421 0.969-5.966 4.416-6.039 8.545-0.001 0.060-0.002 0.121-0.002 0.183 0 7-8 5-8 14 0 2.382 5.331 4.375 12.468 4.878 0.673 1.263 2.002 2.122 3.532 2.122s2.86-0.86 3.532-2.122c7.137-0.503 12.468-2.495 12.468-4.878 0-0.007-0.001-0.014-0.001-0.021l0.048 0.021zM25.82 26.691c-1.695 0.452-3.692 0.777-5.837 0.958-0.178-2.044-1.893-3.648-3.984-3.648s-3.805 1.604-3.984 3.648c-2.144-0.18-4.142-0.506-5.837-0.958-2.332-0.622-3.447-1.318-3.855-1.691 0.408-0.372 1.523-1.068 3.855-1.691 2.712-0.724 6.199-1.122 9.82-1.122s7.109 0.398 9.82 1.122c2.332 0.622 3.447 1.318 3.855 1.691-0.408 0.372-1.523 1.068-3.855 1.691z"></path>
</symbol>
<symbol id="icon-cogs" viewBox="0 0 32 32">
<title>cogs</title>
<path d="M11.366 22.564l1.291-1.807-1.414-1.414-1.807 1.291c-0.335-0.187-0.694-0.337-1.071-0.444l-0.365-2.19h-2l-0.365 2.19c-0.377 0.107-0.736 0.256-1.071 0.444l-1.807-1.291-1.414 1.414 1.291 1.807c-0.187 0.335-0.337 0.694-0.443 1.071l-2.19 0.365v2l2.19 0.365c0.107 0.377 0.256 0.736 0.444 1.071l-1.291 1.807 1.414 1.414 1.807-1.291c0.335 0.187 0.694 0.337 1.071 0.444l0.365 2.19h2l0.365-2.19c0.377-0.107 0.736-0.256 1.071-0.444l1.807 1.291 1.414-1.414-1.291-1.807c0.187-0.335 0.337-0.694 0.444-1.071l2.19-0.365v-2l-2.19-0.365c-0.107-0.377-0.256-0.736-0.444-1.071zM7 27c-1.105 0-2-0.895-2-2s0.895-2 2-2 2 0.895 2 2-0.895 2-2 2zM32 12v-2l-2.106-0.383c-0.039-0.251-0.088-0.499-0.148-0.743l1.799-1.159-0.765-1.848-2.092 0.452c-0.132-0.216-0.273-0.426-0.422-0.629l1.219-1.761-1.414-1.414-1.761 1.219c-0.203-0.149-0.413-0.29-0.629-0.422l0.452-2.092-1.848-0.765-1.159 1.799c-0.244-0.059-0.492-0.109-0.743-0.148l-0.383-2.106h-2l-0.383 2.106c-0.251 0.039-0.499 0.088-0.743 0.148l-1.159-1.799-1.848 0.765 0.452 2.092c-0.216 0.132-0.426 0.273-0.629 0.422l-1.761-1.219-1.414 1.414 1.219 1.761c-0.149 0.203-0.29 0.413-0.422 0.629l-2.092-0.452-0.765 1.848 1.799 1.159c-0.059 0.244-0.109 0.492-0.148 0.743l-2.106 0.383v2l2.106 0.383c0.039 0.251 0.088 0.499 0.148 0.743l-1.799 1.159 0.765 1.848 2.092-0.452c0.132 0.216 0.273 0.426 0.422 0.629l-1.219 1.761 1.414 1.414 1.761-1.219c0.203 0.149 0.413 0.29 0.629 0.422l-0.452 2.092 1.848 0.765 1.159-1.799c0.244 0.059 0.492 0.109 0.743 0.148l0.383 2.106h2l0.383-2.106c0.251-0.039 0.499-0.088 0.743-0.148l1.159 1.799 1.848-0.765-0.452-2.092c0.216-0.132 0.426-0.273 0.629-0.422l1.761 1.219 1.414-1.414-1.219-1.761c0.149-0.203 0.29-0.413 0.422-0.629l2.092 0.452 0.765-1.848-1.799-1.159c0.059-0.244 0.109-0.492 0.148-0.743l2.106-0.383zM21 15.35c-2.402 0-4.35-1.948-4.35-4.35s1.948-4.35 4.35-4.35 4.35 1.948 4.35 4.35c0 2.402-1.948 4.35-4.35 4.35z"></path>
</symbol>
<symbol id="icon-clipboard" viewBox="0 0 32 32">
<title>clipboard</title>
<path d="M29 4h-9c0-2.209-1.791-4-4-4s-4 1.791-4 4h-9c-0.552 0-1 0.448-1 1v26c0 0.552 0.448 1 1 1h26c0.552 0 1-0.448 1-1v-26c0-0.552-0.448-1-1-1zM16 2c1.105 0 2 0.895 2 2s-0.895 2-2 2c-1.105 0-2-0.895-2-2s0.895-2 2-2zM28 30h-24v-24h4v3c0 0.552 0.448 1 1 1h14c0.552 0 1-0.448 1-1v-3h4v24z"></path>
<path d="M14 26.828l-6.414-7.414 1.828-1.828 4.586 3.586 8.586-7.586 1.829 1.828z"></path>
</symbol>
</defs>
</svg>

<!--hero section-->

<header class="hero-section"> 
<div id="hero-section"></div>
  <!--navigation-->
  
  <nav class="navbar navbar-default" data-spy="affix" data-offset-top="450">
    <div class="container">
      <div class="navbar-header"> <a class="navbar-brand" href=""><img style="width:200px;height:auto" class="logo" alt="logo" src="logos/tbnb-white.png"><img style="width:180px;height:auto" class="logo-nav" alt="logo-nav" src="logos/full-transparent.png"></a> </div>
      <ul class="nav navbar-nav navbar-right">
        <li class="hidden-xs hidden-sm"><a href="#how-it-works">How It Works</a></li>
        <li class="hidden-xs hidden-sm"><a href="#features">Features</a></li>
        <li><a href="http://staging-app.turnoverbnb.com/" class="hidden-xs hidden-sm">Sign In</a></li>
        <li><a href="#hero-section" class="btn btn-nav">Sign Up</a></li>
        <li class="hidden-md hidden-lg"><a id="toggle"><i class="fa fa-bars fa-2x"></i><i class="fa fa-times fa-2x"></i></a></li>
      </ul>
    </div>
  </nav>
  
  <!--navigation end--> 
  
  <!--mobile navigation-->
  
  <div class="mobile-nav-overlay hidden-md hidden-lg" id="mobile-nav-overlay">
    <nav class="mobile-nav">
      <ul>
        <li><a href="#how-it-works">How It Works</a></li>
        <li><a href="#features">Features</a></li>
		<li><a href="http://staging-app.turnoverbnb.com/">Sign In</a></li>
        <li><a href="#hero-section">Sign Up</a></li>
      </ul>
    </nav>
  </div>
  
  <!--mobile navigation end--> 
  
  <!--welcome message-->
  
  <section class="container text-center welcome-message">
    <div class="row">
      <div class="col-md-11 center-block">
        <div class="row">
          <div class="col-md-6">
            <h1>Free software to automate your turnovers</h1>
            <h2>We notify your cleaners of upcoming turnovers using calendar sync</h2>
            <!--<div class="play-btn-container"><a href="https://vimeo.com/109054393" class="play-btn"><i class="fa fa-play fa-2x"></i> </a><span>Take a product tour</span></div>-->
          </div>
          
          <!--cta signup form-->
          
          <div class="col-md-6">
            <section class="cta-form cta-light">
              <form id="cta-signup-form" class="cta-signup-form" method="GET" action="http://staging-app.turnoverbnb.com/cta-populate">
                <h2  class="text-center">Sign up for FREE software</h2>
                <div id="mc-error-cta"><i class="fa fa-exclamation-triangle"></i> Please enter a value</div>
                <div id="mc-success-cta"><i class="fa fa-envelope"></i> Awesome! We have sent you a confirmation email</div>
                <div class="form-group"> <i class="fa fa-user"></i>	
                  <input type="text" value="" name="cta_name" class="form-control input-lg" id="input-name" placeholder="Your name" required>
                </div>
                <div class="form-group"> <i class="fa fa-envelope-o"></i>
                  <input type="email" value="" name="cta_email" class="form-control input-lg" id="input-email" placeholder="Email address" required>
                </div>
           <div class="form-group"> <i class="fa fa-comment-o"></i>
                  <select name="option" class="form-control">
                    <option>How did you find us?</option>
                    <option>Blog</option>
                    <option>Google</option>
                    <option>Facebook</option>
                    <option>Newsletter</option>
                  </select>
                </div>
                <div class="form-btn">
				  <button type="submit" class="btn">GET STARTED</button>
                  <p class="form-terms">By clicking sign up you agree to our <a href="" data-toggle="modal" data-target="#modal-terms">Terms</a> and read our <a href="" data-toggle="modal" data-target="#modal-terms">Privacy Policy</a>.</p>
                </div>
              </form>
            </section>
          </div>
          
          <!--cta signup form end--> 
          
        </div>
      </div>
    </div>
  </section>
  
  <!--welcome message end--> 
  
</header>

<!--hero section end--> 

<!--How it works-->

<section class="how-it-works section-spacing" id="how-it-works">
  <div class="container">
    <header class="section-header text-center">
      <h2>How it works</h2>
      <h3>Understanding our easy-to-use software</h3>
    </header>
    <div class="row">
      <div class="col-md-11 center-block"> 
        
        <!--step 1-->
        <div class="row">
          <div class="col-md-6 col-md-push-6 text-center"> <img src="img/step-1-signup.png" alt="step-1"> </div>
          <div class="col-md-6 col-md-pull-6">
            <div class="step-number"><span>1</span></div>
            <h4>Sign up</h4>
            <p>Sign up above or use this <a href="http://staging-app.turnoverbnb.com/register">link</a> to begin</p>
          </div>
        </div>
        <!--step 1 end--> 
        
        <!--step 2-->
        <div class="row">
          <div class="col-md-6 text-center"> <img src="img/step-2-calendar.png" alt="step-2"> </div>
          <div class="col-md-6">
            <div class="step-number"><span>2</span></div>
            <h4>Sync to your rental calendar</h4>
            <p>Our tutorial will show you how to link to your calendar in less than three minutes</p>
          </div>
        </div>
        <!--step 2 end--> 
        
        <!--step 3-->
        <div class="row">
          <div class="col-md-6 col-md-push-6 text-center"> <img style="width:280px; height:auto" src="img/step-3-cleaner.png" alt="step-3"> </div>
          <div class="col-md-6 col-md-pull-6">
            <div class="step-number"><span>3</span></div>
            <h4>Invite your cleaners</h4>
            <p>Introduce us to your cleaners so we can automatically schedule your turnovers</p>
          </div>
        </div>
        <!--step 3 end--> 
        
        <!--step 4-->
        <div class="row">
          <div class="col-md-6 text-center"> <img style="width:280px; height:auto" src="img/step-4-relax.png" alt="step-4"> </div>
          <div class="col-md-6">
            <div class="step-number"><span>4</span></div>
            <h4>Relax</h4>
            <p>We will let you know if any of your turnovers are not covered</p>
          </div>
        </div>
        <!--step 4 end--> 
        
      </div>
    </div>
  </div>
</section>

<!--How it works end--> 

<!--features-->

<section class="features text-center section-spacing" id="features">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="row-margin">
          <header class="section-header">
            <h2>Key features of TurnoverBnB</h2>
            <h3>Everything you need</h3>
          </header>
          <div class="row"> 
            <!--features 1-->
            <div class="col-sm-4"><svg fill="#30ABEF" class="icon icon-coin-dollar"><use xlink:href="#icon-coin-dollar"></use></svg>
              <h4>FREE</h4>
              <p>Our automatic scheduling software is free and always will be</p>
            </div>
            <!--features 1 end--> 
            <!--features 2-->
            <div class="col-sm-4"><svg fill="#30ABEF" class="icon icon-clipboard"><use xlink:href="#icon-clipboard"></use></svg>
              <h4>EASY SET-UP</h4>
              <p>The set-up process takes about 10 minutes</p>
            </div>
            <!--features 2 end--> 
            <!--features 3-->
            <div class="col-sm-4"><svg fill="#30ABEF" class="icon icon-cogs"><use xlink:href="#icon-cogs"></use></svg>
              <h4>FULLY AUTOMATED</h4>
              <p>Once set up, scheduling turnovers is completely hands-off</p>
            </div>
            <!--features 3 end--> 
          </div>
          <div class="row"> 
            <!--features 4-->
            <div class="col-sm-4"><svg fill="#30ABEF" class="icon icon-alarm"><use xlink:href="#icon-alarm"></use></svg>
              <h4>ALERT</h4>
              <p>We alert you when your cleaners are unavailable for a turnover</p>
            </div>
            <!--features 4 end--> 
            <!--features 5-->
            <div class="col-sm-4"><svg fill="#30ABEF" class="icon icon-bell"><use xlink:href="#icon-bell"></use></svg>
              <h4>REMINDERS</h4>
              <p>We provide your cleaners with several reminders of their scheduled turnovers</p>
            </div>
            <!--features 5 end--> 
            <!--features 6-->
            <div class="col-sm-4"><svg fill="#30ABEF" class="icon icon-credit-card"><use xlink:href="#icon-credit-card"></use></svg>
              <h4>PAY CLEANERS VIA CARD</h4>
              <p>Optionally pay your cleaners through us via credit card</p>
            </div>
            <!--features 6 end--> 
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--Twitter reviews end--> 

<!--Site footer-->

<footer class="site-footer section-spacing">
  <div class="container">
    <div class="row">
      <div class="col-md-5 sub-form">
        <h3>SUBSCRIBE</h3>
        <p>Get news delivered directly to your inbox</p>
        <form id="mc-form">
          <div id="mc-error"><i class="fa fa-exclamation-triangle"></i> Please enter a value</div>
          <div id="mc-success"><i class="fa fa-envelope"></i> Awesome! We have sent you a confirmation email</div>
          <div class="input-group"> <i class="fa fa-envelope"></i>
            <input type="email" class="form-control input-lg" placeholder="Email Address" required id="mc-email">
            <span class="input-group-btn">
            <button type="submit" class="btn"><i class="fa fa-paper-plane"></i></button>
            </span> </div>
        </form>
        <p class="form-terms">By signing up you agree to our <a href="" data-toggle="modal" data-target="#modal-terms">terms</a>.</p>
      </div>
      <!--<div class="col-md-7 text-center twitter-feed">
        <div class="twitter-icon"> <i class="fa fa-twitter"></i> </div>
        <div class="tweet"> </div>
      </div>-->
    </div>
    <div class="row footer-col-spacing">
      <div class="col-md-2 footer-logo"> <a href=""><img style="width:80px;height:auto" src="logos/circle-clear.png" alt="logo footer"></a> </div>
      <!--<div class="col-sm-4 col-md-2">
        <ul class="footer-nav">
          <li>
            <h3>LEARN MORE</h3>
          </li>
          <li><a href="">Pricing</a></li>
          <li><a href="">Reviews</a></li>
          <li><a href="">Features</a></li>
          <li><a href="">Register</a></li>
        </ul>
      </div>
      <div class="col-sm-4 col-md-2">
        <ul class="footer-nav">
          <li>
            <h3>Resources</h3>
          </li>
          <li><a href="">Support</a></li>
          <li><a href="">Blog</a></li>
          <li><a href="">API</a></li>
          <li><a href="">Affiliates</a></li>
        </ul>
      </div>-->
      <div class="col-sm-4 col-md-3">
        <ul class="footer-nav">
          <li>
            <h3>CONTACT US</h3>
          </li>
          <li>Call us <a href="tel:+1808-220-2864">+1 (808) 220-2864</a></li>
          <li><a href="mailto:info@turnoverbnb.com">info@turnoverbnb.com</a></li>
          <!--<li><a href="" data-toggle="modal" data-target="#modal-google-map">Locate on Google Maps</a></li>-->
        </ul>
      </div>
      <!--Use clearfix after every 12 columns-->
      <div class="clearfix visible-sm-block"></div>
      <div class="col-md-3">
        <ul class="social">
          <li><a href="https://www.facebook.com/TurnoverBnB/" class="a-facebook"><i class="fa fa-facebook"></i></a></li>
          <li><a href="https://twitter.com/turnoverbnb" class="a-twitter"><i class="fa fa-twitter"></i></a></li>
          <li><a href="" class="a-google-plus"><i class="fa fa-google-plus"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
  <a href="" class="chat-btn" data-toggle="modal" data-target="#modal-contact-form"></a> </footer>

<!--Site footer end--> 

<!--Copyright terms-->

<footer class="copyright-terms">
  <div class="container">
    <div class="row">
      <div class="col-sm-5 col-md-6"> <small> &copy; 2017 TurnoverBnB. All rights reserved.</small> </div>
      <div class="col-sm-7 col-md-6">
        <ul class="terms-privacy">
          <li><a href="" data-toggle="modal" data-target="#modal-terms">Terms</a></li>
          <li><a href="" data-toggle="modal" data-target="#modal-terms">Privacy</a></li>
          <li><a href="" data-toggle="modal" data-target="#modal-terms">Cookies</a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>

<!--Copyright terms end--> 

<!-- Google map modal -->
<div class="modal fade" id="modal-google-map" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <div class="modal-body">
        <div class="map">
          <div id="map-canvas"></div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Google map modal end--> 

<!--Site policy modal -->
<div class="modal fade site-policy" id="modal-terms" tabindex="-1" role="dialog" aria-labelledby="ModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <div class="modal-header">
        <h2 class="modal-title text-center" id="ModalLabel">Terms of Use</h2>
      </div>
      <div class="modal-body">
        <p>This privacy policy discloses the privacy practices for TurnoverBnB.com. This privacy policy applies solely to information collected by this web site. It will notify you of the following: </p>
        <ul>
          <li>What personally identifiable information is collected from you through the web site, how it is used and with whom it may be shared.</li>
          <li>What choices are available to you regarding the use of your data.</li>
          <li>The security procedures in place to protect the misuse of your information.</li>
          <li>How you can correct any inaccuracies in the information.</li>
        </ul>
        <h3>Information Collection, Use, and Sharing </h3>
        <p>We are the sole owners of the information collected on this site. We only have access to/collect information that you voluntarily give us via email or other direct contact from you. We will not sell or rent this information to anyone.</p>
        <p>We will use your information to respond to you, regarding the reason you contacted us. We will not share your information with any third party outside of our organization, other than as necessary to fulfill your request, e.g. to schedule a turnover</p>
        <p>Unless you ask us not to, we may contact you via email in the future to tell you about specials, new products or services, or changes to this privacy policy.</p>
        <h3>Your Access to and Control Over Information </h3>
        <p>You may opt out of any future contacts from us at any time. You can do the following at any time by contacting us via the email address or phone number given on our website:</p>
        <ul>
          <li>See what data we have about you, if any.</li>
          <li>Change/correct any data we have about you.</li>
          <li>Have us delete any data we have about you.</li>
          <li>Express any concern you have about our use of your data.</li>
        </ul>
        <h3>Security </h3>
        <p>We take precautions to protect your information. When you submit sensitive information via the website, your information is protected both online and offline.</p>
        <p>Wherever we collect sensitive information (such as credit card data), that information is encrypted and transmitted to us in a secure way. You can verify this by looking for a closed lock icon at the bottom of your web browser, or looking for "https" at the beginning of the address of the web page.</p>
        <p>While we use encryption to protect sensitive information transmitted online, we also protect your information offline. Only employees who need the information to perform a specific job (for example, billing or customer service) are granted access to personally identifiable information. The computers/servers in which we store personally identifiable information are kept in a secure environment.</p>
        <h3>Registration </h3>
        <p>In order to use this website, a user must first complete the registration form. During registration a user is required to give certain information (such as name and email address). This information is used to contact you about the products/services on our site in which you have expressed interest. At your option, you may also provide demographic information (such as gender or age) about yourself, but it is not required.</p>
        <h3>Orders </h3>
        <p>We request information from you on our order form. To buy from us, you must provide contact information (like name and shipping address) and financial information (like credit card number, expiration date). This information is used for billing purposes and to fill your orders. If we have trouble processing an order, we'll use this information to contact you.</p>
        <h3>Cookies </h3>
        <p>We use "cookies" on this site. A cookie is a piece of data stored on a site visitor's hard drive to help us improve your access to our site and identify repeat visitors to our site. For instance, when we use a cookie to identify you, you would not have to log in a password more than once, thereby saving time while on our site. Cookies can also enable us to track and target the interests of our users to enhance the experience on our site. Usage of a cookie is in no way linked to any personally identifiable information on our site.</p>
        <h3>Updates</h3>
        <p>Our Privacy Policy may change from time to time and all updates will be posted on this page.</p>
        <p>If you feel that we are not abiding by this privacy policy, you should contact us immediately via telephone at <a href="tel:+1808-220-2864">+1808-220-2864</a> or via email <a href="mailto:info@turnoverbnb.com">info@turnoverbnb.com</a></p>
      </div>
    </div>
  </div>
</div>

<!--Site policy modal end--> 

<!--contact form modal-->

<div class="modal fade" id="modal-contact-form" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <div class="modal-body"> 
        
        <!--contact form-->
        
        <div class="contact-form text-center">
          <header class="section-header"> <img src="img/support-icon.svg" alt="support icon">
            <h2>Contact us</h2>
            <h3>Have any questions? Send us a message.</h3>
          </header>
          <form class="cta-form cta-light" action="php/contact.php" method="post">
            <div class="form-group">
              <input  type="text" name="name" class="contact-name form-control input-lg" placeholder="Name *" id="contact-name">
            </div>
            <div class="form-group">
              <input  type="text"  name="email" class="contact-email form-control input-lg" placeholder="Email address *" id="contact-email">
            </div>
            <div class="form-group">
              <textarea name="message" class="contact-message form-control input-lg" rows="4" placeholder="Message *" id="contact-message"></textarea>
            </div>
            <div class="form-group">
              <input type="text" name="antispam" placeholder="Antispam question: 7 + 5 = ?" class="contact-antispam form-control input-lg" id="contact-antispam">
            </div>
            <button type="submit" class="btn">SEND MESSAGE</button>
          </form>
        </div>
        
        <!--contact form end-->
        
        <p class="contact-form-success"><i class="fa fa-check"></i><span>Thanks for contacting us!</span> We will get back to you very soon.</p>
      </div>
    </div>
  </div>
</div>

<!--contact form modal end--> 

<script src="js/jquery-2.2.1.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.magnific-popup.min.js"></script> 
<script src="js/owl.carousel.min.js"></script> 
<script src="js/jquery.waypoints.min.js"></script> 
<script src="js/jquery.animateNumber.min.js"></script> 
<!--<script src="js/jquery.ajaxchimp.min.js"></script>-->
<script src="js/tweetie.min.js"></script>
<!--[if IE 9]>
<script src="js/placeholders.min.js"></script>
<![endif]--> 
<script src="js/main.js"></script> 
<script async src="http://platform.twitter.com/widgets.js"></script> 
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script> 
<script src="js/gmap.js"></script> 
<script src="js/retina.min.js"></script>
</body>
</html>
