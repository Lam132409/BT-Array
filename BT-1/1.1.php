<?php
$arr = array(1,2,3,4,5,6,8,9,10,11,12,13,14,15,16,17,18,19,20);
$t = [];

#In ra 5 phần tử đầu tiên
for ($i=0; $i<5; $i++){
    echo $t = $arr[$i];
}

echo '<br>';

$i = 0;
while ($i<5){
    echo $t = $arr[$i];
    $i++;
}

echo '<br>';

#Tìm giá trị lớn nhất
$max=$arr[0];
for ($i=0; $i<count($arr); $i++){
    if($arr[$i] > $max){
        $max = $arr[$i];
    }
}
echo 'giá trị lớn nhất là ' .$max;

echo '<br>';

#Tìm giá t rị nhỏ nhất
$min = $arr[0];
for ($i=0; $i<count($arr); $i++){
    if($arr[$i] < $min){
        $min = $arr[$i];
    }
}
echo 'giá trị nhỏ nhất là ' .$min;

echo '<br>';

#Xóa phần tử thứ 2 trong mảng
unset($arr[1]);
print_r($arr);

echo '<br>';

#Thếm 1 số bất kỳ vào vị trí thứ 4
array_splice($arr,3,1,12);
print_r($arr);