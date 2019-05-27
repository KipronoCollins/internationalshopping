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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
    <!-- <link href="../css/dashboard.css" rel="stylesheet"> -->
  
  <!-- Request  Quotation core CSS -->
<link href="../css/feather.css" rel="stylesheet">

 <title>Dashboard Template for Bootstrap</title>

 <!-- Bootstrap core CSS -->
 <link href="../css/bootstrap.min.css" rel="stylesheet">
 <script src="../js/bootstrap.min.js"></script>
<script src="../js/pcoded.min.js"></script>
<script src="../js/tables.js"></script>
 <!-- Custom styles for this template -->
 <link href="../css/dashboard.css" rel="stylesheet">
 <link rel="stylesheet" href="../css/style4.css">
<!-- sidebar style  -->
<script>
function DoNav(theUrl)
  {
  document.location.href = theUrl;
  }
  </script>

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
                                        <h1 class="h2">Home</h1>
                                    </div>  
                                <button class="btn btn-dark d-inline-block d-lg-none" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <i class="fa fa-align-justify"></i>
                                </button>
                                 
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="nav navbar-nav ml-auto">
                                            <li class="nav-item dropdown show">
                                                    <a class="nav-link" style="background: #f8f9fa"  href=" {{ route('userinbox') }} " title="Messages" aria-expanded="true" data-animation="scale-up" role="button">
                                                        <i class="fa fa-envelope" style="font-size:20px;" aria-hidden="true"></i>
                                                        <sup class="badge badge-pill badge-info up" style="    position: relative;
                                                        top: -10px;
                                                        margin: 0px -0.8em;
                                                        border-radius: 15px;"> {{ $messages }} </sup>
                                                      </a>
                                                   
                                                  </li>
                                        <li class="nav-item ">
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
                        
            <div class="row mb-2 mt-4">
                <div class="col-md-6">
                  <div class="card flex-md-row mb-4 box-shadow h-md-250">
                    <div class="card-body d-flex flex-column align-items-start">
                      
                      <div>
                      <h6 class="h5 text-dark d-inline-block mb-2  ">Account Information</h6>
                    </div>
                    <hr style="border-bottom:1 rem solid green;width:100%">
                    <p class="mb-0 mt-2 h6">
                        Contact information
                      </p>
                      <p class="mb-0 mt-2">
                        {{ $name }}
                      </p>
                      <p class="card-text mb-auto">
                        {{ $phonenumber }}
                      </p>
                      <p class="card-text mb-auto">
                        {{ $email }}
                      </p>
                     
                      <div class="">
                        <a href="{{ route('mydetails.edit', Auth::user()->id) }}" style="float:right;margin-left: 200px;">
                        <i class="fa fa-edit" aria-hidden="true"></i>
                        Edit</a>
                    </div>
                    </div>
                    <!-- <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Card image cap"> -->
                  </div>
                </div>
                <div class="col-md-6">
                    <div class="card flex-md-row mb-4 box-shadow h-md-250">
                      <div class="card-body d-flex flex-column align-items-start">
                        
                        <div>
                        <h6 class="h5 text-dark d-inline-block mb-2  ">Address book</h6>
                      </div>
                      <hr style="border-bottom:1 rem solid green;width:100%">
                        <p class="mb-0 mt-2 h6">
                          Default delivery address
                        </p>
                        <p class="card-text mb-auto mt-2">
                          
                        </p>
                        <p class="card-text mb-auto">
                            Madaraka estate Langata, Nairobi West / South C Nairobi 
                        </p>
                       
                        
                        <div class="">
                        <a href="addbook.html" style="float:right;margin-left: 200px;">
                            <i class="fa fa-edit" aria-hidden="true"></i>
                            Edit</a>
                      </div>
                      </div>
                      <!-- <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Card image cap"> -->
                    </div>
                  </div>
              </div>
            <!-- end of contact-info card -->
            
            <!-- Estimates table start -->
            <div class="col-md-12">
                <div class="card table-card">
                    <div class="card-header">
                        <h5>Estimates</h5>
                        <div class="card-header-right">
                            
                                <!-- <ul class="list-unstyled card-option" style="width: 130px;">
                                    <li class="first-opt" style="display: none;"><i class="feather open-card-option icon-x"></i></li>
                                    <li><i class="feather full-card icon-maximize"></i></li>
                                    <li><i class="feather icon-minus minimize-card"></i></li>
                                    <li><i class="feather icon-refresh-cw reload-card"></i></li>
                                    <li><i class="feather icon-trash close-card"></i></li>
                                    <li><i class="feather open-card-option icon-x"></i></li>
                                </ul> -->
    
                                
                               
                        </div>
                    </div>
                    <div class="card-block p-b-0">
                        <div class="table-responsive" >
                            <table class="table  m-b-0" id="example">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Estimate #</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>@if ($estimateid != null)
                                    
                                
                                    @for ($i = 0; $i < count($estimateid); $i++)
                                        
                                   
                                   <tr class="myest"  onclick="DoNav('{{ route('approveestimate', ['eid'=>$estimateid[$i]]) }}');">
                                    <td>{{ $t = $i + 1 }}</td>
                                        
                                        <td>{{ $estimateid[$i] }}</td>
                                        <td>{{ $date[$i] }}</td>
                                        <td>
                                          Not Seen
                                        </td>
                                    </tr>
                                    @endfor
    
                                    @else
    
                                    <tr>
                                      <td colspan="4" style="text-align:center">
                                        You have no estimates as of now
                                      </td>
                                    </tr>
                                        
                                    @endif</tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Estimates table end -->
    
    <!-- Invoices table start -->
    <div class="col-md-12 my-5">
      <div class="card table-card">
          <div class="card-header">
              <h5>Invoices</h5>
              <div class="card-header-right">
                  
                      <!-- <ul class="list-unstyled card-option" style="width: 130px;">
                          <li class="first-opt" style="display: none;"><i class="feather open-card-option icon-x"></i></li>
                          <li><i class="feather full-card icon-maximize"></i></li>
                          <li><i class="feather icon-minus minimize-card"></i></li>
                          <li><i class="feather icon-refresh-cw reload-card"></i></li>
                          <li><i class="feather icon-trash close-card"></i></li>
                          <li><i class="feather open-card-option icon-x"></i></li>
                      </ul> -->
                     
              </div>
          </div>
          <div class="card-block p-b-0">
              <div class="table-responsive">
                  <table class="table m-b-0" id="example">
                      <thead>
                          <tr >
                              <th>Invoice #</th>
                              <th>Date</th>
                              <th>Amount</th>
                              <th>Status</th>
                          </tr>
                      </thead>
                      <tbody>
                          @if (count($invoices) != 0)
                        @foreach ($invoices as $item)
                        <tr class="myest" 
                        onclick="DoNav('{{ route('printinvoice', ['iid'=>$item->invoiceid]) }}');">
                                    <td> {{ $item->invoiceid }} </td>
                                    
                                    <td> {{ substr($item->created_at, 0, -9) }} </td>
                                    <td> {{ $item->amount }} </td>
                                    <td> {{ $item->status }} </td>
                                </tr> 
                        @endforeach
                        @else
  
                        <tr>
                          <td colspan="4" style="text-align:center">
                            You have no estimates as of now
                          </td>
                        </tr>
                        @endif</tbody>
                  </table>
              </div>
          </div>
      </div>
    </div>
    <!-- Invoices table end -->
    
     
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
