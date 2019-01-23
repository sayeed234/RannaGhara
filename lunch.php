
<!DOCTYPE html>
<html>
<script type="text/javascript">
    function myOnClickbrkf(ctrl){
       var cart = ctrl.getElementsByTagName('p')[0].innerHTML;
        //alert(cart);
        window.location.href = "breakf.php?carted_product_id=" + cart;

    }

    
</script>
<?php
$con=mysqli_connect("localhost","root","","rannaghara");


?>
    <head>
        <title>rannaghara lunch item</title>
        <script src="jquery-3.3.1.min.js"></script>
         <link rel="icon" href="image/images.png" type="image/png"/> 
        <link rel="stylesheet" href="lunchcss.css"/>
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
   font-size:.9em;
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
        <?php include 'bldmenu.php'?>
                                                       <!--    Lunch fvrt item display    -->
                   <br> <br>                                      <!--    Lunch fvrt item display    -->
        <section>
            <div class="wrapper">
                <div class="row">
                      <div class="Box">
                            <div class="col-12 col-m2 col-l2 menu_height">
                             
                             <h1 style="color: #226853;margin-left: 30px;"><i class="fas fa-arrow-alt-circle-down" style="font-size: 50px;"></i> Lunch Ideas & Recipes.</h1>
                            </div>

                      </div>

                </div>
              </div>
                   

        </section>
        <br>
       <section>
            <div class="wrapper">
                <div class="row">

                         <?php 
                          global $con;
                          $get_page="select * from lunchlf";
                          $run_page=mysqli_query($con, $get_page);
                          while ($row_page=mysqli_fetch_array($run_page)) {
                              # code...
                            $post_id =$row_page['post_idlf'];
                            $title =$row_page['titlelf'];
                            $image =$row_page['imglf'];
                            $taka =$row_page['tklf'];
                           
                          
                       ?>
                          <div class="max">
                      <div class="Box">
                            <div class="box">
                             <table style="width:100%;" id='display'>
                                      <tr>
                                        <th rowspan="3"><p><img src="../rannaghara/admin/<?php echo $row_page["imglf"]; ?>" alt="" width="300" height="300" /></th>
                                        <th></th>
                                           <th></th>
                                    
                                      </tr>
                                      <tr>
                                        <td colspan="2"style="color:#226853;"> <h1 style="text-align: center;"><p><?php echo $title;?></p></h1><hr><hr></td>
                                       
                                      </tr>
                                      <tr>
                                        <td  style="color:#226853; "><h3>Tk. <?php echo $taka; ?></h3></td>


                                         <td ><button onclick="myOnClickbrkf(this)">
                                    <a href="#" ><i style="font-size:30px;color:#226853;" class="fa">&#xf07a;
                                        <p hidden id="add_product"><?php echo $post_id; ?></p></i></a>
                                </button></td>
                                       
                                    </table>
                                   </div>
                                   </div>
                                    <?php } ;?> 
                              </div>

                            </div> 
                        
                        </div>
        </section>
                                                     <!-- Lunch Beef item display -->

        <br>

      
        <section>
          <div class="wrapper">
                <div class="row">
                    <h1 style="text-align: center;width:99%;margin:7px;color:#226853; box-shadow: 1px 1px 1px 1px green;font-size: 30px;background-color: #eaefee;"><i class="far fa-arrow-alt-circle-down"style="font-size: 50px;"></i>Beef Items</h1>

                     <?php 
                          global $con;
                          $get_page="select * from lunchlb";
                          $run_page=mysqli_query($con, $get_page);
                          while ($row_page=mysqli_fetch_array($run_page)) {
                              # code...
                            $post_id =$row_page['post_idlb'];
                            $title =$row_page['titlelb'];
                          
                            $taka =$row_page['tklb'];
                            $disc=$row_page['dislb'];
                        
                           

                       ?>
                         
                  
                       <div class="Boxa">
                            <div class="boxa">
                              <table class="fixed" >
                                <col width="900px" />
                                  <col width="200px" />
                                  <col width="200px" />
                                   <tr>
                                <th><h2 style="text-align: center;color:#226853; margin-top: 4px;"><?php echo $title; ?></h2></th>

                                <th rowspan="2"><h2 style="color:#226853;margin-top: 17px;">Tk.<?php echo $taka; ?></h2></th> 
                                <th rowspan="2"><button style="margin-top: 25px;><a href="#" "><i style="font-size:30px;color:#226853; padding: 5px;" class="fa">&#xf07a;</i></a></button></th>
                              </tr>
                              <tr>

                                <td><h3 style="text-align: center;color:#226853;margin-top: 9px;"><?php echo $disc; ?></h3></td>
                                 
                              </tr>
                            </table>
                                                    
                        </div>
                      </div>
                      <?php } ;?> 
                    </div>
                  </div>
           
        </section>
         <br>
