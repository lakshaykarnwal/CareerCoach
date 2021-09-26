 <!--the following backend is not been used in our project,feature of netlify is used for backend-->
<?php
$firstname = $_POST["first_name"];
$lastname = $_POST["last_name"];
$phone = $_POST["phone"];
$email =  $_POST["email"];
$dob =  $_POST["DOB"];
$insti =  $_POST["institute"];
$gender =  $_POST["gender"];
if(!empty($firstname))
{if(!empty($lastname))
    {
        $host = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "form";
        //creating connection
        $conn = new mysqli($host,$dbusername,$dbpassword,$dbname);
        if(mysqli_connect_error())
        {
            die('Connect Error ('.mysqli_connect_error().')'.mysqli_connect_error());
        }
        else
        {
            $sql = "INSERT into reg(first_name,last_name,phone,email,dob,institute,gender) VALUES('$firstname','$lastname','$phone','$email','$dob','$insti','$gender')";
            if($conn->query($sql))
            {
                echo "data is added";    
                header('location: form.php');  
                $success = "Registered successfully";          
            }
            else
            {
                echo "error :".$sql."<br>".$conn->error;
            }
            $conn->close();
        }
    
    }
    else
    {
        echo "lastname is empty ";
        die();
    }
    

}
else
{
    echo "firstname is empty ";
    die();
}
?>