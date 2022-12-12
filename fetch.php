<h3>Fetching Data from database</h3>
<table align="center" style="width:300px;">
<tr>
    <th>id</th>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>Email</th>
    <th>Phone</th>
</tr>

<?php
//database connection
$conn = new mysqli("localhost","root",'',"school");
//checking for errors
if($conn->connect_error) {
       die("Error in DB connection: ".$conn->connect_errno." : ".$conn->connect_error);    

}

$select = "SELECT * FROM `students` ORDER BY id";

$result = $conn->query($select);

//displaying data from MariaDB on a browser using while loop

while($row = mysqli_fetch_array($result)) {  
         ?> 
         <tr>  
              <td><?php echo $row["id"]; ?></td>  
              <td><?php echo $row["firstname"]; ?></td>  
              <td><?php echo $row["lastname"]; ?></td> 
              <td><?php echo $row["email"]; ?></td> 
              <td><?php echo $row["phone"]; ?></td> 
         </tr>  
         <?php  
         }  
         ?> 
    </table>
