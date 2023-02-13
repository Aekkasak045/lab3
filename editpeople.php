<?php
require ("Connect.php");

$id=$_GET["id"];
$sql = "SELECT * FROM survey WHERE ID=$id";
$result = $conn->query($sql);

if($result->num_rows > 0){
    $row = $result->fetch_assoc();

?>
<form action="savepeople.php" method="post">
    <input type="hidden" name="ID" value="<?php print($row["ID"])?>">
    First Name:<input type="text" name="FName" value="<?php print($row["FName"]); ?>"><br>
    Last Name:<input type="text" name="LName" value="<?php print($row["LName"]); ?>"><br>
    Age:<input type="text" name="age" value="<?php print($row["Age"]); ?>"><br>
    Sex:<select name="Sex">
            <option value="M" <?php if($row["Sex"]=="M") print("selected");?>>Male</option>
            <option value="F" <?php if($row["Sex"]=="F") print("selected");?>>Female</option>
        </select><br>
    Marry Status:<select name="MarryStatus">
            <option value="S" <?php if($row["MarryStatus"]=="S") print("selected");?>>Single</option>
            <option value="M" <?php if($row["MarryStatus"]=="M") print("selected");?>>Married</option>
        </select><br>
    <input type="submit" value="edit">
</form>
<?php
}
?>