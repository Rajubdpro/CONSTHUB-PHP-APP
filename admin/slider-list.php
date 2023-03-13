<?php

/**
 * Start require connection
 * Require UserController.php, header.php
 */

require("controller/SliderController.php");
$user = new SliderController();
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
    <a href="slider-create.php" class="btn btn-primary mb-2">create</a>
    <div class="title">
        <div class="title-body">
            <div class="table-responsive">
                <table class="table table-hover table-bordered" id="sampleTable">
                    <thead>
                        <tr class="text-center">
                            <th>Id</th>
                            <th width="80">	Photo</th>
                            <th>Heading</th>
                            <th>Description</th>
                            <th>Button</th>
                            <th>Button_link</th>
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
                                        <?php if($value['photo']){ ?>
                                        <image style="width:80px"src="uploads/slider/<?php echo $value['photo']; ?>">
                                        <?php }else{ ?>
                                         <image style="width:80px"src="uploads/slider/user.png">
                                       <?php } ?>
                                    
                                    </td>
                                    <td><?php echo $value['heading']; ?></td>
                                    <td><?php echo $value['sub_heading']; ?></td>
                                    <td><?php echo $value['btn']; ?></td>
                                    <td><?php echo $value['btn_link']; ?></td>
                                    <td>

                                        <a href="slider-edit.php?editid=<?php echo $value['id']; ?>" class="btn btn-info">Edit</a>
                                        <a href="slider-delete.php?deleteid=<?php echo $value['id'] ?>" class="btn btn-danger">Delete</a>
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