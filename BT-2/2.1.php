<?php
$arr = array(
    'Viet Nam' => 'Ha Noi',
    'Albania' => 'Tirana',
    'Samoa' => 'Pago Pago',
    'Gabon' => 'librevile',
    'Nepal' => 'Kathmandu',
    'Thai Lan' => 'Bangkok',
    'Tonga' => 'Nuku alofa',
    'Togo' => 'Lome',
    'Oman' => 'Muscat',
    'Na uy' => 'Ngerulem',
    'Israel' => 'Jerusalem',
    'Iraq' => 'tehran',
    'An Do' => 'New Delhi',
    'Iran' => 'Baghdad',
    'Y' => 'Rome',
    'Nhat' => 'Tokyo',
    'Hong Kong' => 'Hong Kong',
    'Đuc' => 'Berlin',
    'Phan Lan' => 'Helsinki',
    'Ai cap' => 'Cairo'
);
#array_slice() dùng để lấy một đoạn phần tử từ mảng
#In 10 phần tử đầu tiên
function print_10($arr)
{
    print_r(array_slice($arr, 0, 10));
}
print_10($arr);
echo'<br>';
echo'<br>';
#In phần tử thứ 5 đến 15
function print_5_15($arr)
{
    print_r(array_slice($arr, 4, 10));
}
print_5_15($arr);
echo'<br>';
echo'<br>';
#Xóa phần tử thứ 2 trong mảng
function delete($arr)
{
    array_splice($arr, 1, 1);
    print_r($arr);
}
delete($arr);
echo'<br>';
echo'<br>';
#Sắp xếp theo thứ tự tăng dần của tên thủ đô
function sort_value($arr)
{
    asort($arr);
    print_r($arr);
}
sort_value($arr);
echo'<br>';
echo'<br>';
#Sắp xếm theo thứ tự giảm dần của tên quốc gia
function sort_key($arr)
{
    krsort($arr);
    print_r($arr);
}
sort_key($arr);
echo'<br>';
echo'<br>';
#Chuyển tên thủ đô và quốc gia thành chữ in hoa
function capitalization($arr){
    $arr = array_change_key_case($arr,1);
    $arrflip = array_flip($arr);
    $arr = array_change_key_case($arrflip,1);
    $arrflip = array_flip($arr);
    print_r($arrflip);
}
capitalization($arr);
echo'<br>';
echo'<br>';
#Bảng ZIPCODE
$arr2 = array(
    'Ha Noi' => 10000,
    'Tirana'=> 20000,
    'Pago Pago' => 30000,
    'librevile'=> 40000,
    'Kathmandu'=> 50000,
    'Bangkok'=>60000,
    'Nuku alofa'=>70000,
    'Lome'=> 80000,
    'Muscat'=> 90000,
    'Ngerulem'=> 10001,
    'Jerusalem'=> 20001,
    'tehran' => 30001,
    'New Delhi'=> 40001,
    'Baghdad'=> 50001,
    'Rome'=> 60001,
    'Tokyo'=> 70001,
    'Hong Kong'=> 80001,
    'Berlin'=> 90001,
    'Helsinki'=> 11111,
    'Cairo'=> 22222
);
#Gộp mảng $arr với $arr2
function merge($arr, $arr2)
{
    foreach ($arr2 as $key => $value) {
        $k = array_search($value, $arr2);

        $arr[array_search($key, $arr)] = [$k, $value];
    }
    print_r($arr);
}
merge($arr, $arr2);
