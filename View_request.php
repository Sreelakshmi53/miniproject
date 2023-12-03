<?php
session_start();
	require "conn.php";
	include('student_header.php');
	$userId=$_SESSION['reg_no'];	
	$qry="select * from concession_request where register_no='".$userId."'  ";
	$res=mysqli_query($conn,$qry);
?>

<!DOCTYPE html><html><head>
<body class="sub_page">
  <div class="hero_area">
   
  </div>

  <!-- contact section -->
  <section class="contact_section layout_padding">
    <div class="container contact_heading">
      <h2>
        Profile
      </h2>
      <p>
        Here is your entered data</p>
    </div>
    <div class="container">
      <form method="GET" >
        <div class="form-row">
			
			<?php
			
			if(mysqli_num_rows($res)>0) 
	{
				
		 
		if($row=mysqli_fetch_array($res)) 
		{
       
	?>

			<div class="form-group col-md-6">
            <label>Concession Request Id</label>
            <input type="text" class="form-control" value="<?php echo($row['idconcession_request']); ?>"  name="txtConsId"/>
          </div>
		  <div class="form-group col-md-6">
            <label>Register Number</label>
            <input type="text" class="form-control" value="<?php echo($row['register_no']); ?>"  name="txtRegNo"/>
          </div>
		  <div class="form-group col-md-6">
            <label >Request Date</label>
            <input type="text" class="form-control" value="<?php echo($row['request_date']); ?>" name="txtDate"/>
          </div>
		  <div class="form-group col-md-6">
            <label >From</label>
            <input type="text" class="form-control" value="<?php echo($row['from_place']); ?>" name="txtFrom"/>
          </div>
		  <div class="form-group col-md-6">
            <label>To</label>
            <input type="text" class="form-control" value="<?php echo($row['to_place']); ?>" name="txtTo"/>
          </div>
			<div class="form-group col-md-6">
            <label>Total Kilometer</label>
            <input type="text" class="form-control" value="<?php echo($row['total_km']); ?>" name="txtKm"/>
          </div>
			<div class="form-group col-md-6">
            <label>Place</label>
            <input type="text" class="form-control" value="<?php echo($row['place']); ?>" name="txtPlace"/>
          </div>
			<div class="form-group col-md-6">
            <label>Status</label>
            <input type="text" class="form-control" value="<?php echo($row['status']); ?>" name="txtStat"/>
          </div>
			<div class="form-group col-md-6">
            <label>College ID</label>
            <input type="text" class="form-control" value="<?php echo($row['idcollege']); ?>" name="txtCollegeId"/>
          </div>
			<div class="form-group col-md-6">
            <label>Amount</label>
            <input type="text" class="form-control" value="<?php echo($row['amount']); ?>" name="txtAmt"/>
          </div>
			<div class="form-group col-md-6">
            <label>KSRTC Status</label>
            <input type="text" class="form-control" value="<?php echo($row['ksrtc_status']); ?>" name="txtKsrtc"/>
          </div>
    
		  </div>
		  <?php
		}
		
	}
	else
	{
    	echo "Results not found";
	}

?>
        
    

    <div class="d-flex justify-content-center">
		<button type="submit"><a href="StudentHome.php">OK</a></button>
		
    </div>
			   
    </form>
    
  </section>


  <!-- end contact section -->
  <div class="footer_bg">
    <!-- info section -->
    <section class="info_section layout_padding2-bottom">
      <div class="container">
        <h3 class="">
          BigWing
        </h3>
      </div>
      <div class="container info_content">

        <div>
          <div class="row">
            <div class="col-md-6 col-lg-4">
              <div class="d-flex">
                <h5>
                  Useful Link
                </h5>
              </div>
              <div class="d-flex ">
                <ul>
                
                  <li>
                    <a href="">
                      About services
                    </a>
                  </li>
                  <li>
                    <a href="">
                      About Departments
                    </a>
                  </li>
                  <li>
                    <a href="">
                      Services
                    </a>
                  </li>
                  <li>
                    <a href="">
                      Contact Us
                    </a>
                  </li>
                </ul>
                <ul class="ml-3 ml-md-5">
                   
                    
                </ul>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="d-flex">
                <h5>
                  The Services
                </h5>
              </div>
              <div class="d-flex ">
                <ul>
                  <li>
                    <a href="">
                      About Us
                    </a>
                  </li>
                  <li>
                    <a href="">
                      About services
                    </a>
                  </li>
                  <li>
                    <a href="">
                      About Departments
                    </a>
                  </li>
                  <li>
                    <a href="">
                      Services
                    </a>
                  </li>
                  <li>
                    <a href="">
                      Contact Us
                    </a>
                  </li>
                </ul>
                <ul class="ml-3 ml-md-5">
                  <li>
                    <a href="">
                      Lorem ipsum dolor
                    </a>
                  </li>
                  <li>
                    <a href="">
                      sit amet, consectetur
                    </a>
                  </li>
                  <li>
                    <a href="">
                      adipiscing elit,
                    </a>
                  </li>
                  <li>
                    <a href="">
                      sed do eiusmod
                    </a>
                  </li>
                  <li>
                    <a href="">
                      tempor incididunt
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="d-flex">
                <h5>
                  Contact Us
                </h5>
              </div>
              <div class="d-flex ">
                <ul>
                  <li>
                    <a href="">
                      About Us
                    </a>
                  </li>
                  <li>
                    <a href="">
                      About services
                    </a>
                  </li>
                  <li>
                    <a href="">
                      About Departments
                    </a>
                  </li>
                  <li>
                    <a href="">
                      Services
                    </a>
                  </li>
                  <li>
                    <a href="">
                      Contact Us
                    </a>
                  </li>
                </ul>
                <ul class="ml-3 ml-md-5">
                  <li>
                    <a href="">
                      Lorem ipsum
                    </a>
                  </li>
                  <li>
                    <a href="">
                      dolor sit amet,
                    </a>
                  </li>
                  <li>
                    <a href="">
                      consectetur
                    </a>
                  </li>
                  <li>
                    <a href="">
                      adipiscing
                    </a>
                  </li>
                  <li>
                    <a href="">
                      elit, sed do eiusmod
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="d-flex flex-column flex-lg-row justify-content-between align-items-center align-items-lg-baseline">
          <div class="social-box">
            <a href="">
              <img src="images/fb.png" alt=""/>
            </a>

            <a href="">
              <img src="images/twitter.png" alt=""/>
            </a>
            <a href="">
              <img src="images/linkedin1.png" alt=""/>
            </a>
            <a href="">
              <img src="images/instagram1.png" alt=""/>
            </a>
          </div>
          <div class="form_container mt-5">
            <form action="">
              <label for="subscribeMail">
                Newsletter
              </label>
              <input type="email" placeholder="Enter Your email" id="subscribeMail"/>
              <button type="submit">
                Subscribe
              </button>
            </form>
          </div>
        </div>
      </div>

    </section>

    <!-- end info_section -->

    <!-- footer section -->
    <section class="container-fluid footer_section">
      <p>
        ? 2022 All Rights Reserved By
        <a href="https://html.design/">Free Html Templates</a>
      </p>
    </section>
    <!-- footer section -->
  </div>


  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
</body></html>