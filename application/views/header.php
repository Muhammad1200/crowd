<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <title>CrowdFunding</title>

    <!-- responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- master stylesheet -->
    <link rel="stylesheet" href="<?= base_url('theme/css/style.css') ?>">
    <!-- responsive stylesheet -->
    <link rel="stylesheet" href="<?= base_url('theme/css/responsive.css') ?>">
    <link rel="stylesheet" href="<?= base_url('theme/css/update.css') ?>">
    <script src="<?= base_url('theme/js/jquery-1.11.1.min.js') ?>"></script>



</head>
<body>


<header class="header">
    <div class="container-fluid">
        <div class="flex-nav">
            <div class="first">
                <div class="FundBtn" >
                    <h5>Community Fund Shared Donations</h5>
                    <div>
                        <i class="fa fa-money"></i>
                        <div class="pull-right" style="margin-top: 5px;">
                            <span>$<?= $totalFunding[0]['total'] ?></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="second">
                <ul class="pos-ul">
                    <li>
                        <a href="<?= site_url('Admin/view/gallery') ?>">Recent Success Gallery</a>
                    </li>
                    <li>
                        <a href="<?= site_url('Admin/view/backers') ?>">Biggest Financial Backers</a>
                    </li>
                    <li>
                        <a href="<?= site_url('Admin/view/about-us') ?>">About Us</a>
                    </li>
                </ul>
            </div>
            <div class="third">
                <div class="logo-div">
                    <a href="<?= site_url('/') ?>"><h3>Logo Here</h3></a>
                </div>
            </div>
            <div class="forth text-center">
                <?php if(!empty($login)){ ?>
                    <a class="start" href="<?= site_url('Admin/view/create-campaign') ?>">Start Your
                        <br> <span style="font-size: 21px">Campagin</span>
                    </a>
                <?php }else{ ?>
                    <a class="start" href="<?= site_url('Admin/login') ?>">Start Your
                        <br> <span style="font-size: 21px">Campagin</span>
                    </a>
                <?php } ?>

            </div>
            <div class="fifth">
                <div class="FundBtn" style="margin-left: auto">
                    <a href="<?= site_url('Admin/view/wishlist') ?>">
                        <h5>Community WishList  Projects</h5>
                        <div class="text-center">
                            <i class="fa fa-check" style="font-size: 40px; color: #ffff00;"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header> <!-- /.header -->




