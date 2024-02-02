<?php
function dd($date){
    echo "<pre>";
    print_r($date);
    echo "</pre>";
}
$mobileArr = [
    [
        'id' => 1,
        'name' => 'iphone10',
        'price' => 10000,
        'location'=> ['台北','台中']
    ],
    [
        'id' => 2,
        'name' => 'iphone11',
        'price' => 20000,
        'location'=> ['台北','台中']
    ],
    [
        'id' => 3,
        'name' => 'iphone12',
        'price' => 30000,
        'location'=> ['台北','台中']
    ],
    [
        'id' => 4,
        'name' => 'iphone13',
        'price' => 40000,
        'location'=> ['台北','台中','高雄']
    ],
];
echo json_encode($mobileArr);
// $mobileArr = [
//     's1' => 'amy',
//     's2' => 'bob',
//     's3' => 'cat',
// ];
//  print_r($mobile); 