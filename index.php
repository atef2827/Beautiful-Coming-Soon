<?php
/**
 * template name: Coming Soon
*/
?>
<html data-wf-domain="r2c.webflow.io" data-wf-page="6426b8b103f60892fb04d639" data-wf-site="6426b8b003f608a58804d635"
  class="w-mod-js wf-dmsans-n4-active wf-dmsans-n7-active wf-dmsans-n5-active wf-active">

<head>
  <style>
    .wf-force-outline-none[tabindex="-1"]:focus {
      outline: none;
    }
	  @media screen and (max-width: 680px){
			 .page-wrap { padding-bottom: 300px !important; }  
	  }
	  body .w-webflow-badge { display: none !important; }
  </style>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta charset="utf-8">
  <title>Coming Soon</title>
  <meta content="" name="description">
  <meta content="" property="og:title">
  <meta content="" property="og:description">
  <link href="https://uploads-ssl.webflow.com/6426b8b003f608a58804d635/css/r2c.webflow.4343a0e5a.css" rel="stylesheet"
    type="text/css">
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=DM+Sans:regular,500,700" media="all">
  <script type="text/javascript">WebFont.load({ google: { families: ["DM Sans:regular,500,700"] } });</script>
  <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif]-->
  <script
    type="text/javascript">!function (o, c) { var n = c.documentElement, t = " w-mod-"; n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch") }(window, document);</script>
  <link href="https://uploads-ssl.webflow.com/6426b8b003f608a58804d635/6426b8b103f608765104d646_favicon.png"
    rel="shortcut icon" type="image/x-icon">
  <link href="https://uploads-ssl.webflow.com/6426b8b003f608a58804d635/6426b8b103f60818a104d647_Webclip.png"
    rel="apple-touch-icon">
</head>

<body data-new-gr-c-s-check-loaded="14.1102.0" data-gr-ext-installed="" cz-shortcut-listen="true">
  <div class="page-wrap">
    <div class="container">
      <div class="w-layout-grid content-grid">
        <div class="page-content">
<!-- 			<img
            src="/wp-content/uploads/2019/11/r-logo5.png"
            alt="" class="logo"> -->
          <div class="title">Hang tight.</div>
          <h1 class="display-heading">Coming Soon.</h1>
          <p class="paragraph">We are the winning SEO agency and if you need to get in touch please shoot your email to info@reach2convert.com.</p>
          <div class="countdown-wrap">
            <div class="w-layout-grid countdown-grid">
              <div class="column-block">
                <h1 id="days" class="heading-2">--</h1>
                <div class="text-block">Days</div>
              </div>
              <div class="column-block">
                <h1 id="hours" class="heading-2">--</h1>
                <div class="text-block">Hours</div>
              </div>
              <div class="column-block">
                <h1 id="minutes" class="heading-2">--</h1>
                <div class="text-block">Minutes</div>
              </div>
              <div class="column-block">
                <h1 id="seconds" class="heading-2">--</h1>
                <div class="text-block">Seconds</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><img src="https://uploads-ssl.webflow.com/6426b8b003f608a58804d635/6426b8b103f6084afa04d640_Asset%2001.png"
      alt="" class="person">
  </div>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=6426b8b003f608a58804d635"
    type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
    crossorigin="anonymous"></script>
  <script src="https://uploads-ssl.webflow.com/6426b8b003f608a58804d635/js/webflow.b5aa23157.js"
    type="text/javascript"></script>
  <!--[if lte IE 9]><script src="//cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
  <script>
    // Original Pen by Matt Smith 
    const second = 1000,
      minute = second * 60,
      hour = minute * 60,
      day = hour * 24;

    // Count down until this date   
    let countDown = new Date('Oct 05, 2023 00:00:00').getTime(),
      x = setInterval(function () {

        let now = new Date().getTime(),
          distance = countDown - now;

        document.getElementById('days').innerText = Math.floor(distance / (day)),
          document.getElementById('hours').innerText = Math.floor((distance % (day)) / (hour)),
          document.getElementById('minutes').innerText = Math.floor((distance % (hour)) / (minute)),
          document.getElementById('seconds').innerText = Math.floor((distance % (minute)) / second);

        //do something later when date is reached
        //if (distance < 0) {
        //  clearInterval(x);
        //  'IT'S MY BIRTHDAY!;
        //}

      }, second)

      jQuery(document).ready(($) => {
        setTimeout(() => {
          $("a.w-webflow-badge").remove();
        }, 1000);
      });
  </script>
</body><grammarly-desktop-integration data-grammarly-shadow-root="true"></grammarly-desktop-integration>

</html>