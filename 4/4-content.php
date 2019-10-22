<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-4">
        
        <div class="container">
            <div class="linemain">
                <div class="line-left">

                </div>
                <div class="just">
                    Just
                </div>
                <div class="line-right">

                </div>
            </div>

            <div class="time">
                <p class="okmen" id="dstime"></p>
                <div class="nameTime">
                    <div class="row">
                        <div class="col-md-3" >

                        </div>
                        <div class="col-md-6" >
                           <div class="row">
                               <div class="col-md-3">Days</div>
                               <div class="col-md-3 fixH">Hours</div>
                               <div class="col-md-3 fixM">Minutes</div>
                               <div class="col-md-3 fixS">Seconds</div>
                           </div>
                        </div>
                        <div class="col-md-3" >
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="getmarried">
                    until we get married!
            </div>

        </div>

    </div>
    <script src="./js/4.js"></script>
    </div>