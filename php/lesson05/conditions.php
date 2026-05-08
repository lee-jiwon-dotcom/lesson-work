<?php
$score = 80;

if ($score >= 80) {
    echo 'とても良いです';
} elseif ($score >= 60) {
    echo '合格です';
}   else {
    echo 'もう一度確認しましょう';
}
?>

//問題１。
<?php
$score = 75;

if ($score >= 90) {
    echo 'Aランクです。';
} elseif ($score >= 70) {
    echo 'Bランクです。';
} elseif ($score >= 50) {
    echo 'Cランクです。';
}   else {
    echo '再テストです。';
}
?>

//問題２。
<?php
$age = 18;

if ($age >= 20) {
    echo '入場できます';
}   elseif ($age >= 18) {
    echo '保護者の同意が必要です。';
}   else {
    echo 'no enter';
}
?>

//問題３。
<?php
$name = 'Yado';

if ($name === ''){
    echo '名前を入力してください';
}   else {
    echo 'こんにちは、' . $name . 'さん';
}
?>


//問題４。
<?php
$isLoggedIn = true;
$isAdmin = false;

if ($isLoggedIn === true && $isAdmin === true) {
    echo '管理者ページへようこそ';
} elseif ($isLoggedIn === true && $isAdmin === false) {
    echo 'マイページへようこそ';
}   else {
    echo 'ログインして';
}
?>
