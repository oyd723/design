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

<body id="index">

  <header>
    <div id="header">
      <div class="inner">
        <div class="head-left">
          <img src="img/neko1.png" alt="" class="img1">
          <h2 class="eng"><a href="index.php">Design Gallery</a></h2>
          <img src="img/neko2.png" alt="" class="img2">
        </div>
      </div>
    </div>
  </header>



  <div id="wrapper">
    <div id="l-main">


      <div class="tab-wrapper">
        <div class="sticky">
          <div class="sticky-inner">
            <ul class="tab">
              <li><img src="img/ttl.png" alt=""></li>
              <li><a href="#header1">Header</a></li>
              <li><a href="#footer">Footer</a></li>
              <li><a href="#point">Point</a></li>
              <li><a href="#greet">Greet</a></li>
              <li><a href="#business">Business</a></li>
              <li><a href="#pagettl">Page Title</a></li>
            </ul>
          </div>
        </div>
        <div class="tab__inner">

          <div id="header1" class="area">
            <?php include 'header.php'; ?>
          </div>
          <div id="footer" class="area">
            <?php include 'footer.php'; ?>
          </div>
          <div id="point" class="area">
            <?php include 'point.php'; ?>
          </div>
          <div id="greet" class="area">
            <?php include 'greet.php'; ?>
          </div>
          <div id="business" class="area">
            <?php include 'business.php'; ?>
          </div>
          <div id="pagettl" class="area">
            <?php include 'pagettl.php'; ?>
          </div>


        </div>

      </div>


    </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script src="js/basis.js?<?= time() ?>"></script>
  <script>
    //任意のタブにURLからリンクするための設定
    function GethashID(hashIDName) {
      if (hashIDName) {
        //タブ設定
        $('.tab li').find('a').each(function() { //タブ内のaタグ全てを取得
          var idName = $(this).attr('href'); //タブ内のaタグのリンク名（例）#lunchの値を取得	
          if (idName == hashIDName) { //リンク元の指定されたURLのハッシュタグ（例）http://example.com/#lunch←この#の値とタブ内のリンク名（例）#lunchが同じかをチェック
            var parentElm = $(this).parent(); //タブ内のaタグの親要素（li）を取得
            $('.tab li').removeClass("active"); //タブ内のliについているactiveクラスを取り除き
            $(parentElm).addClass("active"); //リンク元の指定されたURLのハッシュタグとタブ内のリンク名が同じであれば、liにactiveクラスを追加
            //表示させるエリア設定
            $(".area").removeClass("is-active"); //もともとついているis-activeクラスを取り除き
            $(hashIDName).addClass("is-active"); //表示させたいエリアのタブリンク名をクリックしたら、表示エリアにis-activeクラスを追加	
          }
        });
      }
    }

    //タブをクリックしたら
    $('.tab a').on('click', function() {
      var idName = $(this).attr('href'); //タブ内のリンク名を取得	
      GethashID(idName); //設定したタブの読み込みと
      return false; //aタグを無効にする
    });


    // 上記の動きをページが読み込まれたらすぐに動かす
    $(window).on('load', function() {
      $('.tab li:first-of-type').addClass("active"); //最初のliにactiveクラスを追加
      $('.area:first-of-type').addClass("is-active"); //最初の.areaにis-activeクラスを追加
      var hashName = location.hash; //リンク元の指定されたURLのハッシュタグを取得
      GethashID(hashName); //設定したタブの読み込み
    });
  </script>

</body>

</html>
