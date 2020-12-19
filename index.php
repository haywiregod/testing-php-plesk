<?php
include('includes/db.php');
include('product/ProductClass.php');
$result = $conn->query('SELECT * FROM `products`'); 
var_dump($result);
if (!$result) die('Couldn\'t fetch records'); 
$num_fields = mysqli_num_fields($result); 
$headers = array(); 
for ($i = 0; $i < $num_fields; $i++) 
{     
       $headers[] = mysqli_field_name($result , $i); 
} 
$fp = fopen('php://output', 'w'); 
if ($fp && $result) 
{     
       header('Content-Type: text/csv');
       header('Content-Disposition: attachment; filename="export.csv"');
       header('Pragma: no-cache');    
       header('Expires: 0');
       fputcsv($fp, $headers); 
       while ($row = mysqli_fetch_row($result)) 
       {
          fputcsv($fp, array_values($row)); 
       }
die; 
} 
?>
