<?php
/**
 * Title: Hero
 * Slug: nutri-coach/hero
 * Categories: nutri-coach
 */

$img        = get_template_directory_uri() . '/assets/images/';
$hero_icon  = esc_url( $img . 'hero.png' );
$user_1     = esc_url( $img . rawurlencode( 'user-1.jpg' ) );
$user_2     = esc_url( $img . rawurlencode( 'user-2.jpg' ) );
$user_3     = esc_url( $img . rawurlencode( 'user-3.jpg' ) );
$rating_img = esc_url( $img . 'rating.png' );
$banner     = esc_url( $img . rawurlencode( 'banner-image.webp' ) );
?>
<!-- wp:group {"tagName":"section","metadata":{"name":"Nutri Coach – Hero","categories":["nutri-coach-hero"],"patternName":"nutri-coach/hero","description":"Full-width hero with headline, sub-copy, two CTA buttons, and proof stats row."},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"0"}},"backgroundColor":"background-dark","layout":{"type":"constrained","wideSize":"1200px"}} -->
<section class="wp-block-group alignfull has-background-dark-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"0","left":"var:preset|spacing|70"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"50%","style":{"spacing":{"blockGap":"var:preset|spacing|40","padding":{"top":"24px","bottom":"24px"}}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-top:24px;padding-bottom:24px;flex-basis:50%"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"12px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="padding-bottom:12px"><!-- wp:group {"className":"has-white-background-color","style":{"border":{"radius":"999px","color":"var:preset|color|border","width":"1px"},"spacing":{"padding":{"top":"5px","bottom":"5px","left":"14px","right":"14px"},"blockGap":"6px"},"color":{"background":"var:preset|color|white"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group has-white-background-color has-border-color has-background" style="border-color:var(--wp--preset--color--border);border-width:1px;border-radius:999px;background-color:var(--wp--preset--color--white);padding-top:5px;padding-right:14px;padding-bottom:5px;padding-left:14px"><!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"layout":{"selfStretch":"fixed","flexSize":"14px"},"spacing":{"margin":{"top":"-10px"}}}} -->
<figure class="wp-block-image size-full" style="margin-top:-10px"><img src="<?php echo $hero_icon; ?>" alt="" style="aspect-ratio:1;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"400","lineHeight":"var(--wp--custom--typography--line-height--button)","fontStyle":"normal"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"heading-text","fontSize":"small"} -->
<p class="has-heading-text-color has-text-color has-small-font-size" style="margin-top:0px;margin-bottom:0px;font-style:normal;font-weight:400;line-height:var(--wp--custom--typography--line-height--button)">Certified nutrition coaching</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":1,"className":"wp-block-heading has-fraunces-font-family has-heading-h2-font-size","style":{"typography":{"fontWeight":"600","lineHeight":"var(--wp--custom--typography--line-height--heading-tight)","letterSpacing":"var(--wp--custom--typography--letter-spacing--heading)","fontStyle":"normal","textTransform":"capitalize"},"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"text":"var:preset|color|heading-text"}},"fontSize":"heading-h1"} -->
<h1 class="wp-block-heading has-fraunces-font-family has-heading-h2-font-size has-text-color has-heading-h-1-font-size" style="color:var(--wp--preset--color--heading-text);margin-top:0;margin-bottom:0;font-style:normal;font-weight:600;letter-spacing:var(--wp--custom--typography--letter-spacing--heading);line-height:var(--wp--custom--typography--line-height--heading-tight);text-transform:capitalize">Eat better.</h1>
<!-- /wp:heading -->

