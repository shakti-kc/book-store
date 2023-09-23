<?php include 'sendemail.php'; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="contact_try999.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

  </head>
  <body>

    <!--alert messages start-->
    <?php echo $alert; ?>
    <!--alert messages end-->

    <!--contact section start-->
    <div class="container">
        <div class="contact-info">
            <h3>Contact Info</h3>
            <i class="fas fa-map-marker-alt"></i>
            <span style="font-size:13px;font-family:'Poppins',sans-seif">32900,Butwal</span><br />
            <i class="fas fa-envelope"></i>
            <span style="font-size:13px;font-family:'Poppins',sans-seif">fromunknown90.com</span><br />
            <i class="fas fa-phone"></i>
            <span style="font-size:13px;font-family:'Poppins',sans-seif">9828918241</span>
            <div class="social">
               <a href="https://www.facebook.com/rt.seven.773/"> <i id="social-icon" class="fa fa-facebook-official"></i></a>
               <a href="https://github.com/teamrt7-coders"> <i id="social-icon" class="fa fa-github"></i></a>
               <a href="https://www.instagram.com/rt.7team/"> <i id="social-icon" class="fab fa-instagram"></i></a>
               <a href="https://twitter.com/Rt7Team"> <i id="social-icon" class="fab fa-twitter"></i></a>
            </div>
        </div>
        <div class="contact">
            <h1 class="heading">Send Message</h1>
            <form action="" class="contact" method="post">
                <span class="inputbox">
                    <input type="text" name="name" class="text-box" required />
                    <span class="inputname">First Name</span>
                </span>
                <span class="inputbox">
                    <input type="text" required />
                    <span class="inputname">Last Name</span>
                </span>
                <span class="inputbox">
                    <input type="email" name="email" class="text-box" required />
                    <span class="inputname">Email Address</span>
                </span>
                <span class="inputbox">
                    <input type="text" required />
                    <span class="inputname">Contact Number</span>
                </span>
                <span class="inputbox">
                    <textarea name="message" id="" cols="30" rows="3" required></textarea>
                    <span class="textname">Write your message here</span> </span><br />
                <input type="submit" name="submit"class="send-btn" style="height:50px;
                 background: black;
    color: #ffffff;
    border-radius: 2px;
    font-weight: 600;
    height:50px;"/>
            </form>
        </div>
    </div>



    <div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3533.155334442598!2d83.46344811443382!3d27.681593533231542!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39968680be065565%3A0xb62ed4f56f0f802d!2sKalika%20Manavgyan%20Secondary%20School!5e0!3m2!1sen!2snp!4v1619012507304!5m2!1sen!2snp" width="500" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
    <!--contact section end-->

    <script type="text/javascript">
    if(window.history.replaceState){
      window.history.replaceState(null, null, window.location.href);
    }
    </script>

  </body>
</html>
      