<!DOCTYPE html>
<html>
<head>
  <title>Working with the database </title>
</head>
<body>
  <h1>Registration Form</h1>
  <h3>Saving Data into the database</h3>
  <form action="connect.php" method="POST">
    <label>Firstname</label>
    <input type="text" placeholder="Enter firstname" name="firstname" required ="true">
    <br>
    <label>Lastname</label>
    <input type="text" placeholder="Enter lastname" name="lastname" required ="true">
    <br>
    <label>Email</label>
    <input type="email" placeholder="Enter email" name="email" required ="true">
    <br>
    <label>Phone</label>
    <input type="phone" placeholder="Enter Phone" name="phone" required ="true">
    <br> 
    <button type="submit">Save</button>
  </form> 
  <style>
body {
   text-align: center;
   padding-top: 20px;
   background-color: blue;
 }

h3 {
  color: white;
}
</style>
</body>
</html>
