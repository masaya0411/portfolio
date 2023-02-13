<?php

//メール送信プログラム
//=================================

//1.フォームが全て入力されていた場合
if(!empty($from) && !empty($subject) && !empty($comment)){

  //A.文字化けしないように設定（お決まりパターン）
  mb_language("Japanese");//現在使っている言語を設定する
  mb_internal_encoding("UTF-8");//内部の日本語をどうエンコーディング（機会がわかる言葉へ変換）するかを設定

  //B.メール送信準備
  $to = 'msya.0411@gmail.com';

  //C.メールを送信（送信結果はtrueかfalseで返ってくる）
  $result = mb_send_mail($to, $subject, $comment, "From: ".$from);

  //D.送信結果を判定
  if($result) {
    unset($_POST);
    $success_msg = 'メールが送信されました。';
  } else {
    $error_msg = 'メールの送信に失敗しました。';
  }

} else {

  $error_msg = '全て入力必須です。';
}

 ?>
