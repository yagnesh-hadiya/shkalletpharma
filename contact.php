<?php include 'header.php';
require_once('connection.php');
?>

  <div class=" bg-img bg-overlay bg" style="background-image: url('img/bg-img/wide2.jpg');height:100px;   ">
  </div>
  <div class="famie-breadcrumb">
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
        </ol>
      </nav>
    </div>
  </div>
  <section class="contact-info-area">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="section-heading text-center">
            <h2><span>Contact</span> Us</h2>
            <img src="img/core-img/decor2.png" alt="">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-md-4">
          <div class="single-information-area text-center mb-100 wow fadeInUp" data-wow-delay="100ms">
            <div class="contact-icon">
              <i class="icon_pin_alt"></i>
            </div>
            <h5>Address</h5>
            <h6>906, Shitiratna Building, Besides, Radisson Blue Hotel, Panchawati, Ahmedabad-380006</h6>
          </div>
        </div>

        <!-- Single Information Area -->
        <div class="col-12 col-md-4">
          <div class="single-information-area text-center mb-100 wow fadeInUp" data-wow-delay="500ms">
            <div class="contact-icon">
              <i class="icon_phone"></i>
            </div>
            <h5>Phone</h5>
            <h6>+91 99741 63371</h6>
            <!-- <h6>+91 731 4089880</h6> -->
          </div>
        </div>

        <!-- Single Information Area -->
        <div class="col-12 col-md-4">
          <div class="single-information-area text-center mb-100 wow fadeInUp" data-wow-delay="1000ms">
            <div class="contact-icon">
              <i class="icon_mail_alt"></i>
            </div>
            <h5>Email</h5>
            <h6>info@shkalletpharma.com</h6>
            <h6>shkalletpharma@gmail.com</h6>
          </div>
        </div>

      </div>
      <div class="c-border"></div>
    </div>
  </section>
  
  <!-- ##### Contact Information Area End ##### -->

  <!-- ##### Contact Area Start ##### -->
  <section class="contact-area section-padding-100-0">
    <div class="container">
      <div class="row justify-content-between">

        <!-- Contact Content -->
        <div class="col-12 col-lg-7" >
          <div class="contact-content mb-100">
            <!-- Section Heading -->
            <div class="section-heading">
              <p>Contact now</p>
              <h2><span>Get In Touch</span> With Us</h2>
              <img src="img/core-img/decor.png" alt="">
            </div>
            
            <!-- Contact Form Area -->
            <div class="contact-form-area">
              <form action="contact.php" method="post">
                <div class="form-group">
                </div>
                <div class="row">
                  <div class="col-lg-6">
                    <input type="text" id="name" class="form-control" name="name" placeholder="Name of the person" required>
                  </div>
                  <div class="col-lg-6">
                    <input type="email" id="email" class="form-control" name="email" placeholder="Email" required>
                  </div>
                  <div class="col-12">
                    <input type="text" id="companyName" class="form-control" name="companyName" placeholder="Name of the company"  required>
                  </div>
                  <div class="col-12">
                    <input type="text" id="mobileno" class="form-control" name="mobileno" placeholder="Mobile No" maxlength="10" minlength="6"  required>
                  </div>
                  <div class="col-12">
                    <textarea name="message" id="message" class="form-control" cols="30" rows="10" placeholder="Message" required></textarea>
                  </div>
                  <div class="col-12">
                    <button type="submit" name="submit" class="btn famie-btn">Send Message</button>
                  </div>
                </div>
              </form>
             
              <?php
              
              if(isset($_POST['submit']))
              {  
                 $name = $_POST['name'];
                 $email = $_POST['email'];
                 $companyName = $_POST['companyName'];
                 $mobileno = $_POST['mobileno'];
                 $message = $_POST['message'];
                 $sql = "INSERT INTO contact_us (name,email,companyName,mobileno,message)
                 VALUES ('$name','$email','$companyName','$mobileno','$message')";
                 if (mysqli_query($con, $sql)) {
                  echo '<script>alert("Thank you ")</script>'; 
                 } else {
                  echo "Error: " . $sql . "
              " . mysqli_error($con);
                 }
                 mysqli_close($con);
              }
              ?>
            </div>
          </div>
        </div>
        <!-- Contact Maps -->
        <div class="col-lg-4" style="padding-right: 0px;padding-left:0px;">
          <div class="contact-maps mb-100">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1836.0056406731687!2d72.55590095802911!3d23.023357996238158!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e84fb20c8fbeb%3A0x754e78ccca3930bc!2sRadisson%20Blu%20Hotel%20Ahmedabad!5e0!3m2!1sen!2sin!4v1624295553226!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ##### Contact Area End ##### -->
<!-- footer section ---- -->
<?php include 'footer.php' ?>