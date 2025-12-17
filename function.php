<?php
include "koneksi.php";

function view($query){
    global $con;
    $query2 = mysqli_query($con, $query);
    $wadah = [];
    while($row = mysqli_fetch_assoc($query2)){
        $wadah[] = $row;
    }
    
    return $wadah;
}
?>