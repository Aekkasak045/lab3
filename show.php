<!DOCTYPE html>
<html>

<body>
    <?php
    $name =$_GET["name"];
    $age=$_GET["age"];
    $gender=$_GET["gender"];
    $status=$_GET["status"];
    if ($age < "15" && $gender == "male" && $status == "single"){
        $titaltxt="ดช.";
        $gender = "เพศชาย";
        $status="โสด";
    }else if($age > "14" && $gender == "male" && $status == "single"){
        $titaltxt="นาย";
        $gender = "เพศชาย";
        $status="โสด";
    }else if($age > "14" && $gender == "male" && $status == "married"){
        $titaltxt="นาย";
        $gender = "เพศชาย";
        $status="แต่งงานแล้ว";
    }else if($age < "15" && $gender == "male" && $status == "married"){
        $titaltxt="ดช.";
        $gender = "เพศชาย";
        $status="แต่งงานแล้ว";
    }else if($age < "15" && $gender == "female" && $status == "single"){
        $titaltxt="ดญ.";
        $gender = "เพศหญิง";
        $status="โสด";
    }else if($age > "14" && $gender == "female" && $status == "single"){
        $titaltxt="นางสาว";
        $gender = "เพศหญิง";
        $status="โสด";
    }else if($age > "14" && $gender == "female" && $status == "married"){
        $titaltxt="นาง";
        $gender = "เพศหญิง";
        $status="แต่งงานแล้ว";
    }else if($age < "15" && $gender == "female" && $status == "married"){
        $titaltxt="ดญ.";
        $gender = "เพศหญิง";
        $status="แต่งงานแล้ว";
    }
    echo "<font style='font-size:24px'>ข้อมูลของคุณ</font>"."<br>";
    echo "ชื่อ:".$titaltxt.$name."<br>";
    echo "อายุ:".$age."<br>";
    echo "เพศ:".$gender."<br>";
    echo "สถานะ:".$status."<br>";
    ?>
</body>

</html>