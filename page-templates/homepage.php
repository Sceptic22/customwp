<?php
/**
 * Template name: Homepage
 *
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ConicIT
 */
?>
<?php get_header();?>


<section id="slider-section">
    <!--<div class="container-fluid">-->
        <div id="homepage-carousel" class="carousel slide" data-ride="carousel">

            <div class="carousel-inner">
                <?php
                $slides = new WP_Query(
                  [
                    'post_type'      => "hp_head_slider",
                    "post_status"    => "publish",
                    "posts_per_page" => - 1,
                  ]
                );

                foreach ( $slides->posts as $key => $slide ) {

                  $slide_id = $slide->ID;
                  $name           = get_field( "head_slider_title", $slide_id );
                  $description   = get_field( "head_slider_description", $slide_id );
                  $image          = get_field( "head_slider_image", $slide_id );

                  ?>
                <div class="item <?php if($key == 0):?> active<?php endif;?>">
                    <img class="img-responsive" src="<?php echo $image?>" alt="...">
                    <div class="carousel-caption">
                        <h1><?php echo $description; ?></h1>
                    </div>
                </div>
                  <?php }?>
<!--                <div class="item">-->
<!--                    <img class="img-responsive" src="img/homepage/homepage-slider/Image2.png" alt="...">-->
<!--                    <div class="carousel-caption">-->
<!--                        <h1><strong>DYNAMIC ALERTS<br>-->
<!--                            ON Z/OS</strong> PERFORMANCE<br>-->
<!--BASED ON MACHINE<br>-->
<!--                            LEARNING</h1>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="item">-->
<!--                    <img class="img-responsive" src="img/homepage/homepage-slider/Image3.png" alt="...">-->
<!--                    <div class="carousel-caption">-->
<!--                        <h1><strong>CONTROL</strong> YOUR<br>-->
<!--MAINFRAME Z/OS<br>-->
<!--                            PERFORMANCE</h1>-->
<!--                    </div>-->
<!--                </div>-->
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#homepage-carousel" role="button" data-slide="prev">

            </a>
            <a class="right carousel-control" href="#homepage-carousel" role="button" data-slide="next">

            </a>
        </div> <!-- Carousel -->
    <!--</div>-->
</section>
<section id="nutshell">
    <div class="container">
        <h2>CONICIT IN A <strong>NUTSHELL</strong></h2>
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="nutshell-text">
                <img class="img-responsive" src="<?php echo get_template_directory_uri() . '/'?>img/homepage/nutshell/Icon_1.png" alt="">
                    <h4>PROACTIVE ALERTS ON MAINFRAME
                        PERFORMANCE ANOMALIES -
BASED ON MACHINE LEARNING</h4>
                    <p>ConicIT is studying the normal behavior of your z/OS performance per day and per hour,
                        and is using advanced machine-learning algorithms for recognizing and alerting about mainframe performance
                        anomalies at early stage, much before the performance-problems reach the mainframe capacity</p>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="nutshell-text">
                    <img class="img-responsive" src="<?php echo get_template_directory_uri() . '/'?>img/homepage/nutshell/Icon_2.png" alt="">
                    <h4>VIEW ALL MAINFRAME
                        PERFORMANCE DATA
                        IN ONE SCREEN</h4>
                    <p>Instead of hopping between your different monitors, or having dozen of screens showing
                        different data from different monitors, ConicIT is aggregating all of the z/OS mainframe performance data and
