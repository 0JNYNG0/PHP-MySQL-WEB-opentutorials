<?php
$conn = mysqli_connect(
  'localhost', 
  'root', 
  'wnsdud727m', 
  'opentutorials'
);
// 1 row
echo "<h1>Single Row</h1>";
$sql = "SELECT * FROM topic WHERE id = 11";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
echo '<h2>'.$row['title'].'</h2>';
echo $row['description'];


// all row
echo "<h1>Multi Row</h1>";
$sql = "SELECT * FROM topic";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_array($result)) {
  echo '<h2>'.$row['title'].'</h2>';
  echo $row['description'];
}
?>