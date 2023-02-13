<?php
require ("Connect.php");
$sql = "SELECT ID, FName, LName , Age, Sex, MarryStatus FROM survey";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    if($row["Sex"] == "M"){
        if($row["Age"]>=15){
            echo "ID: " . $row["ID"]. " - Name:นาย" . $row["FName"]. " " . $row["LName"]. "<a href='editpeople.php?id=".$row["ID"]."'> Edit</a><br>";
        }else{
            echo "ID: " . $row["ID"]. " - Name:ดช." . $row["FName"]. " " . $row["LName"]."<a href='editpeople.php?id=".$row["ID"]."'> Edit</a><br>";
        }
    }
    else{
        if($row["Age"]>14){
            if($row["MarryStatus"]=="S"){
                echo "ID: " . $row["ID"]. " - Name:นางสาว" . $row["FName"]. " " . $row["LName"]. "<a href='editpeople.php?id=".$row["ID"]."'> Edit</a><br>";
            }
            else{
                echo "ID: " . $row["ID"]. " - Name:นาง" . $row["FName"]. " " . $row["LName"]. "<a href='editpeople.php?id=".$row["ID"]."'> Edit</a><br>";
            }

        }else{
            echo "ID: " . $row["ID"]. " - Name:ดญ." . $row["FName"]. " " . $row["LName"]. "<a href='editpeople.php?id=".$row["ID"]."'> Edit</a><br>";
        }
    }
  }
} else {
  echo "0 results";
}
$conn->close();
?>
<br>
<a href="add_people.php">Add People</a>