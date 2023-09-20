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


            <div class="business__box1">
              <div class="business__head">
                <h2 class="mtitle4">
                  <span class="ja">事業内容</span><span class="eng">Our Business</span>
                </h2>
                <p class="business__txt">
                  テキストテキストテキストテキスト<br>
                  テキストテキストテキストテキスト
                </p>
              </div>

              <div class="business__list">
                <ul>
                  <li>
                    <a href="#">
                      <div class="link__inner">
                        <span class="num">1.</span>

                        <span class="ttl">MENU01</span>

                        <div class="link__img">
                          <div class="img">
                            <img src="img/img01.jpg" loading="lazy">
                          </div>
                        </div>

                        <span class="link__icon">
                          <i class="fas fa-arrow-right"></i>
                        </span>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="link__inner">
                        <span class="num">2.</span>

                        <span class="ttl">MENU02</span>

                        <div class="link__img">
                          <div class="img">
                            <img src="img/img01.jpg" loading="lazy">
                          </div>
                        </div>

                        <span class="link__icon">
                          <i class="fas fa-arrow-right"></i>
                        </span>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="link__inner">
                        <span class="num">3.</span>

                        <span class="ttl">MENU03</span>

                        <div class="link__img">
                          <div class="img">
                            <img src="img/img01.jpg" loading="lazy">
                          </div>
                        </div>

                        <span class="link__icon">
                          <i class="fas fa-arrow-right"></i>
                        </span>
                      </div>
                    </a>
                  </li>
                </ul>
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
