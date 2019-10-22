<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-19">
        <div class="container">

            <div class="title">
                Guestbook
            </div>
            <div class="cmt">
                Leave your wishes, comments and thoughts at this page!
            </div>
            <div class="borderlr">
                <div class="box">

                    <div class="line-left"></div>
                    <div class="sayhi">SAY HI</div>
                    <div class="line-right"></div>
                </div>
               <div class="lol">
                <div class="container">
                    <div class="form-group">

                        <textarea class="form-control" rows="5"
                            placeholder="Write us something nice or just a funny joke..."></textarea>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">

                                <input type="text" class="form-control" placeholder="John Doe">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">

                                <input type="text" class="form-control" aria-describedby="helpId"  placeholder="email@example.com">
                                <small id="helpId" class="form-text text-muted">Your email address will not be published.</small>
                            </div>
                            
                        </div>
                        
                    </div>
                    
                    <div class="row">
                        <div class="col-md-5"></div>
                        <div class="col-md-2">
                                <a  class="btn btn-primary" href="#" role="button">ADD MESSAGE</a>
                        </div>
                        <div class="col-md-5"></div>
                    </div>
                </div>
               
                   
               
               </div>
                
            </div>

        </div>
    </div>