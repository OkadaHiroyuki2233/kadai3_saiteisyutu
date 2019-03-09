<?php

function h($str) {
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

try {
    
    
    $dsn = 'mysql:dbname=c_db;host=127.0.0.1;charset=utf8'; 
    $user = 'root';
    $password = '';
    $options = array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, 
    );
    
    
    $pdo = new PDO($dsn, $user, $password, $options);
    
    
    $stmt = $pdo->query('SELECT * FROM c_table');
    
} catch (PDOException $e) {
    
    
    $error = $e->getMessage();
    
}

header('Content-Type: text/html; charset=UTF-8');

?>
<!DOCTPYE html>
<html>
  <head>
    <title>一覧表示</title>
  </head>
  <body>
    <h1>データ一覧</h1>
<?php if (isset($error)): ?>
    <p><?=h($error)?></p>
<?php else: ?>
    <table>
      <tr>
        <th>商品名</th>
        <th>商品説明</th>
        <th>仕入先</th>
        <th>生産国</th>
        <th>価格</th>
        <th>仕入れ価格</th>
        <th>在庫数</th>
        <th>入荷日</th>
      </tr>
<?php foreach ($stmt as $row): ?>
      <tr>
        <td><?=h($row['item'])?></td>
        <td><?=h($row['i_desc'])?></td>
        <td><?=h($row['i_comp'])?></td>
        <td><?=h($row['country'])?></td>
        <td><?=h($row['price'])?></td>
        <td><?=h($row['w_price'])?></td>
        <td><?=h($row['stock'])?></td>
        <td><?=h($row['day'])?></td>

      </tr>
<?php endforeach; ?>
    </table>
<?php endif; ?>

<input type="button" onClick="location.href='zaiko_form.html'" value="登録画面へ戻る">
  </body>
</html>
