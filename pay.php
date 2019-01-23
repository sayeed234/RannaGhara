<!DOCTYPE html>
<html>
<script type="text/javascript">
  
  function myDeleteOnClick(deleted){
        var cart_delete = deleted.getElementsByTagName('p')[0].innerHTML;
        //alert(cart_delete);
        window.location.href = "delete_cart_product.php?cart_delete=" + cart_delete;
  }
</script>
<?php
  session_start();
  $con=mysqli_connect("localhost","root","","rannaghara");




?>
    <head>
        <title>rannaghara</title>
        <link rel="stylesheet" href="cartcss.css"/>
        <link rel="icon" href="image/images.png" type="image/png"/> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
         <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
      
        <style type="text/css">
            .box_two button{
                height: 40px;
                width: 100px;
                background-color: red;
            }
             .xxx button{
                background-color: #226853;
                color: red;
                font-size: 20px;
                height: 30px;
                width: 30px;
                float: right;
             }
             .sayeed{
                background-color: white;
             }
              .box_two ul{
                
             margin-left: 100px;
             color: #226853;
             font-size: 20px;
            }
.badge1 {
   position:relative;
}
.badge1[data-badge]:after {
   content:attr(data-badge);
   position:absolute;
   top:-20px;
   right:-18px;
   font-size:.8em;
   background:red;
   color:white;
   width:22px;height:22px;
   text-align:center;
   line-height:18px;
   border-radius:50%;
   box-shadow:0 0 1px #333;
}
         </style>
         
    </head>
    <body>
       <?php include 'cartpayhead.php' ?>
          <br>
        <section>
            <div class="wrapper">
                <div class="row">
                  <div class="col-8 col-m5 col-l5 cart"> 
                  <div class="col-12 col-m5 col-l5 carth">
                     
                     <div class="box_one">
                          <div class="col-6 col-m5 col-l5 carth"><h1 style="margin-left: 32px;margin-top: 20px;color: #226853;">Payment Method</h1></div>
                           <div class="col-6 col-m5 col-l5 carth"><h3 style="margin-left:10px;margin-top: 20px;color: #226853;">(Please select only one! payment method)</h3></div>

                     </div>
 

                   </div>
                  
                    <div class="col-12 col-m5 col-l5 cart">
                     <br><br>
                     <div class="box_two">
                          
                             <div class="col-12 col-m5 col-l5 cartt">
                                  <div class="col-12 col-m5 col-l5 cartt">
                            <button class="w3-button w3-red" onclick="document.getElementById('id01').style.display='block'"style="margin-left: 100px;"><img src="image/bkash.jpg" style="height: 40px;width: 100px;"></button> 

                            <button class="w3-button w3-red" onclick="document.getElementById('id02').style.display='block'" style="margin-left: 350px;"><img src="image/dbbl.jpg" style="height: 40px;width: 100px;"></button> 

                                        <div id="id01" class="sayeed" style="display:none">
                                          <span onclick="this.parentElement.style.display='none'"
                                          class="xxx"><button>x</button></span>
                                          <br>
                                             <h2 style="text-align: center; color:#226853; ">Your Payable Amount: 2,890 Tk.</h2> <br>
                                             <h3 style="text-align: center;color:#226853; ">How to Bkash Payment</h3> <br>
                                             <ul>
                                               <li>Step 1:Dial *247# . </li>
                                               <li>Step 2:Select Payment option 3 . </li>
                                               <li>Step 3: Write Merchant Account Number: xxxxxxxxxxxx .</li>
                                               <li>Step 4: Write Order Amount xxxx </li>
                                               <li>Step 5: Write Cart ID in Reference Box xxxxxx . </li>
                                               <li>Step 6:Write Counter Number: 1 . </li>
                                               <li>Step 7: Write Four Digit Secret PIN (XXXX) .</li>
                         
                                               </ul>

                                               <br>
                                               <h3 style="text-align: center; color:#226853;">Now, You will get a Transaction ID through SMS. Please write down that.</h3><br>
                                               <input type="text" name="tansid" placeholder="Transaction Id" style="height: 35px;width: 300px; border: 2px solid green; margin-left: 230px;">

                                               <br><br>
                                               <p style="text-align: center; color:#226853;">There may not be any Food/products of your order to the Requeirment.It would not be possible for us to do so.In some cases, due to different reasons, changes may also be made by the Admin / supplier. We apologize and apologize for these unsolicited things</p>
                                               <br>

                                               <h3 style="text-align: center; color:#226853;">I agree to the Terms of Use and<mark>Privacy Policy</mark> </h3><br><br>
                                                      <button style="height: 40px;width: 150px;background-color:#226853; margin-left:600px; "> <h2 style="color: white;">Confirm Order</h2></button>



                                        </div>
                                        <div id="id02" class="sayeed" style="display:none">
                                          <span onclick="this.parentElement.style.display='none'"
                                          class="xxx"><button>x</button></span>
                                          <br>
                                             <h2 style="text-align: center; color:#226853; ">Your Payable Amount: 2,890 Tk.</h2> <br>
                                             <h3 style="text-align: center;color:#226853; ">How to Rocket Payment</h3> <br>
                                             <ul>
                                               <li>Step 1:Dial *322# . </li>
                                               <li>Step 2:Select Payment option 1 . </li>
                                               <li>Step 3: Select Bill pay option 1 .</li>
                                               <li>Step 4: Write Biller ID "506" .</li>
                                               <li>Step 5: Write Cart ID in Bill Number Box xxxxx . </li>
                                               <li>Step 6:Write Your Amount xxxx. </li>
                                               <li>Step 7: Write your Secret PIN (XXXX) .</li>
                                              <li>Step 8:You will get a confirmation SMS .</li>
                         
                                               </ul>

                                               <br>
                                               <h3 style="text-align: center; color:#226853;">Now, You will get a Transaction ID through SMS. Please write down that.</h3><br>
                                               <input type="text" name="tansid" placeholder="Transaction Id" style="height: 35px;width: 300px; border: 2px solid green; margin-left: 230px;">

                                               <br><br>
                                               <p style="text-align: center; color:#226853;">There may not be any Food/products of your order to the Requeirment.It would not be possible for us to do so.In some cases, due to different reasons, changes may also be made by the Admin / supplier. We apologize and apologize for these unsolicited things</p>
                                               <br>

                                               <h3 style="text-align: center; color:#226853;">I agree to the Terms of Use and<mark>Privacy Policy</mark> </h3><br>
                                                      <button style="height: 40px;width: 150px;background-color:#226853; margin-left:600px; "> <h2 style="color: white;">Confirm Order</h2></button>



                                        </div>

                                    </div>
                             </div>
                      <div class="col-12 col-m5 col-l5 cartt"></div>
                    
                     </div>

                   </div>
                  

                  

                  </div>
                  <div class="col-4 col-m5 col-l5 cart"> 

                    <div class="box_one">
                        
                        <h2 style="margin-left: 6px;color: #226853;"><br>Checkout Summary</h2>
                        <br>
                        <hr>
                        <h3 style="margin-left: 6px;color: #226853;">Payment Details</h3>
                        <br>
                        <table>
                              <tr>
                                <th>Subtotal</th>
                                <th>2389 TK.</th>
                                
                              </tr>
                              <tr>
                                <th>Shipping</th>
                                <th>100 TK.</th>
                               
                              </tr>
                              <tr>
                                <th>Total</th>
                                <th>2489 TK.</th>
                                
                              </tr>
                              <tr>
                                <th>Payable Total</th>
                                <th>2489 TK.</th>
                                
                              </tr>
                             
                            </table>
                                                </div>

                  </div>

                </div>
            </div>
        </section>
        <section>
            <div class="wrapper">
                <div class="row">
                     <div class="col-12 col-m5 col-l5  footer_height g"> 

                        <br><h3 style="margin-left: 40%;color: #226853; ">RannaGhara.com</h3><br>
                        <h3 style="margin-left: 40%;color: #226853; ">Hot line:-0175029494988u</h3><br>
                        <h3 style="margin-left: 40%;color: #226853; ">corparate:-8248473285784</h3><br>
                        <h4 style="margin-left: 40%;color: #226853; ">admin@ gmail.com</h4>

                     </div>

                   
                </div>
            </div>
        </section>
    </body>
</html>