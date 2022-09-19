<?php 
include "connection.php";

$query = "SELECT * FROM tb_news";
$result = $connect -> query($query);
    if($result->num_rows>0)
    {
        $res['isSuccess'] = true;
        $res['message'] = "Successfully get data";
        $res['data'] = array();
        while($row = $result->fetch_assoc()){
            $res['data'][] = $row;
        }
    }
    else{
        $res['isSuccess'] = false;
        $res['message'] = "Error when get data";
        $res['data'] = null;
    }
    echo json_encode($res);
?>
