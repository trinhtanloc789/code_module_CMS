<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-27">
        <div class="container">
            <div class="row">
                <div class="text">
                    <h3>“Every mountain top is within reach if you just keep climbing.”</h3>
                    <h5>- Richard James Molloy</h5>
                </div>
            </div>
        </div>
</div>