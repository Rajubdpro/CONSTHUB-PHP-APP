<?php

/**
 * #Start require connection
 */
require_once("../connection/connection.php");

/**
 * #End require connection
 */

/**
 * #Start Main servi servicescontroller class
 * 
 * #Start main servicescontroller 
 * #Extands main database class
 * #services create,update,edit,delete Method Using
 *
 */

class ServicesController extends Database
{


    /**
     * #Start Index Method Section
     * 
     * #Start Display services record
     * #Creating Index services
     * #Select data into Usserviceser table
     */
    public function index()
    {
        $sql = "SELECT * FROM services";
        $result = $this->conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            } //while close
            return $data;
        } //if close
    } //display record close

    
    /**
     * #Start services create section
     */
    public function create($data)
    {

        $icon = $data['icon'];
        $heading = $data['heading'];
        $sub_heading = $data['sub_heading'];
      
        $query = "INSERT INTO services (icon, heading, sub_heading) VALUES ('$icon', '$heading', '$sub_heading')";

        if ($this->conn->query($query) === TRUE) {
            return 1;
        }
    }

    /**
     * #End services create section
     */
  

    /**
     * #Start edit services section
     */
    public function edit($editid)
    {
        $sql = "SELECT * FROM services WHERE id = '$editid'";
        $result = $this->conn->query($sql);
        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            return $row;
        }
    }

    /**
     * End Edit services section
     */

    /**
     * #Start Update services section
     */
    public function update($data)
    {  
        $icon = $data['icon'];
        $heading = $data['heading'];
        $sub_heading = $data['sub_heading'];
        $editid = $data['hid'];
        $sql = "UPDATE services SET icon = '$icon', heading = '$heading', sub_heading = '$sub_heading' WHERE id = '$editid'";
        $result = $this->conn->query($sql);
        if ($result) {
        } else {
            echo "Error" . $sql . "<br>" . $this->conn->error;
        }
    } //update reccord close

    /**
     *  #End Update services section 
     */

    /** 
     *   #Start Delete services section
     */
    public function deleteservices($deleteid)
    {
        $sql = "DELETE FROM services WHERE id='$deleteid'";
        $result = $this->conn->query($sql);
        if ($result) {
        } else {
            echo "Error" . $sql . "<br>" . $this->conn->error;
        }
    } //delate record

    /**
     *   #End Delete services section
     */
}


/**
 * #End main UserController
 * #Extands main database class
 * #User create,update,edit,delete class Using
 */
