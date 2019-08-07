<div class="container">
    <!-- <div class="Hello"> -->
    <form class="form-container" id="input_form" method="post" enctype="multipart/form-data">
        <!-- <input type="hidden" id="slider_id" name="slider_id" value="" /> -->
        <div id="notification_panel">
        </div>
        <h1>Edit Social Links</h1>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="title" placeholder="title" class="form-control"
                        value="<?php echo !empty($user_data) ? $user_data['title'] : ''; ?>">
                    <?php echo form_error('title'); ?>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Facebook link</label>
                    <?php //print_r($user_data);?>
                    <input name="facebook" class="form-control"
                        value="<?php echo !empty($user_data) ? $user_data['facebook'] : ''; ?>"
                        <?php echo !empty($user_data) && $user_data['fb_type'] == '0' ? 'disabled' : ''; ?> />
                    <?php echo form_error('slide_content'); ?>
                    <label>option</label>

                    <input type="checkbox" name="fb_type" value="0"
                        <?php echo !empty($user_data) && $user_data['fb_type'] == '0' ? 'checked="checked"' : ''; ?>>
                    Disabled<br>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Twitter link</label>
                    <input name="twitter" class="form-control"
                        value="<?php echo !empty($user_data) ? $user_data['twitter'] : ''; ?>"
                        <?php echo !empty($user_data) && $user_data['tw_type'] == '0' ? 'disabled' : ''; ?> />
                    <?php echo form_error('slide_content'); ?>
                    <label>option</label>

                    <input type="checkbox" name="tw_type" value="0"
                        <?php echo !empty($user_data) && $user_data['tw_type'] == '0' ? 'checked="checked"' : ''; ?>>
                    Disabled<br>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="form-group">
                    <label>LinkedIn link</label>
                    <input name="linkedin" class="form-control"
                        value="<?php echo !empty($user_data) ? $user_data['linkedin'] : ''; ?>"
                        <?php echo !empty($user_data) && $user_data['ln_type'] == '0' ? 'disabled' : ''; ?> />
                    <?php echo form_error('slide_content'); ?>
                    <label>option</label>

                    <input type="checkbox" name="ln_type" value="0"
                        <?php echo !empty($user_data) && $user_data['ln_type'] == '0' ? 'checked="checked"' : ''; ?>>
                    Disabled<br>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Gmail link</label>
                    <input name="gmail" class="form-control"
                        value="<?php echo !empty($user_data) ? $user_data['gmail'] : ''; ?>"
                        <?php echo !empty($user_data) && $user_data['gm_type'] == '0' ? 'disabled' : ''; ?> />
                    <?php echo form_error('slide_content'); ?>
                    <label>option</label>
                    <input type="checkbox" name="gm_type" value="0"
                        <?php echo !empty($user_data) && $user_data['gm_type'] == '0' ? 'checked="checked"' : ''; ?>>
                    Disabled<br>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="form-group">
                    <label>WhatsApp</label>
                    <input name="whatsapp" class="form-control"
                        value="<?php echo !empty($user_data) ? $user_data['whatsapp'] : ''; ?>"
                        <?php echo !empty($user_data) && $user_data['wa_type'] == '0' ? 'disabled' : ''; ?> />
                    <?php echo form_error('slide_content'); ?>
                    <label>option</label>

                    <input type="checkbox" name="wa_type" value="0"
                        <?php echo !empty($user_data) && $user_data['wa_type'] == '0' ? 'checked="checked"' : ''; ?>>
                    Disabled<br>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Instagram link</label>
                    <input name="instagram" class="form-control"
                        value="<?php echo !empty($user_data) ? $user_data['instagram'] : ''; ?>"
                        <?php echo !empty($user_data) && $user_data['in_type'] == '0' ? 'disabled' : ''; ?> />
                    <?php echo form_error('slide_content'); ?>
                    <label>option</label>

                    <input type="checkbox" name="in_type" value="0"
                        <?php echo !empty($user_data) && $user_data['in_type'] == '0' ? 'checked="checked"' : ''; ?>>
                    Disabled<br>
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
                                aria-describedby="inputGroupFileAddon01"
                                value="<?php echo !empty($user_data) ? $user_data['logo'] : ''; ?>">
                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                        </div>
                    </div>
                    <? echo form_error("logo"); ?>
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
                                aria-describedby="inputGroupFileAddon01"
                                value="<?php echo !empty($user_data) ? $user_data['favicon'] : ''; ?>">
                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                        </div>
                    </div>
                    <? echo form_error("favicon"); ?>

                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="form-group">
                    <img src="<?php echo base_url("assets/img/" . $user_data['logo']); ?>"
                        style="width:30%; height:30px !important;" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <img src="<?php echo base_url("assets/img/" . $user_data['favicon']); ?>"
                        style="width:30%; height:30px !important;" />
                </div>
            </div>
        </div>




        <div class="row ">
            <div class="col-md-6">
                <div class="form-group">
                    <input type="hidden" name="social_id" value="<?php echo $user_data['id']; ?>" />
                    <input type="submit" class="btn btn-primary " value="submit">


                </div>
            </div>
        </div>






</div>







</form>

</div>
</div>