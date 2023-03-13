<?php 
require_once('connection/connection.php');
class FrontendController extends Database{

    /** slider section start */

    public function displaySlider(){
        $sql = "SELECT * FROM slider";
        $result = $this->conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            } //while close
            return $data;
        } //if close
    }
    /** Slider section End */

    /** Services section start */

    public function displayservices(){
        $sql = "SELECT * FROM services";
        $result = $this->conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            } //while close
            return $data;
        } //if close
    }
       /** Services section End */
}
