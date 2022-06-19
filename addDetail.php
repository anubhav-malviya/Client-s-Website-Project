<?php
    include ('database/DBController.php');
    $db = new DBController();

    if (isset($_POST['pname']) && isset($_POST['mobilenumber']) && isset($_POST['address'])) {

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $pname = validate($_POST['pname']);
    $mobilenumber = validate($_POST['mobilenumber']);
    $address = validate($_POST['address']);
    if (isset($_GET['city'])) {
        $city = $_GET['city'];
    }

//    echo $city;

    if (empty($pname)) {
        header("Location: addDetailForm.php?error=Name is required");
        exit();
    }else if(empty($mobilenumber)){
        header("Location: addDetailForm.php?error=Mobile Number is required");
        exit();
    }else if(empty($address)){
        header("Location: addDetailForm.php?error=Address is required");
        exit();
    }else{

        $sql = "INSERT INTO `peoples` (`people_name`, `people_mob`, `people_address`, `people_city`) VALUES
        ('$pname', '$mobilenumber', '$address', '$city')";

//        $result = mysqli_query($db->con, $sql);
//

        if(mysqli_query($db->con, $sql)) {
            echo "<script>alert('new record inserted')</script>";
            header("Location: addDetailForm.php?msg=Detail Added Successfully");
            exit();

        } else {
            echo "error :".mysqli_error($db->con);
        }
    }

}else{
    header("Location: addDetailForm.php");
    exit();
}

