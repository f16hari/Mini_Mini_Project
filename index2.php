<?php
include("connection.php");
error_reporting(0);
?>
<?php
   if(isset($_POST['InputText']))
   {
       $text = mysqli_real_escape_string($db,$_POST['InputText']);
       if(!empty($text))
       {
           $sql1="INSERT INTO bstt1 (msg) VALUES ('$text')";
           $result=$db->query($sql1);
       }
   }

   if(isset($_POST['SearchText']))
   {
       $stext = mysqli_real_escape_string($db,$_POST['SearchText']);
       if(!empty($stext))
       {
           $sql2="SELECT * FROM bstt1 where uuid=4";
           $result = $db->query($sql2);
           while($row = $result->fetch_assoc())
           {
                echo $row['msg']."<br>";

           }
        
       }
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action="" method="post">
        <input type="text" name="InputText">
        <input type="submit" value="INSERT">
    </form>

     <form action="" method="post">
        <input type="text" name="SearchText">
        <input type="submit" value="GO">
    </form>
</body>
</html>

