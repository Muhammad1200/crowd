
<style>
    .flex-details{
        background: #004D5F;
        padding: 8px 10px;
        border-radius: 5px;
        font-size: 8px;
        justify-content: center;
    }

    .tier{
        font-size: 18px;
        font-weight: bold;
        color: #fff;
    }

    .tier span{
        background: #004D5F;
        padding: 10px;
        border-radius: 50%;
    }
</style>

<?php
    $raised = 0;
    foreach($campaign[0]['raised'] as $k=>$v){
        $raised += intval($v['payment']);
    }
    $percent = 0 ;
    $percent = ($raised/ intval($campaign[0]['goal'])) * 100;
?>

<section class="event-feature sec-padding ">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="featured-causes box-shadow">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="thumb">
                                <img class="full-width" src="<?= base_url('theme/uploads/img/causes/details-1.jpg') ?>" alt="">
                                <div class="causes-progress">
                                    <div class="progress-item">
                                        <div class="progress" data-value="<?= $percent ?>">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="<?= $percent ?>" aria-valuemin="0" aria-valuemax="100">
                                                <div class="value-holder"><span class="value"></span>%</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="causes-details clearfix p_30" style="background-color: #000;">



                                <div class="row">
                                    <div class="col-md-8">
                                        <ul class="list-inline">
                                            <li style="font-size: 25px;font-weight: bold;">Raised: $<?= $raised ?></li>
                                            <li style="font-size: 25px;font-weight: bold;" class="text-thm">Goal: $<?= $campaign[0]['goal'] ?></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="text-right">
                                            <h5 class="camp-owner">Campaign Owner: <?= (!empty($campaign[0]['campaingUser']))? $campaign[0]['campaingUser'][0]['name'] : 'User Not Found' ?></h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <h2 class="text-black mb_20"><?= $campaign[0]['name'] ?> <span class="badge badge-primary">Round 01</span></h2>
                                    </div>
                                    <div class="col-md-6 text-right" style="margin-top: 12px;">
                                        <a href="<?= (!empty($login))? 'javascript:void(0);' : site_url('Admin/login') ?>" onclick="$('#fundCampaign').modal('show');" class="btn btn-primary fund-btn">Fund this Campaign</a>
                                    </div>
                                </div>

                                <p class="font-16 m-p" style="line-height: 180%; right: 0;">
                                    <?= $campaign[0]['description'] ?>
                                </p>


                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="flex-details">
                                            <div>
                                                <span>Time Remaining:</span>
                                            </div>
                                            <div>
                                                <span><?= $campaign[0]['duration'] ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="flex-details">
                                            <div>
                                                <span>Executive Producer: <br></span>

                                            </div>
                                            <div>
                                                <span>John Doe</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="flex-details">
                                            <div>
                                                <span>Campaign Model Type:</span>
                                            </div>
                                            <div>
                                                <span><?= explode(":",$campaign[0]['campaign'])[0] ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="flex-details">
                                            <div>
                                                <span>Country:</span>
                                            </div>
                                            <div>
                                                <span><?= 'USA' ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="flex-details" >
                                            <div>
                                                <span>Support Campaign</span>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="flex-details" >
                                            <div>
                                                <span>Category:</span>
                                            </div>
                                            <div>
                                                <span>
                                                    <?= $campaign[0]['category'] ?>
                                                </span>
                                            </div>

                                        </div>
                                    </div>

<!--                                    <div class="col-md-4" style="margin-top: 20px;">-->
<!--                                        <button class="btn btn-primary btn-block">Fund</button>-->
<!--                                    </div>-->

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="box" style="margin-bottom: 20px;">
            <div class="domain-head">
                <h5>The Content of the Domain Field</h5>
            </div>

            <div class="photo-grid">
                <?php foreach(json_decode($campaign[0]['images'],true) as $k=>$v){ ?>
                <div>
                    <div class="img-grid" style="background-image: url('<?= base_url('theme/uploads/'.$v) ?>')">

                    </div>
                </div>
                <?php } ?>
            </div>

            <div class="video-domain">
                <iframe width="100%" height="315" src="<?= $campaign[0]['youtube'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>


            <div style="padding-top: 20px; padding-bottom: 20px">
                <?= $campaign[0]['content'] ?>
            </div>


            <div class="row">
                <div class="col-md-4">
                    <h5 class="tier">Tier amounts Offered : <span>05</span></h5>
                </div>
                <div class="col-md-4">
                    <h5 class="tier">Tier amounts Left : <span>01</span></h5>
                </div>
                <div class="col-md-4 text-right">
                    <a href="<?= (!empty($login))? 'javascript:void(0);' : site_url('Admin/login') ?>" onclick="$('#fundCampaign').modal('show');" class="btn btn-primary">Purchase</a>
                </div>
            </div>

            <div class="row" style="padding-top: 20px; padding-bottom: 20px">
                <div class="col-md-4 col-md-offset-4" >
                    <a href="<?= (!empty($login))? 'javascript:void(0);' : site_url('Admin/login') ?>" onclick="$('#fundCampaign').modal('show');" class="btn btn-primary btn-block" style="padding-top: 10px; padding-bottom: 10px">Fund this Campaign</a>
                </div>
            </div>

        </div>


        <div class="box">
            <?= form_open('Admin/AskQuestion/'.((!empty($campaign[0]['campaingUser']))?$campaign[0]['campaingUser'][0]['id'] : 0).'/'.$campaign[0]['id']) ?>
                <div class="form-group">
                    <label for="">Ask the Campaign Owner a Question</label>
                    <textarea name="question" required id="" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" required name="email" class="form-control">
                </div>

                <input type="submit" class="btn btn-primary">
            <?= form_close(); ?>
        </div>


        <div class="row" style="padding-top: 30px;">
            <div class="col-md-6 col-md-offset-6">
                <a href="#" class="btn btn-primary btn-block" style="font-size: 20px;">Report this Campaign</a>
            </div>
        </div>
    </div>

    <div class="modal" id="fundCampaign" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <?= form_open('Admin/fund/'.$campaign[0]['id']) ?>
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Fund this Campaign</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Payment</label>
                        <input type="number" name="payment" required id="" class="form-control" placeholder="Eg : $1000">
                    </div>
                    <div class="form-group">
                        <label for="">Message</label>
                        <textarea name="message" required placeholder="Enter Your Message" id="" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Pay</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
            <?= form_close(); ?>

        </div>
    </div>
<!--    fundCampaign-->
</section>
