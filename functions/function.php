<?php
function loopCategory() {

$link = mysqli_connect('localhost', 'root', '', 'nztrader') or die("Error " . mysqli_error($link)); 

//consultation: 

$query = "SELECT category FROM categories" or die("Error in the consult.." . mysqli_error($link)); 

//execute the query. 

$result = $link->query($query); 

//display information: 

while($row = mysqli_fetch_array($result)) { 
    echo '<option value="' . $row["category"] . '">' . $row["category"] . '</option>'; 
}

}
?>