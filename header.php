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
            <div id="l-header1">
              <div class="inner">
                <h1 id="logo"><a href="./">
                    <img src="img/logo.png" alt=""></a></h1>
                <div class="head-right">

                  <nav id="header_nav1">
                    <ul class="globalNav">
                      <li class="nav_ttl">Menu</li>
                      <li><a href="./" class=""><span class="eng">menu01</span></a></li>
                      <li><a href="./" class=""><span class="eng">menu02</span></a></li>
                      <li><a href="./" class=""><span class="eng">menu03</span></a></li>
                      <li><a href="./" class=""><span class="eng">menu04</span></a></li>
                    </ul>
                    <div class="head-right_contact">
                      <div class="head-right_fb head-right_btn"><a href="./" target="_blank"><i class="fab fa-facebook-f"></i>
                        </a>
                      </div>

                      <div class="head-right_ig head-right_btn"><a href="./" class="active"><i class="fab fa-instagram"></i></a></div>
                    </div>

                  </nav>
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
