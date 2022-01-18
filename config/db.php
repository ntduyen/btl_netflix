<?php
    $host='localhost';
    $username='root';
    $password='';
    $dbname = "nextflix";
    $conn=mysqli_connect($host,$username,$password,"$dbname");
      if(!$conn){
          die('Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ:' .mysql_error());
        }
?>