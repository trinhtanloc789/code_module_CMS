<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-14">
        <div class="container">
            <div class="title">
                <h1>Bridesmaids</h1>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <img src="./images/14-1.png" alt="">
                    <div class="name">
                            Susan Sarkiasan
                    </div>
                    <div class="name-cmt">
                            MAID OF HONOR
                    </div>
                    <div class="icon">
                            <i class="fab fa-facebook-f"></i><i class="fab fa-twitter"></i>
                    </div>
                </div>
                <div class="col-md-4">
                    <img src="./images/14-2.png" alt="">
                    <div class="name">
                            Sara Yordanova
                    </div>
                    <div class="name-cmt">
                            MAID OF HONOR
                    </div>
                    <div class="icon">
                            <i class="fab fa-facebook-f"></i><i class="fab fa-twitter"></i>
                    </div>
                </div>
                <div class="col-md-4">
                    <img src="./images/14-3.png" alt="">
                    <div class="name">
                            Sara Yordanova
                    </div>
                    <div class="name-cmt">
                            MAID OF HONOR
                    </div>
                    <div class="icon">
                            <i class="fab fa-facebook-f"></i><i class="fab fa-twitter"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>