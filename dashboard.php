<?php include 'dashboardheader.php' ?>



<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                      <hr>
  <a href="allrooms.php"><i class="fa fa-bed"></i>ADD Rooms</a>
        <hr>
  <a href="viewrooms.php"><i class="fa fa-bed"></i>view Rooms</a>
            <hr>
  <a href="conferenceht.php"><i class="fa fa-users"></i>Add CONFERENCE HALL</a>
               <hr>
  <a href="viewconference.php"><i class="fa fa-users"></i>view halls</a>


</div>


<span style="font-size:30px;cursor:pointer; color:#fff" onclick="openNav()">&#9776; open</span>

<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>

  <section>



<div class="operations">


                        

                      <div class="div-square">
                           <a href="viewbookies.php" >
 <i class="fa fa-users fa-5x"></i>
                      <h4>View Bookies</h4>
                      </a>
                      </div>

                                            <div class="div-square">
                                                 <a href="bookingreport.php" >
                       <i class="fa fa-book fa-5x"></i>
                                            <h4>Bookings Report</h4>
                                            </a>
                                            </div>


                                                                  <div class="div-square">
                                                                       <a href="cancellationreport.php" >
                                             <i class="fa fa-ban fa-5x"></i>
                                                                  <h4>Cancellation Report</h4>
                                                                  </a>
                                                                  </div>


                     <div class="operations">
                                          <div class="div-square">
                                               <a href="support.php" >
                     <i class="fa fa-comments-o fa-5x"></i>
                                          <h4>Support</h4>
                                          </a>
                                          </div>
                                          </section>
                                          <section class="other-operations">



                                        <div class="things">

                                        </div>
                                        </section>
<?php  include 'dashboardfooter.php' ?>
