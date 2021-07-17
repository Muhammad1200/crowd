<?php require_once 'header.php' ?>
<section class="banner-gal">
<div class="container">
    <div class="jumbotron">
        <div class="row">
            <?php foreach ($file as $k=>$v){ ?>
                <?php if(!is_dir($v)){ ?>
            <div class="col-md-3 col-md-offset-0 col-lg-3 col-lg-offset-0 col-sm-4 col-sm-offset-0 col-xs-4 col-xs-offset-0">
                <div class="main1" style="height:400px;overflow: hidden">
                    <div class="main" style="margin-top: 30px;width: 100%;">
                        <img src="<?= base_url() ?>theme/charity/Newimages/<?= $v ?>"  class="img-responsive">
                    </div>
                </div>
            </div>
            <?php } ?>
            <?php } ?>
        </div>
    </div>
</div>
</section>
<?php require_once 'footer.php' ?>
