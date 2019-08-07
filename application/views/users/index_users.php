<div class="row">
    <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12 col-xl-12">
        <div class="row mt-2 mb-2">
            <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12 col-xl-12">
                <a href="<?php echo base_url("users/add"); ?>" class="btn btn-info" role="button">
                    Add a New User
                </a>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped w-100">
                <thead>
                    <tr>
                        <th>User id</th>
                        <th>User Name</th>
                        <th>User Email</th>
                        <th>User Password</th>
                        <th>Edit</th>
                        <th>Delete</th>



                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($records as $rec) {?>
                    <tr>
                        <td><?php echo $rec['id']; ?></td>
                        <td><?php echo $rec['name']; ?></td>
                        <td><?php echo $rec['email']; ?></td>
                        <td><?php echo $rec['password']; ?></td>

                        <td>
                            <a href="<?php echo base_url("users/edit") . '/' . $rec['id']; ?>" class="btn btn-primary"
                                role="button">edit</a>
                        </td>
                        <!-- <td><a href="<?php //echo base_url("sliders/delete") . '/' . $rec->slider_id; ?>"
                                                onclick="myFunction()" class="btn btn-primary" role="button">delete</a></td> -->
                        <td>
                            <form method="post">
                                <input type="hidden" name="users_id" value="<?php echo $rec['id']; ?>" />
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