<!DOCTYPE html>
<html>
<script type="text/javascript">
    function myOnClickbrk(ctrl){
       var cart = ctrl.getElementsByTagName('p')[0].innerHTML;
        alert('Confirm Cart?');
        window.location.href = "shop_fash_cart.php?shopfash_cart=" + cart;

    }
    </script>
  <?php
$con=mysqli_connect("localhost","root","","rannaghara");


?>

    <head>
        <title>Rannaghra/shop/Fashion</title>
        <link rel="stylesheet" href="shoph.css"/>
        <link rel="icon" href="image/images.png" type="image/png"/> 
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
         <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    </head>
    <body>
        <section>
            <div class="wrapper">
                <div class="row">
              <div class="col-12 col-m6 col-l3 header_bottom_height">

                  <div class="header">
  <h2 style="color:#226853;font-size: 50px;"><i><b>Fashion retailers should aim to offer great customer service</b></i></h2>
 
</div>

<div id="navbar">
    <a href="javascript:void(0)"><img src="image/images.png" style="height: 40px;width: 40px; border-radius: 60px;margin-top: -9px;margin-left: 16px;"></a>
    <a href="index.php"><h1 style="margin-top: -17px;text-align: left;">RannaGhara</h1></a>
  <a  href="shoph.php">Home</a>
  <a class="active"href="fashion.php">Fashion</a>
  <a href="kids.php">Kids</a>
  <a href="handc.php">Handicraft</a>

</div

</div>
                </div>
            </div>
        </section>
        <br><br><br>
        <section>
             <div class="wrapper">
                <div class="row">

                     <?php 
                          global $con;
                          $get_page="select * from shophomef";
                          $run_page=mysqli_query($con, $get_page);
                          while ($row_page=mysqli_fetch_array($run_page)) {
                              # code...
                             $disc=$row_page['disshopf'];
                            
                            $title =$row_page['titleshopf'];
                            $post_id =$row_page['post_idshopf'];
                            $image =$row_page['imgshopf'];
                            $taka =$row_page['tkshopf'];
                           
                           
                       
                           

                       ?>

                  <div class="max">
                           <div class="box_one">
                          <div class="col-12 col-m6 col-l9 photo"><img src="../rannaghara/admin/<?php echo $row_page["imgshopf"]; ?>" alt="" width="243" height="220" /></div>
                            <div class="col-12 col-m6 col-l9 dis">
                                <div class="col-12 col-m6 col-l9 disa"><h2 style="text-align: center;margin-top: 4px; color: #226853;"><?php echo $title; ?></h2><hr></div>
                                <div class="col-12 col-m6 col-l9 disa"><p style="text-align: center;margin-top: 15px; color: #226853;"><?php echo $disc; ?></p></div>

                            </div>
                            <div class="col-12 col-m6 col-l9 btn">
                                <div class="col-6 col-m6 col-l9 btn"><h3 style="text-align: center;margin-top: -6px; color: #226853;">Tk.<?php echo $taka; ?></h3></div>
                                                    <div class="col-6 col-m6 col-l9 btn">
                                 <button onclick="myOnClickbrk(this)">
                                  <a href="#" ><i style="font-size:30px;color:#226853;" class="fa">&#xf07a;
                                <p hidden id="add_product"><?php echo $post_id; ?></p></i></a>
                                   </button>
                                      </div>
                            </div>
                      </div>
                        </div>
                        <?php  } ;?>

                    </section>

       <?php include 'footer.php';?>
        <section>
            <div class="wrapper">
                <div class="row">
                    <div class="col-12 col-m12 col-l12 mama"><h4 style="text-align: center;">© 2018 Rannaghara.com</h4></div>
                </div>
            </div>
        </section>
       
        <script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>
    </body>
</html>





