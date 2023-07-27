<body>
<?php
  $link = mysqli_connect("localhost", "root", "");
  mysqli_select_db("login");
  $sql = "SELECT image FROM images WHERE id=38";
  $result = mysql_query("$sql");
  mysql_close($link);

?>
<img src="" width="175" height="200" />
</body>