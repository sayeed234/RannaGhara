<!DOCTYPE html>
<html>

<?php
$con=mysqli_connect("localhost","root","","rannaghara");
?>
    <head>
        <title>rannaghara pakage-items</title>
        <link rel="stylesheet" href="pakage.css"/>
           <link rel="icon" href="image/images.png" type="image/png"/> 
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
        <br><br>
        <section>
            <div class="wrapper">
                <div class="row"> 
                    <h1 style="font-size:30px;color: #226853; margin-left: 120px;">Birthday Party</h1>

                  <div class="col-1 col-m1 col-l1 "><i class="fa fa-first-order" style="font-size:48px;color: #226853;margin-top: -50px; margin-left: 40px;"></i></div>
              
                               <div class="col-10 col-m10 col-l10 ">

                           <?php 
                          global $con;
                          $get_page="select * from pakagepb";
                          $run_page=mysqli_query($con, $get_page);
                          while ($row_page=mysqli_fetch_array($run_page)) {
                              # code...
                            $post_id =$row_page['post_idpbe'];
                            $title =$row_page['titlepb'];
                          
                            $taka =$row_page['tkpb'];
                            $disc=$row_page['dispb'];
                        
                           

                       ?>
                       <div>
                             
                               <div class="col-12 col-m12 col-l12 box">
                                        

                                 <div class="box_one">
                                    <div class="col-9 col-m9 col-l9 boxn">
                                      <div class="col-12 col-m12 col-l12 boxnn"><h2><?php echo $title; ?></h2> </div>
                                      <div class="col-12 col-m12 col-l12 boxnn"><h3><?php echo $disc; ?></h3></div>

                                    </div>
                                    <div class="col-2 col-m2 col-l2 boxn">
                                    <h5>Tk.<?php echo $taka; ?></h5></div>
                                     
                                    <div class="col-1 col-m1 col-l1 boxn"><button onclick="myFunction()"><a href="#"><i style="font-size:40px;color:#226853;" class="fa">&#xf07a;</i></a></button></div>

                               </div>
                             </div>

                           </div>

            <?php } ;?>  
      </div>

        </section>

           <br><br>
        <section>
            <div class="wrapper">
                <div class="row"> <hr>
          
                              <h1 style="font-size:30px;color: #226853; margin-left: 120px;">Wedding & Anniversary Party</h1>

                  <div class="col-1 col-m1 col-l1 "><i class="fa fa-first-order" style="font-size:48px;color: #226853;margin-top: -50px; margin-left: 40px;"></i></div>
              
                               <div class="col-10 col-m10 col-l10 ">
                           <?php 
                          global $con;
                          $get_page="select * from pakagepw";
                          $run_page=mysqli_query($con, $get_page);
                          while ($row_page=mysqli_fetch_array($run_page)) {
                              # code...
                            $post_id =$row_page['post_idpw'];
                            $title =$row_page['titlepw'];
                          
                            $taka =$row_page['tkpw'];
                            $disc=$row_page['dispw'];
                        
                           

                       ?>
                             <div>
                               <div class="col-12 col-m12 col-l12 box">
                                        

                                 <div class="box_one">
                                    <div class="col-9 col-m9 col-l9 boxn">
                                      <div class="col-12 col-m12 col-l12 boxnn"><h2><?php echo $title; ?></h2> </div>
                                      <div class="col-12 col-m12 col-l12 boxnn"><h3><?php echo $disc; ?></h3></div>

                                    </div>
                                    <div class="col-2 col-m2 col-l2 boxn">
                                    <h5>Tk.<?php echo $taka; ?></h5></div>
                                     
                                    <div class="col-1 col-m1 col-l1 boxn"><button onclick="myFunction()"><a href="#"><i style="font-size:40px;color:#226853;" class="fa">&#xf07a;</i></a></button></div>



                                   </div>
                             </div>
                           </div>
            <?php } ;?>  
      </div>
      
        </section>
    <br><br>
        <section>
            <div class="wrapper">
                <div class="row"> <hr>
              
                               <h1 style="font-size:30px;color: #226853; margin-left: 120px;">Class Party</h1>

                  <div class="col-1 col-m1 col-l1 "><i class="fa fa-first-order" style="font-size:48px;color: #226853;margin-top: -50px; margin-left: 40px;"></i></div>
              
                               <div class="col-10 col-m10 col-l10 ">

                           <?php 
                          global $con;
                          $get_page="select * from pakagepc";
                          $run_page=mysqli_query($con, $get_page);
                          while ($row_page=mysqli_fetch_array($run_page)) {
                              # code...
                            $post_id =$row_page['post_idpc'];
                            $title =$row_page['titlepc'];
                          
                            $taka =$row_page['tkpc'];
                            $disc=$row_page['dispc'];
                        
                           

                       ?>
                              <div>
                               <div class="col-12 col-m12 col-l12 box">
                                        

                                 <div class="box_one">
                                    <div class="col-9 col-m9 col-l9 boxn">
                                      <div class="col-12 col-m12 col-l12 boxnn"><h2><?php echo $title; ?></h2> </div>
                                      <div class="col-12 col-m12 col-l12 boxnn"><h3><?php echo $disc; ?></h3></div>

                                    </div>
                                    <div class="col-2 col-m2 col-l2 boxn">
                                    <h5>Tk.<?php echo $taka; ?></h5></div>
                                     
                                    <div class="col-1 col-m1 col-l1 boxn"><button onclick="myFunction()"><a href="#"><i style="font-size:40px;color:#226853;" class="fa">&#xf07a;</i></a></button></div>


                            </div>
                             </div>
                           </div>
            <?php } ;?>  
      </div>
        </section>
    <br><br>
        <section>
            <div class="wrapper">
                <div class="row"> <hr>
              
                              <h1 style="font-size:30px;color: #226853; margin-left: 120px;">Buy Party Supplies</h1>

                  <div class="col-1 col-m1 col-l1 "><i class="fa fa-first-order" style="font-size:48px;color: #226853;margin-top: -50px; margin-left: 40px;"></i></div>
              
                               <div class="col-10 col-m10 col-l10 ">
                           <?php 
                          global $con;
                          $get_page="select * from pakageps";
                          $run_page=mysqli_query($con, $get_page);
                          while ($row_page=mysqli_fetch_array($run_page)) {
                              # code...
                            $post_id =$row_page['post_idps'];
                            $title =$row_page['titleps'];
                          
                            $taka =$row_page['tkps'];
                            $disc=$row_page['disps'];
                        
                           

                       ?>
                              <div>
                               <div class="col-12 col-m12 col-l12 box">
                                        

                                 <div class="box_one">
                                    <div class="col-9 col-m9 col-l9 boxn">
                                      <div class="col-12 col-m12 col-l12 boxnn"><h2><?php echo $title; ?></h2> </div>
                                      <div class="col-12 col-m12 col-l12 boxnn"><h3><?php echo $disc; ?></h3></div>

                                    </div>
                                    <div class="col-2 col-m2 col-l2 boxn">
                                    <h5>Tk.<?php echo $taka; ?></h5></div>
                                     
                                    <div class="col-1 col-m1 col-l1 boxn"><button onclick="myFunction()"><a href="#"><i style="font-size:40px;color:#226853;" class="fa">&#xf07a;</i></a></button></div>



                                    </div>
                             </div>
                           </div>
            <?php } ;?>  
      </div>
        </section>
      <br><br>
        <section>
            <div class="wrapper">
                <div class="row">
                  <hr>
              
                                <h1 style="font-size:30px;color: #226853; margin-left: 120px;">Set Menu for Party</h1>

                  <div class="col-1 col-m1 col-l1 "><i class="fa fa-first-order" style="font-size:48px;color: #226853;margin-top: -50px; margin-left: 40px;"></i></div>
              
                               <div class="col-10 col-m10 col-l10 ">
                           <?php 
                          global $con;
                          $get_page="select * from pakagepset";
                          $run_page=mysqli_query($con, $get_page);
                          while ($row_page=mysqli_fetch_array($run_page)) {
                              # code...
                            $post_id =$row_page['post_idpset'];
                            $title =$row_page['titlepset'];
                          
                            $taka =$row_page['tkpset'];
                            $disc=$row_page['dispset'];
                        
                           

                       ?>
                        <div>
                             
                               <div class="col-12 col-m12 col-l12 box">
                                        

                                 <div class="box_one">
                                    <div class="col-9 col-m9 col-l9 boxn">
                                      <div class="col-12 col-m12 col-l12 boxnn"><h2><?php echo $title; ?></h2> </div>
                                      <div class="col-12 col-m12 col-l12 boxnn"><h3><?php echo $disc; ?></h3></div>

                                    </div>
                                    <div class="col-2 col-m2 col-l2 boxn">
                                    <h5>Tk.<?php echo $taka; ?></h5></div>
                                     
                                    <div class="col-1 col-m1 col-l1 boxn"><button onclick="myFunction()"><a href="#"><i style="font-size:40px;color:#226853;" class="fa">&#xf07a;</i></a></button></div>


                 </div>
                             </div>
                           </div>
            <?php } ;?>  
      </div>
        </section>
        <script>
function myFunction() {
  alert("This recipe not available");
}
</script>

    </body>
</html>