<?
// gzip compression
if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start();

//get the data
$data = @file_get_contents("http://rob-s-williams.com/projects.json");
$projects = json_decode($data);
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Rob S Williams - Graphic Designer</title>
        <meta name="description" content="Portfolio for Rob S Williams" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />


        <!-- for Facebook -->          
        <meta property="og:title" content="Rob S Williams - Graphic Designer" />
        <meta property="og:type" content="article" />
        <meta property="og:image" content="http://rob-s-williams.com/img/projects/2_EINE/BENEINE-1.jpg" />
        <meta property="og:url" content="http://rob-s-williams.com/" />
        <meta property="og:description" content="Portfolio for a creative, passionate, enthusiastic, motivational Graphic Designer with ten years experience. " />

        <!-- for Twitter -->          
        <meta name="twitter:card" content="summary" />
        <meta name="twitter:title" content="Rob S Williams - Graphic Designer" />
        <meta name="twitter:description" content="http://rob-s-williams.com/img/projects/2_EINE/BENEINE-1.jpg" />
        <meta name="twitter:image" content="Portfolio for a creative, passionate, enthusiastic, motivational Graphic Designer with ten years experience. " />


        <link rel="stylesheet" href="css/style.css">
        <link rel="icon" href="favicon.ico">
        <link href='http://fonts.googleapis.com/css?family=Raleway:500' rel='stylesheet' type='text/css'>
        <script src="scripts/vendor/modernizr-2.6.2.min.js"></script>
        <!--
        <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.js'></script>
        <script src='video/src/okvideo.js'></script>
        -->
    </head>
    <body class="rob-williams">
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <nav class="vertical-carousel-navigation">
            <ul>
                <li><a href="#" data-slide-num="0" class="activated"></a></li>
                <li><a href="#" data-slide-num="1" class=""></a></li>
                <li><a href="#" data-slide-num="2" class=""></a></li>
                <li><a href="#" data-slide-num="3" class=""></a></li>
                <li><a href="#" data-slide-num="4" class=""></a></li>
                <li><a href="#" data-slide-num="5" class=""></a></li>
                <li><a href="#" data-slide-num="6" class=""></a></li>
            </ul>
        </nav>
        
        <div id="wrapper" class="snappish-wrapper">
            <ul class="rw-content snappish-main snappish-6-slides" style="-webkit-transform: translate3d(0px, 0%, 0px);">
                <li class="rw-page slide-1 snappish-slide activated">
                    <div class="homepage">
                        <ul class="rw-main-menu">
                            <li class="mm-item"><a href="#" class="i-projects">Projects</a></li>
                            <li class="mm-item"><a href="#" class="i-about">About</a></li>
                            <li class="mm-item"><a href="#" class="i-contact">Contact</a></li>
                        </ul>
                        <div class="mm-info">
                            <div class="projects-content">
                                <ul class="pc-projects">
                                    <li class="pc-project"><a href="#" data-slide-num="1">Ben Eine &mdash; Identity</a></li>
                                    <li class="pc-project"><a href="#" data-slide-num="2">Sculptivate &mdash; Identity</a></li>
                                    <li class="pc-project"><a href="#" data-slide-num="3">Invadercade &mdash; Art direction &amp; Film</a></li>
                                    <li class="pc-project"><a href="#" data-slide-num="4">Final Fantasy &mdash; Advertising</a></li>
                                    <li class="pc-project"><a href="#" data-slide-num="5">Fallout 3 &mdash; Exhibition Design</a></li>
                                    <li class="pc-project"><a href="#" data-slide-num="6">Craig &mdash; Identity</a></li>
                                </ul>
                            </div>
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
                                    <li class="sml-item"><a href="https://twitter.com/rob_sc_williams" target="_blank">Twitter</a></li>
                                    <li class="sml-item"><a href="http://instagram.com/mr_rob_otter" target="_blank">Instagram</a></li>
                                    <li class="sml-item"><a href="http://www.pinterest.com/robscwilliams/" target="_blank">Pintrest</a></li>
                                    <li class="sml-item"><a href="http://rob-s-williams.tumblr.com" target="_blank">Tumblr</a></li>
                                    <li class="sml-item"><a href="http://uk.linkedin.com/in/robswilliams" target="_blank">LinkedIn</a></li>
                                </ul>
                            </div>

                            <p><a href="#" class="mm-close">Close</a></p>
                        </div>

                        <div class="hp-details">
                            <h1><span class="visuallyhidden">Rob S Williams</span><img src="img/RSW_LOGO.png" alt="Rob S Williams" /></h1>
                            <h2 class="hpd-tagline">I’m a London based graphic designer<br/>with over ten years experience</h2>
                            <p class="hpd-email-cta"><a href="mailto:hello@rob-s-williams.com">hello<span>@</span>rob-s-williams.com</a></p>
                        </div>

                        <p class="hpd-view-projects"><a href="#" id="home-view-projects" class="view-projects" data-slide-num="1">View Projects</a></p>
                        <a href="#" class="view-projects" data-slide-num="1"><div class="arrow-down"></div></a>
                    </div>
                </li><? 
                foreach($projects as $key => $project) :?>
                    <li class="rw-page slide-<?=$project->id + 1 ?> snappish-slide">    
                        <div class="project" id="<?=$project->name_identifer ?>">
                            <ul class="pjt-menu">
                                <li class="pm-item"><a href="#" class="pm-project-info">Project Info</a></li>
                                <? if($project->id !== count($projects)):?>
                                    <li class="pm-item"><a href="#" class="pm-next-project" data-slide-num="<?=$project->id + 1?>">Next Project</a></li>
                                <? else : ?>
                                    <li class="pm-item"><a href="#" data-slide-num="0" class="pm-first-project">Back to top</a></li>
                                <? endif;?>
                            </ul>
                            <div class="pjt-info">
                                <div class="pjt-info-content">
                                    <h3><?=$project->name ?> - <?=$project->category ?></h3>
                                    <?=$project->description ?>
                                    <? if($project->link !== null) : ?>
                                        <p><a href="<?=$project->link ?>" target="_blank"><?= str_replace("http://", "", $project->link) ?></a></p>
                                    <? endif; ?>
                                    <p><a href="#" class="pi-close">Close</a></p>
                                </div>
                            </div>
                            <? //if($project->video == null) : ?>
                                <div class="carousel" data-transition="slide"><?
                                    foreach($project->images as $key => $image) :?>
                                        <div class="image portfolio-<?=$key ?>"></div><?
                                    endforeach;?>
                                </div>
                            <? /*else : ?>
                                <div class="video"></div>
                                <script type="text/javascript">
                                    $(function(){
                                        $.okvideo({ source: "<?= $project->video ?>", 
                                            volume: 10, 
                                            loop: true,
                                            hd: true, 
                                            adproof: true,
                                            annotations: true,
                                            autoplay: true
                                        });
                                    });
                                </script>
                            <? endif;*/?>
                            <div class="pjt-details"></div>
                        </div>
                    </li><? 
                endforeach;?>
            </ul> 
        </div>
        <script data-main="scripts/minified/bootstrap" src="scripts/require.js"></script>
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
