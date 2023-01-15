
<?php
require_once("mysql.php");
$mysql = new mysqli($host, $user, $passwort,$name);

$stmt="SELECT * FROM users INNER JOIN reservierung ON users.id=reservierung.user_id";
//$stmt="SELECT * FROM users, reservierung WHERE users.id=reservierung.user_id";
$result=$mysql->query($stmt);
?>
<table border="1">
<th>Vorname</th>
<th>Nachname</th>
<th>Username </th>

<?php

while($display=$result->fetch_array()){
    echo "<tr>";
    echo "<td>" . $display["vorname"] . "</td>";
    echo "<td>" . $display["nachname"] . "</td>";
    echo "<td>" . $display["username"] . "</td>";
    
    echo "</tr>"; 

}

?>
</table>