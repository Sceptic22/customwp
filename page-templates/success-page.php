<?php
/**
 * Template name: Success stories
 *
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 *
 *
 * @package ConicIT
 */?>

<?php get_header();?>


<?php
$stories = new WP_Query(
  [
    'post_type'      => "success_story",
    "post_status"    => "publish",
    "posts_per_page" => - 1,
  ]
);

foreach ( $stories->posts as $key => $story ) {
$story_id = $story->ID;
  $text          = get_field( "success_story_text", $story_id );
  $image          = get_field( "success_story_image", $story_id );

?>
<?php }?>

<section id="stories-page">
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
            <span>1.</span>
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
            <span>1.</span>
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
          <span>1.</span>
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
            <span>2.</span>
            <p>There were many situations in which ConicIT sent alerts about DB2 errors and DB2 locks, which helped to identify DB2
            problems on time and fix them.</p>
        </div>

      </div>

    </div>

  </div>



</section>
<div class="read_more">
  <div class="container">
  <a href="#">read more about conicit <strong>mainframe<br> performance analytics</strong></a>
  </div>
</div>


<?php get_footer();?>
