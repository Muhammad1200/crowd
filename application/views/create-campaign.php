
<style>
    .preview-images-zone {
        width: 100%;
        border: 1px solid #ddd;
        min-height: 180px;
        /* display: flex; */
        padding: 5px 5px 0px 5px;
        position: relative;
        overflow:auto;
    }
    .preview-images-zone > .preview-image:first-child {
        height: 185px;
        width: 185px;
        position: relative;
        margin-right: 5px;
    }
    .preview-images-zone > .preview-image {
        height: 90px;
        width: 90px;
        position: relative;
        margin-right: 5px;
        float: left;
        margin-bottom: 5px;
    }
    .preview-images-zone > .preview-image > .image-zone {
        width: 100%;
        height: 100%;
    }
    .preview-images-zone > .preview-image > .image-zone > img {
        width: 100%;
        height: 100%;
    }
    .preview-images-zone > .preview-image > .tools-edit-image {
        position: absolute;
        z-index: 100;
        color: #fff;
        bottom: 0;
        width: 100%;
        text-align: center;
        margin-bottom: 10px;
        display: none;
    }
    .preview-images-zone > .preview-image > .image-cancel {
        font-size: 18px;
        position: absolute;
        top: 0;
        right: 0;
        font-weight: bold;
        margin-right: 10px;
        cursor: pointer;
        display: none;
        z-index: 100;
    }
    .preview-image:hover > .image-zone {
        cursor: move;
        opacity: .5;
    }
    .preview-image:hover > .tools-edit-image,
    .preview-image:hover > .image-cancel {
        display: block;
    }
    .ui-sortable-helper {
        width: 90px !important;
        height: 90px !important;
    }

    .container {
        padding-top: 50px;
    }
</style>

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

<section class="margin-top-bottom">
    <div class="container">
            <?= form_open_multipart('Admin/createCampaign',['novalidate']) ?>
        <div class="box">

        <div class="form-group">
                    <label for="">Select campaign model type from:</label>
                    <select name="campaign" required id="" class="form-control">
                        <option value="Big Business: Major Corporate Projects">Big Business: Major Corporate Projects</option>
                        <option value="Rewards: Get rewards and or the product">Rewards: Get rewards and or the product</option>
                        <option value="Quick Cash Injection (Rewards): Get rewards and or the product. Can keep funding if your goal is reached or not">Quick Cash Injection (Rewards): Get rewards and or the product. Can keep funding if your goal is reached or not</option>
                        <option value="Donation: fundraising event with rewards">Donation: fundraising event with rewards</option>
                        <option value="Urgent Need (Gifting): Helping a Situation">Urgent Need (Gifting): Helping a Situation</option>
                        <option value="Long Term Support (Gifting): No time limit">Long Term Support (Gifting): No time limit</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Select campaign duration:</label>
                    <select name="duration" required id="" class="form-control">
                        <option value="1 Hour">1 Hour</option>
                        <option value="30 Hours">30 Hours</option>
                        <option value="3 Days">3 Days</option>
                        <option value="1 Week">1 Week</option>
                        <option value="3 Weeks">3 Weeks</option>
                        <option value="30 Days">30 Days</option>
                        <option value="9 Weeks">9 Weeks</option>
                        <option value="90 Days">90 Days</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Select Category From:</label>
                    <select name="category" required id="" class="form-control">
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

                <div id="campaignName">
                    <div class="form-group">
                        <label for="">Name Your Campaign:</label>
                        <input type="text" required name="name" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <input type="checkbox" onclick="checkeding();" name="name" id="selectBy" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Description:</label>
                    <textarea name="description" required id="" cols="30" rows="10" class="form-control"></textarea>
                </div>

                <fieldset class="form-group">
                    <a href="javascript:void(0)" onclick="$('#pro-image').click()">Upload Image</a>
                    <input type="file" id="pro-image" name="images[]" style="visibility: hidden;" class="form-control" multiple>
                </fieldset>
                <div class="preview-images-zone" style="margin-bottom: 20px;"></div>

                <div class="form-group" >
                    <label for="">Select Campagin Goal</label>
                    <input type="number" required name="goal" class="form-control">
                </div>



                <button type="button" class="btn btn-block btn-primary">Add Specific donation tier</button>


                <div class="form-group">
                    <label for=""></label>
                    <select name="type" required id="" class="form-control">
                        <option value="Reward Campaign">Reward Campaign</option>
                        <option value="Donation Support">Donation Support</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="">Select Tier</label>
                    <textarea name="Tier_text" required id="" cols="30" rows="10" class="form-control"></textarea>
                </div>
        </div>
        <div class="box margin-top-bottom">
