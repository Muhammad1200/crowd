
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-offset-4 col-md-4" style="margin-bottom: 12px;">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
        <button class="btn btn-default" type="button">Options</button>
      </span>
                </div>
            </div>
        </div>
        <div class="gridBoxes">
            <?php foreach ($campaign as $k=>$v){
            $raised = 0;
            foreach($v['raised'] as $val){
                $raised += intval($val['payment']);
            }
            $percent = 0 ;
            $percent = ($raised/ intval($v['goal'])) * 100;
            $percent = ($percent >= 100)? 100 : $percent;

            $images = json_decode($v['images'],true);
            $color = '';
            if($v['campaign'] == 'Big Business: Major Corporate Projects'){
                $color = 'gold-card';
            }else if($v['campaign'] == 'Rewards: Get rewards and or the product'){
                $color = 'red-card';
            }else if($v['campaign'] == 'Quick Cash Injection (Rewards): Get rewards and or the product. Can keep funding if your
                            goal is reached or not'){
                $color = 'blue-card';
            }else if($v['campaign'] == 'Donation: fundraising event with rewards'){
                $color = 'gray-card';
            } else if($v['campaign'] == 'Urgent Need (Gifting): Helping a Situation'){
                $color = 'purple-card';
            } else if($v['campaign'] == 'Long Term Support (Gifting): No time limit'){
                $color = 'animation';
            }else{
                $color = 'purple-card';
            }
            if($raised >= intval($v['goal'])){
            ?>
                <div>
                    <div class="causes sm-col5-center <?= $color ?>">
                        <div class="thumb">
                            <?php if(!empty($images)){ ?>
                                <img class="full-width"  src="<?= base_url('theme/uploads/'.$images[0]) ?>">
                            <?php }else{ ?>
                                <!--                                <img class="full-width"  src="">-->
                            <?php } ?>
                            <div class="donate-piechart">
                                <div class="piechart-block">
                                    <div class="piechart style-one"  data-fg-color="rgba(33,0,56,.1)" data-value="1">
                                        <span><?= $percent ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="causes-details clearfix">
                            <h3 class="main-title"><?= $v['name'] ?></h3>
                            <h4 class="title" style="height: 69px;overflow: hidden;">
                                <a href="<?= site_url('Admin/view/individual/'.$v['id']) ?>"><?= $v['description'] ?></a></h4>
                            <ul class="about-causes list-inline clearfix">
                                <li class="causes-raised">$<?= $raised ?> / $ <?= $v['goal'] ?></li>
                            </ul>

                        </div>
                    </div>
                </div>
            <?php } } ?>









        </div>

        <div class="text-right margin-top-bottom">
            <a href="#" class="btn btn-primary">Next Page</a>
        </div>

    </div>
</section>


