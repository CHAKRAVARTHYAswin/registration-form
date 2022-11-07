 <?php
 $firstname       = $_POST['firstname'];
 $lastname        = $_POST['lastname'];
 $email           = $_POST['email'];
 $phonenumber     = $_POST['phonenumber'];
 $password        = $_POST['password'];
 
 
 $conn = mysqli_connect('localhost','root','','','test1');
 {
 
     $stmt = $conn->prepare("insert into registration1(firstname, lastname, email, phonenumber, password  )value(?,?,?,?,?)");
     $stmt->bind_param(" sssis",$firstname, $lastname, $email, $phonenumber, $password  );
     $stmt->execute();
     $stmt->execute();
     echo"registration successfull...";
     $stmt->close();
     $conn->close();
 }
 
 
 ?>