<!--            <h1 class="text-center">Campaign Field</h1>-->
            <div class="form-group">
                <label for="">
                    Here’s your chance to
                    make the right impression. Take your time and showcase your most compelling campaign
                    points here. You can drag and drop .jpeg, .gif & .png files exactly where your curser is. You
                    can also paste embed codes from Youtube videos to include them in your campaign. Be
                    sure to include information about you, your location, the timeframe of your progress,
                    guarantees, all the details of your campaign and how the funds will be allocated. Post in a
                    professional, clean and organized manner. If you have a prototype, then showcase it. Give
                    as much info as you can and be sure to reply to all questions from potential funders to
                    address any issues your backers have about your campaign! Be transparent, accurate and
                    above all, 100% truthful. Be sure to be honest about all of your campaign’s weaknesses
                    and shortcomings as well as its strengths and benefits.
                </label>
                <textarea name="content" id="classic-editor" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <label for="">Youtube Videos</label>
                <input type="text" required  name="youtube" class="form-control">
            </div>

            <div class="form-group">
                <label for="">Select site visibility</label>
                <select name="visibility" required id="" class="form-control">
                    <option value="Featured $100">Featured $100</option>
                    <option value="Standard (Free)">Standard (Free)</option>
                </select>
            </div>

            <div class="form-group">
                <input type="checkbox" required><span style="margin-left: 10px;">I have read the terms and conditions
and I fully understood them and agree to be held accountable for following them.</span>
            </div>

            <div class="text-right">
                <input type="submit" class="btn btn-primary" value="Go Live" />
            </div>

            <?= form_close(); ?>
        </div>
    </div>
</section>


<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script>
    $(document).ready(function() {
        document.getElementById('pro-image').addEventListener('change', readImage, false);

        $( ".preview-images-zone" ).sortable();

        $(document).on('click', '.image-cancel', function() {
            let no = $(this).data('no');
            $(".preview-image.preview-show-"+no).remove();
        });
    });



    var num = 4;
    function readImage() {
        if (window.File && window.FileList && window.FileReader) {
            var files = event.target.files; //FileList object
            var output = $(".preview-images-zone");

            for (let i = 0; i < files.length; i++) {
                var file = files[i];
                if (!file.type.match('image')) continue;

                var picReader = new FileReader();

                picReader.addEventListener('load', function (event) {
                    var picFile = event.target;
                    var html =  '<div class="preview-image preview-show-' + num + '">' +
                        '<div class="image-cancel" data-no="' + num + '">x</div>' +
                        '<div class="image-zone"><img id="pro-img-' + num + '" src="' + picFile.result + '"></div>' +
                        '<div class="tools-edit-image"><a href="javascript:void(0)" data-no="' + num + '" class="btn btn-light btn-edit-image">edit</a></div>' +
                        '</div>';

                    output.append(html);
                    num = num + 1;
                });

                picReader.readAsDataURL(file);
            }
//            $("#pro-image").val(files);
        } else {
            console.log('Browser not support');
        }
    }


</script>

<script src="<?= base_url('theme/ckeditor.js') ?>"></script>
<script type="text/javascript">
    $(window).on('load', function() {
        ClassicEditor.create(document.querySelector('#classic-editor'))
            .catch(error => {
                console.error(error);
            });
    });

    function checkeding(){
        if($('#selectBy').is(':checked')){
            $('#campaignName').html(`
            <div class="form-group">
                    <label for="">Select Your Campaign:</label>
                    <input type="hidden" name="name">
                    <select name="post_id" id="campaignSelectBox" onChange="onChangeCampaign();" required class="form-control">
                        <option hidden value="">Select Your Campaign</option>
                        <?php foreach($posts as $k=>$v){ ?>
                            <option value="<?= $v['id'] ?>"><?= $v['title'] ?></option>
                        <?php } ?>
                    </select>
            </div>
            `);
        }else{
            $('#campaignName').html(`<div class="form-group">
                    <label for="">Name Your Campaign:</label>
                    <input type="text" required name="name" class="form-control">
                </div>`);


        }
    }
    let campaigns = <?= json_encode($posts) ?> ;
    function onChangeCampaign(){
        let val =  $('#campaignSelectBox').val();
        let camp = campaigns.filter((value)=>value['id'] === val);
        console.log($('[name=name]').val());
    }
</script>

