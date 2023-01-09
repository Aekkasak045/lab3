<!DOCTYPE html>
<html>

<body>
    <?php
    $name =$_GET["name"];
    $age=$_GET["age"];
    $gender=$_GET["gender"];
    $status=$_GET["status"];
    if ($age < "15" && $gender == "male"){
        $titaltxt="ดช.";
    }else if($age > "14" && $gender == "male"){
        $titaltxt="นาย";
    }else if($age < "15" && $gender == "female"){
        $titaltxt="ดญ.";
    }else if($age > "14" && $gender == "female" && $status == "single"){
        $titaltxt="นางสาว";
    }else if($age > "14" && $gender == "female" && $status == "married"){
        $titaltxt="นาง";
    }

    echo "ชื่อ:".$titaltxt.$name."<br>";
    echo "อายุ:".$age."<br>";
    echo "เพศ:".$gender."<br>";
    echo "สถานะ:".$status."<br>";
    ?>
</body>

</html>