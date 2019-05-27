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
                                          </span>
                                          <span class="dropdown-toggle"></span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right" role="menu" style="z-index: 1000;">
                                            <a class="dropdown-item" href="{{ route('mydetails.edit', Auth::user()->id) }}" role="menuitem"><i class="icon wb-user" aria-hidden="true"></i>My Profile</a>
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
                                  <a class="nav-link" href="{{route('contactsupport')}}">
                                    <i class="fas fa-question-circle"></i>
                                    Customer Support
                                  </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="{{route('makereview')}}">
                                      <i class="fas fa-star"></i>
                                      Review
                                    </a>
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
                                        <h1 class="h2">Rate & Review</h1>
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
                 <!-- Users table start -->
 <div class="col-md-8 my-5 m-auto">
    <div class="card ">
            @if($errors->any())
            <div class="alert alert-danger" role="alert">
                    <h4>{{$errors->first()}}</h4>
            </div>
            @endif
        <div class="card-block p-b-0">
              <form action="{{route('savereview')}}" method="POST">
                {{ csrf_field() }}
                      <div class="modal-body">
                        <div class="form-group">
                            <label class="required"><strong>Invoice Number</strong></label> 
                            <input type="text"  name="invid" required autofocus="" id="invid" class="form-control-modal ember-text-field ember-view"></input>
                          </div>
                      
                        <div class="form-group">
                          <label class="required"><strong>Review</strong></label> 
                          <textarea type="text" style="resize: none;min-height: 150px;" name="review" required autofocus="" id="review" class="form-control-modal ember-text-field ember-view"></textarea>
                        </div>
                        
                            <label class="required"><strong>Rate Us</strong></label> 
                        
                        <div class="form-group">
                            <div class="rate">
                                <input type="radio" id="star5" required name="rate" value="5" />
                                <label for="star5" title="Excellent">5 stars</label>
                                <input type="radio" id="star4" required name="rate" value="4" />
                                <label for="star4" title="Very Good">4 stars</label>
                                <input type="radio" id="star3" required name="rate" value="3" />
                                <label for="star3" title="Average">3 stars</label>
                                <input type="radio" id="star2" required name="rate" value="2" />
                                <label for="star2" title="Poor">2 stars</label>
                                <input type="radio" id="star1" required name="rate" value="1" />
                                <label for="star1" title="Bad">1 star</label>
                              </div>   
                        </div>
                       
                      </div>
                      <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" data-submit="modal" id="btnContactUs">Submit</button>
                     
                       </div>
                      </form>
        </div>
    </div>
  </div>
  <!-- Users table end -->
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