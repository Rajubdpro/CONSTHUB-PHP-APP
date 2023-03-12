<?php
/**--------------------------
 * #Start Require connection
 ----------------------------*/
require("controller/UserController.php");
$user = new UserController();
require('template/header.php');

/**-------------------------
 * #End  Require connection
 ---------------------------*/

/**-------------------------
 *  Start Edit user details
 --------------------------*/

if (isset($_GET['editid'])) {
    $result =  $user->edit(($_GET['editid']));
}
/*----fatch record for updation---*/
if (isset($_GET['editid'])) {
    $editid = $_GET['editid'];
    $result = $user->edit($editid);
}

/**-----------------------
 * # End Edit user details
 *-----------------------*/

/**-------------------
 * # Start Update data
 *---------------------*/

if (isset($_POST['update'])) {
    $user->updateuser($_POST);
} //if isset close

/**--------------------
 * # End Update data
 ----------------------*/
?>
<div class="row">
    <div class="col-xl-12 mt-5">
        <section class="ap-sec-wrapper title">
            <h5 class="title-text">Update User</h5>
            <div class="row">
                <div class="col-sm">
                    <form class="needs-validation" novalidate="" action="" method="post" enctype="multipart/form-data">
                        <div class="row">
                        <div class="col-md-4 mb-10">
                                <label for="validationCustomUsername">User</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                                    </div>
                                    <input type="file" value="<?php echo $result['photo']; ?>" name="image" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required="">
                                    <img width="100" src="uploads/<?php echo $result['photo']; ?>">
                                    <div class="invalid-feedback">
                                        Please choose a username.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-10">
                                <label for="validationCustomUsername">Username</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                                    </div>
                                    <input type="text" value="<?php echo $result['username']; ?>" name="username" class="form-control" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required="">
                                    <div class="invalid-feedback">
                                        Please choose a username.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-10">
                                <label for="validationCustom01">Your Email:</label>
                                <input type="email" value="<?php echo $result['email']; ?>" name="email" class="form-control" id="validationCustom01" placeholder="Enter your Email" required="">
                                <div class="valid-feedback">
                                    Please update your Email!
                                </div>
                            </div>
                            <div class="col-md-4 mb-10">
                                <label for="validationCustom02">Password</label>
                                <input type="password" value="<?php echo $result['password']; ?>" name="password" class="form-control" id="validationCustom02" placeholder="Create a password" required="">
                                <div class="valid-feedback">
                                    Please update a password!
                                </div>
                            </div>

                        </div>
                        <div class="form-group">
                            <div class="form-check custom-control custom-checkbox">
                                <input type="checkbox" class="form-check-input custom-control-input" id="invalidCheck" required="">
                                <label class="form-check-label custom-control-label" for="invalidCheck">
                                    Agree to terms and conditions
                                </label>
                                <div class="invalid-feedback">
                                    You must agree before submitting.
                                </div>
                            </div>
                        </div>
                        <input type="hidden" id="update" name="hid" value="<?php echo $result['id'] ?>">
                        <input type="submit" name="update" id="update" value="Update" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>

<!----------------------
#Start footer connection 
------------------------>

<?php
require('template/footer.php');
?>

<!----------------------
#End footer connection 
------------------------>