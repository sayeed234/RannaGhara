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
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
         <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

         <style>
           button {
  margin: 4px;
  cursor: pointer;
}
input {
  text-align: center;
  width: 40px;
  margin: 4px;
  color: salmon;

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



            <div class="wrapper">
                <div class="row">
                  <div class="col-8 col-m5 col-l5">
                     <br>
                  <div style="height: 60px;width: 98%;background-color: #eff7ef;padding: 5px;" class="col-12 col-m5 col-l5">
                    <?php 
                          global $con;
                          $get_page="select * from cart"; 
                          $run_page=mysqli_query($con, $get_page);
                          
                          $amount_sql="SELECT sum(amount) as total FROM cart";
                          $result = mysqli_query($con, $amount_sql);
                          while ($row = mysqli_fetch_assoc($result))
                          { 
                             $total_amount =  $row['total'];

                          }
                          $pro_quantity="SELECT sum(quantity) as tol_quantity FROM cart";
                          $pro_quantity_result = mysqli_query($con, $pro_quantity);
                          while ($pro_quantity_row = mysqli_fetch_assoc($pro_quantity_result))
                          { 
                             $total_pro_quan =  $pro_quantity_row['tol_quantity'];

                          }
                            
                       ?>
                   <div class="box_three">
                      <form method="post" action="">
                                <h3 style="color: #226853; margin-left: 60px;"><br>Fill out your information</h3><br>
                             <div class="col-12 col-m5 col-l5 add">
                                 <h3 style="color: #226853; margin-left: 60px;"> Name</h3>
                                 <input required type="text" name="name" style="height: 40px;width: 80%; margin-left: 60px; font-size: 20px;color: green;">

                             </div>
                             <div class="col-12 col-m5 col-l5 add">
                                 <h3 style="color: #226853; margin-left: 60px;">Phone No</h3>
                                 <input required type="text" name="phone"  style="height: 40px;width: 80%; margin-left: 60px;font-size: 20px;color: green;">
                             </div>
                             <div class="col-12 col-m5 col-l5 add">
                                 <h3 style="color: #226853; margin-left: 60px;">Alternative Phone No</h3>
                                 <input required type="text" name="aphone" style="height: 40px;width: 80%; margin-left: 60px;font-size: 20px;color: green;">
                             </div>
                             <div class="col-12 col-m5 col-l5 add">
                                   <h3 style="color: #226853; margin-left: 60px;">Select Division</h3>
                                  <select id="division" name="division" style="height: 40px;width: 80%; margin-left: 60px;font-size: 15px;color: #226853;">
                                  <option value="dhaka">Dhaka</option>
                                  <option value="rajshahi">Rajshahi</option>
                                  <option value="comilla">Comilla</option>
                                </select>
                             </div>
                             <div class="col-4 col-m5 col-l5 add">
                                <h3 style="color: #226853; margin-left: 60px;">Select Area</h3>
                                  <select id="devition" name="area" style="height: 40px;width: 60%; margin-left: 60px;font-size: 15px;color: #226853;">
                                  <option value="banani">Banani</option>
                                  <option value="Sukrabad">Sukrabad</option>
                                  <option value="dhanmondi">Dhanmondi</option>
                                    <option value="gulsan">Gulsan</option>
                                </select>
                             </div>
                             <div class="col-4 col-m5 col-l5 add">
                                 
                                  <h3 style="color: #226853; margin-left: 32px;">Rode No</h3>
                                   <input required type="text" name="rode"  style="height: 40px;width: 60%; margin-left: 32px;font-size: 20px;color: green;">

                             </div>
                              <div class="col-4 col-m5 col-l5 add">
                                  <h3 style="color: #226853; margin-left: 10px;">House No</h3>
                                   <input required type="text" name="house"  style="height: 40px;width: 60%; margin-left: 10px;font-size: 20px;color: green;">
                              </div>

                             <div class="col-12 col-m5 col-l5 add">
                                 <h3 style="color: #226853; margin-left: 60px;">Email</h3>
                                 <input required type="text" name="email" id="emailField"  style="height: 40px;width: 80%; margin-left: 60px;font-size: 20px;color: green;">
                             </div>
                                 <div class="col-12 col-m5 col-l5 add">
                                   <h3 style="color: #226853; margin-left: 60px;">Delevary Date</h3>
                                 <input type="date"  name="date" style="height: 40px;width: 50%; margin-left: 60px;font-size: 20px;color: #226853;">
                       
                            </div>
                             <div class="col-12 col-m5 col-l5 khn">
                                  <h3 style="color: #226853; margin-left: 60px;">Write something</h3>
                                  <textarea id="subject" name="subject" style="height:70%; width: 80%;margin-left: 60px;"></textarea>
                             </div>

                            <br><br>
                             <div class="col-6 col-m5 col-l5 add">
                                 <input type="submit" value="Delevary To Payment" name="submit" style="height:60%;width: 60%;margin-left:15%;margin-top:5%;font-size:20px;background-color: #226853;color: white;" >

                             </div>
                                <div class="col-6 col-m5 col-l5 add">
                                    <button style="height:60%;width: 60%;margin-left:15%;margin-top:5%;font-size:20px;"><a href="pay.php" style="text-decoration: none;color: white;">Continue To Payment</a> </button>
                                </div>
        
                   </div>
                  
            </form>

                              <?php 
                               if(isset($_POST["submit"]))
                               {

                             mysqli_query($con,"insert into ship values ('','$_POST[name]',$_POST[phone],$_POST[aphone],'$_POST[division]','$_POST[area]','$_POST[rode]','$_POST[house]','$_POST[email]',$_POST[date],'$_POST[subject]' )");

                         }
                       
                          ?>

                  </div></div>
                
                 
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
                                <th><?php echo $total_amount; ?> TK</th>
                                
                              </tr>
                              <tr>
                                <th>Shipping</th>
                                <th>100 TK.</th>
                               
                              </tr>
                              <tr>
                                <th>VAT</th>
                                <th>20 TK.</th>
                                
                              </tr>
                              <tr>
                                <th>Payable Total</th>
                                <th><?php echo $total_amount+100+20; ?> TK</th>
                                
                              </tr>
                             
                            </table>
                                                </div>

                  </div>

                </div>
            </div>
        </section>

    </body>
<!--     <script type="text/javascript">
  var unit = 1;
var total;
// if user changes value in field
$('.field1').change(function() {
  unit = this.value;
  

});
$('.add').click(function() {
  unit++;
  var $input = $(this).prevUntil('.sub');
  $input.val(unit);
  unit = unit;
  window.location.href = "add_sub_cart.php?add_cart_count="+true+"&product_id="+<?php echo $post_id; ?>+"&prod_qun="+ unit;
});
$('.sub').click(function() {
  if (unit > 1) {
unit--;
var $input = $(this).nextUntil('.add');
$input.val(unit);
  }
});
</script> -->

</html>