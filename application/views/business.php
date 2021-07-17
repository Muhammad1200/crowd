<?php require_once 'header.php'?>




<div class="container" style="min-height: 540px;display: grid; place-items: center;">

    <div class="box " >
        <h4 style="line-height: 170%">
            For business opportunities and media related contact only:
            ___________@__________.com <br> (All other emails sent will not be monitored)

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
