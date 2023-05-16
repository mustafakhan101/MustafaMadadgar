<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<footer id="contact">
            <div class="footer">
               <div class="container">
                  <div class="row">
                     <div class="col-md-4">
                        <div class="titlepage">
                           <h2>Contact Us</h2>
                        </div>
                     </div>
                     <div class="col-md-8">
                        <ul class="location_icon">
                           <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i></a> Locatins</li>
                           <li><a href="#"><i class="fa fa-volume-control-phone" aria-hidden="true"></i></a> +71 9087654321</li>
                           <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a>demo@gmail.com</li>
                        </ul>
                     </div>
                     <div class="col-md-6">
                        <form id="request" class="main_form">
                           <div class="row">
                              <div class="col-md-12 ">
                                 <input class="contactus" placeholder="Full Name" type="type" name="Full Name"> 
                              </div>
                              <div class="col-md-12">
                                 <input class="contactus" placeholder="Email" type="type" name="Email"> 
                              </div>
                              <div class="col-md-12">
                                 <input class="contactus" placeholder="Phone Number" type="type" name="Phone Number">                          
                              </div>
                              <div class="col-md-12">
                                 <textarea class="textarea" placeholder="Message" type="type" Message="Name">Message </textarea>
                              </div>
                              <div class="col-sm-col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                 <button class="send_btn">Send</button>
                              </div>
                              <div class="col-sm-col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                 <ul class="social_icon">
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                 </ul>
                              </div>
                           </div>
                        </form>
                     </div>
                     <div class="col-md-6">
                        <div class="map">
                           <figure><img src="images/map.jpg" alt="#"/></figure>
                        </div>
                        <form class="bottom_form">
                           <h3>Newsletter</h3>
                           <input class="enter" placeholder="Enter your email" type="text" name="Enter your email">
                           <button class="sub_btn">subscribe</button>
                        </form>
                     </div>
                  </div>
               </div>
               <div class="copyright">
                  <div class="container">
                     <div class="row">
                        <div class="col-md-12">
                           <p>Copyright 2019 All Right Reserved By <a href="https://html.design/"> Free  html Templates</a></p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </footer>
         <!-- end footer -->
      </div>
      <div class="overlay"></div>
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <script type="text/javascript">
         $(document).ready(function() {
             $("#sidebar").mCustomScrollbar({
                 theme: "minimal"
             });
         
             $('#dismiss, .overlay').on('click', function() {
                 $('#sidebar').removeClass('active');
                 $('.overlay').removeClass('active');
             });
         
             $('#sidebarCollapse').on('click', function() {
                 $('#sidebar').addClass('active');
                 $('.overlay').addClass('active');
                 $('.collapse.in').toggleClass('in');
                 $('a[aria-expanded=true]').attr('aria-expanded', 'false');
             });
         });
      </script>
      <script>
         $(document).ready(function() {
             $(".fancybox").fancybox({
                 openEffect: "none",
                 closeEffect: "none"
             });
         
             $(".zoom").hover(function() {
         
                 $(this).addClass('transition');
             }, function() {
         
                 $(this).removeClass('transition');
             });
         });
      </script>
    
</body>
</html>