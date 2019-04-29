<?php
    require('con_db.php');
    $sql_text = "SELECT * FROM tbl_test WHERE keyword LIKE 'a'";
    $query = mysqli_query($conn,$sql_text);
    while($objresult = mysqli_fetch_assoc($query))
    {
        echo $objresult['answer']."<br>";
    }
?>