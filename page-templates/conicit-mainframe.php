<?php
/**
 * Template name: Conic for Mainframe
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
<section id="mainframe">
  <div class="container">
    <h2>CONICIT <strong>FOR MAINFRAME</strong></h2>

    <h4>INTELLIGENT SUPERVISOR FOR YOUR MAINFRAME PERFORMANCE</h4>

  <div class="row">
    <div class="col-md-6">
      <p>
        With your mainframe machine controlling the core of your business, it’s critical for you to recognize performance
        issues as soon as they start to evolve. The sooner you know about a problem, the better chances you have to prevent
        any bad influence on your business. With traditional monitors you often know about a problem only when it already
        has a prominent effect on your system. Even if you’re using the best monitors for your need it’s not feasible for
        your personnel to constantly watch hundreds of monitor pages. On the other hand, putting static thresholds is not
        practical and leads to putting thresholds that are too high. Defining reasonable static thresholds is not feasible
        and leads to thousands of alerts per day.
      </p>
      <p>
        ConicIT brings a solution which is based on advanced machine-learning technology which automatically studies the normal
        behavior of thousands performance metrics. ConicIT is analyzing the behavior of each variable based on the day of the
        week and the hour of the day, and creating a profile that represents the expected behavior of each metric. On top of
        that ConicIT applies state of the art algorithms for real time recognition of situations where the metrics clearly
        exceed their normal behavior (with either too high or too low values). This provides ConicIT the ability to recognize
        anomaly in performance metrics even before pick time and much before the problem effects your service level.
      </p>
    </div>
    <div class="col-md-6">
      <p>
        ConicIT customers gain a peace of mind, knowing that ConicIT is constantly watching their system, and knowing
        that ConicIT will provide them plenty of information for analyzing the root cause of a problem once it appears.
        ConicIT for Mainframe allows your IT stuff to be more effective in recognizing and analyzing performance problems,
        and also allows them to improve efficiency of existing processes, thus reducing the overall load on your mainframe.
        Often there are processes that are using extremely excessive resources, but it’s very hard to trace such processes
        without ConicIT, because these processes might not cause critical effect on the SLA. However recognizing such problems
        and fixing them improves the overall performance of your system.
      </p>
    </div>
  </div>

    <h4>INTELLIGENT SUPERVISOR FOR YOUR MAINFRAME PERFORMANCE</h4>

      <div class="row">
        <div class="col-md-6">
          <p>
            ConicIT is not intending to replace your original monitors, but actually comes on top of them. Monitors are critical
            tools for mainframe staff. They are used to manage business critical applications, transactions, databases,
            operations, performance and availability. Without monitors staff is blind to the state of their systems,
            and that is why you won’t find a mainframe shop without its bevy of monitors. Monitors are how mainframe
            staff gets their job done.
          </p>
          <p>
            However, even with all their utility, mainframe monitors have three major drawbacks:
            <ul>
              <li>1) No historical data capabilities</li>
              <li>2) No cross monitor integration (e.g. one monitor for CICS, another for DB2, and yet another for z/OS)</li>
              <li>3) No built-in deep analysis to discover and predict performance problems</li>
            </ul>
          </p>
        </div>
        <div class="col-md-6">
        <p>
          ConicIT, the leader in mainframe behavioral analysis and predictive analytics is changing that with ConicIT for
          Mainframe and with the latest announcement of ConicIT for Splunk™.
        </p>
        </div>
      </div>

          <h4>ADVANTAGES OF CONICIT FOR MAINFRAME</h4>
    <div class="row">
      <div class="col-md-6">
        <h5>State of the art proven system
          for performance anomaly detection</h5>

        <p>
          ConicIT is constantly reading thousands of performance metrics from your mainframe monitors, analyzing them,
          and applying unique machine learning algorithms for studying and predicting the normal behavior of the metrics
          at each day and hour. Based on these algorithms ConicIT recognizes when something goes wrong, and sends proactive
          alerts about performance issues much before they affect your business. Along with the alerts, ConicIT provides
          information which allows you to quickly trace the problems and to solve them.
        </p>
        <h5>ConicIT also generates calculated-variables</h5>
        <p>
          ConicIT has endless abilities for processing the data and for creating calculated metrics.
          ConicIT can process and alert on both raw metrics from the mainframe and on calculated metrics.
          Such metrics can be ratios between variables, rate in which some variables are changing (e.g. CPU-Time),
          or any other calculated variables that you need. For example, if your monitor provides CPU-Time from IPL
          for each started-task, ConicIT can calculate the delta CPU-Time during each minute, and thus provide the
          real-time CPU consumption of that started-task. Another example is aggregation of data about resources usage
          and showing how many transactions are waiting for each resource.
        </p>
        <h5>Unified UI for watching
          all of your performance data</h5>
        <p>
          With ConicIT you can see clear presentation of all performance graphs and tables, which can originate from different
          systems. You can easily see historical variables, see the normal behavior versus the actual behavior of each metric,
          compare between different metrics, and see detailed information about your system when you need to analyze some problem.
        </p>
        <h5>Alerts from ConicIT to various targets</h5>
        <p>
          ConicIT provides few channels for receiving its proactive performance alerts. You can receive these alerts through
          any of the following channels:
          <ul>
          <li>
            - Windows application running on your system tray and popping up any new alert
          </li>
          <li>
            - Alerts to SplunkTM
          </li>
          <li>
            - SNMP traps to your SNMP server
          </li>
          <li>
            - Alerts file
          </li>
          <li>
            - Web-service
          </li>
        </ul>
        </p>
      </div>
      <div class="col-md-6">
        <h5>No agent is required</h5>
        <p>
          ConicIT is connecting to your mainframe as a user with limited permissions, through TN3270 protocol,
          and reading information directly from your monitors (TMON, Sysview, Omegamon, MainView, TSO, and others).
          No agent is installed on your mainframe
        </p>
        <h5>Quick and easy configuration</h5>
        <p>

          ConicIT is easy to configure, since it provides easy way to parse mainframe screens, and allow easy
          application of any required logic and calculations. Since ConicIT has powerful algorithms for recognizing
          anomalies, you don’t need to investigate and define static threshold.

        </p>
        <h5>Fetching data from various sources</h5>
        <p>

        ConicIT is not limited for mainframe data, and can bring data from various sources in order to analyze and present the data.
        </p>
        <h5>Analyzing performance
          without affecting performance</h5>
        <p>

          ConicIT is installed on an off-system Linux server (available also for zLinux), and only interacts with the monitors
          on your mainframe, thus the effect of ConicIT on your mainframe is similar for the effect of regular user paging
          through specific pages in the monitors interface. Due to its architecture, ConicIT doesn’t need to install any
          agent, and performs all of its calculations on the Linux box, without affecting your mainframe performance.



        </p>
      </div>
    </div>
  </div>
</section>

<?php get_footer();?>


