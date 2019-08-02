<div class="container">
    <div class="Hello">
        <form class="form-container" id="input_form" method="post">
            <div id="notification_panel">
            </div>
            <h1>Add new slider Slider</h1>
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Slider Title</label>
                        <input type="text" name="title" placeholder="title" class="form-control">
                        <?php echo form_error('title'); ?>
                    </div>
                </div>


                <div class="col-md-12">
                    <div class="form-group">
                        <label>Slider Description</label>
                        <input type="text" name="description" placeholder="description" class="form-control">
                        <?php echo form_error("description"); ?>
                    </div>
                </div>



                <div class="col-md-12">
                    <div class="form-group">
                        <label>Slider Status</label>
                        <input type="text" id="" name="status" minlength="1" placeholder="status" class="form-control">
                        <? echo form_error("status"); ?>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="submit">

                        <h3 id="success"></h3>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">


                        <!-- <button class="btn btn-primary" title="Already have a account?"
                                onclick="location.href = 'signin.php';">SignIN</button> -->


                    </div>

                </div>


            </div>



        </form>
    </div>
</div>