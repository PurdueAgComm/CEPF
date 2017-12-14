<?php
/**
 *
 * Template Name: Contact
 *
**/

get_header(); ?>

<div class="breadcrumb">
  <div class="container">
    <div class="row">
      <div id="breadcrumbs">
          <?php the_breadcrumb(); ?>
      </div>
    </div>
  </div>
</div>


<?php while ( have_posts() ) : the_post(); ?>
  <div class="container">
    <div class="row">
      <div class="col-xs-12"><br>
        <?php get_template_part( 'content', 'page' ); ?>
      </div>
    </div>
  </div>
<?php endwhile; // end of the loop. ?>
  <div class="container">
    <div class="row">
      <div class="col-md-12">

          <script type="text/javascript" src="https://purdueagcommunication.formstack.com/forms/js.php/plant_sciences_contact_us"></script><noscript><a href="https://purdueagcommunication.formstack.com/forms/plant_sciences_contact_us" title="Online Form">Online Form - Plant Sciences Contact Us</a></noscript><div style="text-align:right; font-size:x-small;"><a href="http://www.formstack.com?utm_source=jsembed&utm_medium=product&utm_campaign=product+branding&fa=h,2839455" title="HTML Form Builder">HTML Form Builder</a></div>

</div></div></div><br>

<?php
//get_sidebar();
get_footer();




