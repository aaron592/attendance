<?php

class crud {

    private $db;

    function __construct($conn){
        $this->db = $conn;
    }

    public function insertAttendees($fname,$lname,$dob,$occupation,$email,$contact){

        try{
            $sql="INSERT INTO attendee (firstname,lastname,dateofbirth,status_id,emailaddress,contactnumber) VALUES (:fname,:lname,:dob,:occupation,:email,:contact)";
            $stmt = $this->db->prepare($sql);
            $stmt->bindparam(':fname', $fname);
            $stmt->bindparam(':lname', $lname);
            $stmt->bindparam(':dob', $dob);
            $stmt->bindparam(':occupation', $occupation);
            $stmt->bindparam(':email', $email);
            $stmt->bindparam(':contact', $contact);

            $stmt->execute();
            return true;

        }catch(PDOException $e){
            echo $e->getMessage();
            return false;

        }

    }


    public function editAttendee($id,$fname,$lname,$dob,$occupation,$email,$contact){

        try{
            $sql= "UPDATE `attendee` SET `attendee_id`=[value-1],`firstname`=:fname,`lastname`=:lname,`dateofbirth`=:dob,`status_id`=:occupation,`emailaddress`=:email,`contactnumber`=:contact WHERE attendee_id = :id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindparam(':id', $id);
            $stmt->bindparam(':fname', $fname);
            $stmt->bindparam(':lname', $lname);
            $stmt->bindparam(':dob', $dob);
            $stmt->bindparam(':occupation', $occupation);
            $stmt->bindparam(':email', $email);
            $stmt->bindparam(':contact', $contact);
    
            $stmt->execute();
            return true;
        }catch(PDOException $e){
            echo $e->getMessage();
            return false;

        }
       

    }

    public function getAttendees(){
        try{
            $sql = "SELECT * FROM `attendee` a inner join status s on a.status_id = s.status_id";
            $result = $this->db->query($sql);
            return $result;


        }catch(PDOException $e){
            echo $e->getMessage();
            return false;

        }
       
        
    }


    public function getAttendeeDetails($id){
        $sql = "select * from attendee a inner join status s on a.status_id = s.status_id where attendee_id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindparam(':id', $id);
        $stmt->execute();
        $result = $stmt->fetch();
        return $result;
    }


    public function deleteAttendee($id){
        try{
        $sql = "delete from attendee where attendee_id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindparam(':id', $id);
        $stmt->execute();
        return true;

        }catch(PDOException $e){
            echo $e->getMessage();
            return false;

    }
}

    public function getStatus(){
        $sql = "SELECT * FROM `status` ORDER BY `status_id` ASC";
        $result = $this->db->query($sql);
        return $result;
    }
}

?>