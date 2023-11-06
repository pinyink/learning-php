<?php

require_once('connect.php');

$result = $mysqli->query('select * from MyGuests');
if ($result->num_rows >= 1) {
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
} else {
    echo "no data result";
}