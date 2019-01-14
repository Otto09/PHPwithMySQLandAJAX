<?php
$mysqli = new mysqli("127.0.0.1", "root", "Blokkflote1", "animals", 3307);
if($mysqli->connect_error) {
 exit('Could not connect');
}

$sql = "SELECT Id, Species, Amount, Price, Owner FROM animals
  WHERE Id = ?";

$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($id, $species, $amount, $price, $owner);
$stmt->fetch();
$stmt->close();

echo "<table>";
echo "<tr>";
echo "<th>Id</th>";
echo "<td>" . $id . "</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Species</th>";
echo "<td>" . $species . "</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Amount</th>";
echo "<td>" . $amount . "</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Price</th>";
echo "<td>" . $price . "</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Owner</th>";
echo "<td>" . $owner . "</td>";
echo "</tr>";
echo "</table>";
?>
