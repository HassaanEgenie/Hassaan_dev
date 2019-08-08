<div class="container">
    <div class="row">
        <div class="col-md-4">
            <form class="form-container" id="input_form" method="post">
                <h1>Find Hypotenious</h1>

                <div class="row">

                    <div class="col-md-12">
                        <label>Enter the value of Perpendicular</label>
                        <input type="text" name="a" class="form-control">
                        <?php echo form_error("a"); ?>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <label>Enter the value of Base</label>
                        <input type="text" name="b" class="form-control">
                        <?php echo form_error("b"); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <input type="submit" class="btn btn-primary " value="submit">
                    </div>
                </div>


            </form>
        </div>




        <div class="col-md-4">
            <form class="form-container" id="input_form" method="post">
                <h1>Find Base</h1>

                <div class="row">

                    <div class="col-md-12">
                        <label>Enter the value of Hypotenious</label>
                        <input type="text" name="z" class="form-control">
                        <?php echo form_error("z"); ?>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <label>Enter the value of Perpendicular</label>
                        <input type="text" name="y" class="form-control">
                        <?php echo form_error("y"); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <input type="submit" class="btn btn-primary " value="submit">
                    </div>
                </div>


            </form>
        </div>



        <div class="col-md-4">
            <form class="form-container" id="input_form" method="post">
                <h1> Perpendicular</h1>

                <div class="row">

                    <div class="col-md-12">
                        <label>Enter the value of Hypotenious</label>
                        <input type="text" name="l" class="form-control">
                        <?php echo form_error("l"); ?>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <label>Enter the value of Base</label>
                        <input type="text" name="m" class="form-control">
                        <?php echo form_error("m"); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <input type="submit" class="btn btn-primary " value="submit">
                    </div>
                </div>


            </form>
        </div>
    </div>
</div>