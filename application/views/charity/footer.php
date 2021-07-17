<script src="<?= base_url() ?>theme/charity/js/jquery.js"></script>
<script src="<?= base_url() ?>theme/charity/js/jquery.min.js"></script>
<script src="<?= base_url() ?>theme/charity/js/bootstrap.min.js"></script>
<script src="<?= base_url() ?>theme/charity/js/owl.carousel.min.js"></script>
<script src="<?= base_url() ?>theme/charity/js/animated-scroll-to.js"></script>
<script src="<?= base_url() ?>theme/charity/js/slick.js"></script>
<script>
        $(document).ready(function(){
            if(window.location.href.indexOf("<?= site_url("/welcome/index")  ?>")!==-1){
            $('#exampleModalPreview').modal('show');

        }
            if(window.location.href.indexOf("<?= site_url("/welcome/view/about")  ?>")!==-1){
                $('#exampleModalPreview').modal('show');

            }
        $("video").on("ended",function () {
            $('#exampleModalPreview').modal('hide');
        });

            if(window.location.href.indexOf("<?= site_url("/welcome/view/about") ?>")!== -1){
                // $('#exampleModalPreview').modal('show');
                $("a").removeClass("active");
                $("#about").addClass("active");
            }
            if(window.location.href.indexOf("<?= site_url("/welcome/index") ?>")!== -1){
                // $('#exampleModalPreview').modal('show');
                $("a").removeClass("active");
                $("#home").addClass("active");
            }
            if(window.location.href.indexOf("<?= site_url("/welcome/view/schedule") ?>")!== -1){
                $("a").removeClass("active");
                $("#schedule").addClass("active");
            }
            if(window.location.href.indexOf("<?= site_url("/welcome/view/feedback") ?>")!== -1){
                $("a").removeClass("active");
                $("#feedback").addClass("active");
            }
            if(window.location.href.indexOf("<?= site_url("/welcome/view/gallery") ?>")!== -1){
                $("a").removeClass("active");
                $("#gallery").addClass("active");
            }

            $('.owl-carousel').owlCarousel({
                loop:true,
                margin:10,
                dots:false,
                autoplay:true,
                autoplayTimeout:5000,
                nav:false,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:1
                    },
                    1000:{
                        items:1
                    }
                }
            });
    });


</script>
<footer>
    <div class="container">
       <div class="jumbotron">
           <div class="row">
               <div class="col-md-4 col-lg-4 col-sm-4 col-xs-10 col-lg-offset-0 col-sm-offset-0 col-md-offset-0 col-xs-offset-1">
                   <div class="main">
                       <h3><span class="about">About</span> Us :</h3>
                       <p>
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem impedit magni quas
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem impedit magni quas
                       </p>
                   </div>
               </div>
               <div class="col-md-4 col-lg-4 col-sm-4 col-xs-10 col-lg-offset-0 col-sm-offset-0 col-md-offset-0 col-xs-offset-1">
                   <h3><span class="about">Links</span> :</h3>
                   <ul class="list-group">
                       <li class="list-group-item even"><i class="fa fa-home"> </i></i> <a href="#">Home</a></li>
                       <li class="list-group-item odd"> <i class="fa fa-address-book"> </i></i> <a href="#">About</a></li>
                       <li class="list-group-item even"><i class="fa fa-times-rectangle"> </i></i> <a href="#">Schedule</a></li>
                       <li class="list-group-item odd"> <i class="fa fa-picture-o"> </i></i> <a href="#">Gallery</a></li>
                       <li class="list-group-item even"><i class="fa fa-feed"> </i></i> <a href="#">Feedback</a></li>
                   </ul>
               </div>
               <div class="col-md-4 col-lg-4 col-sm-4 col-xs-10 col-lg-offset-0 col-sm-offset-0 col-md-offset-0 col-xs-offset-1">
                   <h3><span class="about">Contact</span> Us :</h3>

                   <?= form_open_multipart("welcome/mail") ?>
                       <div class="form-group">
                           <label for="exampleInputEmail1">Name :</label>
                           <input type="name" class="form-control" name="name" placeholder="Name">
                       </div>
                       <div class="form-group">
                           <label for="exampleInputPassword1">Email :</label>
                           <input type="email" class="form-control" name="email" placeholder="Email">
                       </div>
                       <div class="form-group">
                           <label for="exampleInputFile">Message :</label>
                           <textarea class="form-control" rows="3" name="message"></textarea>
                       </div>
                       <button type="submit" class="form-control btn btn-primary">Submit</button>
                   <?= form_close(); ?>
               </div>
           </div>
       </div>
    </div>
</footer>
<footer class="fot-2">
    <div class="container">
<!--        <div class="jumbotron">-->
            <div class="row">
                <div class="col-md-4 col-md-offset-4 col-lg-4 col-lg-offset-4 col-sm-4 col-sm-offset-4 col-xs-10 col-xs-offset-1">
                    <h4 class="text-center">(c) MJAQ Tournament 2015-2018</h4>
                </div>
                <div class="col-md-4 col-md-offset-4 col-lg-4 col-lg-offset-4 col-sm-4 col-sm-offset-4 col-xs-10 col-xs-offset-1">
                    <h4 class="text-center">Designed By <a href="https://web.facebook.com/pg/Wappnettix-2308200426092333/posts/?ref=page_internal">Wappnettix</a></h4>
                </div>
<!--            </div>-->
        </div>
    </div>
</footer>


<div class="modal fade right" id="exampleModalPreview" tabindex="-1" role="dialog" aria-labelledby="exampleModalPreviewLabel" aria-hidden="true">
    <div class="modal-dialog modal-fluid modal-full-height modal-top modal-lg" role="document">
        <div class="modal-content" style="background-color: #000;">
            <div class="modal-body" style="">
<!--                <button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
<!--                    <span aria-hidden="true" class="btn-default btn">&times;</span>-->
<!--                </button>-->
                <video src="<?= base_url() ?>/theme/charity/images/smash.mp4" width="100%"  autoplay></video>
            </div>
        </div>
    </div>
</div>

</body>
</html>