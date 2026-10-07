<?php
// Q1 変数と文字列
  $name = '安藤';

    echo '私の名前は「'."$name".'」です。';
    
// Q2 四則演算
  $num = 5 * 4;

    echo $num . "\n";
    echo $num / 2;

// Q3 日付操作
    echo '現在時刻は、'.
    date ("Y年m月d日　H時i分s秒").'です。'

// Q4 条件分岐-1 if文
  $device = 'mac';
    
    if ($device == 'windows') {
      echo '使用OSは、windowsです。';
    }
    if ($device == 'mac') {
      echo '使用OSは、macです。';
      
    }else {
      echo 'どちらでもありません。';
    }

// Q5 条件分岐-2 三項演算子
  $age = 24;
    $massege = ($age < 18) ?  '「未成年です。」': '「成人です。」';
      echo $massege ;

// Q6 配列
  $array = [
    '東京都',
    '神奈川県',
    '埼玉県',
    '栃木県',
    '千葉県',
    '茨城県',
    '群馬県'
    ];
    
    echo "$array[3]".'と'."$array[4]".'は関東地方の地道府県です。';

// Q7 連想配列-1
  $name = [
    '東京都',
    '神奈川県',
    '埼玉県',
    '栃木県',
    '千葉県',
    '茨城県',
    '群馬県'
    ];

  $x = [
    '東京都' => '新宿区',
    '神奈川県' => '横浜市',
    '埼玉県'=> 'さいたま市',
    '栃木県'=> '宇都宮市',
    '千葉県'=> '千葉市',
    '茨城県'=> '水戸市',
    '群馬県'=> '前橋市'];

  
    foreach ($x as $name => $city){
      echo "$city" ."\n";
    };

// Q8 連想配列-2
  $name = [
    '東京都',
    '神奈川県',
    '埼玉県',
    '栃木県',
    '千葉県',
    '茨城県',
    '群馬県'
    ];

  $x = [
    '東京都' => '新宿区',
    '神奈川県' => '横浜市',
    '埼玉県'=> 'さいたま市',
    '栃木県'=> '宇都宮市',
    '千葉県'=> '千葉市',
    '茨城県'=> '水戸市',
    '群馬県'=> '前橋市'];

    
    for ($i = 0; $i < 6; $i++){
      if ($name[$i] == '埼玉県'){
        echo $name[$i] . 'の県庁所在地は、' . $x[$name[$i]] . 'です。';
      }
    };

// Q9 連想配列-3
  $name = [
    '東京都',
    '神奈川県',
    '埼玉県',
    '栃木県',
    '千葉県',
    '茨城県',
    '群馬県',
    '愛知県',
    '大阪府'
    ];

  $east = [
    '東京都' => '新宿区',
    '神奈川県' => '横浜市',
    '埼玉県'=> 'さいたま市',
    '栃木県'=> '宇都宮市',
    '千葉県'=> '千葉市',
    '茨城県'=> '水戸市',
    '群馬県'=> '前橋市',
    ];

    
  for ($i = 0; $i < 9; $i++){
        
    if ($name[$i] == '愛知県' || $name[$i] == '大阪府'){
       echo $name[$i] . 'は関東地方ではありません。'."\n";
    } else {
      echo $name[$i] . 'の県庁所在地は、' . $east[$name[$i]] . 'です。'."\n";
      }
  }

// Q10 関数-1
  function SayHi($name){
    
    return $name . 'さん、こんにちは。';
  }
    echo SayHi ('金谷')."\n";
    echo SayHi ('安藤')

// Q11 関数-2
  function calcTaxInPrice($price){
    return $price *  1.1;
  }
    $price = 1000;
    $TaxInPrice = calcTaxInPrice($price);
    
    echo $price . "円の商品の税込み価格は" . $TaxInPrice . "円です。";

// Q12 関数とif文
  function distinguishNum($num){
    
    if ($num % 2 == 0){
        
        return $num . "は偶数です。";
    } else {
        return $num . "は奇数です。";
    }
  }   
    echo distinguishNum(11)."\n";
    echo distinguishNum(24);

// Q13 関数とswitch文
  function evaluateGrade($grade){
    
    switch ($grade) {
        case 'A':
        case 'B':
            return "合格です。";
            break;
            
        case 'C':
            return "合格ですが追加課題があります。";
            break;
            
        case 'D':
            return "不合格です。";
            break;
         
        default :
            return "判定不明です。講師に問い合わせてください。" ;
            break;
    }
  }        
     echo evaluateGrade("A") . "\n";
     echo evaluateGrade("F");

?>