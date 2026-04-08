<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>お問い合わせフォームー確認画面</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h2>お問い合わせフォームー確認画面</h2>
</header>

<aside>
    <ul>
        <li><a href="#">トップページ</a></li>
        <li><a href="#">人気投稿</a></li>
        <li><a href="#">エンジニアおすすめ商品</a></li>
        <li><a href="#">エンジニアおすすめ記事</a></li>
        <li><a href="#">投稿ページ</a></li>
    </ul>
</aside>

<main>

<?php

// ３：フォーム以外からアクセスされた場合
if ($_SERVER["REQUEST_METHOD"] != "POST") {
    header("Location: contact.php");
    exit();
}

// １：POSTデータ受け取り
$name = $_POST["name"] ?? "";
$companyName = $_POST["companyName"] ?? "";
$email = $_POST["email"] ?? "";
$age = $_POST["age"] ?? "";
$message = $_POST["message"] ?? "";

// ２：未入力チェック
if (
    $name === "" ||
    $companyName === "" ||
    $email === "" ||
    $age === "" ||
    $message === ""
) {
    echo "<p style='color:red;'>未入力の項目があります。</p>";
    exit();
}

?>

<form action="send.php" method="POST">
<table border="3">

<tr>
    <th>お名前</th>
    <td>
        <?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?>
        <input type="hidden" name="name"
        value="<?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?>">
    </td>
</tr>

<tr>
    <th>会社名</th>
    <td>
        <?php echo htmlspecialchars($companyName, ENT_QUOTES, 'UTF-8'); ?>
        <input type="hidden" name="companyName"
        value="<?php echo htmlspecialchars($companyName, ENT_QUOTES, 'UTF-8'); ?>">
    </td>
</tr>

<tr>
    <th>メールアドレス</th>
    <td>
        <?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?>
        <input type="hidden" name="email"
        value="<?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?>">
    </td>
</tr>

<tr>
    <th>年齢</th>
    <td>
        <?php echo htmlspecialchars($age, ENT_QUOTES, 'UTF-8'); ?>
        <input type="hidden" name="age"
        value="<?php echo htmlspecialchars($age, ENT_QUOTES, 'UTF-8'); ?>">
    </td>
</tr>

<tr>
    <th>お問い合わせ内容</th>
    <td>
        <?php echo htmlspecialchars($message, ENT_QUOTES, 'UTF-8'); ?>
        <input type="hidden" name="message"
        value="<?php echo htmlspecialchars($message, ENT_QUOTES, 'UTF-8'); ?>">
    </td>
</tr>

<tr>
    <td colspan="2">
        <input type="button" value="戻る" onclick="history.back()">
        <input type="submit" value="送信">
    </td>
</tr>

</table>
</form>

</main>

</body>
</html>