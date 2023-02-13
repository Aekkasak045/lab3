<?php
require("Connect.php");

if(isset($_GET["keyword"])){
    $keyword=$_GET["keyword"];
}else{
    $keyword="";
}

if($keyword!=""){
    $sql = "SELECT ID, FName, LName , Age, Sex, MarryStatus FROM survey WHERE FName LIKE '%$keyword%' OR LName LIKE '%$keyword%'";
}else{
    $sql = "SELECT ID, FName, LName , Age, Sex, MarryStatus FROM survey";
}
?>
<form action="list_people.php" method="get">
    Search:<input type="text" name="keyword" value="<?php print($keyword);?>">
    <input type="submit" value="Search">
</form><br>
<?php
require ("Connect.php");

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    if($row["Sex"] == "M"){
        if($row["Age"]>=15){
            echo "ID: " . $row["ID"]. " - Name:นาย" . $row["FName"]. " " . $row["LName"];
        }else{
            echo "ID: " . $row["ID"]. " - Name:ดช." . $row["FName"]. " " . $row["LName"];
        }
    }
    else{
        if($row["Age"]>14){
            if($row["MarryStatus"]=="S"){
                echo "ID: " . $row["ID"]. " - Name:นางสาว" . $row["FName"]. " " . $row["LName"];
            }
            else{
                echo "ID: " . $row["ID"]. " - Name:นาง" . $row["FName"]. " " . $row["LName"];
            }

        }else{
            echo "ID: " . $row["ID"]. " - Name:ดญ." . $row["FName"]. " " . $row["LName"];
        }
    }
    echo "<a href='editpeople.php?id=".$row["ID"]."'> Edit</a> <a href='deletepeople.php?id=".$row["ID"]."' onclick=\"return confirm('Are you sure?')\".> Delete</a><br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
<br>
<a href="add_people.php">Add People</a>