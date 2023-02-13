<form action="saveaddpeople.php" method="post">
    First Name:<input type="text" name="FName"><br>
    Last Name:<input type="text" name="LName" ><br>
    Age:<input type="text" name="Age"><br>
    Sex:<select name="Sex">
            <option value="M">Male</option>
            <option value="F">Female</option>
        </select><br>
    Marry Status:<select name="MarryStatus">
            <option value="S" >Single</option>
            <option value="M" >Married</option>
        </select><br>
    <input type="submit" value="Add">
</form>
