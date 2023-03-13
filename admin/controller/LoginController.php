<?php
require("../connection/connection.php");
class Login extends Database
{

    public $id;
    public function log_in($usernameemail, $password)
    {
        $result = mysqli_query($this->conn, "SELECT * FROM user WHERE username = '$usernameemail' OR email = '$usernameemail'");

        if (!$result) {
            die(mysqli_error($this->conn));
        }
        $row = mysqli_fetch_assoc($result);

        if (mysqli_num_rows($result) > 0) {
            if ($password == $row["password"]) {
                $this->id = $row["id"];
                return 1;
                //login successfull
            } else {
                return 10;
                //wrong password
            }
        } else {
            return 100;
            //user not registed
        }
    }
    public function idUser()
    {
        return $this->id;
    }

    
}
