<!doctype html>
<html class="no-js" lang="zxx">

<?php include('data/data.php') ?>

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
                <h1 class="breadcumb-title">Our Services</h1>
                <ul class="breadcumb-menu">
                    <li><a href="/">Home</a></li>
                    <li>Our Services</li>
                </ul>
            </div>
        </div>
    </div>


    <section class="overflow-hidden bg-smoke space" id="service-sec" data-bg-src="assets/img/bg/service_bg_1.png">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">
                <div class="title-area text-center">
                    <span class="sub-title"><img src="assets/img/theme-img/title_icon.svg" alt="Icon">Our Services</span>
                    <h2 class="sec-title">Q-Med special services</h2>
                </div>
            </div>
        </div>
        <div class="row gy-4 justify-content-center">
            <?php foreach ($services as $index => $service): ?>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="service-card" data-bs-toggle="modal" data-bs-target="#serviceModal" 
                         data-service-title="<?php echo $service['title']; ?>"
                         data-service-description="<?php echo $service['description']; ?>"
                         data-service-icon-src="<?php echo $service['icon_src']; ?>"
                         data-service-bg-src="<?php echo $service['bg_src']; ?>">
                        <div class="box-shape">
                            <img src="assets/img/bg/service_card_bg.png" alt="Service">
                        </div>
                        <div class="box-icon">
                            <img src="<?php echo $service['icon_src']; ?>" alt="Icon">
                        </div>
                        <h3 class="box-title"><a data-bs-target="#serviceModal" ><?php echo $service['title']; ?></a></h3>
                        <a data-bs-target="#serviceModal" class=""><i class="fa fa-chevron-right"></i></a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Modal Structure -->
<div class="modal fade" id="serviceModal" tabindex="-1" aria-labelledby="serviceModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-center">
                <div class="mb-3">
                    <img id="serviceIcon" src="" alt="Service Icon" class="img-fluid">
                </div>
                <div>
                    <h4 id="serviceModalLabel">Service Name</h4>
                    <p id="serviceDescription">Service Description</p>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var serviceModal = document.getElementById('serviceModal');
        serviceModal.addEventListener('show.bs.modal', function (event) {
            var button = event.relatedTarget; // Button that triggered the modal
            var title = button.getAttribute('data-service-title');
            var description = button.getAttribute('data-service-description');
            var iconSrc = button.getAttribute('data-service-icon-src');

            var modalTitle = serviceModal.querySelector('#serviceModalLabel');
            var modalDescription = serviceModal.querySelector('#serviceDescription');
            var modalIcon = serviceModal.querySelector('#serviceIcon');

            modalTitle.textContent = title;
            modalDescription.textContent = description;
            modalIcon.src = iconSrc;
        });
    });
</script>


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

