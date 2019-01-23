<!DOCTYPE html>
<html>
<script type="text/javascript">
    function myOnClick(ctrl){
       var cart = ctrl.getElementsByTagName('p')[0].innerHTML;
        //alert(cart);
        window.location.href = "carted_product.php?carted_product_id=" + cart;

    }

    function myOnClickHomen(ctrl){
       var carthomen = ctrl.getElementsByTagName('p')[0].innerHTML;
        //alert(carthomen);
        window.location.href = "home_shop_cart.php?carted_homen=" + carthomen;

    }
</script>
<?php
session_start();
$con=mysqli_connect("localhost","root","","rannaghara");


?>
    <head>
        <title>Rannaghara||home page</title>
        <link rel="stylesheet" href="homcss.css"/>
        <link rel="icon" href="image/images.png" type="image/png"/> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

        <style type="text/css">
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
.rider{
  height: 70px;
  width: 100%;
  background-color:#42f47a;
  color:#ff0072;
}
.not{
margin-left: 1150px;
margin-top: 20px;
color: red;
font-size:30px; 
}
</style>
    </head>
        
    <body>
        <section>
            <div class="wrapper">
                <div class="row">
                  <div class="index">
                    <div class="col-1 col-m1 col-l6 header_top_height headercolor logo">
                        <img src="image/images.png">
                    </div>
                    <div class="col-3 col-m3 col-l6 header_top_height headercolor pname"> <li> <a href="index.php"style="color: black;"><h4>RannaGhara</h4></a></li></div>
                    <div class="col-6 col-m4 col-l8 header_top_height headercolor">
                        <div class="searchb">
                       <input type="text" name="sayeed" size="40px;">
                      <button> <i class="fas fa-search"></i></button>
                     </div>
                    </div>
                    <div class="col-1 col-m1 col-l2 header_top_height headercolor"> 
                     <div class="sign">
                         <a href="cart.php" class="badge1" data-badge= 
                         <?php 
                          global $con;
                          $pro_quantity="SELECT sum(quantity) as tol_quantity FROM cart";
                          $pro_quantity_result = mysqli_query($con, $pro_quantity);
                          while ($pro_quantity_row = mysqli_fetch_assoc($pro_quantity_result))
                          { 
                             $total_pro_quan =  $pro_quantity_row['tol_quantity'];

                          }
                          echo $total_pro_quan;
                            
                       ?>
                       ><i style="font-size:33px;color:#226853; margin-left: 10px; margin-top:-5px;" class="fa">&#xf07a;</i></a>

                     </div> 
                    </div>
                    <div class="col-1 col-m8 col-l2 header_top_height headercolor">
                          <div class="sign">
                            <a href="twolog.php"><i class="fas fa-user-plus"></i> Login</a>
                     </div>
                     </div>
                    
                </div></div>
            </div>
        </section>
        <br><br><br>
        <section>
            <div class="wrapper">
                <div class="row">
                    <div class="col-2 col-m13 col-l12 menu_height headercolor">
                     </div>
                    <div class="col-2 col-m13 col-l13 menu_height headercolor"> 
                     <div class="menu">
                        <a href="breakfast.php"style="margin-left: 10px;"><b>Breakfast</b></a>

                     </div></div>
                    <div class="col-2 col-m13 col-l13 menu_height headercolor"> 
                        <div class="menu">
                        <a href="lunch.php" style="margin-left: 10px;"><b>Lunch</b></a>

                     </div></div>
                    <div class="col-2 col-m13 col-l13 menu_height headercolor"> 
                        <div class="menu">
                        <a href="dinner.php"><b>Dinner</b></a>

                     </div> </div>
                     <div class="col-2 col-m13 col-l2 menu_height headercolor"> 
                     <div class="menu">
                        <a href="pakage.php"><b>Package</b></a>

                     </div></div>
                    <div class="col-1 col-m13 col-l2 menu_height headercolor"> 
                     <div class="menu">
                        <a href="shoph.php"><b> Shop</b></a>

                    
                     
                 </div>
                </div>
                 <div class="col-1 col-m5 col-l2 menu_height headercolor"> 
                     <div class="menu2">
                     
            </div></div>
            </div>
        </section>
     <section>
            <div class="wrapper">
                <div class="row">
                  <h3 style="color: #226853;margin-left: 900px;">Open Time: 9.00 AM - 11.00 PM</h3>
                  </div>
                </div>
              </section>
        <section>
            <div class="wrapper">
                <div class="row">
                    <div class="col-9 col-m7 col-18 content_height">
                        <div class="my_gradient">
                             <?php 
                          global $con;
                          $get_page="select * from home";
                          $run_page=mysqli_query($con, $get_page);
                          while ($row_page=mysqli_fetch_array($run_page)) {
                              # code...
                            $post_id =$row_page['post_id'];
                            $title =$row_page['title'];
                            $image =$row_page['img'];
                            $taka =$row_page['tk'];
                            $disc=$row_page['dis'];

                            
                       ?>
                          <div class="box_one">
                            
                            <div class="col-4 col-m4 col-l4 footer_height imgs"><img src="../rannaghara/admin/<?php echo $row_page["img"]; ?>" alt="" width="300" height="370" />
                                    </div>
                            <div class="col-6 col-m6 col-l6 footer_height disc">

                                <h4><?php echo $title; ?></h4>
                                 <p style="margin-top: 10px;"><?php echo $disc; ?></p>
                                 <h6 style="margin-top: 32px;">Tk.<?php echo $taka; ?></h6>
                            </div>
                            <div class="col-2 col-m2 col-l2 footer_height btn">

                                <button onclick="myOnClick(this)">
                                    <a href="#" ><i style="font-size:30px" class="fa">&#xf07a;
                                        <p hidden id="add_product"><?php echo $post_id; ?></p></i></a>
                                </button>

                            </div>
                      
                             </div>
                        
                     <?php } ;?>
                         </div>
                         
                         
                        </div>
 
    
                             

                    <div class="col-3 col-m5 col-l4 content_height">
                       
                           
                              
                                 <img src="image/kmn.jpg" style="height: 50%;width: 100%;">
                                   <img src="image/km.jpg" style="height: 50%;width: 100%;">
                        
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="wrapper">
                <div class="row">
                        <?php 
                          global $con;
                          $get_page="select * from homen";
                          $run_page=mysqli_query($con, $get_page);
                          while ($row_page=mysqli_fetch_array($run_page)) {
                              # code...
                            $post_id =$row_page['post_idn'];
                            $title =$row_page['titlen'];
                            $image =$row_page['imgn'];
                            $taka =$row_page['tkn'];
                           
                       
                           

                       ?>
                    <div class="col-3 col-m3 col-l3 big_footer_height">

                         
                        <div class="shop">
                       
                         <div class="col-12 col-m12 col-l12 mama"><h2><?php echo $title; ?></h2></div>
                         <div class="col-12 col-m12 col-l12 kakas"><img src="../rannaghara/admin/<?php echo $row_page["imgn"]; ?>" alt="" width="300" height="300" /></div>

                         <div class="col-12 col-m12 col-l12 mama">
                             <div class="col-6 col-m6 col-l6 mama"><h3>Tk.<?php echo $taka; ?><h3></div>
                        
                         
                             <div class="col-6 col-m6 col-l6 mama">
                          
                                 <button onclick="myOnClickHomen(this)">
                                    <a href="#" ><i style="font-size:30px" class="fa">&#xf07a;
                                        <p hidden id="add_product"><?php echo $post_id; ?></p></i></a>
                                </button>
                            
                             </div>
                       

                         </div>
                           
                          </div>

                    </div>
                    <?php  } ;?>
                     
        </section>
         <section>
          <div class="wrapper">
            <div class="row">
                     <div class="rider">
       <h1 style="text-align: center; font-size: 30px;">Join our RannaGhara rider team! <button style="height:35px;width: 10%;border: 1px solid blue; background-color: #088e34; margin-left: 70px; "><a href="rider.php" style="text-decoration: none;color: white;">APPLY NOW!</a></button></h1>
                    <span onclick="this.parentElement.style.display='none'"
                    class="not"><button>X</button></span>


