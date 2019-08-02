<div class="container">
    <!-- <div class="Hello"> -->
    <form class="form-container" id="input_form" method="post" enctype="multipart/form-data">
        <!-- <input type="hidden" id="slider_id" name="slider_id" value="<?php echo $slide_id; ?>" /> -->
        <div id="notification_panel">
        </div>
        <h1>Add Slide</h1>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Slide Title</label>
                    <input type="text" name="title" placeholder="title" class="form-control">
                    <?php echo form_error('title'); ?>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Slide Content</label>
                    <textarea name="slide_content" rows="5" cols="5" class="form-control"></textarea>
                    <?php echo form_error('slide_content'); ?>
                </div>
            </div>
        </div>




        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Slide Image</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inputGroupFile01" name="slide_image"
                                aria-describedby="inputGroupFileAddon01">
                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                        </div>
                    </div>
                    <? echo form_error("slide_image"); ?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Video Url</label>
                    <input type="text" id="" name="slide_video" placeholder="video url" class="form-control">
                    <? echo form_error("slide_video"); ?>
                </div>
            </div>
        </div>



        <div class="row ">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Description</label>
                    <textarea name="slide_description" rows="5" cols="5" class="form-control"></textarea>
                    <?php echo form_error("slide_description"); ?>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Slide Status</label>
                    <input type="radio" name="status" value="0"> Slide Deactive
                    <input type="radio" name="status" value="1">Slide Active<br>
                    <? echo form_error("status"); ?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Slide type</label>
                    <input type="radio" name="slide_type" value="video"> video
                    <input type="radio" name="slide_type" value="image" checked="checked"> Image<br>
                    <? echo form_error("slide_type"); ?>

                </div>
            </div>
        </div>
        <div class="row ">
            <div class="col-md-6">
                <div class="form-group">
                    <input type="submit" class="btn btn-primary " value="submit">


                </div>
            </div>
        </div>
</div>







</form>

</div>
</div>