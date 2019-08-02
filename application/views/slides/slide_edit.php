<div class="container">
    <!-- <div class="Hello"> -->
    <form class="form-container" id="input_form" method="post" enctype="multipart/form-data">
        <div id="notification_panel">
        </div>
        <h1>Edit Slide</h1>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Slide Title</label>
                    <input type="text" name="title" placeholder="title" class="form-control"
                        value="<?php echo !empty($user_data) ? $user_data['slide_title'] : ''; ?>">
                    <?php echo form_error('title'); ?>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Slide Content</label>
                    <textarea name="slide_content" rows="5" cols="5"
                        class="form-control"> <?php echo !empty($user_data) ? $user_data['slide_content'] : ''; ?></textarea>
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
                                aria-describedby="inputGroupFileAddon01"
                                value="<?php echo !empty($user_data) ? $user_data['slide_image'] : ''; ?>">
                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                        </div>
                    </div>
                    <? echo form_error("slide_image"); ?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Video Url</label>
                    <input type="text" id="" name="slide_video" placeholder="video url" class="form-control"
                        value="<?php echo !empty($user_data) ? $user_data['slide_video'] : ''; ?>">
                    <? echo form_error("slide_video"); ?>
                </div>
            </div>
        </div>



        <div class="row ">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Description</label>
                    <textarea name="slide_description" rows="5" cols="5"
                        class="form-control">  <?php echo !empty($user_data) ? $user_data['slide_description'] : ''; ?></textarea>
                    <?php echo form_error("slide_description"); ?>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Slide Status</label>
                    <input type="radio" name="status" value="0"
                        <?php echo !empty($user_data) && $user_data['slide_status'] == '0' ? 'checked="checked"' : ''; ?>>
                    Slide Deactive
                    <input type="radio" name="status" value="1"
                        <?php echo !empty($user_data) && $user_data['slide_status'] == '1' ? 'checked="checked"' : ''; ?>>Slide
                    Active<br>
                    <? echo form_error("status"); ?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Slide type</label>
                    <input type="radio" name="slide_type" value="video"
                        <?php echo !empty($user_data) && $user_data['slide_type'] == 'video' ? 'checked="checked"' : ''; ?>>
                    video
                    <input type="radio" name="slide_type" value="image"
                        <?php echo !empty($user_data) && $user_data['slide_type'] == 'image' ? 'checked="checked"' : ''; ?>>
                    Image<br>
                    <? echo form_error("slide_type"); ?>

                </div>
            </div>
        </div>



        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="form-group">

                    <iframe class="embed-responsive-item"
                        src="https://www.youtube.com/embed/<?php echo $user_data['slide_video']; ?>" frameborder="0"
                        webkitallowfullscreen mozallowfullscreen allowfullscreen
                        style="width:50%; height:300px !important;"></iframe>


                </div>

            </div>

            <div class="col-md-6">
                <div class="form-group">

                    <img src="<?php echo base_url("assets/img/" . $user_data['slide_image']); ?>"
                        style="width:50%; height:300px !important;" />

                </div>

            </div>
        </div>


        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <form type="post" action="<?php base_url("slides/index")?>">
                        <input type="hidden" name="perform_action" value="edit_slide">
                        <input type="hidden" name="slider_id" value="<?php echo $user_data['slider_id']; ?>" />
                        <input type="hidden" name="slider_id" value="<?php echo $user_data['slide_id']; ?>" />

                        <input type="submit" class="btn btn-primary " value="submit">


                </div>
            </div>
        </div>

    </form>

</div>