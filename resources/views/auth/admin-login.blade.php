<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../images/favicon.ico">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <title>Login Page</title>

  <!-- Bootstrap core CSS -->
  <link href="../css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../css/carousel.css" rel="stylesheet">

 
 <style>
   .form-control::-webkit-input-placeholder {
    color: red;
    opacity: 1
}

.form-control::-moz-placeholder {
    color:  red;
    opacity: 1
}

.form-control:-ms-input-placeholder {
    color:  red;
    opacity: 1
}

.form-control::-ms-input-placeholder {
    color:  red;
    opacity: 1
}

.form-control::placeholder {
    color:  red;
    opacity: 1
}
    input.required:before{
    content:"*";
    font-weight:bold;
  }
.cover{
  
  background: linear-gradient(
      rgba(172, 168, 168, 0.45), 
      rgba(172, 168, 168, 0.45)
    ),url('images/background.png') no-repeat center center fixed;
  
  -webkit-background-size: cover;
  -moz-background-size: cover;
  background-size: cover;
  -o-background-size: cover;

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
 
input[type=number]::-webkit-inner-spin-button {
    opacity: 5
}

.wrapper .form-section{
	background-image: url('../../frontend/Codazon/fastest_bigmarket/en_US/images/globalshopping/bg.png');
	background-size: cover;
	/*padding-top:50px;*/
	padding-bottom: 50px !important;
}
.footer{

      width: 85%;
      margin: auto;

}

</style>
<style>
    input.required:before{
        content:"*";
        font-weight:bold;
      }
    .cover{
      
      background: linear-gradient(
          rgba(224, 230, 230, 0.925), 
          rgba(224, 230, 230, 0.925)
        ),url('images/background.png') no-repeat center center fixed;
      
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
     
    input[type=number]::-webkit-inner-spin-button {
        opacity: 5
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
      background-color: red !important;
      margin-bottom: 0px !important;
      padding:8px  25px 10px 25px;
    }
    .header .company-logo h2{
      color: #fff;
    }
    .header .company-top h1 {
      color: #fff;
      text-align: center;
      font-size: 40px;
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
      font-size: 16px;
      text-transform: uppercase;
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
        font-size: 14px;
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
        font-size: 12px;
      }
      .company-logo,
      .company-link h6{
        text-align: center !important;
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
      
    .btn-google {
  font-family: Montserrat-SemiBold;
  font-size: 18px;
  line-height: 1.2;
  color: red;
  background: white;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 15px;
  width: calc((100% - 20px) / 2);
  height: 50px;
  border-radius: 20px;
  box-shadow: 0 1px 5px 0px rgba(0, 0, 0, 0.2);
  -moz-box-shadow: 0 1px 5px 0px rgba(0, 0, 0, 0.2);
  -webkit-box-shadow: 0 1px 5px 0px rgba(0, 0, 0, 0.2);
  -o-box-shadow: 0 1px 5px 0px rgba(0, 0, 0, 0.2);
  -ms-box-shadow: 0 1px 5px 0px rgba(0, 0, 0, 0.2);
  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;
  position: relative;
  z-index: 1;
}


.bo1 {border-bottom: 1px solid #999999;}

.txt1 {
  font-family: Montserrat-SemiBold;
  font-size: 18px;
  color: #313030;
  line-height: 1.5;
  font-weight: 600;
}
.hov1:hover {
  border-color: black;
  color: red;
}
.btn-google::before,
.btn-face::before {
  content: "";
  display: block;
  position: absolute;
  z-index: -1;
  width: 100%;
  height: 100%;
  border-radius: 10px;
  top: 0;
  left: 0;
  background: black;
   opacity: 0;
  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;
}

.btn-google img {
  width: 30px;
  margin-right: 15px;
  padding-bottom: 3px;
}
.btn-google:hover:before {
  opacity: 1;
}
.btn-google:hover {
  color: #fff;
}

.m-b-10 {
    margin-bottom: 50px;
}
    </style>
  <style>
    body, html {
         height: 100%;
         margin: 0;
        }
     
     .form-control {
       font-family: "FontAwesome"
     }
     body {font-family: Arial;}
     
     /* Style the tab */
     .tab {
         overflow: hidden;
      padding: 0;
      margin: 0;
         background-color:none;
     }
     
     /* Style the buttons inside the tab */
     .tab button {
         background-color: inherit;
         border: none;
         outline: none;
         cursor: pointer;
         padding: 20px 20px;
         transition: 0.3s;
         font-size: 17px;
     }
     
     
     /* Create an active/current tablink class */
     .tab button.active {
       
         border-bottom: 4px solid red;
     }
     
     /* Style the tab content */
     .tabcontent {
         display: none;
         padding: 20px 12px 30px 12px;
         border-top: none;
     }

     @media (min-width: 576px) {
  .form-control  {
    width: 80%;
  }
}

@media (max-width: 576px) {
  .form-control {
    width: 100%;
  }
}

@media (min-width: 768.98px) {
  .r  {
    width: 45%;
  }
}
.mybtn
{
background: red;
color: white;
}
.mybtn:hover{
  background:white;
  color: red;
  border: red solid 2px;
}
        </style>

</head>

<body class="cover">

  <div class="container-fluid " style="background-color:white;">
    <div class="row">
       <div class=" company-logo" style="width:70%;justify-content:center;display:flex;align-content:center;">
          <a href="https://avechi.com">
            <img src="../images/logo2.png"  class="mx-2 my-3" style="border:0;width:40%">
          </a>
       </div>
       <div class=" company-top" style="width:30%;">
         
          <a href="https://avechi.com/how-it-works" style="">
            <h5 class="mt-3 mt-md-4 mt-lg-4" style="color: red;">How It works</h5>
         </a>
       </div>
      
    </div>
 </div>

 




    <!-- Marketing messaging and featurettes
            ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->




      <div class="responsive container " style="  height:100%; justify-content: center;
                
                align-items: center;
            
             display: flex;">



        <div class=" container-fluid r text-center px-0 my-4" style="background-color: #5f75ee;border-top-right-radius:80px;border-bottom-left-radius:80px;">

         

         

          <div id="Login" >
              <form method="POST" action="{{ route('admin.login.submit') }}">
                  @csrf
              <div style="margin-bottom:40px;margin-top: 20px; border-radius: 25px; ">
                <span style="font-weight:-100;font-size: 26px;">
                  <span style="color:#ffffff;font-size: 30px;">WELCOME</span>
                </span>
              </div>
              <div class="container" >
                  <div class="row px-2"  style="display:flex;align-items: center;justify-content: center;">
                   
                    <div class="col-8" style="display:flex;align-items: center;justify-content: center;">
                      
                          <input style="float:left;margin-bottom: 10px;border-radius: 25px" name="username" class="form-control" type="text"
                          placeholder="&#61447;   Username" required autofocus>
                          @if ($errors->has('username'))
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $errors->first('username') }}</strong>
                                      </span>
                                  @endif
                      
                       
                    </div>
                  </div>
                </div>
  
                <div class="container">
                  <div class="row px-2" style="display:flex;align-items: center;justify-content: center;">
                   
                    <div class="col-8" style="display:flex;align-items: center;justify-content: center;" >
                        <input style="float:left;margin-bottom: 40px;border-radius: 25px;
                        color:red" class="form-control"
                          type="password" placeholder="&#61475;     Password" name="password" required>
                          @if ($errors->has('password'))
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $errors->first('password') }}</strong>
                                      </span>
                                  @endif
                    </div>
                  </div>
                </div>

              <div class="container" style="width:40%;">
                <button class="btn  btn-block mybtn" style="font-weight:600;margin-bottom:40px;border-radius: 25px;"
                 type="submit">login</button>
              </div>

            
            </form>
          </div>

        </div>



      </div>
      <!--end of background container-->

    


  



  <!-- Bootstrap core JavaScript
          ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
  <script src="../../assets/js/vendor/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
 


</body>

</html>