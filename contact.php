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
            <div class="footer__contact1">
              <a href="#">
                <div class="contact__txt">
                  <div class="contact__ttl">
                    <p class="eng">Contact</p>
                    <h3 class="ja">お問い合わせ</h3>
                  </div>
                  <p>お気軽にお問合せください。</p>
                </div>
                <p class="arrow"><i class="fas fa-arrow-right"></i></p>
              </a>
            </div>
          </li>


          <li>
            <section class="footer__contact2">
              <div class="footer__contact__inner">
                <div class="contact__ttl">
                  <div class="ja">お問い合わせ</div>
                  <div class="eng">Contact</div>
                </div>
                <div class="contact__txt">
                  <div class="contact__txt__inner">
                    <div class="top__txt">介護のこと。施設のこと。<br>お気軽にご相談ください。</div>
                    <div class="contact__tel">
                      <a href="tel:"><i class="fas fa-phone-alt"></i> 000-0000-0000</a>
                    </div>
                    <a class="bottom__txt" href="#">
                      <div class="icon__mail"><i class="far fa-envelope"></i></div>
                      <div class="mail__label">Webでのお問い合せ</div>
                    </a>
                  </div>
                </div>
                <div class="contact__recruit">
                  <a href="#">
                    <div class="contact__recruit__inner">
                      <div class="ttl__eng">Recruit</div>
                      <div class="ttl__ja">採用情報</div>
                      <div class="rectuite__txt">地域やご利用者に喜んでもらえる<br>サービスを一緒に考えてみませんか？</div>
                      <div class="rectuite__btn_wrap">
                        <p class="btn__txt">くわしく見る</p>
                        <div class="btn__arrow"><i class="fas fa-arrow-right"></i></div>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </section>
          </li>

        </ul>
      </div>


    </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script src="js/basis.js?<?= time() ?>"></script>
</body>

</html>
