<html>

<head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->

    <!-- <link rel="stylesheet" href="<?php echo base_url("assets/css/style.css"); ?>"> -->
    <!-- <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>"> -->

</head>

<body>

    <style>
    </style>
    
    <div class="container">
        <div class="Hello">
            <form class="form-container" id="input_form" method="post">
                <div id="notification_panel">
                </div>
                <h1>Login</h1>
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="Name" placeholder="Username" class="form-control">
                            <?php echo form_error('Name'); ?>
                        </div>
                    </div>


                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="Email" placeholder="Email" class="form-control">
                            <?php echo form_error("Email"); ?>
                        </div>
                    </div>



                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" id="pass" name="password" minlength="8" placeholder="Password"
                                class="form-control">
                            <? echo form_error("password"); ?>
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




</body>

</html>