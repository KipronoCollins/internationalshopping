
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/favicon.ico">

    <title>Global Shopping</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/carousel.css') }}" rel="stylesheet">

<style>
input.required:before{
    content:"*";
    font-weight:bold;
  }
.cover{
  
  background-color: #dce4ed;
  
  -webkit-background-size: cover;
  -moz-background-size: cover;
  background-size: cover;
  -o-background-size: cover;

}
.cover11{
  
  background: url('images/header.jpg') no-repeat ;
  height:100px;
  width:100%;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  background-size: cover;
  -o-background-size: cover;

}

@media (min-width: 1100.00px) {
  .cont2  {
    width: 100%;
    padding-right: 60px;
    padding-left: 60px;
    margin-right: auto;
    margin-left: auto
  }
}
@media  (min-width:200.98px) and (max-width: 767.98px) 
{
.widths
{ 
  width: 80%;
    padding: 0px 6px;
}
}
@media  (max-width: 200px) 
{
.widths
{ 
  width: 100%;
    padding-right: 0px;
    padding-left: 0px;
    margin-right: 0;
    margin-left: 0;
}
}

.starter-template {
  padding: 3rem 1.5rem;
  text-align: center;
}

.required .control-label:before {
  content:"*";
  color:red;
  font-weight: 800;
  
}
 

#quantity::-webkit-inner-spin-button,
#quantity::-webkit-outer-spin-button
{
    /* display: none; <- Crashes Chrome on hover */
    -webkit-appearance:auto;
    opacity: 1;
    margin: 0; 
    /* <-- Apparently some margin are still there even though it's hidden */
}


.footer{

      width: 85%;
      margin: auto;

}
.padd {
    padding-top: 35px;
    padding-bottom: 15px;
    
   
}
.social-icons-wrap
{
margin-top:5px;
margin-bottom:10px;
margin-right:3px;
margin-left:12px;
}
.sub-btn button {
    padding: 8px 40px;
    font-size: 20px;
    background-color: #7c8ff5 !important;
    border: 1px #7c8ff5;
    border-radius: 2px;
}
.required-field span {
    color: #FF0000;
    font-size: 18px;
    width: 90%;
    display: block;
    margin: 0 auto;
}


.header{
	
	margin-bottom: 0px !important;
	padding:8px  25px 10px 25px;
}
.header .company-logo h2{
	color: #fff;
}
.header .company-top h1 {
	color: #fff;
	text-align: center;
	
	font-weight: 500;
  margin-bottom: 0px;
  margin-top: 3px;
} 
.header .company-top h5 {
	color: #fff;
	text-align: center;
	font-size: 20px;
  font-weight: bold;
  margin-top: 3px;
} 
.header .company-link h6 {
	color: #fff;
	text-align: right;
	padding-top: 14px;
	font-weight: 500;
	font-size: 24px;

  margin-top: 3px;
  position: relative;
    min-height: 1px;
    padding-left: 10px;
    padding-right: 10px;
}
.header img {
    width: 220px;
    max-width:100%;
    height:auto;
}

@media (max-width: 767px){
.header img {
    width: 122px;
}
.header .company-top h1 {
		font-size: 21px;
	}
	.header .company-top h5 {
		font-size: 14px;
	}
	.header .company-link h6 {
		font-size: 16px;
		padding-top: 0px;
		margin-bottom: 0px;
  }
  .row-product .cancel{
		right: -10px;
	}
}
@media (max-width: 490px){
.header img {
    width: 80px;}
    .header .company-top h1 {
		font-size: 14px;
	}
	.header .company-top h5,
	.header .company-link h6 {
		font-size: 14px;
	}
	.company-logo,
	.company-link h6{
		text-align: center !important;
	}
}
@media (max-width: 1200px){
.logo{
    width: 80%;
}
}
.row-product .cancel {
	background: #2962ff !important;
	color: #fff;
	padding-top:10px;
  margin-top: 5px;
	width: 30px;
	height: 30px;
	line-height: 9px;
	font-size: 14px;
	font-weight: 700;
	text-align: center;
	cursor: pointer;
	border-radius: 2px;
}
@media (max-width: 767px)
{
.row-product .cancel {
  position: absolute;
  right: 10px;
  background: #2962ff !important;
	color: #fff;
	padding: 3px;
	width: 15px;
	height: 15px;
	line-height: 9px;
	font-size: 9px;
	font-weight: 700;
	text-align: center;
  cursor: pointer;
  margin-top:50px;

	border-radius: 2px;
}
}

