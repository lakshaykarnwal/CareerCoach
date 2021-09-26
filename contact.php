 <!--the following backend is not been used in our project,feature of netlify is used for backend-->
<?php
$fullname = $_POST["full_name"];
$email =  $_POST["e-mail"];
$msg =  $_POST["message"];
if(!empty($fullname))
{if(!empty($email))
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
            $sql = "INSERT into cont(fullname,email,msg) VALUES('$fullname','$email','$msg')";
            if($conn->query($sql))
            {
                echo "data is added";      
                header('location: form.php'); 
                          
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