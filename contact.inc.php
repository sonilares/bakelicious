<?
    $host="localhost";
    $uname="root";
    $password="";
    $db="demo";

    mysqli_connect($host,$user,$password);
    mysqli_select_db($db);
    
    $Emri = $_POST['Emri'];
    $Mbiemri = $_POST['Mbiemri'];
    $Email = $_POST['Email'];
    $Phone = $_POST['Phone'];
    $City = $_POST['City'];
    $Terms = $_POST['Terms'];
    $Message = $_POST['Message'];

    $conn = mysqli_connect($db);
    
    $sql = "Insert Into contact (ID,Emri,Mbiemri,Email,Phone,City,Terms,Mesazhi) 
            values('$Emritxt','$Mbiemritxt','$Email','$Phone','$City','$Terms','$Message');";
    mysqli_query($conn, $sql);
    header("location : ../contact.php?signup=sucess");
?>