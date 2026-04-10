<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>お問い合わせフォームー送信完了画面</title>
</head>
<body>

<h1>お問い合わせフォームー送信完了画面</h1>

<?php

// フォーム以外からアクセスされた場合
if ($_SERVER["REQUEST_METHOD"] != "POST") {
    header("Location: contact.php");
    exit();
}

// POSTデータ受け取り
$name = $_POST["name"] ?? "";
$companyName = $_POST["companyName"] ?? "";
$email = $_POST["email"] ?? "";
$age = $_POST["age"] ?? "";
$message = $_POST["message"] ?? "";

// メール送信内容
$to = "example@example.com";
$subject = "お問い合わせが届きました";

$body =
"名前：" . $name . "\n" .
"会社名：" . $companyName . "\n" .
"メール：" . $email . "\n" .
"年齢：" . $age . "\n" .
"お問い合わせ内容：" . $message;

$headers = "From: " . $email;

// メール送信
if (mail($to, $subject, $body, $headers)) {

    echo "メール送信に成功しました。";

} else {

    echo "メール送信に失敗しました。";

}

?>

<br><br>
<a href="contact.php">お問い合わせフォームに戻る</a>

</body>
</html>
