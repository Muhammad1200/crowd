<style>
    .thumb img {
        height: 150px !important;
    }

    .gridBoxes {
        display: grid;
        grid-template-columns: repeat(5, 1fr);
        grid-gap: 10px;
    }
</style>

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
        <?php if(!empty($this->session->flashdata('success'))){ ?>
            <div class="alert alert-success" role="alert">
                <?= $this->session->flashdata('success') ?>
            </div>
        <?php } ?>
        <div class="gridBoxes">

            <?php foreach ($campaign as $k=>$v){
                $raised = 0;
                foreach($v['raised'] as $val){
                    $raised += intval($val['payment']);
                }
                $percent = 0 ;
                $percent = ($raised/ intval($v['goal'])) * 100;

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
                if($raised < intval($v['goal'])){
                    ?>
                    <div>
                        <div class="causes sm-col5-center <?= $color ?>">
                        <a href="<?= site_url('Admin/view/individual/'.$v['id']) ?>">
                            <div class="thumb">
                                <?php if(!empty($images)){ ?>
                                    <img class="full-width"  src="<?= base_url('theme/uploads/'.$images[0]) ?>">
                                <?php }else{ ?>
                                    <!--                                <img class="full-width"  src="">-->
                                <?php } ?>
                                <div class="donate-piechart">
                                    <div class="piechart-block">
                                        <div class="piechart style-one"  data-fgdet-color="rgba(33,0,56,.1)" data-value=".<?= $percent ?>">
                                            <span>.<?= $percent ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="causes-details clearfix">
                                <h3 class="main-title"><?= $v['name'] ?></h3>
                                <h4 class="title" style="height: 69px;overflow: hidden;">
                                    <a id="showMore<?=$k?>" href="<?= site_url('Admin/view/individual/'.$v['id']) ?>"><?= $v['description'] ?></a></h4>
                                <ul class="about-causes list-inline clearfix">
                                    <li class="causes-raised">$<?= $raised ?> / $ <?= $v['goal'] ?></li>
                                </ul>
                                <p id="timmer<?= $k ?>">
                                    <?= $v['duration'] ?>
                                </p>

                            </div>
                            </a>
                        </div>
                    </div>
                    <script>
                        let x<?= $k ?> = <?= $v['seconds'] ?>;  
                        setInterval(() => {
                            x<?= $k ?> -= 1;
                            $.post('<?= site_url('Admin/setTime/'.$v['id']) ?>',
                            {
                                seconds : x<?= $k ?>
                            }
                            ,(e)=>{ console.log(e) });
                            $('#timmer<?= $k ?>').html(secondsToDhms(x<?= $k ?>));
                            console.log(secondsToDhms(x<?= $k ?>));
                        }, 1000);
                    </script>
                <?php }} ?>

        </div>

        <div class="text-right margin-top-bottom">
            <a href="#" class="btn btn-primary">Next Page</a>
        </div>

    </div>
</section>

<script>
    $(document).ready(function(e){
        for(let camp=0;camp < <?=count($campaign)?>;camp++){
            let data = document.getElementById("showMore"+camp);
            if(data !=null){
                let finalData = data.innerHTML.length;
                let count = 110;
                if(finalData > 110){
                    $("#showMore"+camp).slice(0, count) + (finalData > count ? "..." : "");
                    console.log(finalData);
                }

            }}

    })

    function secondsToDhms(seconds) {
        seconds = Number(seconds);
        var d = Math.floor(seconds / (3600*24));
        var h = Math.floor(seconds % (3600*24) / 3600);
        var m = Math.floor(seconds % 3600 / 60);
        var s = Math.floor(seconds % 60);

        var dDisplay = d > 0 ? d + (d == 1 ? " day, " : " days, ") : "";
        var hDisplay = h > 0 ? h + (h == 1 ? " hour, " : " hours, ") : "";
        var mDisplay = m > 0 ? m + (m == 1 ? " minute, " : " minutes, ") : "";
        var sDisplay = s > 0 ? s + (s == 1 ? " second" : " seconds") : "";
        return dDisplay + hDisplay + mDisplay + sDisplay;
    }
</script>