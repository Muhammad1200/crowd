

<div class="container">

    <div class="box margin-top-bottom" >
        <h5 class="text-center" style="color: #fff; font-size: 25px;">Air Notes</h5>
        <p>
            Air Notes are Community
            WishList Projects which the community would like to see take off. You can browse them
            for inspiration, like a potential project to add yourself as a possible future supporter,
            create your own wish list project or claim a project which was posted here, to gain its
            potential supporters!
        </p>
    </div>

    <div class="row margin-top-bottom">
        <div class="col-lg-offset-4 col-md-4" style="margin-bottom: 12px;">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
        <button class="btn btn-default" type="button">Options</button>
      </span>
            </div>
        </div>
    </div>

    <div class="row margin-top-bottom">
        <div class="col-md-3 col-md-offset-9">
            <a href="javascript:void(0)" data-toggle="modal" data-target="#addPost" class="btn btn-primary btn-block"><i class="fa fa-plus-circle"></i> Create a Post</a>
        </div>
    </div>

    <?php foreach($posts as $k=>$v){ ?>
    <div class="box margin-top-bottom">
        <div>
            <h4><?= $v['title'] ?> 
            <?php if(json_decode($v['category'],true)){
                 foreach(json_decode($v['category'],true) as $val){ ?>
            <span class="badge badge-primary"><?= $val ?></span></h4>
            <?php } }else{?>
                <span class="badge badge-primary">Not Found</span></h4>            
            <?php } ?>

        </div>
        <p>
            <?= $v['description'] ?>
        </p>

        <div style="padding: 20px 0px">

            <div class="pull-left">
                <a href="javascript:void(0);" id="liker<?= $v['id'] ?>" class="btn btn-primary">Total Supporters: <?= $v['noOfLikes'] ?></a>
            </div>

            <div class="pull-right">
                <?php if(!empty($login)){ ?>
                    <a href="javascript:void(0)" onclick="liker(<?= $v['id'] ?>);" class="btn btn-primary"><i class="fa fa-thumbs-up"></i> Like this Project</a>
                <?php }else{ ?>
                    <a href="<?= site_url('Admin/login') ?>" class="btn btn-primary"><i class="fa fa-thumbs-up"></i> Like this Project</a>
                <?php } ?>
            </div>

        </div>
    </div>
    <?php } ?>

    <div class="text-right margin-top-bottom">
        <a href="#" class="btn btn-primary">Next page</a>
    </div>

</div>



