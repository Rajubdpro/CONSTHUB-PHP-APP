<?php
/**
 *  Start require section
 * require Controller.php,Header.php
 */
require("controller/UserController.php");
$user = new UserController();

require('template/header.php');

/**
 *  End require section
 * require Controller.php,Header.php
 */

/**
 *  Start Create user section
 * @param $username,
 * @param $email,
 * @param $password
 */

if(isset($_POST['submit'])){
 
    $result = $user->create($_POST["username"], $_POST["email"], $_POST["password"]);
    
if($result == 1 ){
    echo"<script> alert('Registration seccessfully');</script>";
}
elseif($result == 10 ){
    echo"<script> alert('Username or Email has already taken');</script>";
}
if($result == 100 ){
    echo"<script> alert('Password does not match');</script>";
}

}

/**
 *  End User Create section
 * @param $username,
 * @param $email,
 * @param $password
 */

?>

<!------------------------------
* #Start User List Section
------------------------------>
<div class="row">
    <div class="col-xl-12 mt-5">
        <section class="ap-sec-wrapper title">
        <h5 class="title-text">Create User</h5>
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
                                    <input type="file" name="image" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required="">
                                    <div class="invalid-feedback">
                                        Please choose a file.
                                    </div>
                                </div>
                            </div>
                        <div class="col-md-4 mb-10">
                                <label for="validationCustomUsername">Username</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                                    </div>
                                    <input type="text" name="username" class="form-control" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required="">
                                    <div class="invalid-feedback">
                                        Please choose a username.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-10">
                                <label for="validationCustom01">Your Email:</label>
                                <input type="email" name="email" class="form-control" id="validationCustom01" placeholder="Enter your Email" required="">
                                <div class="valid-feedback">
                                    Please select your Email!
                                </div>
                            </div>
                            <div class="col-md-4 mb-10">
                                <label for="validationCustom02">Password</label>
                                <input type="password" name="password" class="form-control" id="validationCustom02" placeholder="Create a password" required="">
                                <div class="valid-feedback">
                                    Please create a password!
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
                       <input type="submit" name="submit" value="Create" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>

<!------------------------------
* #End User List Section
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