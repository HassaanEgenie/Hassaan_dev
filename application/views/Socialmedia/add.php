<div class="container">
    <!-- <div class="Hello"> -->
    <form class="form-container" id="input_form" method="post" enctype="multipart/form-data">
        <!-- <input type="hidden" id="slider_id" name="slider_id" value="<?php echo $slide_id; ?>" /> -->
        <div id="notification_panel">
        </div>
        <h1>Add Social Links</h1>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="title" placeholder="title" class="form-control">
                    <?php echo form_error('title'); ?>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Facebook link</label>
                    <input name="facebook" class="form-control" />
                    <?php echo form_error('facebook'); ?>
                    <br>
                    <label>option</label>

                    <input type="checkbox" name="fb_type" value="0"> Disabled<br>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Twitter link</label>
                    <input name="twitter" class="form-control" />
                    <?php echo form_error('twitter'); ?>
                    <br>
                    <label>option</label>

                    <input type="checkbox" name="tw_type" value="0"> Disabled<br>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="form-group">
                    <label>LinkedIn link</label>
                    <input name="linkedin" class="form-control" />
                    <?php echo form_error('linkedin'); ?>
                    <br>
                    <label>option</label>

                    <input type="checkbox" name="ln_type" value="0"> Disabled<br>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Gmail link</label>
                    <input name="gmail" class="form-control" />
                    <?php echo form_error('gmail'); ?>
                    <br>
                    <label>option</label>

                    <input type="checkbox" name="gm_type" value="0"> Disabled<br>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="form-group">
                    <label>WhatsApp</label>
                    <input name="whatsapp" class="form-control" />
                    <?php echo form_error('whatsapp'); ?>
                    <br>
                    <label>option</label>
                    <
                    <input type="checkbox" name="wa_type" value="0"> Disabled<br>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Instagram link</label>
                    <input name="instagram" class="form-control" />
                    <?php echo form_error('instagram'); ?>
                    <br>
                    <label>option</label>

                    <input type="checkbox" name="in_type" value="0"> Disabled<br>
                </div>
            </div>
        </div>




        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Logo</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inputGroupFile01" name="logo"
                                aria-describedby="inputGroupFileAddon01">
                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                        </div>
                    </div>
                    <? echo form_error("slide_image"); ?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Favicon</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inputGroupFile01" name="favicon"
                                aria-describedby="inputGroupFileAddon01">
                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                        </div>
                    </div>
                    <? echo form_error("slide_image"); ?>

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