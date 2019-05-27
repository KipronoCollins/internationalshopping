<!DOCTYPE html>
<html>

<head>
    
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>My Profile</title>
<!-- sidebar style  -->

<!-- Our Custom CSS -->
 
  <!-- Font Awesome JS -->
  <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
  <!-- <link href="../css/dashboard.css" rel="stylesheet"> -->

<!-- Request  Quotation core CSS -->
<!-- <link href="../css/navbarsite.css" rel="stylesheet"> -->
<link href="{{ asset('../css/feather.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
 

   <!-- Request  Quotation core CSS -->
   <link href="{{ asset('../css/style.css') }}" rel="stylesheet">
   <link href="{{ asset('../css/navbarsite.css') }}" rel="stylesheet">
   <link href="{{ asset('../css/feather.css') }}" rel="stylesheet">
   <link href="{{ asset('../css/myprofile.css') }}" rel="stylesheet">

  <title>Dashboard Template for Bootstrap</title>

  <!-- Bootstrap core CSS -->
  <link href="{{ asset('../css/bootstrap.min.css') }}" rel="stylesheet">
  <script src="../js/bootstrap.min.js" ></script>
 <script src="../js/pcoded.min.js" ></script>
  <!-- Custom styles for this template -->
  <link href="../css/dashboard.css" rel="stylesheet">
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="../js/profile.js"></script>

<link href="{{ asset('../css/style4.css') }}" rel="stylesheet">

<style>

div.fixed-top a.dropdown-item {
  color:blue;
  text-decoration: none;
  background-color: transparent;
}
div.fixed-top a.dropdown-item:hover {
  color: red;
text-decoration: none;
background-color: transparent;
/* font-size:16px; */
}
div.fixed-top a{
  color:white;
  text-decoration: none;
  background-color: transparent;
}
div.fixed-top a:hover {
  color: black;
text-decoration: none;
background-color: transparent;
/* font-size:16px; */
}
a{
  color:grey;
  text-decoration: none;
  background-color: transparent;
}
a:hover {
  color: red;
text-decoration: none;
background-color: transparent;
/* font-size:16px; */
}

.card .card-header .card-header-right {
  right: 10px;
  top: 13px;
  display: inline-block;
  padding: 7px 0;
  position: absolute;
}
.card .card-header .card-header-right {
  right: 10px;
  top: 13px;
  display: inline-block;
  
  padding: 7px 0;
  position: absolute;
}
.card .card-header .card-header-right i {
  margin: 0 4px;
  cursor: pointer;
  font-size: 14px;
  font-weight: 500;
  color: #333;
  line-height: 1;
}

.list-unstyled {

  list-style: none;
}
.feather {
  font-family: 'feather' !important;
  font-style: normal;
  font-weight: normal;
  font-variant: normal;
  text-transform: none;
  line-height: 1;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
.icon-maximize:before {
  content: "\e908";
}

.form-control-modal {
  display: block;
  width: 100%;
  padding: .375rem .75rem;
  font-size: .9375rem;
  line-height: 1.5;
  color: #495057;
  background-color: #fff;
  border: 1px solid #ced4da;
  border-radius: .25rem;
  transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}

.avatar img {
width: 35px;
  height:35px ;
  border: 0 none;
  border-radius: 100%;}

  div.header .nav-link{
    padding: 0rem .8rem ;
  }

.review-conversation .header-section .star {
  font-size: 30px;
}

</style>


<style>

#form1 {

display:none;

}

</style>

</head>

<body style="margin:0;padding:0">

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
                                    <a class="nav-link active" href="{{url('/dashboard')}}">
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
                                          <a class="nav-link" href="{{route('contactsupport')}}">
                                            <i class="fas fa-question-circle"></i>
                                            Customer Support
                                          </a>
                                        </li>
                                        <li class="nav-item">
                                          <a class="nav-link" href="{{route('makereview')}}">
                                            <i class="fas fa-star"></i>
                                            Review
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
                                        <h1 class="h2">My Profile</h1>
                                    </div>  
                                <button class="btn btn-dark d-inline-block d-lg-none " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
        
              <main>
                      
           
                <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
               
      
                <div class="container-fluid bootstrap snippet pl-md-0 pr-md-0 p-lg-5">
                  <form class="form-horizontal" method="POST" action="{{ route('mydetails.update', Auth::user()->id) }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
      
                    {{ method_field('PATCH') }}
                    
                      <div class="row" >
                            <div class="col-sm-4 col-md-3 col-lg-3 mb-4"style="display: block;
                            margin-left: auto;
                            margin-right: auto;"><!--left col-->
                                <div class="text-center">
                                <img src="{{ asset('/uploads//'.$avatar) }}" class="avatar img-circle img-thumbnail" alt="avatar">
                                <h6>Upload a different photo...</h6>
                                <input type="file" name="file" id="file" class="text-center center-block file-upload"><br>
                              </div>
                        </div><!--/col-3-->
                          <div class="col-sm-8 col-md-9 col-lg-7 pl-lg-3 pr-0" style="display: flex;
                          align-items: center;
                          justify-content: center;">
                           
                                  <div class="panel panel-default">
                                        <div class="panel-heading">
                                        
                                        </div>
                                       
                                         
                                          <div  id="wrapper">
                                            <section id="core">
                                                 <div class="profileinfox">
                                                    <div class="gear">
                                                         <label>Name:</label>
                                                    <input id="name" name="name" class=" hlite" value="{{ $name}}" />
                                                      </div>
                                                    <div class="gear">
                                                        <label>Phone Number:</label>
                                                    <input id="tel" name="phonenumber" class="hlite" value="{{ $phonenumber }}" />
                                                       </div>
                                                    <div class="gear">
                                                         <label>Email:</label>
                                                         <span id="email" name="email" class="datainfo">{{ $email }}</span>
                                                         
                                                         
                                                     </div>
                                                    
                                                      
                                                     
                                                     
                                                      
                                                     
                                                 </div>
                                             </section>
                                         </div>
                                     </div>
                                     </div>

                                    </div>

                                    <div class="panel panel-default">
                                        
                                      <div class="panel-body">
                                       
                                        
                                        <div class="form-group">
                                          <div class="col-sm-10 col-sm-offset-2" 
                                          style="align-items:center;justify-content:center;display: flex;">
                                            <button type="submit" class="btn btn-primary m-2">Save</button>
                                            <button type="reset" class="btn btn-default m-2">Cancel</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    </form>
                                   
                                    
                                          
                               
                            
                  
                          </div><!--/col-9-->
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
