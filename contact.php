<!doctype html>
<html class="no-js" lang="zxx">

<head>  
    <?php include 'partials/meta.php'; ?>
</head>

<body>

    <!--[if lte IE 9]>
    	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  	<![endif]-->


    <!--********************************
   		Code Start From Here 
	******************************** -->

    <!--==============================
    Sidemenu
============================== -->
    
    <!--==============================
    Sidemenu
============================== -->
    
    <?php include('includes/cart.php') ?>
    <?php include('includes/sidebar.php') ?>
    <?php include('includes/search.php') ?>
    <?php include('includes/appointment.php') ?>
    <!--==============================
    Mobile Menu
  ============================== -->
    <?php include('includes/mobile-menu.php') ?>
    <!--==============================
	Header Area
==============================-->
    <?php include('includes/header.php') ?>


    <div class="breadcumb-wrapper " data-bg-src="assets/img/bg/breadcumb-bg.jpg">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Contact Us</h1>
                <ul class="breadcumb-menu">
                    <li><a href="/">Home</a></li>
                    <li>Our Services</li>
                </ul>
            </div>
        </div>
    </div>


    <!--==============================
Contact Info Area
==============================-->
<div class="space">
        <div class="container">
            <div class="row gy-4">
                <div class="col-xl-4 col-md-6">
                    <div class="location-card">
                        <h3 class="box-title">Victoria Island Branch</h3>
                        <p class="footer-info">
                            <i class="far fa-location-dot"></i>
                            Suite 013, Clinic Floor, Blocak A, Law School Hostel Complex, Adeola Hopewell Street VI, Lagos
                        </p>
                        <p class="footer-info">
                            <i class="far fa-envelope"></i>
                            <a href="mailto:info@qmeddiagnostics.com" class="info-box_link">info@qmeddiagnostics.com</a>
                        </p>
                        <p class="footer-info">
                            <i class="far fa-phone"></i>
                            <a href="tel:+02014540554" class="info-box_link">+0 201 454 0554</a>
                        </p>
                    </div>
                    <div class="contact-feature">
                        <div class="box-icon">
                            <i class="far fa-clock"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="box-title">Opening Hours</h3>
                            <p class="box-text">Mon to sat: 8:00am - 9:00pm</p>
                            <p class="box-schedule">Sunday - Closed</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="location-card active">
                        <h3 class="box-title">Surulere. Branch</h3>
                        <p class="footer-info">
                            <i class="far fa-location-dot"></i>
                            3, Adeniran Ogunsanya Street, Surulere, Lagos
                        </p>
                        <p class="footer-info">
                            <i class="far fa-envelope"></i>
                            <a href="mailto:info@qmeddiagnostics.com" class="info-box_link">info@qmeddiagnostics.com</a>
                        </p>
                        <p class="footer-info">
                            <i class="far fa-phone"></i>
                            <a href="tel:+2348033002946" class="info-box_link">+234 803 300 2946</a>
                        </p>
                    </div>
                    <div class="contact-feature">
                        <div class="box-icon">
                            <i class="far fa-clock"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="box-title">Opening Hours</h3>
                            <p class="box-text">Mon to sat: 8:00am - 9:00pm</p>
                            <p class="box-schedule">Sunday - Closed</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="location-card">
                        <h3 class="box-title">Omole Branch</h3>
                        <p class="footer-info">
                            <i class="far fa-location-dot"></i>
                            4, Ogunnusi Road, (Healthrite) Opp. Omole Phase 1 Gate, Ikeja, Lagos
                        </p>
                        <p class="footer-info">
                            <i class="far fa-envelope"></i>
                            <a href="mailto:info@qmeddiagnostics.com" class="info-box_link">info@qmeddiagnostics.com</a>
                        </p>
                        <p class="footer-info">
                            <i class="far fa-phone"></i>
                            <a href="tel:+2349060610813" class="info-box_link">+234 906 061 0813</a>
                        </p>
                    </div>
                    <div class="contact-feature">
                        <div class="box-icon">
                            <i class="far fa-clock"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="box-title">Opening Hours</h3>
                            <p class="box-text">Mon to sat: 8:00am - 9:00pm</p>
                            <p class="box-schedule">Monday - Closed</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!--==============================
Contact Area   
==============================-->
    <div class="space-bottom">
        <div class="container">
            <form action="mail.php" method="POST" class="contact-form ajax-contact" data-bg-src="assets/img/bg/contact_form_bg.png">
                <div class="input-wrap">
                    <h2 class="sec-title">Get In Touch!</h2>
                    <div class="row">
                        <div class="form-group col-12">
                            <input type="text" class="form-control" name="name" id="name" placeholder="Your Name">
                            <i class="fal fa-user"></i>
                        </div>
                        <div class="form-group col-12">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email Address">
                            <i class="fal fa-envelope"></i>
                        </div>
                        <div class="form-group col-12">
                            <input type="tel" class="form-control" name="number" id="number" placeholder="Phone Number">
                            <i class="fal fa-phone"></i>
                        </div>
                        <div class="form-group col-12">
                            <select name="subject" id="subject" class="form-select">
                                <option value="" disabled selected hidden>Select Subject</option>
                                <option value="Make Appointment">Make Appointment</option>
                                <option value="General Inquiry">General Inquiry</option>
                                <option value="Medicine Help">Medicine Help</option>
                                <option value="Consultation">Consultation</option>
                            </select>
                            <i class="fal fa-chevron-down"></i>
                        </div>
                        <div class="form-group col-12">
                            <textarea name="message" id="message" cols="30" rows="3" class="form-control" placeholder="Type Message..."></textarea>
                            <i class="fal fa-pencil"></i>
                        </div>
                        <div class="form-btn col-12">
                            <button class="th-btn style4 btn-fw">SEND MESSAGE</button>
                        </div>
                    </div>
                    <p class="form-messages mb-0 mt-3"></p>
                </div>

            </form>
        </div>
    </div><!--==============================
Map Area  
==============================-->
    <div class="">
        <div class="contact-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15858.640418829014!2d3.4266096!3d6.4376811!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103bf55aeb0a4225%3A0x44356b0ff16b0b8!2sNigeria%20Law%20School%20Hostel!5e0!3m2!1sen!2sng!4v1725081475101!5m2!1sen!2sng" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
        <!--==============================
	Footer Area
==============================-->
<?php include('includes/footer.php') ?>

<!--********************************
  Code End  Here 
******************************** -->    

<!--==============================
All Js File
============================== -->
<!-- Jquery -->
<?php include('partials/scripts.php') ?>
</body>

</html>