a:hover {
    text-decoration: none
}

.calc{
    font-size: 18px;
    font-weight:600;
}
.calcs{
    /* font-size: 18px; */
    font-weight:600;
}

.calcsrow{
    font-size: 25px;
    font-weight:600;
    border: none;
    width: 80%;
    /* border:magenta 2px solid; */
}
.tots{
color: dodgerblue;
font-size: 2rem;
font-weight: bolder;
}
#price1,#quantity1,#weight{
    font-weight: 600;
    color: black;
    width: 90%
}
.calcy{
    font-size: 28px;
    font-weight:600;
}
.calcinput1{background: url(images/g.png) no-repeat scroll 0px 0px;
padding-left:30px;
text-align: center;
}
.calcinput2{background: url(images/quantity.png) no-repeat scroll 0px 0px;
padding-left:30px;
text-align: center;
}
.calcinput3{background: url(images/weight.png) no-repeat scroll 0px 0px;
padding-left:30px;
text-align: center;
}	


        * {
            box-sizing: border-box;
        }
        
        input[type=number], select, textarea {
            /* width: 95%; */
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
        }
        
        label {
            padding: 12px 12px 12px 0;
            display: inline-block;
        }
        
        input[type=submit] {
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        
        input[type=submit]:hover {
            background-color: #45a049;
        }
        
        .container {
            border-radius: 5px;
            background-color: white;
            
        }
        
        .col-25 {
            float: left;
            width: 20%;
            margin-top: 6px;
        }
        
        .col-75 {
            float: left;
            width: 75%;
            margin-top: 6px;
        }
        .col-90 {
            float: left;
            width: 90%;
            margin-top: 6px;
        }
        .col-10 {
            float: left;
            width: 10%;
            margin-top: 6px;
        }
        .col-50 {
            float: left;
            /* width: 50%; */
            margin-top: 6px;
        }
        .col-70 {
            float: left;
            width: 70%;
            margin-top: 6px;
        }
        .col-30 {
            float: left;
            width: 30%;
            margin-top: 6px;
        }
        
        .col-100 {
            float: left;
            width: 100%;
            margin-top: 6px;
        }
      
        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }
        
        /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {
           .col-25,.col-30, .col-50, .col-70,.col-75,.col-100, input[type=submit] {
                /* width: 100%; */
                margin-top: 0;
            }
        }
        .table td, .table th {
    padding: .75rem;
    vertical-align: top;
    border-top: none;
        }
        #price1::-webkit-outer-spin-button,
#price1::-webkit-inner-spin-button,
#quantity1::-webkit-inner-spin-button,
#quantity1::-webkit-outer-spin-button,
#weight::-webkit-inner-spin-button,
#weight::-webkit-outer-spin-button {
    /* display: none; <- Crashes Chrome on hover */
    -webkit-appearance:none;
    opacity: 0;
    margin: 0; 
    /* <-- Apparently some margin are still there even though it's hidden */
}
        </style>
  </head>

  <body >

      

    <main role="main" class="">
