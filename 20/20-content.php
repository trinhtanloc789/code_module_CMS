<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-20">
    <div class="container">
        <div class="box">
            <div class="line-left"></div>
            <div class="people">
                <a href="#">4 People say Hi!</a>
            </div>
            <div class="line-right"></div>
        </div>


        <!-- <div class="row">
                <div class="col-md-4 colsize">
                    <div class="name">Vera</div>
                    <div class="time">JULY 25, 2015</div>
                    <p>This is just another comment!</p>
                </div>
                <div class="col-md-4 colsize">
                    <div class="name">John</div>
                    <div class="time">JULY 25, 2015</div>
                    <p>This is just another comment!</p>
                </div>
                <div class="col-md-4 colsize">
                    <div class="name">Nikolay</div>
                    <div class="time">JULY 25, 2015</div>
                    <p>This is just another comment!</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 colsize">
                    <div class="name">Franc</div>
                    <div class="time">JULY 25, 2015</div>
                    <p>This is a test</p>
                </div>
            </div> -->

        <div class="wrap">
            <div class="colsize">
                <div class="name">Franc</div>
                <div class="time">JULY 25, 2015</div>
                <p>This is a test</p>
            </div>
            <div class="colsize">
                <div class="name">Franc</div>
                <div class="time">JULY 25, 2015</div>
                <p>This is a test</p>
            </div>
            <div class="colsize">
                <div class="name">Franc</div>
                <div class="time">JULY 25, 2015</div>
                <p>This is a test</p>
            </div>
        </div>
        <div class="wrap2">
            <div class="colsize2">
                <div class="name">Franc</div>
                <div class="time">JULY 25, 2015</div>
                <p>This is a test</p>
            </div>
            <div class="colsize3"></div>
            <div class="colsize3"></div>
            
        </div>
    </div>


</div>