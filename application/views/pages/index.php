<div class="row">
    <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12 col-xl-12">
        <div class="row mt-2 mb-2">
            <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12 col-xl-12">
                <a href="<?php echo base_url("pages/add"); ?>" class="btn btn-info" role="button">
                    Add a New Page
                </a>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped w-100">
                <thead>
                    <tr>
                        <th>Page ID</th>
                        <th>Page Title</th>
                        <th>Page name</th>
                        <th>Page slug</th>
                        <th>Page Content</th>
                        <th>Page Status</th>
                        <th>meta_copyright</th>
                        <th>meta_description</th>
                        <th>meta_keywords</th>
                        <th>meta_robots</th>
                        <th>meta_dc_title</th>
                        <th>Update</th>
                        <th>Delete</th>
                        <th>Status</th>


                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($records as $rec) {?>
                    <tr>
                        <td><?php echo $rec['id']; ?></td>
                        <td><?php echo $rec['title']; ?></td>
                        <td><?php echo $rec['name']; ?></td>
                        <td><?php echo $rec['slug']; ?></td>
                        <td><?php echo $rec['content']; ?></td>
                        <td><?php echo $rec['status']; ?></td>
                        <td><?php echo $rec['meta_copyright']; ?></td>
                        <td><?php echo $rec['meta_description']; ?></td>
                        <td><?php echo $rec['meta_keywords']; ?></td>
                        <td><?php echo $rec['meta_robots']; ?></td>
                        <td><?php echo $rec['meta_dc_title']; ?></td>

                        <td>
                            <a href="<?php echo base_url("pages/edit") . '/' . $rec['id']; ?>" class="btn btn-primary"
                                role="button">edit</a>
                        </td>
                        <!-- <td><a href="<?php //echo base_url("sliders/delete") . '/' . $rec->slider_id; ?>"
                                                onclick="myFunction()" class="btn btn-primary" role="button">delete</a></td> -->
                        <td>
                            <form method="post">
                                <input type="hidden" name="pages_id" value="<?php echo $rec['id']; ?>" />
                                <input type="hidden" name="action" value="delete" />
                                <button class="btn btn-primary" type="submit">Delete</button>
                            </form>
                        </td>
                        <td>
                            <?php if ($rec['status'] == 0) {?>
                            <form method="post">
                                <input type="hidden" name="action" value="activate" />
                                <input type="hidden" name="pages_id" value="<?php echo $rec['id']; ?>" />
                                <button class="btn btn-primary" type="submit">Activate</button>
                            </form>
                            <?php } else if ($rec['status'] == 1) {?>
                            <form method="post">
                                <input type="hidden" name="action" value="deactivate" />
                                <input type="hidden" name="pages_id" value="<?php echo $rec['id']; ?>" />
                                <button class="btn btn-primary" type="submit">Deactivated</button>
                            </form>
                            <?php }?>
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