<!-- Marketing messaging and featurettes
            ================================================== -->
            <!-- Wrap the rest of the page in another container to center all the content. -->
           
            <!-- start of header div-->
                 <div class="container-fluid m-0 p-0"style="max-height:100px;min-width:100%;background-color:white">
                    
                    <div class="mb-lg-2 mt-2 mt-md-3" style="display:inline-flex;background-color:white;height: 100%;width:47%;">
                            <div class=" company-logo " style="margin-left:20%;width:30%;">
                                    <a href="https://avechi.com">
                                      <img src="images/logo2.png"  class="" style="border:0; width: 100%;" >
                                    </a>
                                 </div>
                    </div>
                    <div class="p-2 pb-md-4  pb-lg-5 m-0" style="float:right;border-top-left-radius:60px;display:inline-flex;background-color:#465ff0;width:52.7%;">
                        <div class="company-link" style="width:25%;text-align:center;margin-top:3%;margin-left: 10%;">
                        <a href="{{route('login')}}"> 
                                <h6 style="color:white;">login</h6>
                                </a>
              
                 </div>
                             <div class="company-link" style="width:70%;text-align:left;margin-top:3%;">
                                    <div> <a href="https://avechi.com/how-it-works">
                                        <h6 style="color:white;">how It works</h6>
                                     </a>
                                 </div>
                                   
                                 </div>
                                 
                </div>
                    
                    </div>
                 <!-- end of header div-->           
               
                  <!-- start of main banner div-->
                <div id="myCarousel" class="carousel slide mb-0" data-ride="carousel"   >
                 <div class="carousel-inner" >
                    <div class="carousel-item active">
                        <img src="images/main.png" style="width:100%;color:maroon;font-size: 30px;" alt="Oops! Global Shopping image"> 
                         <div class="container">
                        <div class="carousel-caption ">
                          </div>
                      </div>
                    </div>
                   
                  </div>
                   </div>
   <!-- start of main banner div-->

            <div class="container-fluid cont2 marketing cover" >
              
    


              <!-- Three rows of text below the carousel -->
            
              <script type="text/javascript">
                //<![CDATA[
        
                function calc() {
        
                    $("#price1,#quantity1").keyup(function () {
                      $('#amount').val('$ '+parseFloat($('#price1').val() * $('#quantity1').val()).toFixed(2));
                    });
                    $("#weight").keyup(function () {
                      $('#shippingcost').val('$ '+ parseFloat($('#weight').val() * 10).toFixed(2));
                    });
                    $("#amount,#shippingcost,#price1,#quantity1,#weight").keyup(function () {
$('#total').val('$ '+parseFloat (parseFloat($('#price1').val() * $('#quantity1').val())+ parseFloat($('#weight').val() * 10)).toFixed(2));
                    });
                                }
            </script>          
                       
                                  <div class="container required mb-5">
                                        <h4 class="mb-3 mt-0 ml-3 pl-5 pt-5" style="font-size:18px;text-align:left;color:black; font-weight:500;">
                                                <b>SHIPPING CALCULATOR</b></h4>
                                                <hr class="m-0 mb-3" style="width:90%">
                                    
                                    <div class="row px-0 px-md-5 pb-5">
                                        <div class="col-md-6 pl-5 pl-md-5 ">
                                            <div class="row mb-4" id="mycalc">
                                                <div class="col-25" style="text-align:left">
                                                <label class="calc" for="fname">Price:</label>
                                                </div>
                                                
                                                <div class="col-75">
                                                        <span class=" required control-label "> </span>
                                                <input class="calcinput1" onkeyup="calc()" type="number" id="price1" name="price1" placeholder="" style="background-color: #efefef;">
                                                </div>
                                                </div>
                                                <div class="row mb-4">
                                                    <div class="col-25" style="text-align:left">
                                                    <label class="calc" onkeyup="calc()" for="lname" >Qty:</label>
                                                    </div>
                                                    
                                                    <div class="col-75">
                                                            <span class=" required control-label "> </span>
                                                    <input class="calcinput2" type="number" id="quantity1" name="quantity1" placeholder="" style="background-color: #efefef;">
                                                    </div>
                                                    </div>
                                                    
                                                    <div class="row mb-4">
                                                    <div class="col-25" style="text-align:left">
                                                    <label class="calc" onkeyup="calc()" for="lname">Weight:</label>
                                                    </div>
                                                    
                                                    <div class="col-75">
                                                            <span class=" required control-label "> </span>
                                                        <input class="calcinput3" type="number" id="weight" name="weight" placeholder="" style="background-color: #efefef;">
                                                    </div>
                                                    </div>
                                        </div>
                                        <div class="col-md-6">

<table class="" >
    <tbody>
        <tr style="width:80%">
            <td><label class="calcs" for="lname">Total items price:</label></td>
            <td><input type="text" readonly class="calcsrow" id="amount"  onkeyup="calc()"></td>
        </tr>
        <tr>
                <td><label class="calcs" for="lname">Shipping charges:</label></td>
                <td style="border-bottom: rgb(219, 211, 211) 3px solid;">
                    <input class="calcsrow" id="shippingcost" readonly onkeyup="calc()"></td>
            </tr>
            <tr style="border-bottom: rgb(219, 211, 211) 3px solid;">
                    <td><label class="calcy" for="lname">Total:</label></td>
                    <td><input class="calcsrow tots" readonly id="total" onkeyup="calc()"></td>
                </tr>
    </tbody>
