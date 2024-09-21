<?php
require_once('funcs.php');

// DB connection
try {
    $pdo = new PDO('mysql:dbname=final_01;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
    exit('DBConnectError:'.$e->getMessage());
}

// Fetch unique periods for the dropdown
$stmt = $pdo->prepare("SELECT DISTINCT period FROM candidates ORDER BY period");
$status = $stmt->execute();

if ($status == false) {
    $error = $stmt->errorInfo();
    exit("ErrorQuery:".$error[2]);
} else {
    $periods = $stmt->fetchAll(PDO::FETCH_COLUMN);
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=1400, maximum-scale=1.0" />
    <link rel="shortcut icon" type="image/png" href="https://animaproject.s3.amazonaws.com/home/favicon.png" />
    <meta name="og:type" content="website" />
    <meta name="twitter:card" content="photo" />
    <link rel="stylesheet" type="text/css" href="css/search.css" />
    <link rel="stylesheet" type="text/css" href="css/styleguide.css" />
    <link rel="stylesheet" type="text/css" href="css/globals.css" />
    <style>
      .input-wrapper {
        width: 100%;
        height: 100%;
      }
      .input-wrapper input,
      .input-wrapper select {
        width: 100%;
        height: 100%;
        border: none;
        background: transparent;
        font-size: 24px;
        font-family: var(--font-family-roboto);
        font-weight: 600;
        color: var(--pink-swan);
        padding: 0;
        margin: 0;
        appearance: none;
        -webkit-appearance: none;
        -moz-appearance: none;
      }
      .input-wrapper select {
        background: url('img/keyboard-arrow-down-1.svg') no-repeat right center;
        padding-right: 30px;
      }

      .align-self-flex-end {
        align-self: flex-end;
        margin-top: 20px;
        margin-right: 20px;
      }
      .view-3 {
        align-items: flex-end;
  align-self: flex-end;
  background-color: var(--black);
  border-radius: 50px;
  cursor: pointer;
  display: flex;
  height: 130px;
  justify-content: flex-end;
  margin-right: 100px;
  margin-top: 181px;
  min-width: 250px;
  padding: 8px 15px;
  z-index: 4;
}
      .overlap-group4 {
        height: 104px;
  position: relative;
  width: 219px;
}
      .text_label-1 {
        left: 0;
        letter-spacing: 0;
        line-height: normal;
        position: absolute;
        text-align: center;
        top: 29px;
        width: 219px;
      }
    </style>
  </head>
  <body style="margin: 0; background: #ffffff">
    <input type="hidden" id="anPageName" name="page" value="search" />
    <div class="container-center-horizontal">
      <div class="search screen">
      <a href="index.php">
        <img class="header" src="img/header-1.svg" alt="header" />
      </a>
        <div class="mv">
          <div class="overlap-group-1">
            <h1 class="text-50 preahvihear-normal-white-40px">
              心から投票したいと思える候補者を<br />１００秒で見つけよう
            </h1>
            <img class="r-1" src="img/r-1.png" alt="R 1" />
          </div>
        </div>
        <form action="result.php" method="GET">
          <div class="view">
            <div class="text roboto-semi-bold-eerie-black-32px">選挙区</div>
            <div class="overlap-group">
              <div class="input-wrapper">
                <input type="text" name="district" class="text-5 roboto-semi-bold-pink-swan-24px" placeholder="選挙区を入力">
              </div>
            </div>
          </div>
          <div class="view-1">
            <div class="text roboto-semi-bold-eerie-black-32px">選挙期間</div>
            <div class="overlap-group">
              <div class="input-wrapper">
                <select name="period" class="text-5 roboto-semi-bold-pink-swan-24px">
                  <option value="">選択してください</option>
                  <?php foreach ($periods as $period): ?>
                    <option value="<?= h($period) ?>"><?= h($period) ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
            </div>
          </div>
          <div class="align-self-flex-end">
            <div class="view-3">
              <button type="submit" class="overlap-group4" style="border: none; background: none; cursor: pointer; width: 100%; height: 100%;">
                <div class="text_label-1 text_label-2 preahvihear-normal-white-40px">検　索</div>
                <div class="enter preahvihear-normal-white-24px">Search</div>
              </button>
            </div>
          </div>
        </form>
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