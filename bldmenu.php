  <section>
            <div class="wrapper">
                <div class="row">
                        <div class="col-12 col-m12 col-l12  mainmenu">

                            <div class="man">
                             <div class="col-1 col-m1 col-l1  mainmenu headercolor"> <a href=""><img src="image/images.png" style="height: 45px;width: 45px; margin-left: 37px;margin-top: 3px;border-radius: 40px;"></a></div> 
                              <div class="col-2 col-m2 col-l2  mainmenu headercolor"> <a href="index.php"><h2>RannaGhara</h2></a></div> 
                              <div class="col-1 col-m1 col-l1  mainmenu headercolor"><a class="active" href="breakfast.php"><h3>Breakfast</h3></a></div> 
                             <div class="col-1 col-m1 col-l1  mainmenu headercolor"><a href="lunch.php"><h3>Lunch</h3></a></div> 
                              <div class="col-1 col-m1 col-l1  mainmenu headercolor"><a href="dinner.php"><h3>Dinner</h3></a></div> 
                                <div class="col-1 col-m1 col-l1  mainmenu headercolor"><a href="Pakage.php"><h3>Package</h3></a></div> 



                                 <div class="col-3 col-m3 col-l3  mainmenu headercolor"> <a href="cart.php" class="badge1" data-badge= 
                         <?php 
                          global $con;
                          $get_page="select * from cart";
                          $run_page=mysqli_query($con, $get_page);
                          $num_rows = mysqli_num_rows($run_page);
                          //$_SESSION["totalItem"] = $num_rows;
                          echo $num_rows;
                            
                       ?>
                       ><i style="font-size:33px;color:#226853; margin-left: 170px; margin-top:20px;" class="fa">&#xf07a;</i></a>
</div>


                           <div class="col-2 col-m2 col-l2  mainmenu headercolor"><a href="shoph.php"><p>Shop</p></a></div>  

              
            </div>
            </div>
            </div>


        </section>