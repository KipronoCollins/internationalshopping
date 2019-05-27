<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>My Dashboard</title>
<!-- sidebar style  -->

<!-- Our Custom CSS -->
   
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <!-- <link href="../css/dashboard.css" rel="stylesheet"> -->
  
  <!-- Request  Quotation core CSS -->
<!-- <link href="../css/navbarsite.css" rel="stylesheet"> -->
<link href="../css/feather.css" rel="stylesheet">

 <title>Dashboard Template for Bootstrap</title>

 <!-- Bootstrap core CSS -->
 <link href="../css/bootstrap.min.css" rel="stylesheet">
 <script src="../js/bootstrap.min.js"></script>
<script src="../js/pcoded.min.js"></script>
<script src="../js/tables.js"></script>
 <!-- Custom styles for this template -->
 <link href="../css/dashboard.css" rel="stylesheet">

<!-- sidebar style  -->
<link rel="stylesheet" href="../css/style4.css">
   

</head>

<body>

    <div class="wrapper" style="margin-bottom: 0;">

        <!-- Sidebar  -->
        <nav id="sidebar" style="margin-top: 0;">
               
                <div  class="sidebar-sticky">
                        <div class="sidebar-header" style="margin:auto">
                                <center>
                                    <a class="dropdown mt-2">
                                        </a><a class="navbar-avatar" data-toggle="dropdown" href="#" aria-expanded="false">
                                          <span class="avatar">
                                            @if ($avatar == null)
                                                <img class="imgs " src="{{url('/uploads/null.jpg')}}" alt="face">  
                                                @else
                                                <img class="imgs " src="{{url('/uploads//'.$avatar)}}" alt="face">
                                                @endif
                                            <i></i>
                                          </span>
                                          <span class="dropdown-toggle"></span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right" role="menu" style="z-index: 1000;">
                                            <a class="dropdown-item" href="myprofile.html" role="menuitem"><i class="icon wb-user" aria-hidden="true"></i>My Profile</a>
                                             <div class="dropdown-divider"></div>
                                             <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" style="color:black; margin-left:25px;">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                          
                                  </div>
                            </center>
                            </div> 
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                  <a class="nav-link" href="{{url('/dashboard')}}">
                                    <i class="fas fa-home"></i>
                                    Dashboard <span class="sr-only">(current)</span>
                                  </a>
                                </li>
                               
                                <li class="nav-item">
                                   
                                  <a href="{{route('myestimates')}}" class="nav-link">
                                    <i class="fas fa-calculator"></i>
                                     My Estimates
                                  </a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="{{route('myinvoices')}}">
                                    <i class="fas fa-copy"></i>
                                    My Invoices
                                  </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('mypurchases')}}">
                                      <i class="fas fa-shopping-cart"></i>
                                      My Purchases
                                    </a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link active" href="{{route('contactsupport')}}">
                                      <i class="fas fa-phone"></i>
                                      Contact Support
                                    </a>
                                  </li>
                                
            
                              </ul>
                  
                  <ul class="list-unstyled CTAs">
                        <li>
                            <!-- <a href="https://bootstrapious.com/tutorial/files/sidebar.zip" class="download">Download source</a> -->
                        </li>
                        <li>
                            <!-- <a href="https://bootstrapious.com/p/bootstrap-sidebar" class="article">Back to article</a> -->
                        </li>
                    </ul>    
                      
         </div>
         
         
        
        </nav>


        <!-- Page Content  -->
        <div id="content">

           

      <!-- Sidebar -->
      
     
    
