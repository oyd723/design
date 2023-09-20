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


            <!-- title -->
            <div class="contents__wrapper">
                <ul class="flex__list">
                    <li>
                        <h2 class="mtitle"><span>title</span></h2>
                    </li>
                    <li>
                        <h2 class="mtitle2" data-en="title">タイトル</h2>
                    </li>
                    <li>
                        <h2 class="mtitle3" data-en="title">タイトル</h2>
                    </li>
                    <li>
                        <h2 class="mtitle4">
                            <div class="ja">タイトル</div>
                            <div class="eng">title</div>
                        </h2>
                    </li>
                    <li>
                        <h2 class="mtitle_box3">タイトル</h2>
                    </li>
                    <li>

                    </li>
                </ul>
            </div>

            <!-- title big -->
            <div class="contents__wrapper type3">
                <ul class="flex__list">
                    <li>
                        <h2 class="mtitle5">
                            <p class="eng"><span>Our</span><span>Title</span></p>
                            <p class="ja">タイトル</p>
                        </h2>
                    </li>
                </ul>
            </div>

            <!-- text animation -->
            <h2 class="main-ttl">text animation</h2>
            <div class="contents__wrapper type2">
                <ul class="flex__list">
                    <li>
                        <h2 class="txt_anim1">
                            <p>text</p>
                            <p class="sub_txt">
                                <span class="word txt1">animation1.</span>
                                <span class="word txt2">animation2.</span>
                                <span class="word txt3">animation3.</span>
                                <span class="word txt4">animation4.</span>
                                <span class="word txt5">animation.</span>
                            </p>
                        </h2>
                    </li>
                    <li>
                        <h2 class="txt_anim3">
                            <span>T</span>
                            <span>I</span>
                            <span>T</span>
                            <span>L</span>
                            <span>E</span>
                        </h2>
                    </li>
                </ul>
            </div>


            <!-- fukidashi -->
            <h2 class="main-ttl">fukidashi</h2>
            <div class="contents__wrapper">
                <ul class="flex__list">
                    <li>
                        <h2 class="fukidashi1">ふきだしタイトル</h2>
                    </li>
                    <li>
                        <h2 class="fukidashi2">ふきだしタイトル</h2>
                    </li>
                    <li>
                        <h2 class="fukidashi3">ふきだしタイトル</h2>
                    </li>
                </ul>
            </div>


        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="js/basis.js?<?= time() ?>"></script>

    <script>
        // txt_anim1

        var words = document.getElementsByClassName('word');
        var wordArray = [];
        var currentWord = 0;

        words[currentWord].style.opacity = 1;
        for (var i = 0; i < words.length; i++) {
            splitLetters(words[i]);
        }

        function changeWord() {
            var cw = wordArray[currentWord];
            var nw = currentWord == words.length - 1 ? wordArray[0] : wordArray[currentWord + 1];
            for (var i = 0; i < cw.length; i++) {
                animateLetterOut(cw, i);
            }

            for (var i = 0; i < nw.length; i++) {
                nw[i].className = 'letter behind';
                nw[0].parentElement.style.opacity = 1;
                animateLetterIn(nw, i);
            }

            currentWord = (currentWord == wordArray.length - 1) ? 0 : currentWord + 1;
        }

        function animateLetterOut(cw, i) {
            setTimeout(function() {
                cw[i].className = 'letter out';
            }, i * 80);
        }

        function animateLetterIn(nw, i) {
            setTimeout(function() {
                nw[i].className = 'letter in';
            }, 340 + (i * 80));
        }

        function splitLetters(word) {
            var content = word.innerHTML;
            word.innerHTML = '';
            var letters = [];
            for (var i = 0; i < content.length; i++) {
                var letter = document.createElement('span');
                letter.className = 'letter';
                letter.innerHTML = content.charAt(i);
                word.appendChild(letter);
                letters.push(letter);
            }

            wordArray.push(letters);
        }

        changeWord();
        setInterval(changeWord, 4000);
    </script>

    <script>
        /* 文字列を一文字ずつ<span>で囲む関数*/
        const wrapCharSpan = function(str) {
            return [...str].map(char => `<span>${char}</span>`).join('');
        }

        //対象の要素を取得する
        const target = document.querySelector('.js-span');
        //要素の内容を関数の実行結果で置き換える
        target.innerHTML = wrapCharSpan(target.textContent);
    </script>
</body>

</html>
