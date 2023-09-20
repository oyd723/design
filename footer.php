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


            <footer id="l-footer1">
              <div class="footer__inner">
                <div class="footer_head">
                  <div class="flogo">
                    <a href="/"><img src="img/logo.png" alt=""></a>
                  </div>
                </div>
                <div class="footer__navi1">
                  <ul>
                    <li><a href="#">menu01</a></li>
                    <li><a href="#">menu02</a></li>
                    <li><a href="#">menu03</a></li>
                    <li><a href="#">menu04</a></li>
                    <li><a href="#">menu05</a></li>
                    <li><a href="#">menu06</a></li>
                  </ul>
                </div>
                <div class="footer__sns">
                  <div class="footer__sns__inner">
                    <div class="sns__icon">
                      <ul>
                        <li class="icon__twitter"><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                        <li class="icon__fb"><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                      </ul>
                    </div>
                    <div class="copyright">
                      <div class="c-footer_copyright">© Holon Inc.</div>
                    </div>
                  </div>
                </div>
              </div>
            </footer>
          </li>
        </ul>
      </div>


    </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script src="js/basis.js?<?= time() ?>"></script>
</body>

</html>