<!-- Sidebar end-->
            <main role="main" class="">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                            <div class="container-fluid">
            
                                <button type="button" id="sidebarCollapse" class="btn btn-info">
                                    <i class="fa fa-align-left"></i>
                                    <span><i class="fa fa-arrow-left"></i></span>
                                </button>
                                <div class="mx-3">
                                        <h1 class="h2">Contact Us</h1>
                                    </div>  
                                <button class="btn btn-dark d-inline-block d-lg-none" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <i class="fa fa-align-justify"></i>
                                </button>
                                 
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="nav navbar-nav ml-auto">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('welcome') }}">Request for a Quote </a>
                                        </li>
                                        <li class="nav-item mt-2">
                                            <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" style="color:grey;">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                        </li>
                                       
                                    </ul>
                                </div>
                            </div>
                        </nav>
                  <div class="columns"><div class="column main"><input name="form_key" type="hidden" value="G4E85p2Pyf8YTrYu"><div id="authenticationPopup" data-bind="scope:'authenticationPopup'" style="display: none;">
                    <script>
                        window.authenticationPopup = {"customerRegisterUrl":"https:\/\/avechi.com\/customer\/account\/create\/","customerForgotPasswordUrl":"https:\/\/avechi.com\/customer\/account\/forgotpassword\/","baseUrl":"https:\/\/avechi.com\/"};
                    </script>
                    <!-- ko template: getTemplate() -->
                
                
                
                <!-- /ko -->
                    
                </div>
                
                
                            <script type="text/javascript">
                        var data_city_link="enabled";
                        var data_city_title="City not in list";
                        var data_zip_link="enabled";
                        var data_zip_title="Zip not in list";
                        var data_url="https://avechi.com/city/index/cities/";
                         var data_zip_url="https://avechi.com/city/index/zips/";
                        var loading_url = "https://avechi.com/pub/static/frontend/Codazon/fastest_bigmarket/en_US/Custom_City/images/loader-1.gif";
                                require(["jquery","domReady!"], function($){
                            setTimeout(function(){ addressPageCall();}, 2000);
                        });
                            </script>
                
                
                
                <!--Google Tag Manager: dataLayer - Added by Mageplaza-->
                
                <script>
                    //var checkoutData= JSON.parse(window.localStorage.getItem('mage-cache-storage'));
                    //var cart=checkoutData.cart.item;
                </script>            <script src="https://avechi.com/pub/static/frontend/Codazon/fastest_bigmarket/en_US/Helios_Hssocialmedia/js/hsmedia/hssocial.min.js"></script>
                               <script>
                        $mtkb(window).load(function () {
                            $mtkb('.social-icons .social-icon').mouseenter(function () {
                                $mtkb(this).stop();
                                $mtkb(this).animate({width: '160'}, 500, 'swing', function () {
                                });
                            });
                            $mtkb('.social-icons .social-icon').mouseleave(function () {
                                $mtkb(this).stop();
                                $mtkb(this).animate({width: '43'}, 500, 'swing', function () {
                                });
                            });
                        });
                    </script>
                
                
                    
                    
                    <meta charset="utf-8">
                    
                    <style>
                            h4{text-align:center;color:#222;}.av-contact-container{padding:0 20px;margin-left:50px}.av-contact-div{width:200px;height:auto;float:left;background-color:#fff;margin:15px 15px;padding:15px;border-top:5px solid #ed1e24;box-shadow:5px 5px 10px #ccc;text-align:center}.av-contact-img{width:40px;height:40px;margin-bottom:10px}.av-contact-title,.av-cotact-linkcont{margin-top:12px;margin-bottom:10px;font-size:18px;color:#333}.av-contact-details{font-size:12px;color:#555;line-height:18px;height:44px;margin:0}.av-contact-link{color:#333;text-decoration:none}.av-contact-clear{clear:both}.av-contact-emailReach{margin-bottom:30px}.av-contact-emailCont{width:400px;margin:0 auto;padding:10px 0;text-align:center}.av-contact-emailTitle{font-weight:700;color:#333;font-size:16px}.av-contact-email{font-weight:600;font-size:16px;color:#444;line-height:18px;color:#ed1e24;}.av-contact-socialCont{text-align:center;margin-top:0px}.av-contact-socialIcon{width:49px;height:49px;margin-right:20px}@media (max-width:768px){h2{font-size:1.2em;margin-bottom:10px}.av-contact-container{margin-left:0}.av-contact-div{width:100%;margin-left:0;height: 250px;}.av-contact-details{font-size:14px;color:#555;line-height:18px;height:45px}.av-contact-emailReach{margin-bottom:0}.av-contact-emailCont{width:100%;text-align:center}.av-contact-emailTitle{font-weight:700;color:#333;font-size:16px}.av-contact-socialIcon{width:40px;height:40px;margin-right:10px}}
                    </style>
                
                
                    
                    
                
                <div style="font-family: helvetica;">
                <div class="av-contact-container" >
                  
                
                <div class="av-contact-div">
                <div class="dash"><img class=" av-contact-img" src="https://avechi.com/pub/media/wysiwyg/howtobuy/178456/phone.png" alt="phone icon">
                <p class="av-contact-title">Phone Support</p>
                <p class="av-contact-details">Contact our customer service team via phone or whatsapp on: 0701 10 10 10.</p>
                </div>
                </div>
                
                
                <div class="av-contact-div">
                <div class="dash"><img class="av-contact-img" src="https://avechi.com/pub/media/wysiwyg/howtobuy/178456/map.png" alt="map icon">
                <p class="av-contact-title">Visit us</p>
                <p class="av-contact-details">Pioneer House, Moi Avenue (above Tuskys Pioneer) 4th Floor Shop 402, Nairobi.</p>
                </div>
                </div>
                
                
                <div class="av-contact-div">
                <div class="dash"><img class=" av-contact-img" src="https://avechi.com/pub/media/wysiwyg/howtobuy/178456/clock.png" alt="map icon">
                <p class="av-contact-title">Business Hours</p>
                <p class="av-contact-details">Mon to Fri: 9am to 7pm, Saturday: 9am to 5 pm, Sunday: Closed</p>
                </div>
                </div>
                
                <div class="av-contact-div">
                <div class="dash"><img class=" av-contact-img" src="https://avechi.com/pub/media/wysiwyg/howtobuy/178456/question.png" alt="qusetion icon">
                <p class="av-cotact-linkcont"><a class="av-contact-link" href="https://avechi.com/faq" target="_blank">Our FAQ</a></p>
                <p class="av-contact-details">Get an answer on the most asked questions.</p>
                </div>
                </div>
                
                </div>
              
                    
                    
                <div class="av-contact-clear">
                    
                <div style="padding-top: 20px;">
                    
                <div class="av-contact-emailReach"><h4></h4></div>
                        
                <div class="av-contact-emailCont">
                <p class="av-contact-emailTitle"> Reach the Avechi Customer Support through email </p>
                <p class="av-contact-email">info@avechi.com</p>
                </div>
                    
                </div>
                    
                </div>
                    
                    
                <div class="av-contact-clear">
                    
                <div style="padding: 20px 0;">
                    
                <div style="margin-bottom: 10px"><h4>Get Social</h4></div>
                <div class="av-contact-socialCont" style="margin-bottom: 30px">
                    <a title="facebook" href="https://www.facebook.com/AvechiKenya/" target="_blank"><img class="av-contact-socialIcon" src="https://avechi.com/pub/media/wysiwyg/mail/images/13097/facebook-icons.png" alt="facebook icon"></a> 
                    <a title="twitter" href="https://twitter.com/avechikenya?lang=en" target="_blank"><img class="av-contact-socialIcon" src="https://avechi.com/pub/media/wysiwyg/mail/images/13097/twitter-icon.png" alt="twitter icon"></a> 
                    <a title="instagram" href="https://www.instagram.com/avechikenya/" target="_blank"><img class="av-contact-socialIcon" src="https://avechi.com/pub/media/wysiwyg/mail/images/13097/instagram-icon.png" alt="instagram icon"></a> 
                    <a title="youtube" href="https://www.youtube.com/channel/UCLcFeAE_7WxIL0OwC9eoCNA" target="_blank"><img class="av-contact-socialIcon" src="https://avechi.com/pub/media/wysiwyg/mail/images/13097/Youtube-icon.png" alt="youtube icon"></a></div>
                    
                 </div>   
                    
                </div>
                    
                    
                </div>
                
                
                
                <div class="quickshop-modal">
                </div></div></div>
            </main>
            
        </div>
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
</body>

</html>