<br>
        
        <section>
          <div class="wrapper">
                <div class="row">

                  <h1 style="text-align: center;width:99%;margin:7px;color:#226853; box-shadow: 1px 1px 1px 1px green;font-size: 30px;background-color: #eaefee;"><i class="far fa-arrow-alt-circle-down"style="font-size: 50px;"></i>Fish  Items</h1>

                     <?php 
                          global $con;
                          $get_page="select * from lunchfi";
                          $run_page=mysqli_query($con, $get_page);
                          while ($row_page=mysqli_fetch_array($run_page)) {
                              # code...
                            $post_id =$row_page['post_idlfi'];
                            $title =$row_page['titlelfi'];
                          
                            $taka =$row_page['tklfi'];
                            $disc=$row_page['dislfi'];
                        
                           

                       ?>
                         
                  
                       <div class="Boxa">
                            <div class="boxa">
                               <table class="fixed" >
                                <col width="900px" />
                                  <col width="200px" />
                                  <col width="200px" />
                              <tr>
                                <th><h2 style="text-align: center;color:#226853; margin-top: 4px;"><?php echo $title; ?></h2></th>

                                <th rowspan="2"><h2 style="color:#226853;margin-top: 17px;">Tk.<?php echo $taka; ?></h2></th> 
                                <th rowspan="2"><button style="margin-top: 25px;><a href="#" "><i style="font-size:30px;color:#226853; padding: 5px;" class="fa">&#xf07a;</i></a></button></th>
                              </tr>
                              <tr>

                                <td><h3 style="text-align: center;color:#226853;margin-top: 9px;"><?php echo $disc; ?></h3></td>
                                 
                              </tr>
                            </table>
                                                    
                        </div>
                      </div>
                      <?php } ;?> 
                    </div>
                  </div>
           
        </section>
         <br>

        <br>
        <section>
          <div class="wrapper">
                <div class="row">
                  <h1 style="text-align: center;width:99%;margin:7px;color:#226853; box-shadow: 1px 1px 1px 1px green;font-size: 30px;background-color: #eaefee;"><i class="far fa-arrow-alt-circle-down"style="font-size: 50px;"></i>Chicken Items</h1>

                     <?php 
                          global $con;
                          $get_page="select * from lunchle";
                          $run_page=mysqli_query($con, $get_page);
                          while ($row_page=mysqli_fetch_array($run_page)) {
                              # code...
                            $post_id =$row_page['post_idle'];
                            $title =$row_page['titlele'];
                          
                            $taka =$row_page['tkle'];
                            $disc=$row_page['disle'];
                        
                           

                       ?>
                         
                  
                       <div class="Boxa">
                            <div class="boxa">
                               <table class="fixed" >
                                <col width="900px" />
                                  <col width="200px" />
                                  <col width="200px" />
                              <tr>
                                <th><h2 style="text-align: center;color:#226853; margin-top: 4px;"><?php echo $title; ?></h2></th>

                                <th rowspan="2"><h2 style="color:#226853;margin-top: 17px;">Tk.<?php echo $taka; ?></h2></th> 
                                <th rowspan="2"><button style="margin-top: 25px;><a href="#" "><i style="font-size:30px;color:#226853; padding: 5px;" class="fa">&#xf07a;</i></a></button></th>
                              </tr>
                              <tr>

                                <td><h3 style="text-align: center;color:#226853;margin-top: 9px;"><?php echo $disc; ?></h3></td>
                                 
                              </tr>
                            </table>
                                                    
                        </div>
                      </div>
                      <?php } ;?> 
                    </div>
                  </div>
           
        </section>
         <br>
<br>
     
        <section>
          <div class="wrapper">
                <div class="row">
                    <h1 style="text-align: center;width:99%;margin:7px;color:#226853; box-shadow: 1px 1px 1px 1px green;font-size: 30px;background-color: #eaefee;"><i class="far fa-arrow-alt-circle-down"style="font-size: 50px;"></i>Vegatable Items</h1>

                     <?php 
                          global $con;
                          $get_page="select * from lunchlv";
                          $run_page=mysqli_query($con, $get_page);
                          while ($row_page=mysqli_fetch_array($run_page)) {
                              # code...
                            $post_id =$row_page['post_idlv'];
                            $title =$row_page['titlelv'];
                          
                            $taka =$row_page['tklv'];
                            $disc=$row_page['dislv'];
                        
                           

                       ?>
                         
                  
                       <div class="Boxa">
                            <div class="boxa">
                               <table class="fixed" >
                                <col width="900px" />
                                  <col width="200px" />
                                  <col width="200px" />
                              <tr>
                                <th><h2 style="text-align: center;color:#226853; margin-top: 4px;"><?php echo $title; ?></h2></th>

                                <th rowspan="2"><h2 style="color:#226853;margin-top: 17px;">Tk.<?php echo $taka; ?></h2></th> 
                                <th rowspan="2"><button style="margin-top: 25px;><a href="#" "><i style="font-size:30px;color:#226853; padding: 5px;" class="fa">&#xf07a;</i></a></button></th>
                              </tr>
                              <tr>

                                <td><h3 style="text-align: center;color:#226853;margin-top: 9px;"><?php echo $disc; ?></h3></td>
                                 
                              </tr>
                            </table>
                                                    
                        </div>
                      </div>
                      <?php } ;?> 
                    </div>
                  </div>
           
        </section>
<section>
     <div class="wrapper">
                <div class="row">
                    <div class="foot">

                     <div class="col-12 col-m12 col-l12 footer1 life"><p style="text-align: center;font-size: 18px;color: #226853;">Rannaghara.com is a leading price comparison site that allows you shop online for the best deals and lowest prices. Our mission is to help consumers use the power of information to easily find, compare and buy products online - in less time and for the best price! You can read unbiased product reviews and compare prices online. Online shopping has never been as easy! Browse our large selection of fashion, clothing, consumer electronics, home and garden products now.</p>
                    </div>
                  <hr><hr><hr>
                    <div class="col-12 col-m12 col-l12 footer2 life"><h6 style="text-align: center;font-size: 15px;color: #226853;">Rannaghara copyRight 2018</h6></div>
</div>
                </div>
            </div>

</section>
<script src="pm.js"></script>
    </body>
</html>