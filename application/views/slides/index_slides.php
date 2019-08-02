<div class="row">
    <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12 col-xl-12">
        <div class="row mt-2 mb-2">
            <?php $slider_id = $this->uri->segment(3);?>
            <a href="<?php echo base_url("slides/add") . '/' . $slider_id; ?>" class="btn btn-info" role="button">Add a
                New
                Slide</a>

            <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12 col-xl-12">

            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped w-100">
                <thead>
                    <tr>
                        <th>Slide ID</th>
                        <th> Slide Title</th>
                        <th>Slide Description</th>
                        <th>Slide Image</th>
                        <th>Slide Video</th>
                        <th>Slide Content</th>
                        <th>Slide status</th>
                        <th>Slider Id</th>
                        <th>Slide type</th>
                        <th>Update</th>
                        <th>Delete</th>
                        <th>Status</th>

                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($records)) {?>
                    <?php foreach ($records as $rec) {?>
                    <tr>

                        <td><?php echo $rec['slide_id'];?></td>
                        <td><?php echo $rec['slide_title'];?></td>
                        <td><?php echo $rec['slide_description'];?></td>
                        <td><?php echo $rec['slide_image'];?></td>
                        <td><?php echo $rec['slide_video'];?></td>
                        <td><?php echo $rec['slide_content'];?></td>
                        <td><?php echo $rec['slide_status'];?></td>
                        <td><?php echo $rec['slider_id'];?></td>
                        <td><?php echo $rec['slide_type'];?></td>


                        <td>
                            <a href="<?php echo base_url("Slides/edit") . '/' . $rec['slide_id'] . '/' . $rec['slider_id']; ?>"
                                class="btn btn-primary" role="button">edit</a></td>


                        <form method="post">

                            <input type="hidden" name="slide_id" value="<?php echo $rec['slide_id'];?>" />
                            <input type="hidden" name="action" value="delete" />
                            <td><button class="btn btn-primary" type="submit">Delete</button> </td>

                        </form>

                        <td>
                            <?php if ($rec['slide_status'] == 0) {?>
                            <form method="post">
                                <input type="hidden" name="action" value="activate" />
                                <input type="hidden" name="slide_id" value="<?php echo $rec['slide_id'];?>" />
                                <input type="hidden" name="slider_id" value="<?php echo $rec['slider_id'];?>" />
                                <button class="btn btn-primary" type="submit">Activate</button>
                            </form>
                            <?php } else if ($rec['slide_status'] == 1) {?>
                            <form method="post">
                                <input type="hidden" name="action" value="deactivate" />
                                <input type="hidden" name="slide_id" value="<?php echo $rec['slide_id'];?>" />
                                <input type="hidden" name="slider_id" value="<?php echo $rec['slider_id'];?>" />
                                <button class="btn btn-primary" type="submit">Deactivated</button>
                            </form>
                            <?php }?>
                        </td>




                        <!-- <td><a href="<?php echo base_url("Slides/delete") . '/' . $rec['slide_id']; ?>"
                                onclick="myFunction()" class="btn btn-primary" role="button">delete</a></td> -->

                    </tr>
                    <?php }?>
                    <?php } else {?>
                    <tr>
                        <td colspan="12">No Records</td>
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