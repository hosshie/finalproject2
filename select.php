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
    <link rel="stylesheet" type="text/css" href="css/result.css" />
    <link rel="stylesheet" type="text/css" href="css/styleguide.css" />
    <link rel="stylesheet" type="text/css" href="css/globals.css" />

    <style>
        .view-1 {
            height: 280px; /* 高さを少し増やす（元の値から20px増加と仮定） */
        }
        .flex-col-1 {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 100%;
        }
        .candidate-kana {
            font-size: 24px;
            line-height: 1.2;
            margin-bottom: 5px; /* kanaとnameの間隔を調整 */
            word-wrap: break-word;
        }
        .candidate-name {
            font-size: 48px;
            line-height: 1.1;
            margin-bottom: 5px; /* nameとprinciple1の間隔を調整 */
        }
        .candidate-principle {
            font-size: 28px;
            line-height: 1.2;
            max-height: 3.6em; /* 3行分の高さ */
            overflow: hidden;
        }
    </style>

  </head>
  <body style="margin: 0; background: #ffffff">
    <input type="hidden" id="anPageName" name="page" value="result" />
    <div class="container-center-horizontal">
      <div class="result screen">
        <img class="header" src="img/header-3.svg" alt="header" />
        <div class="top">
          <div class="overlap-group1">
            <div class="view-2">
              <div class="overlap-group-1">
                <div class="create-an-account preahvihear-normal-white-16px">Candidates List</div>
                <img class="line-1" src="img/line-1.svg" alt="Line 1" />
              </div>
              <div class="text_label text_label-2 inter-bold-white-36px">登録者一覧</div>
            </div>
            <img class="game-iconscandle-light" src="img/game-icons-candle-light-8.svg" alt="game-icons:candle-light" />
          </div>
        </div>

        <?php foreach ($candidates as $index => $candidate): ?>
      <?php if ($index % 2 == 0): ?>
        <div class="view-container<?php echo floor($index / 2) + 1; ?> view-container-5">
      <?php endif; ?>
      
      <article class="view-1">
        <div class="flex-col">
          <img class="ellipse-5" src="img/ellipse-5@2x.png" alt="Ellipse 5" />
          <div class="text text-4 roboto-semi-bold-black-32px">
            <?php
              $birthdate = new DateTime($candidate['birthdate']);
              $now = new DateTime();
              $age = $birthdate->diff($now)->y;
              echo $age . '歳';
            ?>
          </div>
        </div>
        <div class="flex-col-1">
          <div class="text-1 text-4 roboto-semi-bold-black-24px"><?= h($candidate['kana']) ?></div>
          <div class="text-2 text-4 roboto-semi-bold-black-48px"><?= h($candidate['name']) ?></div>
          <div class="flex-row">
            <div class="text-3 text-4 roboto-semi-bold-black-28px">
              <?= h($candidate['principle1']) ?>
            </div>
            <img class="like" src="img/-------like-.svg" alt="like" />
          </div>
        </div>
      </article>

      <?php if ($index % 2 == 1 || $index == count($candidates) - 1): ?>
        </div>
      <?php endif; ?>
    <?php endforeach; ?>


        <a href="search.html" class="align-self-flex-end">
          <div class="view-3">
            <div class="overlap-group4">
              <div class="text_label-1 text_label-2 preahvihear-normal-white-40px">戻　る</div>
              <div class="enter preahvihear-normal-white-24px">Back</div>
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