<div class="modal fade" id="addPost" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Add Post</h4>
            </div>
            <?= form_open('Admin/createPost') ?>
            <div class="modal-body">

                <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" name="title" id="" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">Select Category From:</label>
                    <select name="category[]" multiple required id="" class="form-control">
                        <option value="Esoteric">Esoteric</option>
                        <option value="Adult Only">Adult Only</option>
                        <option value="Video Game Industry">Video Game Industry</option>
                        <option value="Anime / Manga">Anime / Manga</option>
                        <option value="Art">Art</option>
                        <option value="Manufacturing">Manufacturing</option>
                        <option value="Pharmaceuticals">Pharmaceuticals</option>
                        <option value="Marijuana ">Marijuana / Tobacco</option>
                        <option value="Media">Media</option>
                        <option value="Organizations / Clubs">Organizations / Clubs</option>
                        <option value="Waste Management">Waste Management</option>
                        <option value="Gas & Oil">Gas & Oil</option>
                        <option value="Telecom Services / Equipment">Telecom Services / Equipment</option>
                        <option value="Textiles">Textiles</option>
                        <option value="Lodging ">Lodging / Tourism</option>
                        <option value="Wishes">Wishes</option>
                        <option value="Construction">Construction</option>
                        <option value="Insurance">Insurance</option>
                        <option value="Logging / Timber">Logging / Timber</option>
                        <option value="Foundations / Philanthropists / Non-Profits">Foundations / Philanthropists / Non-Profits</option>
                        <option value="Memorial / Funeral Services">Memorial / Funeral Services</option>
                        <option value="(Experimental (See if there is an interest))">(Experimental (See if there is an interest))</option>
                        <option value="Liquor / Wine / Beer Industry">Liquor / Wine / Beer Industry</option>
                        <option value="Baby ">Baby / Child</option>
                        <option value="Antiques">Antiques</option>
                        <option value="Retail">Retail</option>
                        <option value="Licensing">Licensing</option>
                        <option value="Manufacturing">Manufacturing</option>
                        <option value="Crafts">Crafts</option>
                        <option value="To Create Employment">To Create Employment</option>
                        <option value="Robotics">Robotics</option>
                        <option value="Defense / Weapons">Defense / Weapons</option>
                        <option value="Aerospace">Aerospace</option>
                        <option value="Import / Export">Import / Export</option>
                        <option value="Currier / Delivery">Currier / Delivery</option>
                        <option value="Casino / Gambling">Casino / Gambling</option>
                        <option value="Heavy Equipment">Heavy Equipment</option>
                        <option value="Mining / Excavation">Mining / Excavation</option>
                        <option value="Modeling">Modeling</option>
                        <option value="Raw ">Raw Materials</option>
                        <option value="Masonry / Furniture">Masonry / Furniture</option>
                        <option value="Entrepreneurial Startup">Entrepreneurial Startup</option>
                        <option value="Dance">Dance</option>
                        <option value="Tools">Tools</option>
                        <option value="Service ">Service Provider</option>
                        <option value="Theater">Theater</option>
                        <option value="Brick & Mortar">Brick & Mortar</option>
                        <option value="Film / Animation / Web Series / Shows">Film / Animation / Web Series / Shows</option>
                        <option value="Food & Beverages">Food & Beverages</option>
                        <option value="Agriculture">Agriculture</option>
                        <option value="Labor">Labor</option>
                        <option value="Emergency Help">Emergency Help</option>
                        <option value="Entertainer">Entertainer</option>
                        <option value="R & D">R & D</option>
                        <option value="Toys">Toys</option>
                        <option value="Chemicals">Chemicals</option>
                        <option value="F:\xampp\htdocs\Jetnetix\Charity\application\views\create-campaign.php">General Contractors</option>
                        <option value="Games (Non Video Games)">Games (Non Video Games)</option>
                        <option value="Journalism">Journalism</option>
                        <option value="Music">Music</option>
                        <option value="Utilities">Utilities</option>
                        <option value="Raising Bail / Paying Fines">Raising Bail / Paying Fines</option>
                        <option value="Collectibles">Collectibles</option>
                        <option value="Business / Industrial">Business / Industrial</option>
                        <option value="Photography">Photography</option>
                        <option value="Vacations / Recreation">Vacations / Recreation</option>
                        <option value="Technology">Technology</option>
                        <option value="Science / Biology">Science / Biology</option>
                        <option value="Military">Military</option>
                        <option value="Corporate">Corporate</option>
                        <option value="Religion">Religion</option>
                        <option value="Audio (Non music)">Audio (Non music)</option>
                        <option value="Educational / Lessons">Educational / Lessons</option>
                        <option value="Energy">Energy</option>
                        <option value="Fashion">Fashion</option>
                        <option value="Pets / Animals">Pets / Animals</option>
                        <option value="Repair / Restoration">Repair / Restoration</option>
                        <option value="Events">Events</option>
                        <option value="Sports">Sports</option>
                        <option value="Government / Political">Government / Political</option>
                        <option value="Completely Bizarre">Completely Bizarre</option>
                        <option value="Everything else">Everything else</option>
                        <option value="Housing">Housing</option>
                        <option value="Health / Fitness / Wellness">Health / Fitness / Wellness</option>
                        <option value="Cosmetic / Beauty">Cosmetic / Beauty</option>
                        <option value="Home / Garden">Home / Garden</option>
                        <option value="Automotive / Aviation / Marine">Automotive / Aviation / Marine</option>
                        <option value="Transportation">Transportation</option>
                        <option value="Competitions / Tests">Competitions / Tests</option>
                        <option value="Outdoors">Outdoors</option>
                        <option value="Podcasts, Blogs & Vlogs">Podcasts, Blogs & Vlogs</option>
                        <option value="Writing & Publishing">Writing & Publishing</option>
                        <option value="Local Community Projects">Local Community Projects</option>
                        <option value="Financial">Financial</option>
                        <option value="Pay It Forward">Pay It Forward</option>
                        <option value="Intervention">Intervention</option>
                        <option value="Medical">Medical</option>
                        <option value="Culture">Culture</option>
                        <option value="Environmental">Environmental</option>
                        <option value="Social Issues">Social Issues</option>
                        <option value="Current Events">Current Events</option>
                        <option value="Girl Power">Girl Power</option>
                        <option value="LGBTQ">LGBTQ</option>
                        <option value="Disease Research / Cures">Disease Research / Cures</option>
                        <option value="Human Rights">Human Rights</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="">Description</label>
                    <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            <?= form_close(); ?>
        </div>
    </div>
</div>


<script>
    function liker(id){
        $.get('<?= site_url('Admin/liker') ?>/'+id,function(e){
            $(`#liker${id}`).html(`Total Supporters: ${e}`);
        });
    }
</script>