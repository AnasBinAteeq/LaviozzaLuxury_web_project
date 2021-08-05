<?php
include ("connection.php");

// $price1="SELECT * FROM `roominfo` WHERE `roomtype` LIKE 'Regal Suite'";

// fetch results from DB
function fetch($conn,$query,$field){

    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){
            $price=$row[$field];
            return $price;
        }
    }
    
    else{
        return 0;
    }
}

// $x= pricefetch($conn,$price1,'priceperday');
// echo $x;

// Unique ID generator
function idgen($chr){
	$number = uniqid();
	$varray = str_split($number);
	$len = sizeof($varray);
	$id = array_slice($varray, $len-$chr, $len);
	$id = implode(",", $id);
	$id = str_replace(',', '', $id);

    return $id;
}

// $book = idgen(6);
// echo $book;

function dayscount($date1, $date2)
            {
                $date1_ts = strtotime($date1);
                $date2_ts = strtotime($date2);
                $diff = $date2_ts - $date1_ts;
                $days = round($diff / 86400);
                $days = $days+1;
                return $days;
            }
?>