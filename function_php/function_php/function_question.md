# 関数

## 問題 1:


<!-- 商品名を受け取り、これは、〇〇です！ というメッセージを返す関数 returnProductInfo を作成してください。〇〇には、関数の外から関数内に渡された商品名が入ります。 -->


function returnProductInfo($productName){
echo $info;
}
$productName = "Tシャツ";
echo 'これは、'. "$productName". 'です！';


## 問題 2:

<!-- 商品名と価格を受け取り、〇〇の価格は△△円です。 というメッセージを返す関数 displayPrice を作成してください。〇〇には商品名、△△には価格が入ります。 -->

function displayPrice($productName, $productPrice){
    echo "$productName" . 'の価格は' . "$productPrice" . '円です！';
}

displayPrice('マグカップ', 800);


## 問題 3:

<!-- 商品名と価格を受け取り、税込み価格（消費税率10%とします）を計算して返す関数 calculateTaxedPrice を作成してください。 -->

function calculateTaxedPrice($praice){
    return $praice * 1.1;
}

$praice = 800;
$intaxprice = calculateTaxedPrice($praice);
echo '税込み価格' . "$intaxprice" . '（消費税率10％とします）';


## 問題 4:

<!-- 商品名、価格、個数を受け取り、合計金額（税込み）を計算して返す関数 calculateTotalPrice を作成してください。問題3の calculateTaxedPrice 関数を再利用してください。 -->

function calculateTaxedPrice($praice){
    return $praice * 1.1;
}
function calculateTotalPrice($productname, $praice, $x){
    $total = $praice * $x;
    return  calculateTaxedPrice($total); 
}

$productname = "マグカップ";
$intaxpraice = calculateTotalPrice($productname, 800, 5);
echo $productname . 'の税込み価格' . $intaxpraice. '（消費税率10％とします）';


## 問題 5:

<!-- 複数の商品情報を配列で受け取ります。各商品情報は連想配列で、name（文字列）、price（整数）、quantity（整数）のキーを持ちます。全ての商品の合計金額（税込み）を計算して返す関数 calculateTotalOrderPrice を作成してください。問題4の calculateTotalPrice 関数を再利用してください。 -->



function calculateTaxedPrice($price){
    return $price * 1.1;
}
function calculateTotalPrice($productname, $price, $x){
    $total = $price * $x;
    return  calculateTaxedPrice($total); 
}

$products = [
    [
    "productname" => "マグカップ",
    "price" => 800, 
    "x" => 5
    ],
    [ 
    "productname" => "カトラリーセット",
    "price" => 1500, 
    "x" => 5,
    ]
];


function calculateTotalOrderPrice($products){
    $total = 0;
    
    foreach ($products as $product){
        $total += calculateTotalPrice(
            $product["productname"],
            $product["price"],
            $product["x"]
            );
    }
    return $total;
}
    $result = calculateTotalOrderPrice($products);
    echo "注文合計金額（税込）：" . $result . "円";


## 問題 6 (挑戦問題):

<!-- 問題5の関数 calculateTotalOrderPrice を拡張して、もし合計金額が5000円以上の場合、送料500円を追加する機能を追加してください。送料を含めた最終的な合計金額を返すようにしてください。 -->

function calculateTaxedPrice($price){
    return $price * 1.1;
}
function calculateTotalPrice($productname, $price, $x){
    $total = $price * $x;
    return  calculateTaxedPrice($total); 
}

$products = [
    [
    "productname" => "マグカップ",
    "price" => 800, 
    "x" => 5
    ],
    [ 
    "productname" => "カトラリーセット",
    "price" => 1500, 
    "x" => 5,
    ]
];


function calculateTotalOrderPrice($products){
    $total = 0;
    
    foreach ($products as $product){
        $total += calculateTotalPrice(
            $product["productname"],
            $product["price"],
            $product["x"]
            );
    }
    
    if ($total >= 5000){
    $total += 500 ;
      return $total;
    }
}
    $result = calculateTotalOrderPrice($products);
    echo "注文合計金額（税込）：" . $result . "円";