<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-15">
        <div class="container">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.4647830431386!2d106.75635931480137!3d10.852210192270116!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752797e321f8e9%3A0xb3ff69197b10ec4f!2zVHLGsOG7nW5nIENhbyDEkOG6s25nIEPDtG5nIG5naOG7hyBUaOG7pyDEkOG7qWM!5e0!3m2!1svi!2s!4v1571624099152!5m2!1svi!2s"
                height="450" style="border:0;" allowfullscreen=""></iframe>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label >Your Name (required)</label>
                        <input type="text" class="form-control" >
                        <label >Your Email (required)</label>
                        <input type="text" class="form-control" >
                        <label >Subject</label>
                        <input type="text" class="form-control" >

                        <label >Your Message
                        </label>
                        <textarea class="form-control"  rows="6"></textarea>
                        <img src="./images/17-1.ico" alt="">
                        <input type="text" class="form-control"  >
                        <a class="btn btn-primary" href="#" role="button">SEND</a>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="col-md-4 pih">
                        <div class="icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="address">
                            London, UK
                        </div>
                        <div class="content">

                            <p>10, Firs Avenue, Muswell Hill,</p>
                            <p>London, N10 3LY</p>
                            <p>Tel: 02 562-958</p>
                            <div class="map">
                                <span >Map <i class="fas fa-long-arrow-alt-right"></i></span>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4 pih">
                        <div class="icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="address">
                            New York, USA
                        </div>
                        <div class="content">

                            <p>430 Civic Center Plaza Richmond,</p>
                            <p>CA 94804</p>
                            <p>Tel: 530-620-6503</p>
                            <div class="map">
                                <span>Map <i class="fas fa-long-arrow-alt-right"></i></span>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4 pih">
                        <div class="icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="address">
                            Tokyo, Japan
                        </div>
                        <div class="content">

                            <p>430 Civic Center Plaza Richmond,</p>
                            <p>CA 94804</p>
                            <p>Tel: 530-620-6503</p>
                            <div class="map">
                                <span>Map <i class="fas fa-long-arrow-alt-right"></i></span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>