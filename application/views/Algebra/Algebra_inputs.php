<div class="container">
    <form class="form-container" id="input_form" method="post">
        <h1>(a+b)<sup>2</sup> Generation</h1>
        <div class="row">
            <div class="col-md-12">
                <label>Enter the value of 'a'</label>
                <input type="text" name="a" class="form-control">
                <?php echo form_error("a"); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <label>Enter the value of 'b'</label>
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