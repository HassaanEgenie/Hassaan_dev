<div class="row">
    <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12 col-xl-12">
        <div class="row mt-2 mb-2">
            <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12 col-xl-12">
                <a href="<?php echo base_url("sliders/add"); ?>" class="btn btn-info" role="button">
                    Add a New Slider
                </a>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped w-100">
                <thead>
                    <tr>
                        <th>Slider ID</th>
                        <th>Slider Title</th>
                        <th>Slider Description</th>
                        <th>Slider Status</th>
                        <th>Update</th>
                        <th>Delete</th>
                        <th>Status</th>
                        <th>Show slides</th>
                        <th>Slide Count</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($records as $rec) {?>
                    <tr>
                        <td><?php echo $rec['slider_id'];?></td> 
                        <td><?php echo $rec['slider_title'];?></td>
                        <td><?php echo $rec['slider_description'];?></td>
                        <td><?php echo $rec['slider_status'];?></td>

                        <td>
                            <a href="<?php echo base_url("Sliders/edit") . '/' . $rec['slider_id']; ?>"
                                class="btn btn-primary" role="button">edit</a>
                        </td>
                        <!-- <td><a href="<?php //echo base_url("sliders/delete") . '/' . $rec->slider_id; ?>"
                                                onclick="myFunction()" class="btn btn-primary" role="button">delete</a></td> -->
                        <td>
                            <form method="post">
                                <input type="hidden" name="slider_id" value="<?php echo$rec['slider_id'];?>" />
                                <input type="hidden" name="action" value="delete" />
                                <button class="btn btn-primary" type="submit">Delete</button>
                            </form>
                        </td>
                        <td>
                            <?php if ($rec['slider_status'] == 0) {?>
                            <form method="post">
                                <input type="hidden" name="action" value="activate" />
                                <input type="hidden" name="slider_id" value="<?php echo $rec['slider_id']; ?>" />
                                <button class="btn btn-primary" type="submit">Activate</button>
                            </form>
                            <?php } else if ($rec['slider_status'] == 1) {?>
                            <form method="post">
                                <input type="hidden" name="action" value="deactivate" />
                                <input type="hidden" name="slider_id" value="<?php echo $rec['slider_id']; ?>" />
                                <button class="btn btn-primary" type="submit">Deactivated</button>
                            </form>
                            <?php }?>
                        </td>
                        <td>
                            <a href="<?php echo base_url("slides/index") . '/' . $rec['slider_id']; ?>"
                                class="btn btn-primary" role="button">Slides</a>
                        </td>
                        <td><?php echo $rec['slides_count'];?></td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
            <script>
            function myFunction() {
                var txt;
                if (confirm("Are you sure you want to deleat a record!")) {
                    txt = "You pressed OK!";
                } else {
                    txt = "You pressed Cancel!";
                }
                document.getElementById("demo").innerHTML = txt;
            }
            </script>

        </div>

    </div>
</div>