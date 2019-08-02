<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css") ?>"> -->
    <style>
    /* body {
        font-family: Arial, Helvetica, sans-serif;
    } */

    * {
        box-sizing: border-box;
    }

    input[type=text],
    select,
    textarea {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        margin-top: 6px;
        margin-bottom: 16px;
        resize: vertical;
    }

    input[type=submit] {
        background-color: #4CAF50;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: #45a049;
    }

    /* .container {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
    } */

    #num {
        font-size: 20px;
        padding-bottom: 20px;
        margin: 30px;
        color: #eb5c34;
        display: inline-block;
    }

    #textfield {
        float: left;
    }
    </style>
</head>

<body>
<?php $this->load->library("session");?>
<?php echo $this->session->flashdata("email_sent"); ?>
    <div class="container" style="color:#eb7a34;">
        <div class="row mt-4">
            <div class="col-12">
                <h4>Contact Information</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <p id="num">Number</p>
                <span>+923364082793</span>
            </div>

            <div class="col-sm-12">
                <p id="num">Email</p>
                <span>tutorhub@gmail.com</span>
            </div>

            <div class="col-sm-12">
                <p id="num">Address</p>
                <span>A1 Block Karim Block Lahore,Pakistan</span>
            </div>

            <div class="col-sm-12">
                <p id="num">Headquater</p>
                <span>Islamabad,Pakistan</span>
            </div>

        </div>
        <hr />
        <div class="row">
            <div class="col-12">
                <h3>Contact Form</h3>

            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <!-- <form class="w-100"> -->
                    <div class="row">
                        <div class="col-sm-12">

        <?php 
        echo form_open('Contact_page_controller/send_mail', 'class="form_group" id="myform"');

        echo form_label('Name', 'Name');
       $Name = array(
       'name' => 'Name',
        'id' => ' Name',
        'placeholder' => 'Name',
        'maxlength' => '100',
        'class' => 'form_control',
                    );
            echo form_input($Name);
            ?>
        </div>

        <div class="col-sm-12">
             <?php
              echo form_label('Email', 'Email');
              $email= array(
              'name' => 'email',
              'id' => 'email',
              'placeholder' => 'Email',
              'maxlength' => '100',
             'class' => 'form_control',
                        );
                echo form_input($email);
                ?>
                </div>

        <div class="col-sm-12">
        <?php
         echo form_label('Country', 'Country');
         $dropdown = array(
        'name' => 'Country',
        'class' => 'form-control',
            );
          $options = array(
          'Pakistan' => 'Pakistan',
          'Australia' => 'Australia',
          'USA' => 'USA',
         );
        echo form_dropdown($dropdown, $options, 'Pakistan');
           ?>       
         </div>
                     
         <div class="col-sm-12" id="textfield">
          <?php
          echo "<label >Message</label>";
          $textarea = array(
            'name' => 'text',
            'value' => '',
            'class' => 'form-control',
            'style'=>"height:100px",
                      );
             echo form_textarea('$textarea');
             ?>     
                    </div>

            <div class="col-sm-12"> 
            <input type="submit" value="Submit">
             </div>
        </form>
            </div>
        </div>



    </div>


    </div>

</body>

</html>