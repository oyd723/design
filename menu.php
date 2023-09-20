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
            <div class="menu_list02">
              <a href="#" class="menu_inner">
                <h2 class="ttl">menu01</h2>
                <div class="img">
                  <img src="img/img03.jpg">
                </div>
                <p class="txt">テキスト</p>
              </a>

              <a href="#" class="menu_inner">
                <h2 class="ttl">menu02</h2>
                <div class="img">
                  <img src="img/img04.jpg">
                </div>
                <p class="txt">テキスト</p>
              </a>

              <a href="#" class="menu_inner">
                <h2 class="ttl">menu03</h2>
                <div class="img">
                  <img src="img/img05.jpg">
                </div>
                <p class="txt">テキスト</p>
              </a>

            </div>
          </li>
          <li>
            <ul class="menu_list03">
              <li data-aos="fade-up" data-aos-delay="200" data-aos-duration="800">
                <a href="#">
                  <p class="ttl01">
                    <span class="num">01</span>
                    <span class="eng">menu01</span>
                  </p>
                  <p class="ttl02">メニュー01</p>
                  <div class="icon">
                    <img src="img/icon.png" alt="">
                  </div>
                  <p class="btn"><span>VIEW MORE</span></p>
                </a>
              </li>
              <li data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                <a href="#">
                  <p class="ttl01">
                    <span class="num">02</span>
                    <span class="eng">menu02</span>
                  </p>
                  <p class="ttl02">メニュー02</p>
                  <div class="icon">
                    <img src="img/icon.png" alt="">
                  </div>
                  <p class="btn"><span>VIEW MORE</span></p>
                </a>
              </li>
              <li data-aos="fade-up" data-aos-delay="200" data-aos-duration="1200">
                <a href="#">
                  <p class="ttl01">
                    <span class="num">03</span>
                    <span class="eng">menu03</span>
                  </p>
                  <p class="ttl02">メニュー03</p>
                  <div class="icon">
                    <img src="img/icon.png" alt="">
                  </div>
                  <p class="btn"><span>VIEW MORE</span></p>
                </a>
              </li>
            </ul>
          </li>
          <li>
            <div class="menu_list04">
              <div class="inner">
                <img src="img/img05.jpg">
                <div class="ttl">Plotting Cat</div>
              </div>
              <div class="inner">
                <img src="img/img06.jpg">
                <div class="ttl">Angry Cat</div>
              </div>
              <div class="inner">
                <img src="img/img01.jpg">
                <div class="ttl">Curious Cat</div>
              </div>
              <div class="inner">
                <img src="img/img02.jpg">
                <div class="ttl">Prowling Cat</div>
              </div>
              <div class="inner">
                <img src="img/img03.jpg">
                <div class="ttl">Sleepy Cat</div>
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
