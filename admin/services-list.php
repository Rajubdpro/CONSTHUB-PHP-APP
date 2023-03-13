<?php

/**
 * Start require connection
 * Require UserController.php, header.php
 */

require("controller/ServicesController.php");
$services = new ServicesController();
$data = $services->index();
require('template/header.php');

/**
 * End require connection
 * Require servicesController.php, header.php
 */

?>

<!--------------------------
#Start services list section
--------------------------->

<div class="col-md-12">
    <a href="services-create.php" class="btn btn-primary mb-2">Create Services</a>
    <div class="title">
        <div class="title-body">
            <div class="table-responsive">
                <table class="table table-hover table-bordered" id="sampleTable">
                    <thead>
                        <tr class="text-center">
                            <th>Id</th>
                            <th>Icon</th>
                            <th>Heading</th>
                            <th>Sub_heading</th>
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
                                    <td><?php echo $value['icon']; ?></td>
                                    <td><?php echo $value['heading']; ?></td>
                                    <td><?php echo $value['sub_heading']; ?></td>
                                    <td>

                                        <a href="services-edit.php?editid=<?php echo $value['id']; ?>" class="btn btn-info">Edit</a>
                                        <a href="services-delete.php?deleteid=<?php echo $value['id'] ?>" class="btn btn-danger">Delete</a>
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
#End services list section
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