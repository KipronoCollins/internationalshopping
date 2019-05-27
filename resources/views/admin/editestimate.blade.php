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
                         <a class="nav-item dropdown mt-2" >
                                      <a class="nav-link navbar-avatar" data-toggle="dropdown" href="#" aria-expanded="false">
                                        
                                        <div class="row" style="margin-top:8px;">
                                         
                                         <i class="fas fa-user" style="margin:5px;"></i>
                                        <h5>Admin</h5>
                                        <span class="dropdown-toggle" style=""></span>
                                      </div>
                                          
                                      </a>
                                      <div class="dropdown-menu dropdown-menu-right" role="menu">
                                        <a href="{{ url('/logout') }}" class="dropdown-item" role="menuitem"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                   </div>
                            </a>
                     
                       
                    </center>
                    </div> 
         
                    <ul class="nav flex-column">
                        <li class="nav-item">
                          <a class="nav-link" href="{{url('/admin')}}">
                            <i class="fas fa-home"></i>
                            Dashboard <span class="sr-only">(current)</span>
                          </a>
                        </li>
                      <li class="nav-item">
                            <a class="nav-link" href="{{ route('requests') }}">
                              <i class="fas fa-file"></i>
                              Requests
                            </a>
                          </li>
                        <li class="nav-item">
                          <a class="nav-link  active" href="{{route('editestimate')}}">
                            <i class="fas fa-calculator"></i>
                            Estimates
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="{{route('admininvoices')}}">
                            <i class="fa fa-copy"></i>
                            Invoices
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="{{route('adminsales')}}">
                            <i class="fa fa-tag" aria-hidden="true"></i>
                            Sales
                          </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('displayadmininbox')}}">
                                <i class="fas fa-question-circle"></i>
                                Customer Support
                            </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="{{route('managereviews')}}">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            Reviews
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
            <!-- <div class="actions sidebar-sticky" style="position: sticky;
            bottom: 0%;
            right: 0;
            left: 0;
            font-size: 16px;">
            <ul class="nav flex-column" style="">
                   <li class="nav-item">
                           <a class="nav-link" href="contactus.html">
                             <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
                             Log Out
                           </a>
                         </li>
               </ul>
        </div>      -->
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
                                        <h1 class="h2">Edit estimate</h1>
                                    </div>  
                                <button class="btn btn-dark d-inline-block d-lg-none " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <i class="fa fa-align-justify"></i>
                                </button>
                                 
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="nav navbar-nav ml-auto">
                                       
                                        <li class="nav-item">
                               
                                            <a href="{{ url('/logout') }}" class="dropdown-item" role="menuitem"
                                                onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
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
        
                        <main role="main" class="">
       
                            <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
                            <html xmlns="http://www.w3.org/1999/xhtml">
                            
                            <head>
                              <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
                              
                              <title>Editable Estimate</title>
                              
                              <link rel='stylesheet' type='text/css' href='../css/styleinvoice.css' />
                              <link rel='stylesheet' type='text/css' href='../css/style4.css' />
                              <link rel='stylesheet' type='text/css' href='../css/print.css' media="print" />
                              <script type='text/javascript' src='../js/jquery-1.3.2.min.js'></script>
                              <script type='text/javascript' src='../js/examplesinvoice.js'></script>
                              <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
                            
                            </head>
                            
                            <body>
                                <div id="editor">
                            
                                    
                            
                                </div>
                            <form method="POST" action="{{ route('savechangedestimate', ['eid'=>$eid]) }}">

                                {{ csrf_field() }}
                             
                            <script type="text/javascript">
                                //<![CDATA[
                        
                                function calc() {
                        
                                    // $("#price,#quantity").keyup(function () {
                                    //   $('#amount').val($('#price').val() * $('#quantity').val());
                                    // });
                        
                                    
                                    // var arr = document.getElementsByName('amount[]');
                                    //     var tot = 0;
                                    //     for (var i = 0; i < arr.length; i++) {
                                    //         if (parseInt(arr[i].value))
                                    //             tot += parseInt(arr[i].value);
                        
                                    //     }
                                    //     document.getElementById('subtotal').value = tot;
                        
                                    var $tblrows = $("#table1 tbody");
                                    // var row = $(this).closest("tr");
                                    $tblrows.ready(function (index) {
                                        $tblrows.find('tr').each(function (index) {
                                            var primaryincome = $(this).find("[id=price]").val();
                                            var otherincome = $(this).find("[id=quantity]").val();
                                            var totalincome = parseFloat(parseFloat(primaryincome) * parseFloat(otherincome).toFixed(2)).toFixed(2);
                                            $(this).find('[id=amount]').val(totalincome);
                        
                                        }
                                        )
                        
                                        var arr = document.getElementsByName('amount[]');
                                        var tot = 0;
                                        for (var i = 0; i < arr.length; i++) {
                                            if (parseFloat(arr[i].value))
                                                tot += parseFloat(arr[i].value);
                        
                                        }
                                        document.getElementById('subtotal').value = parseFloat(tot).toFixed(2);
                                       
                                       
                                        
                                           
                                            var shipping = document.getElementById('shippingcost').value;
                                            
                                            if(isNaN(shipping))
                                        { 
                                            document.getElementById('shippingcosts').value=0;
                                            var primaryincome = document.getElementById('shippingcosts').value;
                                           
                                             
                                        }
                                           else{
                                       
                                            document.getElementById('shippingcosts').value = shipping;
                                            var primaryincome = document.getElementById('shippingcosts').value;
                        }
                                            if(isNaN(primaryincome)){
                                        
                                            var primaryincome=parseFloat(0).toFixed(2);
                                            document.getElementById('totalcost').value = parseFloat(tot).toFixed(2); 
                                           
                                        }
                                        else{
                                            var primaryincome=parseFloat(primaryincome).toFixed(2);
                                            var otherincome = document.getElementById('subtotal').value;
                        var totalincome = parseFloat(parseFloat(primaryincome) + parseFloat(otherincome)).toFixed(2);
                        
                        if(isNaN(totalincome)){
                                        
                                        var totalincome=parseFloat(0).toFixed(2);
                                        document.getElementById('totalcost').value = parseFloat(tot).toFixed(2); 
                                        document.getElementById('due').value =totalincome;
                                       
                                    }
                                    else{
                                        document.getElementById('totalcost').value = totalincome;
                        document.getElementById('due').value = totalincome;
                                    }
                                        }
                                        
                                             
                        
                        
                        
                        
                                        
                                        // var shipping = document.getElementById('shippingcost').value;
                                        
                                       
                                        
                        
                        
                                    });
                                }
                        
                        
                        
                        //         if (isNaN(totalincome)) 
                        //         {
                        // return 'Not a Number!';
                        //         }
                        
                            </script>
                        
                        <script>
                        
                                function addmore() {
                                    // jQuery(".new-row:first").append("<button class='cancel btn btn-primary' >X</button>"); 
                                    // jQuery(".new-row:first").remove("<button class='cancel btn btn-primary' >X</button>");
                                    jQuery(".new-row:first").clone().find("input").val("").end().insertAfter(".new-row:last");
                                    jQuery(".new-row:last").append("<button class='cancel btn btn-primary m-3 ' >X</button>");
                        
                        
                                    $(".cancel").click(function () {
                        
                                        $(this).parent('.new-row:last').remove();
                                        calc();
                        
                                    });
                                    
                        
                                }
                        
                            </script>   
                              <div class="ml-5 " id="page-wrap" style="margin:20px;">
                            
                                <textarea id="header" style="height:40px;background-color: rgb(250,250,250)">ESTIMATE</textarea>
                                
                                <div id="identity">
                                
                                    <textarea id="customer-title">Avechi Global Shopping</textarea>
                            
                                       
                                
                                </div>
                                
                                <div style="clear:both"></div>
                                
                                <div id="customer" style="margin-top:10px;">
                            
                                    <div id="logo">
                                        <img id="image" src="../images/logo.png" alt="logo" />
                                        <div id="logoctr">
                                          <a href="javascript:;" id="change-logo" title="Change logo">Change Logo</a>
                                          <a href="javascript:;" id="save-logo" title="Save changes">Save</a>
                                          |
                                          <a href="javascript:;" id="delete-logo" title="Delete logo">Delete Logo</a>
                                          <a href="javascript:;" id="cancel-logo" title="Cancel changes">Cancel</a>
                                        </div>
                          
                                        <div id="logohelp">
                                          <input id="imageloc" type="text" size="50" value="" /><br />
                                          (max width: 540px, max height: 100px)
                                        </div>
                                      </div>
                            
                                        <table id="meta">
                                           
                                            <tr>
                            
                                                <td class="meta-head">Date</td>
                                                <td><textarea id="date">December 15, 2009</textarea></td>
                                            </tr>
                                            <tr>
                                                <td class="meta-head">Amount Due</td>
                                                <td>
                                                    <textarea onkeyup="calc()" id="due">0.00</textarea>
                                                </td>
                                            </tr>
                            
                                        </table>
                                
                                </div>
                               
                                <div class="container-fluid  ">
                        
                        
                                        <div class="responsive container " style="   
                                            
                                            align-items: center;
                                        
                                         display: flex;">
                            
                            
                            
                                            <div class=" container-fluid text-center px-0 my-4" style="background-color: #F0F3F4  ;">
                            
                                                <div class="table-responsive px-4" id="">
                            
                                                  
                                                        <table class="container table table-hover" id="table1" style="border:1px solid; ">
                                                            <thead>
                                                                <th>
                                                                    Product Name
                                                                </th>
                                                                <th>
                                                                    Product Link
                                                                </th>
                                                                <th>
                                                                    Size/Color/Option
                                                                </th>
                                                                <th>
                                                                    Unit Price
                                                                </th>
                                                                <th>
                                                                    Quantity
                                                                </th>
                                                                <th>
                                                                    Amount
                                                                </th>
                            
                                                            </thead>
                                                            <tbody style="width:100%">
                                                                @for ($i = 0; $i < count($productname); $i++)
                                                                <tr class="new-row" id="new-row" style="width:100%">
                                                                    <td style="width:25%">
                                                                        <input type="hidden" value="{{ $id[$i] }}" name="id[]" id="id"> 
                                                                        {{ $productname[$i] }}
                                                                    </td>
                                                                    <td style="width:15%">
                                                                        <a href="{{ $productlink[$i] }}" target="_blank">Link</a>
                                                                    </td>
                                                                    <td style="width:30%">
                                                                        
                                                                        <input type="text" class="form-control1"  name="sco[]"
                                                                            id="sco" value="{{ $sizecoloroption[$i] }}" placeholder="" required>
                                                                    </td>
                                                                    <td style="width:10%">
                                                                        <input type="number" class="form-control1" onkeyup="calc()" name="price[]"
                                                                            id="price" value="{{ $unitprice[$i] }}" placeholder="" min="0.00" required>
                            
                            
                                                                    </td>
                                                                    <td style="width:10%">
                                                                        <input type="number" class="form-control1" name="quantity[]" value="{{ $quantity[$i] }}" id="quantity"
                                                                            onkeyup="calc()" placeholder="" min="1" required>
                            
                                                                    </td>
                                                                   
                                                                        <td style="width:10%">
                                                                            <input type="text" class="form-control1" name="amount[]" id="amount"
                                                                                onblur="calc()" value="{{ $amount[$i] }}" placeholder="" required>
                                                                        </td>
                            
                                                                </tr>
                                                                @endfor
                            
                                                            </tbody>
                                                            <tr class="emptyrow">
                                                                <td colspan="6"></td>
                                                            </tr>
                                                            <tr>
                                                                <tfoot class="foot">
                                                                    <tr>
                                                                            
                                                                        <td colspan="3" style="border:0"></td>
                                                                        <th colspan="2" class="tf" >
                                                                            Sub Total
                                                                        </th>
                                                                        <td>
                                                                            <input type="text" class="form-control1" name="subtotal[]" id="subtotal"
                                                                            onkeyup="calc()"  value="{{ $subtotal }}" placeholder="" >
                                                                        </td>
                            
                                                                    </tr>
                                                                    <tr>
                                                                        
                                                                            <td colspan="3" style="border:0"></td>
                                                                        <th  colspan="2" class="tf">
                                                                            <div>
                                                                                <span>
                                                                            Shipping Cost
                                                                            <input type="text" class="form-control3" name="shippingcost" id="shippingcost"
                                                                            onkeyup="calc()" value="{{ $shippingcost }}" placeholder="" required>
                                                                        </span>
                                                                        </div>
                                                                        </th>
                                                                        
                                                                        <td>
                                                                            <input type="text" class="form-control1" name="shippingcosts" id="shippingcosts"
                                                                                onkeyup="calc()" value="{{ $shippingcost }}" placeholder="">
                                                                        </td>
                                                                        </tr> 
                            
                                                                    <tr>
                                                                            <td colspan="3" style="border:0"></td>
                                                                        <th colspan="2" class="tf">
                                                                        Total Cost
                                                                            </button>
                                                                        </th>
                                                                        <td>
                                                                            <input type="text" class="form-control1" name="totalcost" id="totalcost"
                                                                                onkeyup="calc()" value="{{ $total }}" placeholder="" >
                            
                                                                        </td>
                                                                    </tr>
                            
                                                                </tfoot>
                                                            </tr>
                            
                                                        </table>
                            
                                                </div>
                            </div>
                                        </div>
                                        <!--end of background container-->
                            
                                    </div><!-- /.container -->
                                    <div id="terms" class="mb-5">
                                        <h4 style="text-align:left">Specific Instruction</h4>
                                        <textarea id="address" readonly="readonly" placeholder="Specific instruction"> {{ $specificinstruction }} </textarea>    
                                    </div>
                        
                                      <div id="terms" class="mb-5 mt-5">
                                        <h4 style="text-align:left">Estimate Description</h4>
                                      <textarea id="description" name="description" placeholder="Description of the estimate..."> {{ $description }}</textarea>
                                      </div>
                            
                                <div id="terms" class="mb-5 mt-5">
                                  <h5>Terms</h5>
                                  <textarea style="text-align:center">NET 30 Days. Finance Charge of 1.5% will be made on unpaid balances after 30 days.</textarea>
                                </div>
                              
                              </div>
                              <div class=" text-center">
                                 
                                   <div class="m-3">
                                      <button class="btn btn-primary" type="submit">Send</button>
                                  </div>
                                  </div>
                            </form>
                            
                            
                            <script>
                            function myFunction() {
                               document.getElementById('redheader').style.display = 'none';
                               document.getElementById('navbar').style.display = 'none';
                               document.getElementById('insideheader3').style.display = 'none';
                               document.getElementById('insideheader1').style.display = 'none';
                               document.getElementById('insideheader2').style.display = 'none';
                                window.print();
                            }
                            </script>
                            </body>
                            <script>function print_today() {
                                // ***********************************************
                                // AUTHOR: WWW.CGISCRIPT.NET, LLC
                                // URL: http://www.cgiscript.net
                                // Use the script, just leave this message intact.
                                // Download your FREE CGI/Perl Scripts today!
                                // ( http://www.cgiscript.net/scripts.htm )
                                // ***********************************************
                                var now = new Date();
                                var months = new Array('January','February','March','April','May','June','July','August','September','October','November','December');
                                var date = ((now.getDate()<10) ? "0" : "")+ now.getDate();
                                function fourdigits(number) {
                                  return (number < 1000) ? number + 1900 : number;
                                }
                                var today =  months[now.getMonth()] + " " + date + ", " + (fourdigits(now.getYear()));
                                return today;
                              }
                              
                              // from http://www.mediacollege.com/internet/javascript/number/round.html
                              function roundNumber(number,decimals) {
                                var newString;// The new rounded number
                                decimals = Number(decimals);
                                if (decimals < 1) {
                                  newString = (Math.round(number)).toString();
                                } else {
                                  var numString = number.toString();
                                  if (numString.lastIndexOf(".") == -1) {// If there is no decimal point
                                    numString += ".";// give it one at the end
                                  }
                                  var cutoff = numString.lastIndexOf(".") + decimals;// The point at which to truncate the number
                                  var d1 = Number(numString.substring(cutoff,cutoff+1));// The value of the last decimal place that we'll end up with
                                  var d2 = Number(numString.substring(cutoff+1,cutoff+2));// The next decimal, after the last one we want
                                  if (d2 >= 5) {// Do we need to round up at all? If not, the string will just be truncated
                                    if (d1 == 9 && cutoff > 0) {// If the last digit is 9, find a new cutoff point
                                      while (cutoff > 0 && (d1 == 9 || isNaN(d1))) {
                                        if (d1 != ".") {
                                          cutoff -= 1;
                                          d1 = Number(numString.substring(cutoff,cutoff+1));
                                        } else {
                                          cutoff -= 1;
                                        }
                                      }
                                    }
                                    d1 += 1;
                                  } 
                                  if (d1 == 10) {
                                    numString = numString.substring(0, numString.lastIndexOf("."));
                                    var roundedNum = Number(numString) + 1;
                                    newString = roundedNum.toString() + '.';
                                  } else {
                                    newString = numString.substring(0,cutoff) + d1.toString();
                                  }
                                }
                                if (newString.lastIndexOf(".") == -1) {// Do this again, to the new string
                                  newString += ".";
                                }
                                var decs = (newString.substring(newString.lastIndexOf(".")+1)).length;
                                for(var i=0;i<decimals-decs;i++) newString += "0";
                                //var newNumber = Number(newString);// make it a number if you like
                                return newString; // Output the result to the form field (change for your purposes)
                              }
                              
                              function update_total() {
                                var total = 0;
                                $('.price').each(function(i){
                                  price = $(this).html().replace("$","");
                                  if (!isNaN(price)) total += Number(price);
                                });
                              
                                total = roundNumber(total,2);
                              
                                $('#subtotal').html("$"+total);
                                $('#total').html("$"+total);
                                
                                update_balance();
                              }
                              
                              function update_balance() {
                            
                             var sc = $("#paid").val().replace("$","");
                                var tots = $("#subtotal").html().replace("$","");
                               var due = Number(sc) + Number(tots);
                                due = roundNumber(due,2);
                                
                                $('.due').html("$"+due);
                              }
                              
                              function update_price() {
                                var row = $(this).parents('.item-row');
                                var price = row.find('.cost').val().replace("$","") * row.find('.qty').val();
                                price = roundNumber(price,2);
                                isNaN(price) ? row.find('.price').html("N/A") : row.find('.price').html("$"+price);
                                
                                update_total();
                              }
                              
                              function bind() {
                                $(".cost").blur(update_price);
                                $(".qty").blur(update_price);
                              }
                              
                              $(document).ready(function() {
                              
                                $('input').click(function(){
                                  $(this).select();
                                });
                              
                                $("#paid").blur(update_balance);
                                 
                                $("#addrow").click(function(){
                                  $(".item-row:last").after('<tr class="item-row"><td class="item-name"><div class="delete-wpr"><textarea>Item Name</textarea><a class="delete" href="javascript:;" title="Remove row" onclick="deleteRow(this)">X</a></div></td><td class="description"><textarea>Description</textarea></td><td><textarea class="cost">$0</textarea></td><td><textarea class="qty">0</textarea></td><td><span class="price">$0</span></td></tr>');
                                  if ($(".delete").length > 0) $(".delete").show();
                                  bind();
                                });
                                
                                bind();
                                
                                $(".delete").click(function(){
                                $(this).parents('.item-row').remove();
                                  
                                  // $(this).closest("tr").remove();
                                  update_total();
                                  if ($(".delete").length < 2) $(".delete").hide();
                                });
                                
                                $("#cancel-logo").click(function(){
                                  $("#logo").removeClass('edit');
                                });
                                $("#delete-logo").click(function(){
                                  $("#logo").remove();
                                });
                                $("#change-logo").click(function(){
                                  $("#logo").addClass('edit');
                                  $("#imageloc").val($("#image").attr('src'));
                                  $("#image").select();
                                });
                                $("#save-logo").click(function(){
                                  $("#image").attr('src',$("#imageloc").val());
                                  $("#logo").removeClass('edit');
                                });
                                
                                $("#date").val(print_today());
                                
                              });
                            </script>
                            
                        <!-- Bootstrap core JavaScript
                        ================================================== -->
                        <!-- Placed at the end of the document so the pages load faster -->
                        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                        <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
                        <script src="../js/popper.min.js"></script>
                        <script src="../js/bootstrap.min.js"></script>
                        
                        <!-- Icons -->
                        <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
                        <script>
                        function deleteRow(r) {
                        var i = r.parentNode.parentNode.parentNode;
                        i.parentNode.removeChild(i);
                        // document.getElementById("items").deleteRow(i);
                        update_total();
                        if ($(".delete").length < 2) $(".delete").hide();
                        }
                        feather.replace()
                        </script>
                        <script src='//static.codepen.io/assets/common/stopExecutionOnTimeout-41c52890748cd7143004e05d3c5f786c66b19939c4500ce446314d1748483e13.js'></script><script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script src='https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.2.61/jspdf.min.js'></script>
                        <script>
                        
                        var doc = new jsPDF();
                        var specialElementHandlers = {
                        '#editor': function (element, renderer) {
                        return true;
                        }
                        };
                        
                        $('#cmd').click(function () {
                        doc.fromHTML($('#page-wrap').html(), 15, 15, {
                        'width': 170,
                        'elementHandlers': specialElementHandlers
                        });
                        doc.save('sample-file.pdf');
                        });
                        
                        
                        </script>
                         
                            </html>
                                    
                          </main>
        
         
        
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
