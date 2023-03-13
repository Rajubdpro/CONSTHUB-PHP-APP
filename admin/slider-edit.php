<?php

/**
 *  Start require section
 * require Controller.php,Header.php
 */
require("controller/SliderController.php");
$slider = new SliderController();

require('template/header.php');

/**
 *  End require section
 * require Controller.php,Header.php
 */

/**-------------------------
 *  Start Edit slider details
 --------------------------*/

if (isset($_GET['editid'])) {
    $result =  $slider->edit(($_GET['editid']));
}
/*----fatch record for updation---*/
if (isset($_GET['editid'])) {
    $editid = $_GET['editid'];
    $result = $slider->edit($editid);
}

/**-----------------------
 * # End Edit user details
 *-----------------------*/

/**-------------------
 * # Start Update data
 *---------------------*/

if (isset($_POST['update'])) {
    $slider->update($_POST);
} //if isset close

/**--------------------
 * # End Update data
 ----------------------*/
?>



<!------------------------------
* #Start Slider edit Section
------------------------------>
<div class="row">
    <div class="col-xl-12  col-md-12 mt-5">
        <section class="ap-sec-wrapper title">
            <h5 class="title-text">Update Slider</h5>
            <div class="container">
                <section class="section register d-flex flex-column align-items-center justify-content-center py-4">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-10 col-md-10 d-flex flex-column align-items-center justify-content-center">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <form action="" method="post" class="row g-3 needs-validation" novalidate enctype="multipart/form-data">
                                            <div class="col-12 mb-10">
                                                <label for="validationCustomUsername">Slider Photo</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                                                    </div>
                                                    <input type="file" value="<?php echo $result['photo']; ?>" name="image" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required="">
                                                    <img width="100" src="uploads/slider/<?php echo $result['photo']; ?>">
                                                    <div class="invalid-feedback">
                                                        Please choose a file.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12 mb-10">
                                                <!-- Summernote HTML Editor -->
                                                <div class="title">
                                                    <label for="validationCustomUsername">Slider Heading</label>
                                                    <textarea " type=" text" name="heading" class="form-control" placeholder="Please choose a heading" aria-describedby="inputGroupPrepend" required="" id="summernote"><?php echo $result['heading']; ?></textarea>

                                                </div>
                                            </div>

                                            <div class="col-md-12 mb-10">
                                                <label for="validationCustomdescription">Slider Description</label>
                                                <div class="input-group">
                                                    <input type="text" value="<?php echo $result['sub_heading']; ?>" name="sub_heading" class="form-control" id="validationCustomheading" placeholder="Please choose a description" aria-describedby="inputGroupPrepend" required="">
                                                    <div class="invalid-feedback">
                                                        Please choose a description.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-10">
                                                <label" for="validationCustombutton">Slider Button</label>
                                                    <div class="input-group">
                                                        <input type="text" value="<?php echo $result['btn']; ?>" name="btn" class="form-control" id="validationCustomheading" placeholder="Please choose a Button" aria-describedby="inputGroupPrepend" required="">
                                                        <div class="invalid-feedback">
                                                            Please choose a button.
                                                        </div>
                                                    </div>
                                            </div>

                                            <div class="col-md-12 mb-10">
                                                <label" for="validationCustombutton">Slider Button Link(Optional)</label>
                                                    <div class="input-group">
                                                        <input type="http" value="<?php echo $result['btn_link']; ?>" name="btn_link" class="form-control" id="validationCustomheading" placeholder="Please choose a Button" aria-describedby="inputGroupPrepend" required="">
                                                        <div class="invalid-feedback">
                                                            Button Link
                                                        </div>
                                                    </div>
                                            </div>

                                            <div class="col-3">
                                                <input type="hidden" id="update" name="hid" value="<?php echo $result['id'] ?>">
                                                <input type="submit" name="update" id="update" value="Update Slider" class="btn btn-lg btn-primary">
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
* #End slider List Section
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