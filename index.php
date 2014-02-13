<?
$data = @file_get_contents("http://rob-s-williams.com/projects.json");
$projects = json_decode($data);
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Rob Williams - Graphic Designer</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link href='http://fonts.googleapis.com/css?family=Raleway:500' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/responsive-carousel.css" media="screen">
        <link rel="stylesheet" href="css/responsive-carousel.slide.css" media="screen">
        <script src="scripts/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body class="rob-williams">
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <ul class="rw-content">
            <li class="rw-page">
                <div class="homepage">
                    <ul class="rw-main-menu">
                        <li class="mm-item"><a href="#" class="i-projects">Projects</a></li>
                        <li class="mm-item"><a href="#" class="i-about">About</a></li>
                        <li class="mm-item"><a href="#" class="i-contact">Contact</a></li>
                    </ul>
                    <div class="mm-info">
                        <div class="about-content">
                            <p>I am creative, passionate, enthusiastic, motivational and have ten years experience in Graphic Design. </p>
                            <p>I specialise in Art Direction, Print, Moving Image, Design for Web, Typography, Identity, Branding  and Brand Strategy.</p> 
                            <p>Experienced in directing a small creative team, production and post-production of shoots for photography, moving image and commercials.</p>

                            <p>Program Experience: InDesign, Illustrator, Photoshop, Powerpoint, Keynote, Word, Pages, Excel, Numbers.  Basic / Working Understanding of:  After Effects, Premier, Final Cut Pro, Google Sketch-Up, HTML.</p>
                            <p><a href="ROB_S_WILLIAMS_CV_2014.pdf">Download CV</a></p>
                        </div>
                        <div class="contact-content">
                            <p>If you want to get in touch or have any questions please email me at:</p>
                            <p><a href="mailto:hello@rob-s-williams.com">hello@rob-s-williams.com</a></p>
                            <p>Or call me on:<br>+44 (0)7590 603 665</p>
                            <p>Other Rob related sites are:</p>
                            <ul class="cc-socialmedialinks">
                                <li class="sml-item"><a href="https://twitter.com/rob_sc_williams">Twitter</a></li>
                                <li class="sml-item"><a href="http://instagram.com/mr_rob_otter">Instagram</a></li>
                                <li class="sml-item"><a href="http://www.pinterest.com/robscwilliams/">Pintrest</a></li>
                                <li class="sml-item"><a href="http://rob-s-williams.tumblr.com">Tumblr</a></li>
                                <li class="sml-item"><a href="http://uk.linkedin.com/in/robswilliams">LinkedIn</a></li>
                            </ul>
                        </div>

                        <p><a href="#" class="mm-close">Close</a></p>
                    </div>

                    <div class="hp-details">
                        <h1><span class="visuallyhidden">Rob S Williams</span><img src="img/RSW_LOGO.png" alt="Rob S Williams" /></h1>
                        <h2 class="hpd-tagline">I’m a London based Graphic Designer<br/>with over ten years experience</h2>
                        <p class="hpd-email-cta"><a href="mailto:hello@rob-s-williams.com">hello@rob-s-williams.com</a></p>
                        <p class="hpd-view-projects"><a href="#" id="home-view-projects">View Projects</a></p>
                    </div>
                </div>
            </li><? 
            foreach($projects as $key => $project) :?>
            <li class="rw-page">    
                <div class="project" id="<?=$project->name_identifer ?>">
                    <ul class="pjt-menu">
                        <li class="pm-item"><a href="#" class="pm-project-info">Project Info</a></li>
                        <? if($project->id !== count($projects)):?>
                            <li class="pm-item"><a href="#<?=$projects[$key+1]->name_identifer?>" class="pm-next-project">Next Project</a></li>
                        <? endif;?>
                    </ul>
                    <div class="pjt-info">
                        <div class="pjt-info-content">
                            <p><?=$project->name ?> - <?=$project->category ?></p>
                            <?=$project->description ?>
                            <p><a href="<?=$project->link ?>" target="_blank"><?=$project->link ?></p>
                            <p><a href="#" class="pi-close">Close</a></p>
                        </div>
                    </div>

                    <div class="carousel" data-transition="slide"><?
                        foreach($project->images as $key => $image) :?>
                            <div class="image portfolio-<?=$key ?>"></div><?
                        endforeach;?>
                    </div>
                    <div class="pjt-details">
                        <img src="<?=$project->title_graphic?>" alt="<?=$project->name ?>" />
                    </div>
                </div>
            </li><? 
            endforeach;?>
        </ul>
        <!--
        <div class="project" id="project2">
            <h1>Video example</h1>
            <iframe src="//player.vimeo.com/video/36101977?title=0&amp;byline=0&amp;portrait=0&badge=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
        </div>      
        -->  

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="scripts/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script data-main="scripts/main" src="scripts/require.js"></script>

        <script src="scripts/modules/responsive-carousel.js"></script>
        <!--<script src="scripts/modules/responsive-carousel.touch.js"></script>
        <script src="scripts/modules/responsive-carousel.drag.js"></script>-->
        <script src="scripts/modules/responsive-carousel.autoinit.js"></script>

        <!-- SnapScroll Core Files -->
        <script type="text/javascript" src="scripts/modules/jquery.scroll_to.js"></script>
        <script type="text/javascript" src="scripts/modules/jquery.snapscroll.js"></script>
        <script type="text/javascript" src="scripts/modules/demo.js"></script>

        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-47506168-1');ga('send','pageview');
        </script>

    </body>
</html>