<!-- wp:heading {"level":1,"className":"wp-block-heading has-fraunces-font-family has-heading-h2-font-size","style":{"typography":{"fontWeight":"600","lineHeight":"var(--wp--custom--typography--line-height--heading-tight)","letterSpacing":"var(--wp--custom--typography--letter-spacing--heading)","fontStyle":"normal","textTransform":"capitalize"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"primary-light","fontSize":"heading-h1"} -->
<h1 class="wp-block-heading has-fraunces-font-family has-heading-h2-font-size has-primary-light-color has-text-color has-heading-h-1-font-size" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:600;letter-spacing:var(--wp--custom--typography--letter-spacing--heading);line-height:var(--wp--custom--typography--line-height--heading-tight);text-transform:capitalize">Live stronger.</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"var(--wp--custom--typography--line-height--body)","fontWeight":"400"},"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"0"}},"color":{"text":"var:preset|color|paragraph-text"}},"fontSize":"large"} -->
<p class="has-text-color has-large-font-size" style="color:var(--wp--preset--color--paragraph-text);margin-top:var(--wp--preset--spacing--30);margin-bottom:0;font-weight:400;line-height:var(--wp--custom--typography--line-height--body)">Personalized nutrition plans and one-on-one coaching that fit your real life. Built around your body, your goals, and your taste.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"blockGap":"12px","margin":{"top":"var:preset|spacing|40","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:0"><!-- wp:button {"backgroundColor":"primary","textColor":"white","className":"is-style-fill","style":{"border":{"radius":"99px"},"spacing":{"padding":{"left":"24px","right":"24px","top":"14px","bottom":"14px"}},"typography":{"fontWeight":"500","fontStyle":"normal","letterSpacing":"0.4px","fontSize":"14px"}},"fontFamily":"inter"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-white-color has-primary-background-color has-text-color has-background has-inter-font-family has-custom-font-size wp-element-button" href="#cta" style="border-radius:99px;padding-top:14px;padding-right:24px;padding-bottom:14px;padding-left:24px;font-size:14px;font-style:normal;font-weight:500;letter-spacing:0.4px">Start your plan</a></div>
<!-- /wp:button -->

<!-- wp:button {"backgroundColor":"background-dark","textColor":"heading-text","className":"is-style-fill","style":{"border":{"radius":"99px","width":"1px"},"spacing":{"padding":{"left":"24px","right":"24px","top":"13px","bottom":"13px"}},"typography":{"fontWeight":"500","fontStyle":"normal","letterSpacing":"0.4px","fontSize":"14px"},"elements":{"link":{"color":{"text":"var:preset|color|heading-text"}}}},"fontFamily":"inter"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-heading-text-color has-background-dark-background-color has-text-color has-background has-link-color has-inter-font-family has-custom-font-size wp-element-button" href="#cta" style="border-width:1px;border-radius:99px;padding-top:13px;padding-right:24px;padding-bottom:13px;padding-left:24px;font-size:14px;font-style:normal;font-weight:500;letter-spacing:0.4px">Watch Intro</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:group {"style":{"spacing":{"blockGap":"12px","margin":{"top":"var:preset|spacing|40","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:0"><!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-resized is-style-rounded","style":{"border":{"width":"2px"},"spacing":{"margin":{"top":"0","bottom":"0","right":"0px"}},"layout":{"selfStretch":"fixed","flexSize":"46px"}},"borderColor":"white"} -->
<figure class="wp-block-image size-full has-custom-border is-resized is-style-rounded" style="margin-top:0;margin-right:0px;margin-bottom:0"><img src="<?php echo $user_1; ?>" alt="" class="has-border-color has-white-border-color" style="border-width:2px;aspect-ratio:1;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-resized","style":{"border":{"radius":"999px","width":"2px"},"spacing":{"margin":{"top":"0","bottom":"0","right":"0px","left":"-14px"}},"layout":{"selfStretch":"fixed","flexSize":"46px"}},"borderColor":"white"} -->
<figure class="wp-block-image size-full has-custom-border is-resized" style="margin-top:0;margin-right:0px;margin-bottom:0;margin-left:-14px"><img src="<?php echo $user_2; ?>" alt="" class="has-border-color has-white-border-color" style="border-width:2px;border-radius:999px;aspect-ratio:1;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-resized","style":{"border":{"radius":"999px","width":"2px"},"spacing":{"margin":{"top":"0","bottom":"0","right":"0px","left":"-14px"}},"layout":{"selfStretch":"fixed","flexSize":"46px"}},"borderColor":"white"} -->
<figure class="wp-block-image size-full has-custom-border is-resized" style="margin-top:0;margin-right:0px;margin-bottom:0;margin-left:-14px"><img src="<?php echo $user_3; ?>" alt="" class="has-border-color has-white-border-color" style="border-width:2px;border-radius:999px;aspect-ratio:1;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"6px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"100px","sizeSlug":"full","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo $rating_img; ?>" alt="" style="width:100px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium","fontWeight":"600","fontStyle":"normal"},"spacing":{"margin":{"top":"6px","bottom":"0"}}},"textColor":"heading-text"} -->
<p class="has-heading-text-color has-text-color" style="margin-top:6px;margin-bottom:0;font-size:var(--wp--preset--font-size--medium);font-style:normal;font-weight:600">4.9/5</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"400","fontStyle":"normal","letterSpacing":"0.3px"},"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"text":"var:preset|color|paragraph-text"}},"fontSize":"small","fontFamily":"inter"} -->
<p class="has-text-color has-inter-font-family has-small-font-size" style="color:var(--wp--preset--color--paragraph-text);margin-top:0;margin-bottom:0;font-style:normal;font-weight:400;letter-spacing:0.3px">Loved by 2,400+ clients worldwide</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"50%","style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:group {"className":"hero-image-wrap","style":{"spacing":{"blockGap":"0","padding":{"top":"2px","bottom":"2px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group hero-image-wrap" style="padding-top:2px;padding-bottom:2px"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hero-coach-img","style":{"border":{"radius":{"topLeft":"12px","topRight":"12px","bottomLeft":"12px","bottomRight":"12px"}}}} -->
<figure class="wp-block-image size-full has-custom-border hero-coach-img"><img src="<?php echo $banner; ?>" alt="" style="border-top-left-radius:12px;border-top-right-radius:12px;border-bottom-left-radius:12px;border-bottom-right-radius:12px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->
