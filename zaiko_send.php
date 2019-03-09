<?php
//1. POSTデータ取得

//まず前のphpからデーターを受け取る（この受け取ったデータをもとにbindValueと結びつけるため）


$item = $_POST["item"];
$i_desc = $_POST["i_desc"];
$i_comp = $_POST["i_comp"];
$country = $_POST["country"];
$price = $_POST["price"];
$w_price = $_POST["w_price"];
$stock = $_POST["stock"];
$day = $_POST["day"];




//2. DB接続します xxxにDB名を入力する
//ここから作成したDBに接続をしてデータを登録します xxxxに作成したデータベース名を書きます
try {
  $pdo = new PDO('mysql:dbname=c_db;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('DbConnectError:'.$e->getMessage());
}


//３．データ登録SQL作成 //ここにカラム名を入力する
//xxx_table(テーブル名)はテーブル名を入力します
$stmt = $pdo->prepare("INSERT INTO c_table(id,item, i_desc, i_comp, country,
price, w_price, stock, day )VALUES( NULL, :item, :i_desc, :i_comp, :country,
:price, :w_price, :stock, sysdate())");
$stmt->bindValue(':item', $item, PDO::PARAM_STR);
$stmt->bindValue(':i_desc', $i_desc, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)//Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':i_comp', $i_comp, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':country', $country, PDO::PARAM_STR);
$stmt->bindValue(':price', $price, PDO::PARAM_STR);
$stmt->bindValue(':w_price', $w_price, PDO::PARAM_STR);
$stmt->bindValue(':stock', $stock, PDO::PARAM_STR);



$status = $stmt->execute();

//４．データ登録処理後
if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit("QueryError:".$error[2]);
}else{
  //５．index.phpへリダイレクト 書くときにLocation: in この:　のあとは半角スペースがいるので注意！！
  header("Location: select.php");
  exit;

}
?>
