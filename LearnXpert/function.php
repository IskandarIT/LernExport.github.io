<?php
include("db.php") ;
function showMenu(){
    global  $conn;
    $sql="Select*from menus";
    $result=$conn->query($sql);
    if ($result->num_rows>0){
        while ($row=$result->fetch_assoc()){
            echo '<li class="navbar-item wow bounce silka"><a href="'.$row["link"].'">'.$row["title"].'</a></li>';
        }
    }
}

function showLearn( $field=False)
{
    global $conn;
    $sql = "Select*from learn ";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    switch ($field) {
        case "title";
            echo $row["title"];
            break;
        case "text";
            echo $row["text"];
            break;
        default:
            echo "Eror";
    }
}

function showabout($field=False){
    global  $conn;
    $sql="Select*from about";
    $result=$conn->query($sql);
    $row = $result->fetch_assoc();
    switch ($field) {
        case "title";
            echo $row["title"];
            break;
        case "text";
            echo $row["text"];
            break;
        case "img";
            echo $row["img"];
            break;
        default:
            echo "Eror";
    }

}


?>
