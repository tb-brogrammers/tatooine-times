<!DOCTYPE html>
<html>

<head>

  <meta name="description" content="Tatooine Times">
  <meta name="author" content="BROgrammers">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">

  <title>Tatooine Times</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=News+Cycle%7CUbuntu:300,400" rel="stylesheet">

  <!-- Bootstrap compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
    crossorigin="anonymous">

  <!-- Slick carousel -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/app/css/slick.css">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/app/css/main.css">
  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="//localhost:3000/tt/wp-content/uploads/2017/12/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="//localhost:3000/tt/wp-content/uploads/2017/12/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="//localhost:3000/tt/wp-content/uploads/2017/12/favicon-16x16.png">

  <link rel="manifest" href="img/favicons/manifest.json">
  <meta name="theme-color" content="#ffffff">

</head>

<body>
  <div class="tt-slider">
    <div class="lb-images">
      <div class="lb-slides">
        <section class="img-fill">
          <div class="vertical-align">
            <div class="container">
              <div class="row">
                <div class="col-sm-8 col-sm-offset-2 sw-title-cont">
                  <h1 class="sw-title">Right now, on the planet where it all began, far far away....</h1>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="img-fill second-slide">
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-offset-5 col-sm-7 col-md-offset-5 col-md-6 col-lg-offset-5 col-lg-5 slider-cont vertical-align">
                <div class="inner-content">
                  <h2 class="underline">Our Mission</h2>
                  <p>Walking the familiar corridors of a Corellian Corvette, you head towards an escape pod to jettison down
                    to the planet's surface. There you will meet the Tatooine Times team where you can learn about Star Wars
                    collectibles and the latest news and reviews from around the galaxy.</p>
                  <a class="tt-btn" href="#">Coming Soon</a>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="img-fill">
          <div class="card-cont">
          <?php

// check if the repeater field has rows of data
if (have_rows('card')):

    // loop through the rows of data
    while (have_rows('card')) : the_row(); ?>

      
        <div class="overflow-container">
        <div class="card-wrapper" style="background-image: url(<?php the_sub_field('card_background'); ?>)">
          <div class="card-container new-card">
            <div class="card-head">
              <h2><?php the_sub_field('card_title'); ?></h2>
            </div>
            <div class="card-bod">
              <p><?php the_sub_field('card_body'); ?></p>
            </div>
            <div class="card-foot">
              <a class="tt-btn" href="<?php the_sub_field('card_button_link'); ?>"><?php the_sub_field('card_button_text'); ?></a>
            </div>
          </div>
        </div>
      </div>

    <?php endwhile;

else :

    // no rows found

endif;