presenting it in one friendly web-application with graphs and tables</p>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="nutshell-text">
                    <img class="img-responsive" src="<?php echo get_template_directory_uri() . '/'?>img/homepage/nutshell/Icon_3.png" alt="">
                    <h4>CONNECTING TO YOUR
                        EXISTING Z/OS PERFORMANCE
                        MONITORS</h4>
                    <p>ConicIT is reading the z/OS mainframe performance data from IBM OmegamonTM, ASG TMONTM, CA SysviewTM, BMC MainviewTM, RMF,
                        TSO, and others</p>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="nutshell-text">
                    <img class="img-responsive" src="<?php echo get_template_directory_uri() . '/'?>img/homepage/nutshell/Icon_4.png" alt="">
                    <h4>ANALYZING THOUSANDS OF MAINFRAME PERFORMANCE METRICS PER MINUTE</h4>
                    <p>ConicIT is reading thousands of mainframe performance variables from your z/OS monitors,
                        storing them, and applying calculations for achieving new insights and calculated metrics</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="hot-news">
    <div class="container">
        <h2><strong>HOT NEWS:</strong> CONICIT & COMPUWARE’S<br>
            STROBE SYNERGISTIC SOLUTION</h2>
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="laptop">
                <img src="<?php echo get_template_directory_uri() . '/'?>img/homepage/hot-news/lap.png" alt="" class="img-responsive">
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <h4>CONICIT IS PROUD TO ANNOUNCE THE NEW
COOPERATION WITH COMPUWARE FOR INTGERATING
                               CONICIT WITH STROBE</h4>
                <p>The new synergistic solution combines the abilities of ConicIT to automatically recognize performance
                    problems with the abilities of Strobe to investigate the problems and advice how to fix them.
ConicIT is using advanced machine learning for recognizing performance anomalies, and whenever
                    such anomaly occurs, it runs Strobe's deep investigation just in time. So the Strobe investigation will
                    run at early stages when the problem exists, including when you're out of office. When Strobe finishes the
                    investigation it sends you a mail with links to the results and the recommendations.</p>
                <p>You're welcome to contact us about it, and to <a href="#">click here to get our short presentation.</a></p>
                <p><a href="#">Click here to see Compuware Strobe</a> - ConicIT integration announcement</p>
            </div>
        </div>
    </div>
