<?php
/**
 *
 * Template Name: Home Page
 *
**/

get_header(); ?>
<style>

.btn1 {
  border: none;
  font-family: inherit;
  font-size: inherit;
  color: inherit;
  background: none;
  cursor: pointer;
  padding: 10px 60px;
  display: inline-block;
  text-transform: uppercase;
  letter-spacing: 1px;
  font-weight: 700;
  outline: none;
  position: relative;
  -webkit-transition: all 0.3s;
  -moz-transition: all 0.3s;
  transition: all 0.3s;
  border-radius: 0;
  width: 98%;
}

.btn1-action {
  background: transparent;
  border: 2px solid #fff;
  color: #fff;
  text-shadow: 2px 2px 2px rgba(125, 125, 125, 1);
}

.btn1-action:hover, .btn1-action:active, .btn1-action:focus {
    color: #000 !important;
    background: #ffd100 !important;
    border: 2px solid #b39200 !important;
    text-shadow: none;
}

.showcase {
    position: relative;
}

.image {
  opacity: 1;
  display: block;
  width: 100%;
  height: auto;
  transition: .5s ease;
  backface-visibility: hidden;
}

.holder {
  margin-bottom: 30px;
}

.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%)
}

.showcase:hover .image {
  opacity: 0.3;
}

.showcase:hover .middle {
  opacity: 1;
}

.read {
  background-color: rgba(0, 0, 0, .5);
  border: 2px solid white;
  color: white;
  font-size: 16px;
  padding: 16px 32px;
}

.btn-1 {
      border: 1px solid white;
    font-family: inherit;
    font-size: inherit;
    color: white;
    background: none;
    cursor: pointer;
    padding: 10px 60px;
    display: inline-block;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-weight: 700;
    outline: none;
    position: relative;
    -webkit-transition: all 0.3s;
    -moz-transition: all 0.3s;
    transition: all 0.3s;
    border-radius: 0;
    width: 98%;
}

.video-container {
    position: absolute;
    z-index: -100;
    background-image: url("/cepf/wp-content/uploads/2017/11/cepf-banner-1-2.jpg");
    background-size: 100% 100%;
    height: 230px;
    width: 100%;
}

  @media (min-width: 768px) {
    .videocontainer {
      background-image: none;
    }
  }

  video#videobg {
    min-width: 30%;
   /* min-height: 100%;*/
    width: 100%;
    background: url(images/poster.jpg) no-repeat;
    background-size: cover;
    transition: 1s opacity;
    margin-top: -1px;
    z-index: -100;
  }
  video {
    display: inline-block;
    vertical-align: baseline;
  }

</style>

  <div class="videocontainer">
    <video autoplay  poster="/cepf/wp-content/uploads/2017/11/cepf-banner.jpg" id="videobg" loop>
      <source src="https://dev.ag.purdue.edu/cepf/wp-content/themes/child_theme/cepf-smaller.mp4" type="video/webm">
      Your browser does not support the video tag.
    </video>
  </div>


<!-- <div class="full-width-banner" style="background-image: url('/cepf/wp-content/uploads/2017/11/cepf-banner.jpg');">
  <div class="container">
    <div class="col-lg-12">
      <div class="shader">
      <article>
        <div class="fullwidthheader">Controlled Environment Phenotyping Facility</div>
      </article>
      </div>
    </div>
  </div>
</div> -->

<div class="section" style="background-color: #3a3a3a">
  <div class="container">
  <div class="row">
      <div class="col-sm-8"><br>
              <h1 style="color: #FFD100 !important; font-weight: 600;">About Us</h1>
          <p class="white">The Institute for Plant Sciences is bringing Purdue researchers a state-of-the-art phenotyping facility to run experiments under controlled environments. Combined with Purdue’s existing capabilities in the field, this facility and its unique research capabilities will propel the University’s existing strengths and leadership in plant phenomics. </p>

          <br/>

            <!-- <div class="col-xs-12 col-sm-5 col-md-4" style="padding-left:0 margin-bottom: 20px;">
              <a style="text-decoration:none; color:white; width: auto;" href="/icsc/about-indiana-corn-and-soybean-innovation-center/" class="btn btn-1 btn-1a">
              Learn More</a>
            </div>

            <div class="col-xs-12 col-sm-5 col-md-4" style="margin-bottom:20px;">
              <a style="text-decoration:none; color:white; width:auto;" href="/icsc/schedule-a-tour/" class="btn btn-1 btn-1a">Schedule Tour</a>
            </div> -->

         </div>

          <div class="col-sm-4 white">

            <div style="margin-top:36px;margin-left:10px;">

                  <a href="wp-content/themes/child_theme/cepffloor.png" class="contacticons" style="color:white!important; font-size:1.5em; margin-bottom:20px;"">
                  <i class="fa fa-map"></i>
                  Floorplan
                  </a>
                  <br><br>
                  <a href="https://purdueagcommunication.formstack.com/forms/cepf_tour" class="contacticons" style="color:white!important; font-size:1.5em; margin-bottom:20px;"">
                  <i class="fa fa-street-view"></i>
                  Schedule a Tour
                  </a>



              <br><br>


            </div>
          </div>
   </div>
  </div>
</div>

<div class="section">
    <div class="container">
      <div class="row">
        <div class="col-sm-3">
          <div class="col-xs-12">
          <h3>Contact Us</h3>
          <p><strong>Chris Hoagland</strong><br><em>Facility Manager</em>
            <a href="mailto:choaglan@purdue.edu">choaglan@purdue.edu</a><br>
            765.494.3318
          </p>

          <p><strong>Julie Hickman</strong><br><em>Project Manager</em>
            <a href="mailto:julie@purdue.edu">julie@purdue.edu</a><br>
            765.494.2208
          </p>

          <h3>Related Sites</h3>
           <div class="sidenav">
              <ul>
                <li><a href="https://ag.purdue.edu/plantsciences/">Institute for Plant Sciences</a></li>
                <li><a href="https://ag.purdue.edu/icsc/">Indiana Corn and Soybean Innovation Center</a></li>
                <li><a href="https://ag.purdue.edu/LillyGreenhouse/">Lilly Plant Growth Facility </a></li>
                <li><a href="https://ag.purdue.edu/hla/hort/greenhouse">Horticulture Plant Growth Facility</a></li>
                <li><a href="https://ag.purdue.edu/agry/">Agronomy</a></li>
                <li><a href="https://ag.purdue.edu/btny/">Botany and Plant Pathology</a></li>



              </ul>
            </div>
          </div>
        </div>
        <div class="col-sm-9">
          <?php while ( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'content', 'home' ); ?>
          <?php endwhile; // end of the loop. ?>
        </div>
      </div>
    </div>
  </div>



<?php
//get_sidebar();
get_footer();