?>

          </div>

          <!-- Arrows -->
          <div class="arrowLeft">
            <div class="arrow"></div>
          </div>

          <div class="arrowRight">
            <div class="arrow"></div>
          </div>
        </section>
        <section class="img-fill img-tre">
          <!-- Starfield -->
          <div id="starfield"></div>
          <div class="svg-cont">
            <div class="container">
              <div class="row">
                <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-lg-6 col-lg-offset-3">
                  <svg class="tt-logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 616.3 143.37">
                    <title>tt_logo</title>
                    <g id="Text">
                      <g>
                        <g class="tt-logo__title--main">
                          <path class="cls-1" d="M37.15,43.44h30v6.71H55.45V92.53H48.82V50.14H37.15Z" transform="translate(-5 -4.25)" />
                          <path class="cls-1" d="M123,41.55l23.18,51h-7L133.49,80H112.65L107,92.53h-7Zm0,15.32-7.85,17.51H131Z" transform="translate(-5 -4.25)"
                          />
                          <path class="cls-1" d="M177,43.44h30v6.71H195.31V92.53h-6.63V50.14H177Z" transform="translate(-5 -4.25)" />
                          <path class="cls-1" d="M429.29,43.44h6.63V92.53h-6.63Z" transform="translate(-5 -4.25)" />
                          <path class="cls-1" d="M477.89,41.47l36.3,37.31V43.44h6.7V94.8l-36.3-37.15V92.53h-6.71Z" transform="translate(-5 -4.25)"
                          />
                          <path class="cls-1" d="M561.94,43.44h27.21v6.71H568.57V62.4h20.58V69H568.57V85.9h20.58v6.63H561.94Z" transform="translate(-5 -4.25)"
                          />
                        </g>
                        <g class="tt-logo__title--sub">
                          <path class="cls-1" d="M190.47,109.19H213.1v5.05h-8.83v32h-5v-32h-8.8Z" transform="translate(-5 -4.25)" />
                          <path class="cls-1" d="M242.5,109.19h5v37h-5Z" transform="translate(-5 -4.25)" />
                          <path class="cls-1" d="M310,107.65,320.1,146.2h-5L309,122.65l-10.55,25-10.58-25.18-6.21,23.76h-4.93l10.12-38.55,11.59,27.58Z"
                            transform="translate(-5 -4.25)" />
                          <path class="cls-1" d="M348.69,109.19H369.2v5.05H353.69v9.24H369.2v5H353.69V141.2H369.2v5H348.69Z" transform="translate(-5 -4.25)"
                          />
                          <path class="cls-1" d="M421.55,113.32l-4.1,3.28a16.4,16.4,0,0,0-2.94-2.51,7.21,7.21,0,0,0-3.81-.83,7.34,7.34,0,0,0-4.42,1.23,3.76,3.76,0,0,0-1.7,3.17,3.85,3.85,0,0,0,1.48,3,20.23,20.23,0,0,0,5,2.82,36,36,0,0,1,5.55,2.85,14.17,14.17,0,0,1,3.26,2.92,11.49,11.49,0,0,1,1.9,3.37,11.18,11.18,0,0,1,.62,3.74,10.55,10.55,0,0,1-3.36,7.87,11.24,11.24,0,0,1-8.12,3.25,13.76,13.76,0,0,1-8.21-2.54,15.94,15.94,0,0,1-5.48-7.63l5.06-1.42q2.76,6.25,8.45,6.25a6.59,6.59,0,0,0,4.59-1.65,5.37,5.37,0,0,0,1.83-4.17,5.64,5.64,0,0,0-1-3,8.56,8.56,0,0,0-2.38-2.5,25.48,25.48,0,0,0-4.53-2.26,32.11,32.11,0,0,1-4.78-2.33,12.33,12.33,0,0,1-2.9-2.53,10.67,10.67,0,0,1-1.79-2.92,8.44,8.44,0,0,1-.57-3.11,8.7,8.7,0,0,1,3.2-6.78,11.36,11.36,0,0,1,7.76-2.8,15.72,15.72,0,0,1,6.13,1.31A12.59,12.59,0,0,1,421.55,113.32Z"
                            transform="translate(-5 -4.25)" />
                        </g>
                      </g>
                    </g>
                    <g id="Twin_Suns" data-name="Twin Suns">
                      <ellipse class="tt-logo__sun tt-logo__sun--first" cx="357.02" cy="63.79" rx="32.94" ry="31.9" />
                      <ellipse class="tt-logo__sun tt-logo__sun--second" cx="264.81" cy="31.9" rx="32.94" ry="31.9" />
                    </g>
                    <g id="Border">
                      <path class="tt-logo__border tt-logo__border--right" d="M316.22,26.47H613.15a6,6,0,0,1,6,6V103.8a6,6,0,0,1-6,6H435.91" transform="translate(-5 -4.25)"
                      />
                      <path class="tt-logo__border tt-logo__border--left" d="M223.41,26.47H13.15a6,6,0,0,0-6,6V103.8a6,6,0,0,0,6,6H177" transform="translate(-5 -4.25)"
                      />
                    </g>
                  </svg>
                  <ul class="social">
                    <li>
                      <a class="social-icon" href="https://facebook.com/tatooinetimes" target="_blank">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li>
                      <a class="social-icon" href="mailto:tatooinetimes@gmail.com" target="_top">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li>
                      <a class="social-icon" href="https://twitter.com/tatooine_times" target="_blank">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <footer class="orbit">
            <!-- <div class="container">
              <div class="row">
                <div class="col-xs-8 col-xs-offset-2"> -->
            <p class="disclaimer">Tatooine Times is a fun celebration of Star Wars and all related media, but is no way connected to Disney, Lucasfilm
              or any of their affiliates. Content is carefully selected in an attempt to not infringe any copyright or IP.
              Please contact us if there is a contravention that needs to be addressed. Star Wars is owned by Disney and
              we thank them for supporting the fan community</p>
            <!-- </div>
              </div>
            </div> -->
          </footer>
        </section>
      </div>
    </div>
  </div>

  <div class="arrow-scroll">
    <div class="arrow"></div>
  </div>

  <!-- Vendor JS -->
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <!-- Mousewheel -->
  <script src="vendor/mousewheel/jquery.mousewheel.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.mousewheel.min.js"></script>

  <!-- Browser Detection -->
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.browser.detection.min.js"></script>
  <!-- Slick Carousel -->
  <script src="<?php echo get_template_directory_uri(); ?>/js/slick.min.js"></script>


  <!-- particles.js lib - https://github.com/VincentGarreau/particles.js -->
  <script src="<?php echo get_template_directory_uri(); ?>/js/particles.min.js"></script>

  <script src="https://use.fontawesome.com/bb6bf5d06e.js"></script>

  <!-- Custom JS -->
  <script src="<?php echo get_template_directory_uri(); ?>/js/custom.js"></script>
</body>

</html>