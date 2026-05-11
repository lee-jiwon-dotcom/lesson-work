<?php
$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$comment = trim($_POST['comment'] ?? '');
$title = trim($_POST['title'] ?? '');
$type = trim($_POST['type'] ?? '');
$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($title === '') {
        $errors[] = '件名を入力してください。';
    }

    if ($name === '') {
        $errors[] = '名前を入力してください。';
    }

    if ($comment === '') {
        $errors[] = 'コメントを入力してください。';
    } elseif (mb_strlen($comment) < 10) {
        $errors[] = 'コメントは10文字以上で入力してください。';
    }

    if ($email === '') {
        $errors[] = 'メールアドレスを入力してください。';
    }

    if ($type === '') {
    $errors[] = 'お問い合わせ種別を選択してください。';
}
}
function createCompleteMessage(string $name): string
{
    return $name . 'さん、送信ありがとうございました。';
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHPフォーム受け取り</title>
</head>
<body>
    <h1>PHPフォーム受け取り</h1>

    <?php if ($errors !== []): ?>
        <ul>
            <?php foreach ($errors as $error): ?>
                <li><?php echo htmlspecialchars($error, ENT_QUOTES, 'UTF-8'); ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <?php if ($_SERVER['REQUEST_METHOD'] === 'POST' && $errors === []): ?>
        <p><?php echo htmlspecialchars(createCompleteMessage($name), ENT_QUOTES, 'UTF-8'); ?></p>
        <p>件名: <?php echo htmlspecialchars($title, ENT_QUOTES, 'UTF-8'); ?></p>
        <p>名前: <?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?></p>
        <p>コメント: <?php echo nl2br(htmlspecialchars($comment, ENT_QUOTES, 'UTF-8')); ?></p>
        <p>メール: <?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?></p>
        <p>種別: <?php echo htmlspecialchars($type, ENT_QUOTES, 'UTF-8'); ?></p>
    <?php endif; ?>

    <form action="" method="POST">
        <div>
            <label for="title">件名</label>
            <input
                id="title"
                type="text"
                name="title"
                value="<?php echo htmlspecialchars($title, ENT_QUOTES, 'UTF-8'); ?>"
            >
        </div>

        <div>
            <label for="name">名前</label>
            <input
                id="name"
                type="text"
                name="name"
                value="<?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?>"
            >
        </div>

        <div>
            <label for="comment">コメント</label>
            <textarea id="comment" name="comment"><?php echo htmlspecialchars($comment, ENT_QUOTES, 'UTF-8'); ?></textarea>
        </div>

        <div>
            <label for="email">メール</label>
            <input
                id="email"
                type="email"
                name="email"
                value="<?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?>"
            >
        </div>

        <div>
    <label for="type">お問い合わせ種別</label>
    <select id="type" name="type">
        <option value="">選択してください</option>
        <option value="質問" <?php if ($type === '質問') echo 'selected'; ?>>質問</option>
        <option value="相談" <?php if ($type === '相談') echo 'selected'; ?>>相談</option>
        <option value="その他" <?php if ($type === 'その他') echo 'selected'; ?>>その他</option>
    </select>
</div>

        <button type="submit">送信する</button>
    </form>
</body>
</html>