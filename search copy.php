<?php
require_once('funcs.php');

// DB connection
try {
    $pdo = new PDO('mysql:dbname=final_01;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
    exit('DBConnectError:'.$e->getMessage());
}

// Data retrieval SQL
$stmt = $pdo->prepare("SELECT * FROM candidates");
$status = $stmt->execute();

// Display data
if ($status == false) {
    $error = $stmt->errorInfo();
    exit("ErrorQuery:".$error[2]);
} else {
    $candidates = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <!--<meta name=description content="This site was generated with Anima. www.animaapp.com"/>-->
    <!-- <link rel="shortcut icon" type=image/png href="https://animaproject.s3.amazonaws.com/home/favicon.png" /> -->
    <meta name="viewport" content="width=1400, maximum-scale=1.0" />
    <link rel="shortcut icon" type="image/png" href="https://animaproject.s3.amazonaws.com/home/favicon.png" />
    <meta name="og:type" content="website" />
    <meta name="twitter:card" content="photo" />
    <link rel="stylesheet" type="text/css" href="css/search.css" />
    <link rel="stylesheet" type="text/css" href="css/styleguide.css" />
    <link rel="stylesheet" type="text/css" href="css/globals.css" />
  </head>
  <body style="margin: 0; background: #ffffff">
    <input type="hidden" id="anPageName" name="page" value="search" />
    <div class="container-center-horizontal">
      <div class="search screen">
        <img class="header" src="img/header-1.svg" alt="header" />
        <div class="mv">
          <div class="overlap-group-1">
            <h1 class="text-50 preahvihear-normal-white-40px">
              心から投票したいと思える候補者を<br />１００秒で見つけよう
            </h1>
            <img class="r-1" src="img/r-1.png" alt="R 1" />
          </div>
        </div>
        <div class="view">
          <div class="text roboto-semi-bold-eerie-black-32px">選挙区</div>
          <div class="overlap-group">
            <div class="text-5 roboto-semi-bold-pink-swan-24px">選択してください</div>
            <img class="keyboard-arrow-down" src="img/keyboard-arrow-down.svg" alt="Keyboard arrow down" />
          </div>
        </div>
        <div class="view-1">
          <div class="text roboto-semi-bold-eerie-black-32px">選挙期間</div>
          <div class="overlap-group">
            <div class="text-5 roboto-semi-bold-pink-swan-24px">選択してください</div>
            <img class="keyboard-arrow-down" src="img/keyboard-arrow-down-1.svg" alt="Keyboard arrow down" />
          </div>
        </div>
        <a href="result.html">
          <div class="view-2">
            <div class="overlap-group1">
              <div class="text_label preahvihear-normal-white-40px">検　索</div>
              <div class="enter preahvihear-normal-white-24px">Search</div>
            </div>
          </div></a
        >
        <div class="footer">
          <div class="footer-1">
            <p class="we-are-lights-we-have-the-rights preahvihear-normal-white-36px">
              We are Lights, We have the Rights.
            </p>
          </div>
          <div class="footer-link-container">
            <div class="footer-link preahvihear-normal-black-16px">
              プライバシーポリシー　　　特定商取引に基づく表示　　　利用規約　　　サイトマップ
            </div>
            <div class="footer-link-1 inter-normal-black-16px">©ライツ</div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