</div>


              </div>
            </div>
        </section>
        <?php include 'footer.php';?>
        <br>
        
        <section>
            <div class="wrapper">
                <div class="row">
                    <div class="col-12 col-m12 col-l12 footer_height">
                        <div class="kh">
                        <div class="col-5 col-m5 col-l5 header_top_height"><h3>We accept payment via </h3></div>
                        <div class="col-1 col-m1 col-l1 header_top_height"><img src="image/bkash.png"></div>
                        <div class="col-1 col-m1 col-l1 header_top_height"><img src="image/roket.png"></div>
                        <div class="col-1 col-m1 col-l1 header_top_height"><img src="image/hand.png"></div>
                        <div class="col-4 col-m4 col-l4 header_top_height"></div>
                        </div>
                        <hr><hr>
                    <p style="color: #226853;text-align: center;margin-top: 10px;">Rannaghara.com is a leading price comparison site that allows you shop online for the best deals and lowest prices. Our mission is to help consumers use the power of information to easily find, compare and buy products online - in less time and for the best price! You can read unbiased product reviews and compare prices online. Online shopping has never been as easy! Browse our large selection of fashion, clothing, consumer electronics, home and garden products now.</p>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="wrapper">
                <div class="row">
                    <div class="col-12 col-m12 col-l12 mama"><h4 style="text-align: center;">© 2018 Rannaghara.com</h4></div>
                </div>
            </div>
        </section>

        <button class="open-button" onclick="openForm()">Special Order</button>

<div class="chat-popup" id="myForm">
  <form name="formsms" action=""method="post" enctype="multipart/form-data" class="form-container">
    <h1 style="color: white;text-align: center;">RannaGhara</h1>

    <label for="msg" style="color: white;text-align: center;"><h4> Order to 3 Simple Steps & Wait for Confirm </h4></label><br>
    <br>
    <input type="text"  placeholder="+880" name="number" style="height:40px;width:280px;"><br>
      <input type="text"  placeholder="Delevary Addres..." name="addres" style="height:60px;width:280px;"><br>
       <input type="text"  placeholder="Order Discription..." name="sms" style="height:60px;width:280px;">

    <button type="submit" name="submitsms" class="btn">Send</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
               <?php 
                 if(isset($_POST["submitsms"]))
                               {

                             mysqli_query($con,"insert into specialorder values ('$_POST[addres]','$_POST[sms]',$_POST[number],'')");
                         }
                          ?>                     
<script>
 
function openForm() {
    document.getElementById("myForm").style.display = "block";
}

function closeForm() {
    document.getElementById("myForm").style.display = "none";
}
</script>

                               
</div>
</body>

    
</html>