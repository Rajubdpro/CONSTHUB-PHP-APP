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

class UserController extends Database
{

    /**
     * #Start Index Method Section
     * 
     * #Start Display user record
     * #Creating Index user
     * #Select data into User table
     */
    public function index()
    {
        $sql = "SELECT * FROM user";
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
        $sql = "SELECT * FROM user WHERE id = '$editid'";
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
    public function create($username, $email, $password)
    {
        $duplicate = mysqli_query($this->conn, "SELECT * FROM user WHERE username = '$username' OR email = '$email'");
        if (mysqli_num_rows($duplicate) > 0) {
            return 10;
        } else {
            if ($password) {


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
                        move_uploaded_file($file_tmp, "uploads/" . $file_name);
                    } else {
                        print_r($errors);
                    }
 
                }

                $query = "INSERT INTO user (username, email, password, photo) VALUES ('$username', '$email', '$password', '$file_name')";

                if ($this->conn->query($query) === TRUE) {

                    return 1;
                }
            } else {
                return 100;
            }
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
    public function updateuser($post)
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
                move_uploaded_file($file_tmp, "uploads/" . $file_name);
            } else {
                print_r($errors);
            }

        }

        $username = $post['username'];
        $email = $post['email'];
        $password = $post['password'];
        $editid = $post['hid'];
        $sql = "UPDATE user SET username = '$username', email = '$email', password = '$password', photo = '$file_name' WHERE id = '$editid'";
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
    public function deleteuser($deleteid)
    {
        $sql = "DELETE FROM user WHERE id='$deleteid'";
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
