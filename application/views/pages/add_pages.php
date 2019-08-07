<div class="container">
    <!-- <div class="Hello"> -->
    <form class="form-container" id="input_form" method="post" enctype="multipart/form-data">
        <!-- <input type="hidden" id="slider_id" name="slider_id" value="<?php echo $slide_id; ?>" /> -->
        <div id="notification_panel">
        </div>
        <h1>Add Page</h1>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Page Title</label>
                    <input type="text" name="title" placeholder="title" class="form-control">
                    <?php echo form_error('title'); ?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Page Name</label>
                    <input type="text" name="name" placeholder="title" class="form-control">
                    <?php echo form_error('name'); ?>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Page Content</label>
                    <textarea name="content" rows="5" cols="5" class="form-control"></textarea>
                    <?php echo form_error('content'); ?>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="form-group">
                    <label>slug</label>
                    <input type="text" name="slug" placeholder="slug" class="form-control">
                    <?php echo form_error('slug'); ?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>meta_copyright</label>
                    <input type="text" id="" name="meta_copyright" placeholder="meta_copyright" class="form-control">
                    <? echo form_error("meta_copyright"); ?>
                </div>
            </div>
        </div>



        <div class="row ">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Meta Description</label>
                    <textarea name="meta_description" rows="4" cols="4" class="form-control"></textarea>
                    <?php echo form_error("meta_description"); ?>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Page Status</label>
                    <input type="radio" name="status" value="0"> Page Deactive
                    <input type="radio" name="status" value="1">Page Active<br>
                    <? echo form_error("status"); ?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>meta_keywords</label>
                    <input type="text" id="" name="meta_keywords" placeholder="meta_keywords" class="form-control">
                    <? echo form_error("meta_keywords"); ?>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="form-group">
                    <label>meta_robots</label>
                    <input type="text" id="" name="meta_robots" placeholder="meta_robots" class="form-control">
                    <? echo form_error("meta_robots"); ?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>meta_dc_title</label>
                    <input type="text" id="" name="meta_dc_title" placeholder="meta_dc_title" class="form-control">
                    <? echo form_error("meta_dc_title"); ?>
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