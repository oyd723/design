<ul class="globalNav">
    <li><a href="./"><span>Home</span>ホーム</a></li>
    <li><a href="about.php"><span>Page1</span>ページ1</a></li>
    <li><a href="service.php"><span>Page2</span>ページ2</a>
        <div class="dropdown-wrap">
            <ul class="dropdown">
                <li class="dropdown-li"><a href="service.php">下層1</a></li>
                <li class="dropdown-li"><a href="service2.php">下層2</a></li>
            </ul>
        </div>
    </li>
    <li><a href="faq.php"><span>Page3</span>ページ3</a></li>
    <li><a href="contact.php"><span>Page4</span>ページ4</a></li>
    <li class="btn-contact"><a href="tel:<?php echo $telNo; ?>" class="bnr_tel"><?php echo $telNo; ?></a></li>
</ul>
