<?php 
$mang = array(1, 7,2,3,9,100,55,33); 
  
$count = count($mang);
  
// Sắp xếp mảng
for ($i = 0; $i < ($count - 1); $i++)
{
    for ($j = $i + 1; $j < $count; $j++) 
    {
        if ($mang[$i] > $mang[$j]) 
        {
            $so_dem = $mang[$j];
            $mang[$j] = $mang[$i];
            $mang[$i] = $so_dem;
        }
    }
}

print_r($mang);
 ?>
