 <br>
  <nav class="navbar navbar-expand-lg  ftco_navbar ftco-navbar-light" id="ftco-navbar">
	    <div class="container d-flex align-items-center">
        
	    
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	         </button>
	         <div class="collapse navbar-collapse" id="ftco-nav">
	         <ul class="navbar-nav ml-auto">
           

            <?php
      if($_SESSION["semail"]==null)
      {

      ?>
      <li class="nav-item "> <a href="index.php" class="nav-link pl-0"><h3 style="font-family: Trebuchet MS;"><span class="glyphicon glyphicon-home "></span>&nbsp;Home</h3></a></li>
       <li class="nav-item "> <a href="studlogin.php" class="nav-link pl-0"><h3 style="font-family: Trebuchet MS;"><span class="glyphicon glyphicon-education "></span>&nbsp;Student Login</h3></a></li>


      </li>
      
      <?php

      }
      else
      {
      ?>
       <li class="nav-item " > <a href="ExcelinputFile.php" class="nav-link pl-9"><h3 style="font-family: Trebuchet MS;"><span class="glyphicon glyphicon-level-up "></span>&nbsp;Import Your DataBase &nbsp;</h3></a></li>

        <li class="nav-item " > <a href="graph3.php" class="nav-link pl-9"><h3 style="font-family: Trebuchet MS;"><span class="glyphicon glyphicon-star"></span>&nbsp;Class Wise Performance&nbsp;</h3></a></li>

        <li class="nav-item " > <a href="StudentWiseGraph.php" class="nav-link pl-9"><h3 style="font-family: Trebuchet MS;"><span class="glyphicon glyphicon-stats "></span>&nbsp;Students Performance&nbsp;</h3></a></li>

        <li class="nav-item " > <a href="Marksheet.php" class="nav-link pl-9"><h3 style="font-family: Trebuchet MS;"><span class="glyphicon glyphicon-list-alt"></span>&nbsp;Ranking of Students&nbsp;</h3></a></li>
       
       <li class="nav-item " > <a href="logout.php" class="nav-link pl-"><h3 style="font-family: Trebuchet MS;"><span class="glyphicon glyphicon-hand-right "></span>&nbsp;Logout&nbsp;&nbsp;&nbsp;&nbsp;</h3></a></li>
       
   <?php
      }
      ?>  
	 	 </ul>

	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
  