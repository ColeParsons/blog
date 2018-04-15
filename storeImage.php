<?php

$db = mysqli_connect("localhost",
    "root",
    "",
    "blog");
require_once("nbbc/nbbc.php");

$bbcode = new BBCode;

$sql = "SELECT * FROM posts ORDER BY pic DESC";

$res = mysqli_query($db, $sql) or die(mysqli_error());



$img = ['pic'];










if(mysqli_num_rows($res) > 0) {
    while ($row = mysqli_fetch_assoc($res)) {
        $category = $row['category'];
        $id = $row['id'];
        $title = $row['title'];
        $content = $row['content'];
        $date = $row['date'];
        $pic = $row['pic'];



        $output = $bbcode->Parse($content);



        if($category=="poetry" || $category=="Poetry"){
            $poets .= "<a class='demo shareSelector' <a class='eh3' style='padding:200px;' href='javascript:;' ><h2 class='eh4' href=''>Category:</h2><h2></h2><h3 >$date</h3><h2 class='eh4'></h2></a></a>$pic</div></div>
<hr>";


        }
    }

}

?>