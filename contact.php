<?php
                                    if(isset($_POST['submit'])){ 
                                     
                                        
                                        $name = $_POST['name'];
                                        $email = $_POST['email']; 
                                        $message = $_POST['message'];
                                         
$to = " mehkofiaz@gmail.com";
// $subject = "Email Subject";

// $message = 'Dear '.$_POST['name'].',<br>';
$message = "
name: $name <br><br>
email: $email <br><br>  
message: $message <br><br>

";
// $message .= "Regards,<br>";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <'.$email .'>'. "\r\n";
$headers .= 'Cc: mbilalhussain38@gmail.com' . "\r\n";

$mailto = mail($to,$subject,$message,$headers);
if($mailto){
    $Messages ='<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Thank You!</strong> We Received Your Email.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}

                                    }
                                    ?> 
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mehak - About</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <!-- font family -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&display=swap" rel="stylesheet">
    <!-- font awson cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS LINK -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/contact.css">
    
</head>

<body>

    <!-- navbar area strat -->

    <nav class="navbar navbar-expand-lg " id="desktopnavbar">
        <div class="container-fluid mx-95">
            <a class="navbar-brand" href="index.html">VIRTUAL MEHAK</a>
            <button class="navbar-toggler border-0 rounded-0" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fa-solid fa-bars-staggered"></i>
                        </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.html">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">ABOUT ME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="service.html">SERVICES & PRICING</a>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link" href="expertise.html">My Expertise</a>
                    </li>
                    <!--<li class="nav-item">
                        <a class="nav-link" href="#">TESTIMONIALS</a>
                    </li> -->
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="#">BLOG</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">CONTACT</a>
                </ul>
            </div>
        </div>
    </nav>

    <!-- navbar area end -->



    <!-- About area Start -->
    <main id="about-boday">

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <!-- <h1 class="about-page-heading">CONTACT ME</h1> -->
                    </div>
                </div>
                <div class="row my-5 justify-content-center">
                    <div class="col-lg-12 mt-3">
                    <section class="get-in-touch">
   <h1 class="title">Get in touch</h1>
   <form class="contact-form row" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <div class="form-field col-6">
         <input id="name" name="name" class="input-text js-input" type="text" required>
         <label class="label" for="name">Name</label>
      </div>
      <div class="form-field col-6">
         <input id="email" name="email" class="input-text js-input" type="email" required>
         <label class="label" for="email">E-mail</label>
      </div>
      <div class="form-field col-12">
         <input id="message" name="message" class="input-text js-input" type="text" required>
         <label class="label" for="message">Message</label>
      </div>
      <div class="form-field col x-100 align-center">
         <input class="submit-btn" name="submit" type="submit" value="Submit">
      </div>
   </form>
   <?php 
   if(isset($Messages)){
    ?>
    <script>
        Swal.fire(
  'Email Sent',
  'Thanks for contacting us, we will contact back soon',
  'success'
)
    </script>
    <?php
   }
   ?>
</section>
 
                    </div>
 
                    <div class="col-lg-12 text-center mt-4">
                        <!-- <button type="button" class="btn btn-dark rounded-0 border-0">I NEED YOUR HELP!</button> -->
                        <div class="social-icon mt-4 mb-4">
                            <i class="fa-brands fa-instagram" style="color: #000000;"></i>
                            <i class="fa-brands fa-linkedin-in ps-3" style="color: #000000;"></i>
                        </div>
                    </div>
                </div>
            </div>
        </section>



    </main>
    <!-- About area end -->




    <!-- footer section strat -->
    <section id="footersection">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h4 class="footer-heading">
                        VIRTUAL MEHAK <span class="text-color"> UK <a href="#" class="text-decoration-none text-color">
                                MEHAK@VIRTUALMEHAK.CO.UK</a></span>
                    </h4>
                    <div class="social-icon mt-4 mb-4">
                        <i class="fa-brands fa-instagram" style="color: #ffffff;"></i>
                        <i class="fa-brands fa-linkedin-in ps-3" style="color: #ffffff;"></i>
                    </div>
                    <div class="powerby">
                        <p class="powerd">Powered by <a href="#" target="_blank"
                                class="text-decoration-none" style="color: #c6b090; opacity: 0.8;">MEHAK</a> </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- footer section end -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
        crossorigin="anonymous"></script>
</body>

</html>
<script>
    $( '.js-input' ).keyup(function() {
  if( $(this).val() ) {
     $(this).addClass('not-empty');
  } else {
     $(this).removeClass('not-empty');
  }
});
</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>