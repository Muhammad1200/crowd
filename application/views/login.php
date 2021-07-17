<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <title>CrowdFunding</title>

    <!-- responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- master stylesheet -->
    <link rel="stylesheet" href="<?= base_url('theme') ?>/css/style.css">
    <!-- responsive stylesheet -->
    <link rel="stylesheet" href="<?= base_url('theme') ?>/css/responsive.css">

    <link rel="stylesheet" href="<?= base_url('theme') ?>/css/update.css">



</head>
<body>


<header class="header">
    <div class="container-fluid">
        <div class="flex-nav-2">

            <div class="third">
                <div class="logo-div">
                    <a href="<?= site_url('/') ?>"><h3>Logo Here</h3></a>
                </div>
            </div>

        </div>
    </div>
</header> <!-- /.header -->


<div class="container-fluid">
    <section id="" class="margin-top-bottom">
        <?php if(!empty($this->session->flashdata('error'))){ ?>
            <div class="alert alert-danger" role="alert">
                <?= $this->session->flashdata('error') ?>
            </div>
        <?php } ?>
        <?php if(!empty($this->session->flashdata('username'))){ ?>
            <div class="alert alert-danger" role="alert">
                <?= $this->session->flashdata('username') ?>
            </div>
        <?php } ?>
        <?php if(!empty($this->session->flashdata('cpass'))){ ?>
            <div class="alert alert-danger" role="alert">
                <?= $this->session->flashdata('cpass') ?>
            </div>
        <?php } ?>
        <?php if(!empty($this->session->flashdata('success'))){ ?>
            <div class="alert alert-success" role="alert">
                <?= $this->session->flashdata('success') ?>
            </div>
        <?php } ?>
        <?php if(!empty($this->session->flashdata('verified'))){ ?>
            <div class="alert alert-success" role="alert">
                <?= $this->session->flashdata('verified') ?>
            </div>
        <?php } ?>

        <div class="row">
            <div class="col-md-6">
                <?= form_open('Admin/register') ?>
                <div class="box">
                    <div class="form-group">
                        <label for="">Full Name</label>
                        <input type="text" name="name" required class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Email Address</label>
                        <input type="email" name="email" required class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Phone Number</label>
                        <input type="text" name="phone" required class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Physical Address</label>
                        <input type="text" name="address" required class="form-control">
                    </div>

                    <p>
                        This information
                        will be given to the campaign owners of any campaigns you help fund so that they can be
                        in touch with you and send you any rewards which may be part of the campaign. If you do
                        not wish to share this information with them, simply select to remain anonymous at the
                        time of your donation. However doing so will forfeit your rights to receiving any rewards
                        from that campaign
                    </p>


                    <div class="form-group">
                        <label for="">Username</label>
                        <input type="text" name="username" required class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" name="password" required class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">Confirm Password</label>
                        <input type="password" name="cpassword" required class="form-control">
                    </div>

                    <div class="form-group">
                        <input type="checkbox" required> <span style="margin-left: 10px;">I have read the terms and conditions and I fully understood them and agree to be held accountable for
                        following them</span>
                    </div>

                    <div class="text-right">
                        <input type="submit" class="btn btn-primary">
                    </div>




                </div>
                <?= form_close(); ?>
            </div>
            <div class="col-md-6">
                <?= form_open('Admin/dologin') ?>
                <div class="box">
                    <div class="form-group">
                        <label for="">Username</label>
                        <input type="text" name="username" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <div class="text-right">
                        <input type="submit" class="btn btn-primary" value="Sign in">
                    </div>
                    <div>
                        <a href="#">Forgot your password?</a>
                    </div>
                </div>
                <?= form_close(); ?>
            </div>
        </div>



    </section>

</div>







<footer>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <a href="#">FAQ</a>
            </div>
            <div class="col-md-4">
                <a href="#">Business Opportunities & Media Contact</a>
            </div>
            <div class="col-md-4">
                <a href="#">International Privacy Policy
                    <br>
                    Fair Processing Notice <br>
                    Terms & Conditions <br>
                    Limitation of Liability & Disclaimers
                </a>
            </div>
        </div>
    </div>
</footer>

<!-- main jQuery -->
<script src="<?= base_url('theme') ?>/js/jquery-1.11.1.min.js"></script>
<!-- bootstrap -->
<script src="<?= base_url('theme') ?>/js/bootstrap.min.js"></script>
<!-- bx slider -->
<script src="<?= base_url('theme') ?>/js/jquery.bxslider.min.js"></script>
<!-- owl carousel -->
<script src="<?= base_url('theme') ?>/js/owl.carousel.min.js"></script>
<!-- validate -->
<script src="<?= base_url('theme') ?>/js/jquery-parallax.js"></script>
<!-- validate -->
<script src="<?= base_url('theme') ?>/js/validate.js"></script>
<!-- mixit up -->
<script src="<?= base_url('theme') ?>/js/jquery.mixitup.min.js"></script>
<!-- fancybox -->
<script src="<?= base_url('theme') ?>/js/jquery.fancybox.pack.js"></script>
<!-- easing -->
<script src="<?= base_url('theme/js/jquery.fancybox.pack.js') ?>"></script>
<!-- easing -->
<script src="<?= base_url('theme/js/jquery.easing.min.js') ?>"></script>
<!-- circle progress -->
<script src="<?= base_url('theme/js/circle-progress.js') ?>"></script>
<!-- appear js -->
<script src="<?= base_url('theme/js/jquery.appear.js') ?>"></script>
<!-- count to -->
<script src="<?= base_url('theme/js/jquery.countTo.js') ?>"></script>

<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<!-- gmap main script -->
<script src="<?= base_url('theme/js/gmap.js') ?>"></script>
<!-- isotope script -->
<script src="<?= base_url('theme/js/isotope.pkgd.min.js') ?>"></script>
<!-- jQuery ui js -->
<script src="<?= base_url('theme/js/jquery-ui-1.11.4/jquery-ui.js') ?>"></script>

<!-- revolution scripts -->

<script src="<?= base_url('theme/revolution/js/jquery.themepunch.tools.min.js') ?>"></script>
<script src="<?= base_url('theme/revolution/js/jquery.themepunch.revolution.min.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('theme/revolution/js/extensions/revolution.extension.actions.min.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('theme/revolution/js/extensions/revolution.extension.carousel.min.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('theme/revolution/js/extensions/revolution.extension.kenburn.min.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('theme/revolution/js/extensions/revolution.extension.layeranimation.min.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('theme/revolution/js/extensions/revolution.extension.migration.min.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('theme/revolution/js/extensions/revolution.extension.navigation.min.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('theme/revolution/js/extensions/revolution.extension.parallax.min.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('theme/revolution/js/extensions/revolution.extension.slideanims.min.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('theme/revolution/js/extensions/revolution.extension.video.min.js') ?>"></script>

<!-- thm custom script -->
<script src="<?= base_url('theme/js/custom.js') ?>"></script>


</body>



</html>