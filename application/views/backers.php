
<section>
    <h1 class="margin-top-bottom text-white text-center">Top 100 Highest Backers</h1>

    <div class="container-fluid">

        <div class="row">
            <?php foreach ($backers as $k=>$v){ ?>
            <div class="col-md-2">
                <div class="single-team-member mb_60">

                    <div class="content">
                        <h3><?= (!empty($v['userData']))? $v['userData'][0]['name'] : '' ?></h3>
                        <h5>Number of different projects funded: <span class="badge badge-primary"><?= $v['totalProjects'] ?></span></h5>
                        <h5>Highest combined funding totals: <span class="badge badge-primary">$<?= $v['total'] ?></span></h5>
                    </div>
                </div>
            </div>
            <?php } ?>

        </div>

    </div>

</section>

