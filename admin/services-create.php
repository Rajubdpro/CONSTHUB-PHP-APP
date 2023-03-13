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

/** Start Create services section */
if (isset($_POST['submit'])) {
    $result = $services->create($_POST);

    if ($result == 1) {
        echo "<script> alert('Services create seccessfully');</script>";
        echo "<script>window.location.href='services-list.php'</script>";
    } elseif ($result == 0) {
        echo "<script> alert('services create unseccessfully');</script>";
    }
}

/**End services Create section*/
?>

<!------------------------------
* #Start Services List Section
------------------------------>
<div class="row">
    <div class="col-xl-12  col-md-12 mt-5">
        <section class="ap-sec-wrapper title">
            <h5 class="title-text">Create Slider</h5>
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
                                                <input type="text" name="icon" class="form-control" placeholder="Please select a class">
                                                <div class="invalid-feedback">
                                                    Please choose a heading.
                                                </div>
                                            </div>

                                            <div class="col-md-12 mb-10">
                                                <label for="validationCustomdescription">Services Heading</label>
                                                <div class="input-group">
                                                    <input type="text" name="heading" class="form-control" id="validationCustomheading" placeholder="Please choose a description" aria-describedby="inputGroupPrepend" required="">
                                                    <div class="invalid-feedback">
                                                        Please choose a heading.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-10">
                                                <label for="validationCustomdescription">Services Description</label>
                                                <div class="input-group">
                                                    <input type="text" name="sub_heading" class="form-control" id="validationCustomheading" placeholder="Please choose a description" aria-describedby="inputGroupPrepend" required="">
                                                    <div class="invalid-feedback">
                                                        Please choose a description.
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="col-3">
                                                <input class="btn btn-primary" type="submit" name="submit" value="Create Services">
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
* #End services create Section
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