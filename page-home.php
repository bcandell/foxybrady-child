<?php
/**
 * Template Name: Foxy Brady Home
 */

get_header();

$bg_img       = get_field('bg_img');
$bg_video_mp4 = get_field('bgVideo_mp4');
$bg_video_webm = get_field('bgVideo_webm');
$img_overlay  = get_field('img_overlay');

echo '<pre>'; var_dump($bg_video_mp4, $bg_video_webm); echo '</pre>'; die();
?>

<section class="hero">
    <video class="hero__video" autoplay muted loop playsinline>
        <source src="<?php echo esc_url($bg_video_webm['url']); ?>" type="video/webm">
        <source src="<?php echo esc_url($bg_video_mp4['url']); ?>" type="video/mp4">
        <img src="<?php echo esc_url($bg_img['url']); ?>" />
    </video>
  <div class="hero__overlay"></div>
  <div class="hero__content">
    <?php if ( $img_overlay ) : ?>
      <img class="hero__logo" src="<?php echo esc_url($img_overlay['url']); ?>" alt="<?php echo esc_attr($img_overlay['alt']); ?>">
    <?php endif; ?>

    <h1>Live Performances. Captured Cinematically.</h1>

    <p>
      Multi-camera concert films, livestreams, teaser clips,
      and promotional content for bands and artists.
    </p>

  </div>

</section>

<?php get_footer(); ?>