</section>
<section id="stories">
    <div class="container">
        <img src="<?php echo get_template_directory_uri() . '/'?>img/homepage/stories/stories-icon1.png" alt="" class="img-responsive stories-logo">
        <h2>
            CONICIT <strong>SUCCESS</strong> STORIES
        </h2>
        <h4>
            Following are few examples of performance problems that ConicIT found on time.<br>
            Thanks to ConicIT early detection of performance anomalies, those problems<br>
            didn’t degrade the service for the users
        </h4>
        <div class="row stories">
            <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="story">
                <img src="<?php echo get_template_directory_uri() . '/'?>img/homepage/stories/stories-icon2.png" alt="" class="img-responsive stories-logo">
                <p>
                    Different customers reported to us that only thanks to ConicIT they recognized situations in which jobs entered a loop
                    (100% CPU), and caused huge load on their system. It's very hard to find these cases without ConicIT, because monitors like TMON,
                    Omegamon, Mainview, and others only show the total-CPU-time since the job started (often it's since IPL). So it's hard for these
                                                                                                                                               monitors and for performance people to understand the real-time CPU at every moment. However, ConicIT calculates the real-time
                    CPU based on the Delta of each job from minute to minute (the amount of CPU time that was changed during each minute).
                    Thus, ConicIT recognizes the real-time CPU, stores its history, and makes statistics about the typical real-time-CPU
                    consumption of each job at each day and hour. ConicIT recognized many situations of jobs with too-high CPU.
In some of these cases the situations were extreme, and without ConicIT it could crash the mainframe.
                </p>
            </div>

                <div class="story">
                    <img src="<?php echo get_template_directory_uri() . '/'?>img/homepage/stories/stories-icon4.png" alt="" class="img-responsive stories-logo">
                    <p>Memory condition of CICS - We know about at least one case that ConicIT recognized a quickly rising memory
                        consumption of CICS at some bank, due to a memory leak. ConicIT recognized it at an early stage
(around 30-40% memory consumption, which was already abnormal for that CICS).
                        Thanks to ConicIT early alert that bank succeed to fix the problem before the CICS crashed
(it was already around 90% when they fixed it).</p>
                </div>


            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="story">
                <img src="<?php echo get_template_directory_uri() . '/'?>img/homepage/stories/stories-icon3.png" alt="" class="img-responsive stories-logo">
                <p>
At few situations that we know of, ConicIT helped to identify situations of resource overload.
                    For example, when CICS transactions-rate was too low because of DB2 problem, ConicIT sent alert about
                    too-low-transactions-rate and also showed that many transactions were waiting for the same resource.
That’s thanks to ConicIT not only following and studying the mainframe behavior, but also creating meaningful
                    aggregations and calculations (in this case – aggregation of the number of transactions that are waiting for each
                                                                                                                                 resource).
                </p>
            </div>

            <div class="story">
                <img src="<?php echo get_template_directory_uri() . '/'?>img/homepage/stories/stories-icon5.png" alt="" class="img-responsive stories-logo">
                <p>There were many situations in which ConicIT sent alerts about DB2 errors and DB2 locks, which helped to identify DB2
                    problems on time and fix them.</p>
            </div>
                <div class="more">
                    <img src="<?php echo get_template_directory_uri() . '/'?>img/homepage/stories/stories-icon6.png" alt="" class="more-img">
                    <img src="<?php echo get_template_directory_uri() . '/'?>img/homepage/stories/stories-icon7.png" alt="" class="more-img">
                    <img src="<?php echo get_template_directory_uri() . '/'?>img/homepage/stories/stories-icon8.png" alt="" class="more-img">
                    <span>...</span>
                    <p>5. In one of the cases, thanks to ConicIT some bank recognized a problem in the procedure of sending data to a
                        3rd party. That bank has a periodical transfer of huge files to some insurance companies.
The bank IT never noticed it, but this transfer caused a huge CPU consumption whenever activateTd.
Thanks to ConicIT they found it, investigated it and quickly found that they used a too high compression
                        level before sending these files, which is very expensive in CPU. So they reduced the compression
                        level and the problem was solved</p>
                    <p>6. In a national branch of Mastercard, only thanks to ConicIT alert, they recognized a
                        situation that their internet connection was too slow. In response they spoke with their
                        internet service provider and found that actually one of two main servers of that internet service provider was
                        down and nobody knew about it!...
                        So Mastercard actually were the first ones to recognize the problem of that big
                        internet service provider (thanks to ConicIT)...</p>
                    <a href="#"><i>MORE...</i></a>
                </div>

            </div>

        </div>

    </div>
</section>
<section id="mainfraime">
    <div class="container">
    <h2>
CONICIT Z/OS PERFORMANCE SUPERVISOR<br>
        <strong>FOR MAINFRAME</strong>
    </h2>
    <p><strong>ConicIT is a software solution for protecting your mainframe from performance problems</strong>
by automatically recognizing them at early stage. ConicIT doesn't require you to set static thresholds for alerts,
        but rather implements dynamic thresholds based on statistics and also applies machine learning to give accurate alerts.
        The alerts are based on automatic recognition of performance anomalies of your z/OS.
    </p>
    <p>ConicIT doesn't replaces your monitors (TMON, Omegamon, Mainview, and others) but rather connects to them and smartly
        analyzes the information they provide. ConicIT is installed on Linux machine (either standalone or SystemZ-Linux),
        and connects to your monitors like a regular user. But while human users are limited by their capacity,
        <strong>ConicIT is checking thousands of performance metrics</strong> per minutes, <strong>creating statistics</strong>
over them, and <strong>recognizing the normal behavior of your mainframe z/OS performance</strong> per each hour of each day.
Once ConicIT recognizes substantial deviation from normal behavior it will send you alerts with the relevant information.
Typically these alerts will arrive at a very early stage, much before your mainframe response times and availability are at risk.
    </p>

    <p><strong>ConicIT also provides web-interface</strong> which allows you to see the information, including aggregated
        information from different monitors and sources, and important calculated information which are very hard for human user to perform.
These calculated variables provides unique information such as summary of CPU and transaction-times per CICS-groups or real
        time CPU of started-tasks in contrary to the CPU-time since IPL which the monitors provide.
    </p>
    <p><strong>ConicIT can and should be used by few groups in the organization:</strong> First it should be used by your performance
        analysts who will be able to analyze the data and the alerts from ConicIT and to gain quick recognition and analysis
        of z/OS performance problems. In addition it can serve as a mainframe tool for the operators - which will get 24/7
        alerts whenever z/OS performance anomaly is recognized. Lastly, it can be used by the system programmers who can use the
        graphs and information provided by ConicIT in order to better analyze mainframe performance
        anomalies related to their applications.
    </p>
    </div>
</section>
<section id="analytics">
    <div class="container">
        <h2>AUTOMATIC Z/OS PERFORMANCE <strong>ANALYTICS</strong></h2>
        <h4>CONICIT PRESENTATION</h4>
        <iframe src="https://www.youtube.com/embed/XhWOZaN7ixI" frameborder="0" gesture="media" allowfullscreen></iframe>
    </div>
</section>
<section id="contact">
   <div class="container-fluid">
       <div class="row">
           <div class="col-md-8 col-sm-8 map">
               <!--<img src="img/homepage/contact/map.png" alt="" class="img-responsive">-->
               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3380.8935540579273!2d34.79293111516422!3d32.07212768119059!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151d4b98b6b3ea7d%3A0x273469688aa7ca2!2zRGVyZWNoIEhhU2hhbG9tIDQsIFRlbCBBdml2LVlhZm8sINCY0LfRgNCw0LjQu9GM!5e0!3m2!1sru!2sua!4v1510242931326"  frameborder="0" style="border:0" allowfullscreen></iframe>
           </div>
           <div class="col-md-4 col-sm-4 contact-form">
               <h3>CONTACT US</h3>
               <span class="adress">4 Hashalom Tel Aviv, Israel</span>
               <span class="mail-adress"> info@conicit.biz</span>
               <form action="#">
                   <input type="text" name="name" placeholder="Name">
                   <input type="email" name="email" placeholder="Email">
                   <textarea name="message" placeholder="Message"></textarea>
                   <button>SEND</button>
               </form>
           </div>
       </div>
   </div>
</section>
<section id="posts">
    <div class="container">
    <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="post-text">
                <img class="img-responsive" src="<?php echo get_template_directory_uri() . '/'?>img/homepage/posts/Icon_1.png" alt="">
                <h4>EARLY DETECTION AND
PROACTIVE ALERTS
                    ON MAINFRAME
                    PERFORMANCE
                    PROBLEM
                    </h4>
                <p>ConicIT presents a solution that automatically recognizes performance problems at their very early stages,
                    allowing you to save valuable time, money, and most important helping you to keep performance within the
                    required SLA levels. ConicIT is using state of the art technology in order to automatically...
                </p>
                <a href="#"><i>learn more</i></a>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="post-text">
                <img class="img-responsive" src="<?php echo get_template_directory_uri() . '/'?>img/homepage/posts/Icon_2.png" alt="">
                <h4>CLEAR
                    VISUALIZATION
                    IS POWER</h4>
                <p>ConicIT presents a solution that automatically recognizes performance problems at their very early stages,
                    allowing you to save valuable time, money, and most important helping you to keep performance within the required
                    SLA levels. ConicIT is using state of the art technology in order to automatically...
                </p>
                <a href="#"><i>learn more</i></a>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="post-text">
                <img class="img-responsive" src="<?php echo get_template_directory_uri() . '/'?>img/homepage/posts/Icon_3.png" alt="">
                <h4>CONICIT STARTS
                    WHERE Z/OS PERFORMANCE MONITORS STOP</h4>
                <p>ConicIT is not coming instead of system Z performance monitors (such as Sysview, TMON, Omegamon, and others).
                    In fact ConicIT usually receives its data from such monitors, by sending them request once a minute, and
                    parsing the required values out of their responses. You can think of ConicIT as your bright personal...
                </p>
                <a href="#"><i>learn more</i></a>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="post-text">
                <img class="img-responsive" src="<?php echo get_template_directory_uri() . '/'?>img/homepage/posts/Icon_4.png" alt="">
                <h4>ANALYZING Z/OS MAINFRAME PERFORMANCE WITHOUT AFFECTING PERFORMANCE</h4>
                <p>In ConicIT we know that system resources are expensive, and we believe that software that aims to protect
                    you from overload must not add load to your system. ConicIT is agent-less and virtually has no effect on
                    the load of your mainframe. ConicIT can run on a separated Linux machine, and...
                </p>
                <a href="#"><i>learn more</i></a>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="post-text">
                <img class="img-responsive" src="<?php echo get_template_directory_uri() . '/'?>img/homepage/posts/Icon_5.png" alt="">
                <h4>SAVE
                    MONEY
                    AND MIPS</h4>
                <p>ConicIT helps you to identify z/OS performance problems much sooner than before and helps you to
                    dramatically reduce the time required for analyzing such problems once recognized. It has three implications:
                    - Wasting less hours per month in analyzing performance problems...</p>
                <a href="#"><i>learn more</i></a>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="post-text">
                <img class="img-responsive" src="<?php echo get_template_directory_uri() . '/'?>img/homepage/posts/Icon_6.png" alt="">
                <h4>CONICIT
                    IS DESIGNED
                    FOR YOU</h4>
                <p>ConicIT is highly customizable. It’s not only that we configure ConicIT to adapt to the configuration of your
                    Z system, but we can add new abilities and tailor ConicIT to support new types of variables and new types
                    of calculation within few days from request. ConicIT comes with a very powerful configuration tool...</p>
                <a href="#"><i>learn more</i></a>
            </div>
        </div>
    </div>
    </div>
</section>
<section id="presentation">
    <div class="container">
        <h2>LETS TALK ABOUT UNIFIED PRESENTATION</h2>

        <div id="presentation-carousel" class="carousel slide" data-ride="carousel">

            <div class="carousel-inner">

                    <?php
                    $presentationSlides = new WP_Query(
                      [
                        'post_type'      => "presentation_slider",
                        "post_status"    => "publish",
                        "posts_per_page" => - 1,
                      ]
                    );

                    foreach ( $presentationSlides->posts as $key => $slide ) {

                      $slide_id = $slide->ID;
                      $name           = get_field( "presentation_slider_title", $slide_id );
                      $description   = get_field( "presentation_slider_description", $slide_id );
                      $text          = get_field( "presentation_slider_text", $slide_id );
                      $image          = get_field( "presentation_slider_image", $slide_id );

                      ?>

                <div class="item <?php if($key == 0):?> active<?php endif;?> col-md-12 col-sm-12 col-xs-12">
                    <div class="col-md-9 col-sm-9 col-xs-12 presentation-img">
                    <img class="img-responsive" src="<?php echo $image?>" alt="...">
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12 presentation-description">
                        <img src="<?php echo get_template_directory_uri() . "/"?>img/homepage/presentation/Icon.png" alt="">
                        <h4><?php echo $description;?></h4>
                        <p><?php echo $text;?>
                        </p>
                    </div>
                </div>
                      <?php }?>
                <div class="item col-md-12 col-sm-12 col-xs-12">
                    <div class="col-md-9 col-sm-9 col-xs-12 presentation-img">
                    <img class="img-responsive" src="img/homepage/presentation/Image.png" alt="...">
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12 presentation-description">
                        <img src="img/homepage/presentation/Icon.png" alt="">
                        <h4>CONICIT AGGREGATES AND SUMMARIZE PERFORMANCE DATA FROM DIFFERENT MONITORS</h4>
                        <p>In this example, ConicIT receives CICS performance from different monitors, summarizes them by groups of
                            CICSes and shows the total CPU and transaction-rates of each group. The detailed information is also available for
  the user to see.
                        </p>
                    </div>
                </div>
                <div class="item col-md-12 col-sm-12 col-xs-12">
                    <div class="col-md-9 col-sm-9 col-xs-12 presentation-img">
                    <img class="img-responsive" src="img/homepage/presentation/Image.png" alt="...">
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12 presentation-description">
                        <img src="img/homepage/presentation/Icon.png" alt="">
                        <h4>CONICIT AGGREGATES AND SUMMARIZE PERFORMANCE DATA FROM DIFFERENT MONITORS</h4>
                        <p>In this example, ConicIT receives CICS performance from different monitors, summarizes them by groups of
                            CICSes and shows the total CPU and transaction-rates of each group. The detailed information is also available for
  the user to see.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#presentation-carousel" role="button" data-slide="prev">

            </a>
            <a class="right carousel-control" href="#presentation-carousel" role="button" data-slide="next">

            </a>
        </div>


    </div>
</section>
<section id="partners">
    <div class="container">
    <h2><strong>OUR PARTNERS</strong> OR <strong>OUR PRODUCTS</strong></h2>
    </div>
</section>

<?php get_footer();?>