<?php
/**
 * The sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage MTM6303 Final
 * @since 1.0
 */

 ?>
 <?php 
 $caption = __("This is a fallback Caption", 'mtm6303final');
 if (!empty(get_the_post_thumbnail_caption())) {
     $caption = get_the_post_thumbnail_caption();
 }

 ?>
 <div class="tm-page-col-left tm-welcome-box tm-bg-primary">
     <p class="tm-welcome-text">
        <em>"<?php echo $caption; ?>"</em>
     </p>
</div>