<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type_3">
    <div class="container">
        <div class="row">
            <div class="col-md-3 img-ct">
                <img class="img-fluid" src="./images/3-2.png" alt="">
                <div class="name">
                    Sarah Bellucci
                </div>
                <div class="cmt">
                    Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut
                    labore et dolore magna aliqua. Ut enim ad consequatur quis nostrud exercitation ullamco laboris nisi
                    ut aliquip ex ea commodo consequat…
                </div>
                <a href="#"><i class="fab fa-facebook"></i></a>
            </div>
            <div class="col-md-6">
                <div class="dmy">
                    <br>
                    <p>THURSDAY</p>
                    <p>31 OCTOBER 2021</p>

                    <br>
                    <br>
                    <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-width="100"
                        data-layout="standard" data-action="like" data-size="small" data-show-faces="true"
                        data-share="true"></div>
                </div>
            </div>
            <div class="col-md-3">
                <img class="img-fluid" src="./images/3-1.png" alt="">
                <div class="name">
                    Nick Smith
                </div>
                <div class="cmt">
                    Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut
                    labore et dolore magna aliqua. Ut enim ad consequatur quis nostrud exercitation ullamco laboris nisi
                    ut aliquip ex ea commodo consequat…
                </div>
                <a href="#"><i class="fab fa-facebook"></i></a>
            </div>
        </div>
    </div>
</div>

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v4.0"></script>