</table>


                                            
                                                        <div class="row mt-5">
                                                            <div class="col-100 px-4" style="text-align:left">
                                                            <label for="lname">This is only an estimate and the charges are subject to change</label>
                                                            </div>
                                                            
                                                            </div>
                                        </div>
                                    </div>
                                   
                                </div>
                                <div>  
                                <form action="{{ route('submitquote') }}" class="required pb-5 mb-4" aria-label="{{ __('Create') }}" method="POST" >

                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                
                    <!-- names... -->
              <div class="row required">
                <div class="col-md-12">
                  <h2 class="mb-5 mt-0" style="font-size:37px;text-align:center;color:black; font-weight:500;">
                    <b>Request for a Quote</b></h2>
                    <div class="card" style="width: 100%;">
                        <div class="card-body py-4" >
    
                            <h2 class=" " style="color:black; font-weight:400;">
                                Contact Info:</h2>
                                <hr style="border: rgb(223, 227, 231) solid 1px">
                       
                            <div class="row">
                                
                                <div class="col-md-6 mb-3">
                                    
                               <div class="col-12">
                                <span class=" required control-label "> </span>
                                <input type="text" class="col-md-6 form-control widths required" id="name" name="name"
                                placeholder="" value="" required>  
                              </div>
                               <div> <label class="ml-3 mt-3 col-12" for="names">Name</label></div>
                                 
                                </div>
                                <div class="col-md-6 mb-3">
                                  
                                    <div class="col-12">
                                        <span class="required control-label "> </span>
                                        <input type="text" class="col-md-6 form-control widths required" 
                                        id="address" name="address" placeholder="" value="" required>   
                                      </div>
                                       <div><label class="ml-3 mt-3 col-12" for="address">Address</label></div>
                                       
                                </div>
                              </div> <!-- end details row -->
                        
                        <div class="row">
                        <div class="col-md-6 mb-3">
                          
                            <div class="col-12">
                                <span class=" required control-label "> </span>
                                <input type="text" class="col-md-6 form-control widths required" id="phonenumber" name="phonenumber" placeholder="" required>
                            </div>
                               <div><label class="ml-3 mt-3 col-12" for="phonenumber">Phone Number</label></div>
                           
                          </div><!-- end of row 1 -->
                          <div class="col-md-6 ">
                              <div class="col-12">
                                  <span class=" required control-label "> </span>
                                  <input type="email" class="col-md-6 form-control  widths required" id="email" placeholder="you@example.com" name="email"  required>
                            </div>
                                 <div><label class="ml-3 mt-3 col-12" for="email">Email Address</label></div>
                           
                          </div>
    </div>
                       </div> <!-- end of row 2 -->
    
                        </div>
                  </div>
              </div><!-- /.row -->

              <div class="row my-5 required">
                  <div class="col-12">
                     <div class="card" style="width: 100%;">
                      <div class="card-body">
  
                          <h2 class="mt-4 mx-0 mb-2" style="color:black; font-weight:400;">
                            Product Details:</h2>
                          
                            <div class="row row-product" >

                         <div class="col-10 ml-4"  style="width: 100%;float: left;
                         padding-bottom: 20px;border-top: 1px solid #ddd;padding-top: 15px;" ></div>
    <div class="col-md-3 mb-3 minus">
        <label class="required control-label "> </label>
        <input type="text" class="form-control1" name="productname[]" id="productname" placeholder="" value="" required>
      <div><label class="ml-2 mt-2">Product Name</label></div>
     
    </div>
    <div class="col-md-3 mb-3">
        <label class="required control-label "> </label>
        <input type="text" class="form-control1" name="productlink[]" id="productlink" placeholder="" value="" required>
      <div><label class="ml-2 mt-2" for="lastName">Product Link</label></div>
      
    </div>
  
  <div class="col-md-3 mb-3">
      <label class=" required control-label "> </label>
      <input type="text" class="form-control1" name="option[]" id="option" placeholder="" required>
     <div><label class="ml-2 mt-2">Size/Color/Option</label></div>
      
    </div><!-- end of row 1 -->
  <div class="col-md-2 mb-3">
    <label class=" required control-label "> </label>
    <input type="number" class="form-control2" name="quantity[]" value="3"  id="quantity" placeholder="3" min="1" max="50" required>
    <div><label class=" mt-2">Quantity</label></div>
   
  </div>

  </div>

  <button type="button" class="btn btn-primary mb-5" onclick="addmore()">+ Add products</button>
  <div class="row">
    <div class="col-md-12" style="color:darkgrey;font-size:26px">
      Example  
    </div>
    <div class="col-md-3" style="color:black;font-size:22px">
        Apple 13.3" MacBook Air
    </div>
    <div class="col-md-3" style="color:black;font-size:22px">
        https://www.amazon.com/Apple-13-3-MacBook-Air
    </div>
    <div class="col-md-3" style="color:black;font-size:22px">
