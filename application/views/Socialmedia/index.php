<div class="row">
    <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12 col-xl-12">
        <div class="row mt-2 mb-2">
            <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12 col-xl-12">
                <a href="<?php echo base_url("Socialmedia/add"); ?>" class="btn btn-info" role="button">
                    Add a New Page
                </a>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped w-100">
                <thead>
                    <tr>
                        <th> ID</th>
                        <th>facebook</th>
                        <th>instagram</th>
                        <th>linkedIn</th>
                        <th>Gmail</th>
                        <th>Twitter</th>
                        <th>Favicon</th>
                        <th>Title</th>
                        <th>Logo</th>
                        <th>Whatsapp</th>
                        <th>Update</th>
                        <th>Delete</th>
                        <th>Status</th>


                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($records as $rec) {?>
                    <tr>
                        <td><?php echo $rec['id']; ?></td>
                        <td><?php echo $rec['facebook']; ?></td>
                        <td><?php echo $rec['instagram']; ?></td>
                        <td><?php echo $rec['linkedin']; ?></td>
                        <td><?php echo $rec['gmail']; ?></td>
                        <td><?php echo $rec['twitter']; ?></td>
                        <td><?php echo $rec['favicon']; ?></td>
                        <td><?php echo $rec['Title']; ?></td>
                        <td><?php echo $rec['logo']; ?></td>
                        <td><?php echo $rec['whatsapp']; ?></td>

                        <td>
                            <a href="<?php echo base_url("Socialmedia/edit") . '/' . $rec['id']; ?>"
                                class="btn btn-primary" role="button">edit</a>
                        </td>
                        <!-- <td><a href="<?php //echo base_url("sliders/delete") . '/' . $rec->slider_id; ?>"
                                                onclick="myFunction()" class="btn btn-primary" role="button">delete</a></td> -->
                        <td>
                            <form method="post">
                                <input type="hidden" name="social_id" value="<?php echo $rec['id']; ?>" />
                                <input type="hidden" name="action" value="delete" />
                                <button class="btn btn-primary" type="submit">Delete</button>
                            </form>
                        </td>



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