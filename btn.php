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

      <div class="contents__wrapper">
        <ul class="flex__list">
          <li>
            <div class="btn01">
              <a href="./">
                button
              </a>
            </div>
          </li>
          <li>
            <div class="btn02">
              <a href="#">button</a>
            </div>
          </li>
          <li>
            <div class="btn03">
              <a href="#">
                <span class="circle" aria-hidden="true">
                  <span class="icon arrow"></span>
                </span>
                <span class="txt">button</span>
              </a>
            </div>
          </li>
          <li>
            <div class="btn04">
              <a href="#">
                <p>button</p>
              </a>
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
