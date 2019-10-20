<?php 

function getAlldata($db,$table_name,$field,$value2){
	$qry = "SELECT * FROM $table_name WHERE $field = $value2";
}

if ($result = mysqli_query($dbcon, $qry)) {

        while($row = mysqli_fetch_assoc($res)) {

            $result[] = $row;

        }
        $result['total'] = mysqli_num_rows($res);
    } else {
        $result['mysqli_error'] = mysqli_error($db);
    }
    return $result;



?>