Silver
    </div>
    <div class="col-md-3" style="color:black;font-size:22px">
2
    </div>
</div>
                     </div> <!-- end of products row -->

                     

                     <div>

                        
                

                     </div>
  
                      </div>
                    </div>
                </div><!-- /.row -->
      



                <div class="row my-4 required">
                    <div class="col-12">
                       <div class="card" style="width: 100%;">
                        <div class="card-body">
    
                            <h2 class=" " style="color:black; font-weight:400;">
                              Specific instruction:</h2>
                              <hr style="border: rgb(223, 227, 231) solid 1px">
                     
                            <div class="row">
                                
                          <div class="col-md-12 mx-0 mb-3 justify-content-center" style="display: flex;">
                             
                            <textarea type="textarea" class="mt-3 form-control1" id="specs" name="specs" 
                            placeholder="" style="width:100%;height: 200px;" value="" required></textarea>
                            
                          </div>
                        </div>
                        </div>
    
                       </div> <!-- end of products row -->
  
                       
                       <div>
  
                          
                  
  
                       </div>
    
                        </div>
                      </div>
                   

                    <div class=" text-center sub-btn">
                      <button type="submit" class="btn btn-info">SUBMIT</button>
                   </div>
                  
                   <div class="required-field mt-3">
                    <span>* this field is required</span>
                 </div>
                 
                  </div>

               

              </form>
              
      
            </div><!-- /.container -->
      
      
            
          </main>

          
      
<!-- FOOTER -->

<div class="container footer form-input">
  <form class="form-horizontal">
     <div class="container" >
        <div class="row padd ">
           <div class="form-group form-group-sm font-small col-12 col-sm-6">
              <div>
                 <h4>Contact Us:</h4>
                 <!-- <span>Email: globalshopping@avechi.com</span> -->
                 <div>Safaricom: 0702 98 98 98</div>
                 <div>Airtel: 0754 60 69 64</div>
              </div>
           </div>
           <div class="form-group form-group-sm font-small col-12 col-sm-6">
            <div class="row">
               <div class="text-left col-sm-12 col-lg-12 col-md-12 col-xs-12">
                  <h4>Follow Us:</h4>
               </div>
               <div class="social-icons-wrap ml-3">
                  <a href="https://www.facebook.com/AvechiKenya/"><img src="https://avechi.com/pub/static/frontend/Codazon/fastest_bigmarket/en_US/images/globalshopping/fb.png" width="30" height="30"></a>
               </div>
               <div class="social-icons-wrap">
                  <a href="https://www.instagram.com/avechikenya/"><img src="https://avechi.com/pub/static/frontend/Codazon/fastest_bigmarket/en_US/images/globalshopping/instagram.png" width="30" height="30"></a>
               </div>
               <div class="social-icons-wrap">
                  <a href="https://www.youtube.com/channel/UCLcFeAE_7WxIL0OwC9eoCNA"><img src="https://avechi.com/pub/static/frontend/Codazon/fastest_bigmarket/en_US/images/globalshopping/youtube.png" width="30" height="30"></a>
               </div>
               <div class="social-icons-wrap">
                  <a href="https://twitter.com/avechikenya?lang=en">
                    <img src="https://avechi.com/pub/static/frontend/Codazon/fastest_bigmarket/en_US/images/globalshopping/twitter.png" width="30" height="30"></a>
               </div>
            </div>
         </div>
        </div>
     </div>
  </form>
</div>


          <!-- Bootstrap core JavaScript
          ================================================== -->
          <!-- Placed at the end of the document so the pages load faster -->
          <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
          <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
          
          <script src="js/bootstrap.min.js"></script>
         
          <script>
            
            function addmore(){
            
              
                jQuery(".row-product:first").clone().find("input").val("").end().insertAfter(".row-product:last");
jQuery( ".row-product:last" ).append( "<span class='cancel'>X</span>" );

     $( ".cancel" ).click(function () {
     
     
           
            $(this).parent('.row-product:last').remove();

           
          });

            } 
  
         </script>
        
      </body>
      </html>
      