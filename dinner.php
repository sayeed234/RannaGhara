<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
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
                             
                              <marquee> <h1 style="color: #226853;">Your Favorite dinner Recipes</h1></marquee>
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
                          $get_page="select * from dinnerdf";
                          $run_page=mysqli_query($con, $get_page);
                          while ($row_page=mysqli_fetch_array($run_page)) {
                              # code...
                            $post_id =$row_page['post_iddf'];
                            $title =$row_page['titledf'];
                            $image =$row_page['imgdf'];
                            $taka =$row_page['tkdf'];
                           
                          
                       ?>
                          <div class="max">
                      <div class="Box">
                            <div class="box">
                             <table style="width:100%;" id='display'>
                                      <tr>
                     <th rowspan="3"><p><img src="../rannaghara/admin/<?php echo $row_page["imgdf"]; ?>" alt="" width="300" height="300" /></th>
                                        <th></th>
                                           <th></th>
                                    
                                      </tr>
                                      <tr>
                                        <td colspan="2"style="color:#226853;"> <h1 style="text-align: center;"><p><?php echo $title;?></p></h1><hr><hr></td>
                                       
                                      </tr>
                                      <tr>
                                        <td  style="color:#226853; "><h3>Tk. <?php echo $taka; ?></h3></td>
                                         <td ><button onclick="myFunction()"><a href="#"><i style="font-size:30px;color:#226853; padding: 2px;" class="fa">&#xf07a;</i></a></button></td>
                                       
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
                          $get_page="select * from dinnerdb";
                          $run_page=mysqli_query($con, $get_page);
                          while ($row_page=mysqli_fetch_array($run_page)) {
                              # code...
                            $post_id =$row_page['post_iddb'];
                            $title =$row_page['titledb'];
                          
                            $taka =$row_page['tkdb'];
                            $disc=$row_page['disdb'];
                        
                           

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
                                <th rowspan="2"><button onclick="myFunction()" style="margin-top: 25px;><a href="#" "><i style="font-size:30px;color:#226853; padding: 5px;" class="fa">&#xf07a;</i></a></button></th>
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

        
        <section>
          <div class="wrapper">
                <div class="row">

                  <h1 style="text-align: center;width:99%;margin:7px;color:#226853; box-shadow: 1px 1px 1px 1px green;font-size: 30px;background-color: #eaefee;"><i class="far fa-arrow-alt-circle-down"style="font-size: 50px;"></i>Fish  Items</h1>

                     <?php 
                          global $con;
                          $get_page="select * from dinnerdfi";
                          $run_page=mysqli_query($con, $get_page);
                          while ($row_page=mysqli_fetch_array($run_page)) {
                              # code...
                            $post_id =$row_page['post_iddfi'];
                            $title =$row_page['titledfi'];
                          
                            $taka =$row_page['tkdfi'];
                            $disc=$row_page['disdfi'];
                        
                           

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
                                <th rowspan="2"><button onclick="myFunction()" style="margin-top: 25px;><a href="#" "><i style="font-size:30px;color:#226853; padding: 5px;" class="fa">&#xf07a;</i></a></button></th>
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

        
        <section>
          <div class="wrapper">
                <div class="row">
                  <h1 style="text-align: center;width:99%;margin:7px;color:#226853; box-shadow: 1px 1px 1px 1px green;font-size: 30px;background-color: #eaefee;"><i class="far fa-arrow-alt-circle-down"style="font-size: 50px;"></i>Egg & Vegetable Items</h1>

                     <?php 
                          global $con;
                          $get_page="select * from dinnerde";
                          $run_page=mysqli_query($con, $get_page);
                          while ($row_page=mysqli_fetch_array($run_page)) {
                              # code...
                            $post_id =$row_page['post_idde'];
                            $title =$row_page['titlede'];
                          
                            $taka =$row_page['tkde'];
                            $disc=$row_page['disde'];
                        
                           

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
                                <th rowspan="2"><button onclick="myFunction()"style="margin-top: 25px;><a href="#" "><i style="font-size:30px;color:#226853; padding: 5px;" class="fa">&#xf07a;</i></a></button></th>
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

     
        <section>
          <div class="wrapper">
                <div class="row">
                    <h1 style="text-align: center;width:99%;margin:7px;color:#226853; box-shadow: 1px 1px 1px 1px green;font-size: 30px;background-color: #eaefee;"><i class="far fa-arrow-alt-circle-down"style="font-size: 50px;"></i>Mixed Items</h1>

                     <?php 
                          global $con;
                          $get_page="select * from dinnerdv";
                          $run_page=mysqli_query($con, $get_page);
                          while ($row_page=mysqli_fetch_array($run_page)) {
                              # code...
                            $post_id =$row_page['post_iddv'];
                            $title =$row_page['titledv'];
                          
                            $taka =$row_page['tkdv'];
                            $disc=$row_page['disdv'];
                        
                           

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
                                <th rowspan="2"><button onclick="myFunction()" style="margin-top: 25px;><a href="#" "><i style="font-size:30px;color:#226853; padding: 5px;" class="fa">&#xf07a;</i></a></button></th>
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
<script>
function myFunction() {
  alert("This recipe not available");
}
</script>
<script src="pm.js"></script>

    </body>
</html>