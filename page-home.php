<?php
/**
 * Template Name: Foxy Brady Home
 */

get_header();

$bg_img         = get_field('bg_img');
$bg_video_mp4   = get_field('bgvideo_mp4');
$bg_video_webm  = get_field('bgvideo_webm');
$img_overlay    = get_field('img_overlay');

$poster_url = ! empty($bg_img['url']) ? $bg_img['url'] : '';
?>

<section class="hero">

  <?php if ( $bg_video_mp4 || $bg_video_webm ) : ?>

    <video
      class="hero__video"
      autoplay
      muted
      loop
      playsinline
      <?php if ( $poster_url ) : ?>
        poster="<?php echo esc_url($poster_url); ?>"
      <?php endif; ?>
    >

      <?php if ( ! empty($bg_video_webm['url']) ) : ?>
        <source src="<?php echo esc_url($bg_video_webm['url']); ?>" type="video/webm">
      <?php endif; ?>

      <?php if ( ! empty($bg_video_mp4['url']) ) : ?>
        <source src="<?php echo esc_url($bg_video_mp4['url']); ?>" type="video/mp4">
      <?php endif; ?>

    </video>

  <?php elseif ( ! empty($bg_img['url']) ) : ?>

    <img
      class="hero__bg-image"
      src="<?php echo esc_url($bg_img['url']); ?>"
      alt="<?php echo esc_attr($bg_img['alt'] ?? ''); ?>"
    >

  <?php endif; ?>

  <div class="hero__overlay"></div>

  <div class="hero__content">

    <?php if ( ! empty($img_overlay['url']) ) : ?>
      <img
        class="hero__logo"
        src="<?php echo esc_url($img_overlay['url']); ?>"
        alt="<?php echo esc_attr($img_overlay['alt'] ?? 'Foxy Brady Studio'); ?>"
      >
    <?php endif; ?>

    <h1>Live Performances. Captured Cinematically.</h1>

    <p>
      Multi-camera concert films, livestreams, teaser clips,
      and promotional content for bands and artists.
    </p>

  </div>

</section>

<?php get_footer(); ?>