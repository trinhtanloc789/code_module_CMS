<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-2">

        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img class="img-responsive" src="./images/2-1.png" alt="2-1">
                    <div class="wrap">
                        <div class="txt">
                        <p> I have the most </p> 
                           <p>romantic man!</p>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <img class="img-responsive" src="./images/2-3.png" alt="2-3">
                    <div class="wrap">
                        <div class="txt">
                        <p> I have the most </p> 
                           <p>romantic man!</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img class="img-responsive" src="./images/2-4.png" alt="2-4">
                    <div class="wrap">
                        <div class="txt">
                           
                        </div>
                    </div>
                </div>

            </div>
            <!-- Add Arrows -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>

    <!-- Swiper JS -->
    <script src="./js/swiper.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper('.swiper-container', {
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>
</div>