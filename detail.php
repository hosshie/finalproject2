<?php
require_once('funcs.php');

// DB connection
try {
    $pdo = new PDO('mysql:dbname=final_01;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
    exit('DBConnectError:'.$e->getMessage());
}

// Get candidate ID from URL parameter
$id = isset($_GET['id']) ? $_GET['id'] : '';

if (empty($id)) {
    exit('Invalid request');
}

// Prepare SQL query
$sql = "SELECT * FROM candidates WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();

// Fetch candidate data
if ($status == false) {
    $error = $stmt->errorInfo();
    exit("ErrorQuery:".$error[2]);
} else {
    $candidate = $stmt->fetch(PDO::FETCH_ASSOC);
}

if (!$candidate) {
    exit('Candidate not found');
}

// Calculate age
$birthdate = new DateTime($candidate['birthdate']);
$now = new DateTime();
$age = $birthdate->diff($now)->y;
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=1400, maximum-scale=1.0" />
    <link rel="shortcut icon" type="image/png" href="https://animaproject.s3.amazonaws.com/home/favicon.png" />
    <meta name="og:type" content="website" />
    <meta name="twitter:card" content="photo" />
    <link rel="stylesheet" type="text/css" href="css/detail.css" />
    <link rel="stylesheet" type="text/css" href="css/styleguide.css" />
    <link rel="stylesheet" type="text/css" href="css/globals.css" />
  </head>
  <body style="margin: 0; background: #ffffff">
    <input type="hidden" id="anPageName" name="page" value="detail" />
    <div class="container-center-horizontal">
      <div class="detail screen">
      <a href="index.php">
        <img class="header" src="img/header-1.svg" alt="header" />
      </a>
        <div class="top">
          <div class="overlap-group1">
            <div class="view">
              <div class="overlap-group">
                <div class="create-an-account preahvihear-normal-white-16px">Candidate Details</div>
                <img class="line-1-1" src="img/line-1.svg" alt="Line 1" />
              </div>
              <div class="text_label text_label-2 inter-bold-white-36px">候補者詳細ページ</div>
            </div>
            <img class="game-iconscandle-light" src="img/game-icons-candle-light-7.svg" alt="game-icons:candle-light" />
          </div>
        </div>
        <div class="view-1">
          <img class="image" src="img/--------@2x.png" alt="image" />
          <div class="flex-col-1 flex-col-5">
            <div class="flex-row">
              <div class="text-container">
                <div class="text-62"><?= h($candidate['period']) ?></div>
                <div class="text-61"><?= h($candidate['district']) ?></div>
                <div class="text-60"><?= h($candidate['kana']) ?></div>
              </div>
              <div class="flex-col-2 flex-col-5">
                <a href="<?= h($candidate['link']) ?>" target="_blank">
                  <img class="image-1" src="img/-------.svg" alt="image" />
                </a>
                <div class="text-58"><?= $age ?>歳</div>
              </div>
            </div>
            <h1 class="text-59"><?= h($candidate['name']) ?></h1>
          </div>
        </div>
        <div class="view-2">
          <div class="overlap-group4">
            <div class="text-68">お気に入り</div>
            <img class="like" src="img/-------like-.svg" alt="like" />
          </div>
        </div>
        <div class="x3">
          <div class="flex-row-1">
            <img class="mappolitical" src="img/map-political.svg" alt="map:political" />
            <div class="text-66">私の3大原則</div>
          </div>
          <div class="x1">
            <div class="group-1">
              <img class="vector" src="img/vector.svg" alt="Vector" />
              <div class="number preahvihear-normal-black-64px">1</div>
            </div>
            <div class="flex-col">
              <div class="text-6 roboto-medium-black-36px"><?= h($candidate['principle1']) ?></div>
              <img class="line-1" src="img/line-1-3.svg" alt="Line 1" />
            </div>
          </div>
          <div class="x3-item">
            <div class="group-1">
              <img class="vector" src="img/vector.svg" alt="Vector" />
              <div class="number preahvihear-normal-black-64px">2</div>
            </div>
            <div class="flex-col-3 flex-col-5">
              <div class="text-6 roboto-medium-black-36px"><?= h($candidate['principle2']) ?></div>
              <img class="line-1" src="img/line-1-4.svg" alt="Line 1" />
            </div>
          </div>
          <div class="x3-item">
            <div class="group-1">
              <img class="vector" src="img/vector.svg" alt="Vector" />
              <div class="number preahvihear-normal-black-64px">3</div>
            </div>
            <div class="flex-col">
              <div class="text-6 roboto-medium-black-36px"><?= h($candidate['principle3']) ?></div>
              <img class="line-1" src="img/line-1-5.svg" alt="Line 1" />
            </div>
          </div>
        </div>
        <div class="x20">
          <img class="vector-1" src="img/vector-3.svg" alt="Vector" />
          <div class="flex-col-4 flex-col-5">
            <div class="text-67">私の20秒ピッチ</div>
            <div class="overlap-group2">
              <img class="bxmovie-play" src="img/bx-movie-play.svg" alt="bx:movie-play" />
            </div>
          </div>
        </div>
        <a href="javascript:history.back()" class="align-self-flex-end">
          <div class="view-3">
            <div class="overlap-group3">
              <div class="text_label-1 text_label-2 preahvihear-normal-white-40px">戻　る</div>
              <div class="enter preahvihear-normal-white-24px">Back</div>
            </div>
          </div>
        </a>
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