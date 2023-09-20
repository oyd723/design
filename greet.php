<?php require_once './ros_common.php'; ?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title><?php echo $title; ?></title>
  <meta name="Description" content="<?php echo $description; ?>">
  <!-- <meta name="viewport" content="width=1400, maximum-scale=1.0, user-scalable=yes"> -->
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="css/reset.css?<?= time() ?>">
  <link rel="stylesheet" href="css/common.css?<?= time() ?>">
  <link rel="stylesheet" href="css/basis.css?<?= time() ?>">
  <link rel="stylesheet" href="css/smartphone.css?<?= time() ?>">
  <?php require_once './font_common.php'; ?>
</head>

<body id="top">


  <div id="wrapper">
    <div id="l-main">


      <div class="contents__wrapper type3">
        <ul class="flex__list">
          <li>



            <div class="greet__box1">
              <div class="greet__txt">
                <h2 class="mtitle0"><span class="eng">About Us</span><span class="ja">私たちについて</span></h2>
                <p>
                  テキストテキストテキスト<br>
                  テキストテキストテキストテキスト<br>
                  テキストテキストテキスト
                </p>
              </div>
              <div class="greet__slide">
                <div class="slide__wrap">
                  <ul class="slide__list">
                    <li class="slide__item"><img src="img/img01.jpg" /></li>
                    <li class="slide__item"><img src="img/img02.jpg" /></li>
                    <li class="slide__item"><img src="img/img03.jpg" /></li>
                    <li class="slide__item"><img src="img/img04.jpg" /></li>
                    <li class="slide__item"><img src="img/img05.jpg" /></li>
                    <li class="slide__item"><img src="img/img06.jpg" /></li>
                  </ul>
                  <ul class="slide__list">
                    <li class="slide__item"><img src="img/img01.jpg" /></li>
                    <li class="slide__item"><img src="img/img02.jpg" /></li>
                    <li class="slide__item"><img src="img/img03.jpg" /></li>
                    <li class="slide__item"><img src="img/img04.jpg" /></li>
                    <li class="slide__item"><img src="img/img05.jpg" /></li>
                    <li class="slide__item"><img src="img/img06.jpg" /></li>
                  </ul>
                </div>
              </div>
            </div>

          </li>
        </ul>
      </div>




    </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script src="js/basis.js?<?= time() ?>"></script>
</body>

</html>
