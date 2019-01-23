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
                    <TABLE>
                      <thead><td colspan="2" style="font-size: 23px;">My Cart (<?php echo $total_pro_quan; ?> Items)</td> <td colspan="2" style="font-size: 23px;">Total: <?php echo $total_amount; ?> Tk.</td></thead>
                      <tr>
                        <td>Name</td>
                        <td>Price</td>
                        <td>Quantity</td>
                        <td>Delete</td>
                      </tr>
                    <?php 

                        while ($row_page=mysqli_fetch_array($run_page)) {
                              # code...
                            $post_id =$row_page['product_id'];
                            $title =$row_page['title'];
                            $taka =$row_page['product_price'];
                            $quantity = $row_page['quantity'];
                            $amount = $row_page['amount'];

                     ?>
                      <tr style="background-color:#226853;  border: 4px solid white;">
                        <td style="font-size: 25px;color:white;"><?php echo $title; ?></td>
                        <td style="font-size: 22px;color:white;"><?php echo $taka; ?> Tk.</td>
                        <td>
                        <div id=field1>
                      <button type="button" id="sub" class=sub style="height: 20px;width: 18px;" >
                        <a style="text-decoration:none" href='add_sub_cart.php?sub_cart_count=true&product_id=<?php echo $post_id; ?>&product_quantity=<?php echo $quantity?>&product_price=<?php echo $taka ?>' >-</a></button>
                      <input readonly type="text" id="product" value=<?php echo $quantity?> class=field>
                      <button type="button" id="add"  class=add style="height: 20px;width: 18px;">
                        <a style="text-decoration:none" href='add_sub_cart.php?add_cart_count=true&product_id=<?php echo $post_id; ?>&product_quantity=<?php echo $quantity?>&product_price=<?php echo $taka ?>'>+</a>
                      </button>
                    </div>
                       </td>
                        <td> <button onclick="myDeleteOnClick(this)"><p hidden><?php echo $post_id ?> </p>Delete</button></td>
                      </tr>
                    <?php } ?>

                    <tr>
                      
                 <td><button style="height: 40px;width: 220px;background-color:#226853;hover:{background-color red;}"><a href="cartth.php" style="text-decoration: none;"><h2 style="color:white;">Continue to Order</h2></a></button></td>
                    </tr>
                      
                    </TABLE></div>  

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