
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>My Dashboard</title>
<!-- sidebar style  -->

<!-- Our Custom CSS -->
    <link rel="stylesheet" href="../css/style4.css">
    
    <!-- Font Awesome JS -->
    <!-- <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script> -->
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

<!-- sidebar style  -->

<style>

@media print {
    form{
    /* Keyword values */

}
}
</style>
</head>

<body>

    <div class="wrapper" style="margin-bottom: 0;">

          
       
        <!-- Page Content  -->
        <div id="content">

           

      <!-- Sidebar -->
      
      <nav class="navbar  navbar-light bg-light" style="">
          <div id="insideheader3" class="btn-toolbar mb-2 mb-md-0">
              
                <button onclick="myFunction()" class="btn btn-primary" style="height:50px;">Print</button>
              </div>
        
  </nav> 
    
<!-- Sidebar end-->
            <main role="main" style="width:90%;margin: auto;">
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
                
                <body style="-webkit-print-color-adjust:exact;">
                    <div id="editor">
                
                        
                   
                            <div class="ml-5 " id="page-wrap" style="margin:20px;">
                          
                              <textarea id="header" style="height:40px;background-color: rgb(250,250,250)">ESTIMATE</textarea>
                              
                              <div id="identity">
                              
                                  <textarea readonly="readonly" id="customer-title"style="background-color: rgb(250,250,250)">Avechi Global Shopping</textarea>
                          
                                     
                              
                              </div>
                              
                              <div style="clear:both"></div>
                              
                              <div id="customer" style="margin-top:10px;">
                          
                                  <div id="logo">
                                      <img id="image" src="../images/logo.png" alt="logo" />
                                     
                                    </div>
                          
                                      <table id="meta">
                                         
                                          <tr>
                          
                                              <td class="meta-head">Date</td>
                                              <td><textarea readonly>{{ $today }}</textarea></td>
                                          </tr>
                                          <tr>
                                              <td class="meta-head">Amount Due</td>
                                              <td>
                                                  <textarea readonly>{{ $total }}</textarea>
                                              </td>
                                          </tr>
                          
                                      </table>
                              
                              </div>
                             
                              <div class="">
                      
                      
                                      <div class="responsive container ">
                          
                          
                          
                                          <div class="  text-center px-0 my-4" style="background-color: #F0F3F4  ;">
                          
                                              <div class=" px-4" id="">
                          
                                                
                                                      <table class="container table table-hover" id="table1" style="border:1px solid;">
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
                                                          <tbody>

                                                                @if($productname != null)
                                                                @for ($i = 0; $i < count($productname); $i++)
                                                                <tr class="new-row" id="new-row">
                                                                        <td class="text-truncate" style="max-width:200px">
                                                                          {{ $productname[$i] }}
                                                                        </td>
                                                                        <td class="text-truncate" style="max-width:200px">
                                                                            {{ $productlink[$i] }}
                                                                        </td>
                                                                        <td>
                                                                          {{ $sizecoloroption[$i] }}
                                                                        </td>
                                                                        <td>
                                                                            {{ $unitprice[$i] }}
                                
                                                                        </td>
                                                                        <td>
                                                                           {{ $quantity[$i] }}
                                                                        </td>
                                                                       
                                                                            <td>
                                                                            {{ $amount[$i] }}  
                                                                            </td>
                                
                                                                    </tr>
                                                                @endfor
                                
                                                                @else
                                                                <tr>
                                                                    <td colspan = "4" style="text-align:center">
                                                                        You have no Requests 
                                                                    </td>
                                                                </tr>
                                                                @endif
                                                              
                                                              
                          
                                                          </tbody>
                                                          <tr class="emptyrow">
                                                              <td colspan="6"></td>
                                                          </tr>
                                                          <tr>
                                                              <tfoot class="foot">
                                                                  <tr>
                                                                          
                                                                      <td colspan="3" style="border:0"></td>
                                                                      <th colspan="2"  class="tf" >
                                                                          Sub Total
                                                                      </th>
                                                                      <td>
                                                                          {{ $sum }}  
                                                                      </td>
                          
                                                                  </tr>
                                                                  <tr>
                                                                      
                                                                          <td colspan="3" style="border:0"></td>
                                                                      <th  colspan="2"  class="tf">
                                                                          
                                                                          Shipping Cost
                                                                      
                                                                      </th>
                                                                      
                                                                      <td>
                                                                         {{ $shipping }}
                                                                        </td>
          
                                                                      </tr> 
                          
                                                                  <tr>
                                                                          <td colspan="3"  style="border:0"></td>
                                                                      <th colspan="2"  class="tf">
                                                                      Total Cost
                                                                          </button>
                                                                      </th>
                                                                      <td>
                                                                          {{ $total }}
                                                                      </td>
                                                                  </tr>
                          
                                                              </tfoot>
                                                          </tr>
                          
                                                      </table>
                          
                                                      <div id="terms" class="mb-5">
                                                            <h4 style="text-align:left">Specific Instruction</h4>
                                                      <textarea id="address" readonly="readonly" placeholder="Specific instruction">{{ $specificinstruction }}</textarea>    
                                                        </div>
                                            
                                                          <div id="terms" class="mb-5 mt-5">
                                                            <h4 style="text-align:left">Estimate Description</h4>
                                                          <textarea id="address" readonly="readonly" placeholder="Description of the estimate...">{{ $description }}</textarea>
                                                          </div>
                                                
                                                    <div id="terms" class="mb-5 mt-5">
                                                      <h5>Terms</h5>
                                                      <textarea style="text-align:center;background-color:white; " readonly="readonly" >NET 30 Days. Finance Charge of 1.5% will be made on unpaid balances after 30 days.</textarea>
                                                    </div>
                                                  
                                              </div>
                          </div>
                          
                                      </div>
                                      <!--end of background container-->
                          
                                  </div><!-- /.container -->
                                 
                            </div>
                            <div class=" text-center" id="buttons">
                               
                                 <div class="m-3">

                                    <form style="display:inline"  method="POST" action="{{ route('reviewestimate', $eid) }}">
                                        @csrf
                                        <input type="hidden" name="status" id="status" value="Accepted">
                                        <input type="submit" value="Accept" class="btn btn-primary m-3">
                                        {{-- <button class="btn btn-primary m-3" type="submit" formaction="/deals/5/accept">Accept</button> --}}
                                    </form>

                                <form style="display:inline" method="POST" action="{{ route('reviewestimate', $eid) }}">
                                    @csrf
                                        <input type="hidden" name="status" id="status" value="Rejected">
                                        <input type="submit" value="Reject" class="btn btn-outline-secondary   m-3">
                                        {{-- <button class="btn btn-outline-secondary   m-3" type="submit" formaction="/deals/5/accept">Reject</button> --}}
                                    </form>

                                    
                                    <!-- <button class="btn m-3" style="background: white;border: 1px solid black;" type="submit">Decline</button> -->
                                     {{-- <button type="submit" formaction="/deals/5/reject" class="btn btn-outline-secondary  d-md-inline-block m-3" data-ember-action="" data-ember-action-411="411">Decline</button> --}}
                                  
                                  </div>
                                <div class="m-3">
                                    
                                </div>
                                </div>
                          
                           
                
                    </div>
               
              
 
              
                </body>
               
                
            <!-- Bootstrap core JavaScript
            ================================================== -->
            <!-- Placed at the end of the document so the pages load faster -->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
            <script src="../js/popper.min.js"></script>
            <script src="../js/bootstrap.min.js"></script>
            
            <!-- Icons -->
            <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
           
            <script src='//static.codepen.io/assets/common/stopExecutionOnTimeout-41c52890748cd7143004e05d3c5f786c66b19939c4500ce446314d1748483e13.js'></script><script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script src='https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.2.61/jspdf.min.js'></script>
          
             
                </html>
                        
                        
              </main>
        
              <script>
                    function myFunction() {
                        document.getElementById('buttons').style.display = 'none';
                     window.print();
                    }
                    </script>  
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
