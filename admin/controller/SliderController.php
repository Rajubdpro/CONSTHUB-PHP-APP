<?php

/**
 * #Start require connection
 * # Use Connection.php 
 */
require_once("../connection/connection.php");

/**
 * #End require connection
 */

/**
 * #Start Main Usercontroller class
 * 
 * #Start main UserController 
 * #Extands main database class
 * #User create,update,edit,delete Method Using
 *
 */

class SliderController extends Database
{


    /**
     * Start login check section
     */
    // public function __construct(){
    //     if(!isset($_SESSION['id'])){
    //         header('location:login.php');
    //     }
    // }



    /**
     * #Start Index Method Section
     * 
     * #Start Display user record
     * #Creating Index user
     * #Select data into User table
     */
    public function index()
    {
        $sql = "SELECT * FROM slider";
        $result = $this->conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            } //while close
            return $data;
        } //if close
    } //display record close

    /**
     * #End Index user section
     * 
     * #End Display user record
     * #Creating Index user
     * #Select data into user table
     */

    /**
     * #Start edit user section
     *
     * #Creating Edit user
     * #Edit data into User list
     * # @param $editid
     * 
     */
    public function edit($editid)
    {
        $sql = "SELECT * FROM slider WHERE id = '$editid'";
        $result = $this->conn->query($sql);
        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            return $row;
        }
    }

    /**
     * End Edit user section

     * #End edit User record
     * #Creating Edit class
     * #Edit data into User 
     * #Using @param ($editid)
     */

    /**
     * #Start user create section
     * 
     * Use user
     * @param string $username
     * @param string $email
     * @param string @password
     * 
     */
    public function create($data)
    {

        if (isset($_FILES['image'])) {
            $errors = array();
            $file_name = $_FILES['image']['name'];
            $file_size = $_FILES['image']['size'];
            $file_tmp = $_FILES['image']['tmp_name'];
            $file_type = $_FILES['image']['type'];
            $exploaded = explode('.', $_FILES['image']['name']);
            $file_ext = strtolower(end($exploaded));
            
            $expensions = array("jpeg", "jpg", "png");
            
            if (in_array($file_ext, $expensions) === false) {
                $errors[] = "extension not allowed, please choose a JPEG or PNG file.";
            }
            
            if ($file_size > 2097152) {
                $errors[] = 'File size must be excately 2 MB';
            }
            
            if (empty($errors) == true) {
                move_uploaded_file($file_tmp, "uploads/slider/" . $file_name);
            } else {
                print_r($errors);
            }

        }
        $heading = $data['heading'];
        $desc = $data['sub_heading'];
        $btn = $data['btn'];
        $btn_link = $data['btn_link'];


        $query = "INSERT INTO slider (photo, heading, sub_heading, btn, btn_link) VALUES ('$file_name', '$heading', '$desc', '$btn', '$btn_link')";

        if ($this->conn->query($query) === TRUE) {
            return 1;
        }
    }

    /**
     * #End user create section
     * 
     *   #Use user 
     *   @param string $username
     *   @param string $email
     *   @param string @password
     * 
     */

    /**
     * #Start Update user section
     * 
     * Use Update user
     * Use @param $post
     * 
     */
    public function update($data)
    {
        
        if (isset($_FILES['image'])) {
            $errors = array();
            $file_name = $_FILES['image']['name'];
            $file_size = $_FILES['image']['size'];
            $file_tmp = $_FILES['image']['tmp_name'];
            $file_type = $_FILES['image']['type'];
            $exploaded = explode('.', $_FILES['image']['name']);
            $file_ext = strtolower(end($exploaded));
            
            $expensions = array("jpeg", "jpg", "png");
            
            if (in_array($file_ext, $expensions) === false) {
                $errors[] = "extension not allowed, please choose a JPEG or PNG file.";
            }
            
            if ($file_size > 2097152) {
                $errors[] = 'File size must be excately 2 MB';
            }
            
            if (empty($errors) == true) {
                move_uploaded_file($file_tmp, "uploads/slider/" . $file_name);
            } else {
                print_r($errors);
            }

        }

        $heading = $data['heading'];
        $sub_heading = $data['sub_heading'];
        $btn = $data['btn'];
        $btn_link = $data['btn_link'];
        $editid = $data['hid'];
        $sql = "UPDATE slider SET photo = '$file_name', heading = '$heading', sub_heading = '$sub_heading', btn = '$btn', btn_link = '$btn_link' WHERE id = '$editid'";
        $result = $this->conn->query($sql);
        if ($result) {
        } else {
            echo "Error" . $sql . "<br>" . $this->conn->error;
        }
    } //update reccord close

    /**
     *  #End Update user section
     *  Update user
     *  @param $post
     * 
     */

    /** 
     *   #Start Delete user section
     *   Delete user
     *   @param mixed $post
     */
    public function deleteslider($deleteid)
    {
        $sql = "DELETE FROM slider WHERE id='$deleteid'";
        $result = $this->conn->query($sql);
        if ($result) {
        } else {
            echo "Error" . $sql . "<br>" . $this->conn->error;
        }
    } //delate record

    /**
     *   #End Delete user section
     *   Delete user
     *   @param mixed $post
     */
}


/**
 * #End main UserController
 * #Extands main database class
 * #User create,update,edit,delete class Using
 */

?>



