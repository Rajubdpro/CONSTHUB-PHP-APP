<?php

/**
 *  Start require section
 * require Controller.php,Header.php
 */
require("controller/ServicesController.php");
$services = new ServicesController();

require('template/header.php');

/**
 *  End require section
 * require Controller.php,Header.php
 */

/**-------------------------
 *  Start Edit services details
 --------------------------*/

if (isset($_GET['editid'])) {
    $result =  $services->edit(($_GET['editid']));
}
/*----fatch record for updation---*/
if (isset($_GET['editid'])) {
    $editid = $_GET['editid'];
    $result = $services->edit($editid);
}

/**-----------------------
 * # End Edit services details
 *-----------------------*/

/**-------------------
 * # Start Update data
 *---------------------*/

if (isset($_POST['update'])) {
    $services->update($_POST);
} //if isset close

/**--------------------
 * # End Update data
 ----------------------*/
?>



<!------------------------------
* #Start services edit Section
------------------------------>
<div class="row">
    <div class="col-xl-12  col-md-12 mt-5">
        <section class="ap-sec-wrapper title">
            <h5 class="title-text">Update Services</h5>
            <div class="container">
                <section class="section register d-flex flex-column align-items-center justify-content-center py-4">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-10 col-md-10 d-flex flex-column align-items-center justify-content-center">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <form action="" method="post" class="row g-3 needs-validation" novalidate enctype="multipart/form-data">
                                            <div class="col-md-12 mb-10">
                                                <label for="validationCustomUsername">Services Icon</label>
                                                <input value="<?php echo $result['icon']; ?>" type="text" name="icon" class="form-control" id="validationCustomheading" placeholder="Ex: fas fa-user" aria-describedby="inputGroupPrepend" required="">
                                                <div class="invalid-feedback">
                                                    Please choose a heading.
                                                </div>
                                            </div>

                                            <div class="col-md-12 mb-10">
                                                <label for="validationCustomdescription">Services Heading</label>
                                                <div class="input-group">
                                                    <input value="<?php echo $result['heading']; ?>" type="text" name="heading" class="form-control" id="validationCustomheading" placeholder="Please choose a description" aria-describedby="inputGroupPrepend" required="">
                                                    <div class="invalid-feedback">
                                                        Please choose a heading.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-10">
                                                <label for="validationCustomdescription">Services Description</label>
                                                <div class="input-group">
                                                    <input value="<?php echo $result['sub_heading']; ?>" type="text" name="sub_heading" class="form-control" id="validationCustomheading" placeholder="Please choose a description" aria-describedby="inputGroupPrepend" required="">
                                                    <div class="invalid-feedback">
                                                        Please choose a description.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-3">
                                                <input type="hidden" id="update" name="hid" value="<?php echo $result['id'] ?>">
                                                <input type="submit" name="update" id="update" value="Update Services" class="btn btn-lg btn-primary">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </section>

            </div>
        </section>
    </div>
</div>


<!------------------------------
* #End services edit Section
------------------------------>

<!------------------------------
* #Start footer section require
------------------------------>
<?php
require('template/footer.php');
?>
<!------------------------------
* #End footer section require
------------------------------>