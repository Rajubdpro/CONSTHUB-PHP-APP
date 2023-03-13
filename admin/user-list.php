<?php

/**
 * Start require connection
 * Require UserController.php, header.php
 */

require("controller/UserController.php");
$user = new UserController();
$data = $user->index();
require('template/header.php');

/**
 * End require connection
 * Require UserController.php, header.php
 */

?>

<!--------------------------
#Start user list section
--------------------------->

<div class="col-md-12">
    <a href="user-create.php" class="btn btn-primary mb-2">Create User</a>
    <div class="title">
        <div class="title-body">
            <div class="table-responsive">
                <table class="table table-hover table-bordered" id="sampleTable">
                    <thead>
                        <tr class="text-center">
                            <th>Id</th>
                            <th width="80">Photo</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        /*--display record---*/
                        $id = 1;
                        if ($data !== null) {
                            foreach ($data as $value) {
                        ?>
                                <tr class="text-center">
                                    <td><?php echo $id++; ?></td>
                                    <td>
                                        <?php if ($value['photo']) { ?>
                                            <image style="width:80px" src="uploads/<?php echo $value['photo']; ?>">
                                            <?php } else { ?>
                                                <image style="width:80px" src="uploads/user.png">
                                                <?php } ?>

                                    </td>
                                    <td><?php echo $value['username']; ?></td>
                                    <td><?php echo $value['email']; ?></td>
                                    <td><?php echo $value['password']; ?></td>
                                    <td>

                                        <a href="user-edit.php?editid=<?php echo $value['id']; ?>" class="btn btn-info">Edit</a>
                                        <a href="user-delete.php?deleteid=<?php echo $value['id'] ?>" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                        <?php
                            } //foreach close
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!--------------------------
#End user list section
--------------------------->

<!-------------------------
#Require footer section start
-------------------------->
<?php
require('template/footer.php');
?>
<!-------------------------
#Require footer section End
-------------------------->