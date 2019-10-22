<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-8">
        <div class="container">
            <div class="title">
                WHAT WE LIKE:
            </div>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="cmt">
                        This is Photoshop’s version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
                        Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem
                        nibh id elit.
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>

            <div class="row fix">
                <div class="col-md-2">
                    <img src="./images/8-1.png" alt="">
                    <h5>
                        <a href="#">GIFT LIST <br> @ TIFFANY.COM</a>
                    </h5>
                </div>
                <div class="col-md-2 rol">
                    <img src="./images/8-2.svg" alt="">
                </div>
                <div class="col-md-4">
                    <img src="./images/8-3.png" alt="">
                    <div class="thanks">
                            <h1>THANK YOU!</h1>
                    </div>
                </div>
                <div class="col-md-2 a">
                    <img src="./images/8-4.svg" alt="">
                </div>
                <div class="col-md-2">
                    <img src="./images/8-5.png" alt="">
                    <h5>
                        <a href="#">GIFT LIST <br> @ TIFFANY.COM</a>
                    </h5>
                </div>
            </div>
        </div>
    </div>