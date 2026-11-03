<?php
# 配列操作
// Q1
$countries = [
    '日本',
    'アメリカ',
    'カナダ',
    'ロツア',
];

echo $countries[2];

// Q2
$countries = [
    '日本',
    'アメリカ',
    'カナダ',
    'ロツア',
];

$countries[3]='ロシア';
var_dump($countries[3]);

// Q3
$countries = [
    '日本',
    'アメリカ',
    'カナダ',
    'ロツア',
];

$countries[]='中国';
var_dump($countries[4]);

// Q4
$days = [
  'sunday' => '日曜日',
  'monday' => '月曜日',
  'tuesday' => '火曜日',
  'wednesday' => '土曜日',
  'thursday' => '木曜日',
  'friday' => '金曜日',
];

foreach ($days as $key=>$day){
 if ($key == 'tuesday'){
 echo "$day";
}
}

// Q5
$days = [
  'sunday' => '日曜日',
  'monday' => '月曜日',
  'tuesday' => '火曜日',
  'wednesday' => '土曜日',
  'thursday' => '木曜日',
  'friday' => '金曜日',
];

foreach ($days as $key => $day){
if ($key == 'wednesday'){
    $days['wednesday'] ='水曜日';

var_dump($days['wednesday']);
}
}

// Q6
$days = [
  'sunday' => '日曜日',
  'monday' => '月曜日',
  'tuesday' => '火曜日',
  'wednesday' => '土曜日',
  'thursday' => '木曜日',
  'friday' => '金曜日',
];

$days['saturday'] ='土曜日';

foreach ($days as $key => $day){ 
 if ($key =='saturday'){
     echo $key.  ':' . $day;
 }
}   

# 繰り返し構文
// Q1
$array = ['a', 'b', 'c', 'd', 'e', 'f'];

foreach ($array as $key => $value){
    echo 'つめは' . "$value" . "\n";
}

// Q2
$array = ['a', 'b', 'c', 'd', 'e', 'f'];

for ($i = 0; $i < 5; $i++){
    echo 'つめは' . "$array[$i]" . "\n";
}
 

# 多次元連想配列
// Q1
$menu = [
    'カレーライス' => [
        '値段' => 1200,
        'ジャンル' => 'インド料理',
    ],
    'スパゲッティ' => [
        '値段' => 1000,
        'ジャンル' => 'イタリア料理',
    ],
    'ボルシチ' => [
        '値段' => 2000,
        'ジャンル' => 'ロシア料理',
    ],
];

foreach ($menu as $category => $details){
        $price = $details['値段'];
        $genre = $details['ジャンル'];
        
    echo "$category" .'は'. "$genre" .'で'. '値段は'. "$price".'円です。'. "\n";
}

// Q2
$menu = [
    'カレーライス' => [
        '値段' => 1200,
        'ジャンル' => 'インド料理',
    ],
    'スパゲッティ' => [
        '値段' => 1000,
        'ジャンル' => 'イタリア料理',
    ],
    'ボルシチ' => [
        '値段' => 2000,
        'ジャンル' => 'ロシア料理',
    ],
];

$menu['そば']= ['値段' => 800, 'ジャンル' => '日本料理'];

foreach ($menu as $category => $details){
        $price = $details['値段'];
        $genre = $details['ジャンル'];
        
    echo "$category" .'は'. "$genre" .'で'. '値段は'. "$price".'円です。'. "\n";
}

// Q3
$menu = [
    'カレーライス' => [
        '値段' => 1200,
        'ジャンル' => 'インド料理',
    ],
    'スパゲッティ' => [
        '値段' => 1000,
        'ジャンル' => 'イタリア料理',
    ],
    'ボルシチ' => [
        '値段' => 2000,
        'ジャンル' => 'ロシア料理',
    ],
     'そば' => [
        '値段' => 800,
        'ジャンル' => '日本料理',
    ],
];

$menu['カレーライス']['人気度']=5;
$menu['スパゲッティ']['人気度']=3;
$menu['ボルシチ']['人気度']=4;
$menu['そば']['人気度']=4;

foreach ($menu as $category => $details){
    $value = $details['人気度'];
        
    echo "$category" .':'. "$value" . "\n";
}



