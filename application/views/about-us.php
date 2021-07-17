<?php require_once 'header.php'?>




<div class="container" style="min-height: 440px;display: grid; place-items: center;">

    <div class="box " >
        <h4 style="line-height: 170%">
            Our goal is to establish a high quality, global platform which allows all types of campaigns
            from every industries and from individuals, and from all business models, to be able to
            achieve their goals without prejudice or inhibitions. <br>
        </h4>
    </div>

    <div class="box margin-top-bottom">
        <h4 style="line-height: 170%">
            We welcome campaigns from business professionals, corporations, municipalities,
            organizations, government, political, universities, laboratories, science researchers and
            newcomers alike. If you need funding to get something done, we are here for you!

        </h4>
    </div>


</div>



<div class="modal fade" id="addPost" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Add Post</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="">Description</label>
                    <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<?php require_once 'footer.php'?>
