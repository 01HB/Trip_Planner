<?php 
    require_once "db.php";

    function login($email, $password){
        $conn = getConnection();
		$sql = "select * from managers where memail='{$email}' and mpassword='{$password}'";
		$result = mysqli_query($conn, $sql);
		$count = mysqli_num_rows($result);

        if($count == 1){
            return true;
        }else{
            return false;
        }
    }


    function signup($name, $pass, $email, $contact, $dob, $gender, $address, $exp, $website){
        $conn = getConnection();
		$sql = "insert into managers values('', '{$name}', '{$pass}', '{$email}', '{$contact}', '{$dob}', '{$gender}', '{$address}', '{$exp}', '{$website}')";
        
        if(mysqli_query($conn, $sql)){
            return true;
        }else{
            return false;
        }
    }

    function updateProf($name, $email, $cont, $dob, $gender, $address, $exp, $website){
        $conn = getConnection();
		$sql = "UPDATE managers SET musername='{$name}', mcontact='{$cont}', mdob='{$dob}', mgender='{$gender}', maddress='{$address}', mexperience='{$exp}', mwebsites='{$website}' WHERE memail='{$email}'";        

        if(mysqli_query($conn, $sql)){
            return true;
        }else{
            return false;
        }
    }

    function updateProfImg($filename, $email){
        $conn = getConnection();
		$sql = "UPDATE managers SET mn_image ='{$filename}' WHERE memail='{$email}'";
		
        if(mysqli_query($conn, $sql)){
            return true;
        }else{
            return false;
        }
    }

?>