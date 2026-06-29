<?php
/**
 * Title: Reviews
 * Slug: nutri-coach/reviews
 * Categories: nutri-coach
 */

$img = get_template_directory_uri() . '/assets/images/';

$quote_icon = esc_url( $img . 'quote.png' );
$rating_img = esc_url( $img . 'rating.png' );
$user_2     = esc_url( $img . rawurlencode( 'user-2.jpg' ) );
$user_3     = esc_url( $img . rawurlencode( 'user-3.jpg' ) );
$user_6     = esc_url( $img . rawurlencode( 'user-6.jpg' ) );
$user_7     = esc_url( $img . rawurlencode( 'user-7.jpg' ) );
$user_8     = esc_url( $img . rawurlencode( 'user-8.jpg' ) );
?>
<!-- wp:group {"tagName":"section","metadata":{"name":"Nutri Coach – Reviews","categories":["nutri-coach-reviews"],"patternName":"nutri-coach/reviews","description":"Kind words testimonials section with a stats widget header and three reviewer cards."},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|60"}},"backgroundColor":"background-dark","layout":{"type":"constrained","wideSize":"1200px"}} -->
<section class="wp-block-group alignfull has-background-dark-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns {"style":{"spacing":{"padding":{"bottom":"60px"}}}} -->
<div class="wp-block-columns" style="padding-bottom:60px"><!-- wp:column {"width":"75%"} -->
<div class="wp-block-column" style="flex-basis:75%"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","letterSpacing":"var(--wp--custom--typography--letter-spacing--label)","textTransform":"uppercase"},"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"text":"var:preset|color|primary"}},"fontSize":"small"} -->
<p class="has-text-color has-small-font-size" style="color:var(--wp--preset--color--primary);margin-top:0;margin-bottom:0;font-weight:600;letter-spacing:var(--wp--custom--typography--letter-spacing--label);text-transform:uppercase">Kind Words</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"wp-block-heading has-fraunces-font-family has-heading-h2-font-size","style":{"typography":{"fontWeight":"600","lineHeight":"var(--wp--custom--typography--line-height--heading)","letterSpacing":"var(--wp--custom--typography--letter-spacing--heading)","fontStyle":"normal","textTransform":"capitalize"},"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"text":"var:preset|color|heading-text"}},"fontSize":"heading-h2"} -->
<h2 class="wp-block-heading has-fraunces-font-family has-heading-h2-font-size has-text-color has-heading-h-2-font-size" style="color:var(--wp--preset--color--heading-text);margin-top:0;margin-bottom:0;font-style:normal;font-weight:600;letter-spacing:var(--wp--custom--typography--letter-spacing--heading);line-height:var(--wp--custom--typography--line-height--heading);text-transform:capitalize">Loved by people who've<br><mark style="background-color:rgba(0,0,0,0)" class="has-inline-color has-primary-light-color">tried everything</mark></h2>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"23%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:23%"><!-- wp:group {"style":{"border":{"radius":{"topLeft":"8px","topRight":"8px","bottomLeft":"8px","bottomRight":"8px"},"color":"var:preset|color|border","width":"1px","style":"solid"},"spacing":{"padding":{"left":"16px","right":"16px","bottom":"12px","top":"4px"},"blockGap":"var:preset|spacing|20"},"dimensions":{"minHeight":"0px"}},"backgroundColor":"white","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group has-border-color has-white-background-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-top-left-radius:8px;border-top-right-radius:8px;border-bottom-left-radius:8px;border-bottom-right-radius:8px;min-height:0px;padding-top:4px;padding-right:16px;padding-bottom:12px;padding-left:16px"><!-- wp:group {"style":{"spacing":{"blockGap":"0px","padding":{"top":"6px"}},"layout":{"selfStretch":"fit","flexSize":null}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="padding-top:6px"><!-- wp:image {"width":"42px","height":"42px","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-rounded","style":{"border":{"width":"2px"},"spacing":{"margin":{"top":"0","bottom":"0","right":"0px"}},"layout":{"selfStretch":"fixed","flexSize":"42px"}},"borderColor":"white"} -->
<figure class="wp-block-image size-full is-resized has-custom-border is-style-rounded" style="margin-top:0;margin-right:0px;margin-bottom:0"><img src="<?php echo $user_3; ?>" alt="" class="has-border-color has-white-border-color" style="border-width:2px;object-fit:cover;width:42px;height:42px"/></figure>
<!-- /wp:image -->

<!-- wp:image {"width":"42px","height":"42px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"999px","width":"2px"},"spacing":{"margin":{"top":"0","bottom":"0","right":"0px","left":"-14px"}},"layout":{"selfStretch":"fixed","flexSize":"42px"}},"borderColor":"white"} -->
<figure class="wp-block-image size-full is-resized has-custom-border" style="margin-top:0;margin-right:0px;margin-bottom:0;margin-left:-14px"><img src="<?php echo $user_2; ?>" alt="" class="has-border-color has-white-border-color" style="border-width:2px;border-radius:999px;object-fit:cover;width:42px;height:42px"/></figure>
<!-- /wp:image -->

<!-- wp:image {"width":"42px","height":"42px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"999px","width":"2px"},"spacing":{"margin":{"top":"0","bottom":"0","right":"0px","left":"-14px"}},"layout":{"selfStretch":"fixed","flexSize":"42px"}},"borderColor":"white"} -->
<figure class="wp-block-image size-full is-resized has-custom-border" style="margin-top:0;margin-right:0px;margin-bottom:0;margin-left:-14px"><img src="<?php echo $user_3; ?>" alt="" class="has-border-color has-white-border-color" style="border-width:2px;border-radius:999px;object-fit:cover;width:42px;height:42px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"6px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"80px","aspectRatio":"5.885658914728682","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo $rating_img; ?>" alt="" style="aspect-ratio:5.885658914728682;object-fit:cover;width:80px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"var(--wp--preset--font-size--medium)","fontWeight":"600","fontStyle":"normal"},"spacing":{"margin":{"bottom":"0","top":"8px"}}},"textColor":"heading-text"} -->
<p class="has-heading-text-color has-text-color" style="margin-top:8px;margin-bottom:0;font-size:var(--wp--preset--font-size--medium);font-style:normal;font-weight:600"> 4.9/5</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"var(--wp--preset--font-size--small)","fontWeight":"400","fontStyle":"normal","letterSpacing":"0.3px"},"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"text":"var:preset|color|paragraph-text"}},"fontFamily":"inter"} -->
<p class="has-text-color has-inter-font-family" style="color:var(--wp--preset--color--paragraph-text);margin-top:0;margin-bottom:0;font-size:var(--wp--preset--font-size--small);font-style:normal;font-weight:400;letter-spacing:0.3px">2,400+ user reviews</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-columns alignwide" style="margin-top:0;margin-bottom:0">
<!-- wp:column {"style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"28px","bottom":"28px","left":"28px","right":"28px"},"blockGap":"var:preset|spacing|40"},"border":{"radius":"12px","color":"var:preset|color|border","width":"1px","style":"solid"},"color":{"background":"var:preset|color|white"},"dimensions":{"minHeight":"0px"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"space-between"}} -->
<div class="wp-block-group has-border-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:12px;background-color:var(--wp--preset--color--white);min-height:0px;padding-top:28px;padding-right:28px;padding-bottom:28px;padding-left:28px"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"28px","height":"28px","scale":"contain","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo $quote_icon; ?>" alt="" style="object-fit:contain;width:28px;height:28px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"var(--wp--custom--typography--line-height--body)","fontWeight":"400","fontStyle":"normal"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"heading-text","fontSize":"large","fontFamily":"fraunces"} -->
<p class="has-heading-text-color has-text-color has-fraunces-font-family has-large-font-size" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:400;line-height:var(--wp--custom--typography--line-height--body)">I've tried every diet going. This was the first time someone actually looked at my lifestyle.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"16px"}},"border":{"top":{"color":"var:preset|color|border","width":"1px"},"right":{"width":"0px","style":"none"},"bottom":{"width":"0px","style":"none"},"left":{"width":"0px","style":"none"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--border);border-top-width:1px;border-right-style:none;border-right-width:0px;border-bottom-style:none;border-bottom-width:0px;border-left-style:none;border-left-width:0px;padding-top:16px"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"70%"} -->
<div class="wp-block-column" style="flex-basis:70%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"},"dimensions":{"minHeight":"0px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="min-height:0px"><!-- wp:image {"width":"40px","height":"40px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50%"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo $user_6; ?>" alt="" style="border-radius:50%;object-fit:cover;width:40px;height:40px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"4px"},"dimensions":{"minHeight":"0px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group" style="min-height:0px"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","lineHeight":"var(--wp--custom--typography--line-height--card-title)"},"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"text":"var:preset|color|heading-text"}},"fontSize":"medium"} -->
<p class="has-text-color has-medium-font-size" style="color:var(--wp--preset--color--heading-text);margin-top:0;margin-bottom:0;font-weight:600;line-height:var(--wp--custom--typography--line-height--card-title)">Lia Jean</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"var(--wp--preset--font-size--xs-small)","fontWeight":"500","letterSpacing":"var(--wp--custom--typography--letter-spacing--badge)","textTransform":"uppercase"},"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"text":"var:preset|color|primary"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--primary);margin-top:0;margin-bottom:0;font-size:var(--wp--preset--font-size--xs-small);font-weight:500;letter-spacing:var(--wp--custom--typography--letter-spacing--badge);text-transform:uppercase">LEAN &amp; GROWTH Plan</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"30%"} -->
<div class="wp-block-column" style="flex-basis:30%"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"100px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo $rating_img; ?>" alt="" style="width:100px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"28px","bottom":"28px","left":"28px","right":"28px"},"blockGap":"var:preset|spacing|40"},"border":{"radius":"12px","color":"var:preset|color|border","width":"1px","style":"solid"},"color":{"background":"var:preset|color|white"},"dimensions":{"minHeight":"0px"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"space-between"}} -->
<div class="wp-block-group has-border-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:12px;background-color:var(--wp--preset--color--white);min-height:0px;padding-top:28px;padding-right:28px;padding-bottom:28px;padding-left:28px"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"28px","height":"28px","scale":"contain","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo $quote_icon; ?>" alt="" style="object-fit:contain;width:28px;height:28px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"var(--wp--custom--typography--line-height--body)","fontWeight":"400","fontStyle":"normal"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"heading-text","fontSize":"large","fontFamily":"fraunces"} -->
<p class="has-heading-text-color has-text-color has-fraunces-font-family has-large-font-size" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:400;line-height:var(--wp--custom--typography--line-height--body)">The check-ins kept me honest without feeling judged. Best investment I've made in my health in years.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"16px"}},"border":{"top":{"color":"var:preset|color|border","width":"1px"},"right":{"width":"0px","style":"none"},"bottom":{"width":"0px","style":"none"},"left":{"width":"0px","style":"none"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--border);border-top-width:1px;border-right-style:none;border-right-width:0px;border-bottom-style:none;border-bottom-width:0px;border-left-style:none;border-left-width:0px;padding-top:16px"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"70%"} -->
<div class="wp-block-column" style="flex-basis:70%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"},"dimensions":{"minHeight":"0px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="min-height:0px"><!-- wp:image {"width":"40px","height":"40px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50%"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo $user_8; ?>" alt="" style="border-radius:50%;object-fit:cover;width:40px;height:40px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"4px"},"dimensions":{"minHeight":"0px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group" style="min-height:0px"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","lineHeight":"var(--wp--custom--typography--line-height--card-title)"},"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"text":"var:preset|color|heading-text"}},"fontSize":"medium"} -->
<p class="has-text-color has-medium-font-size" style="color:var(--wp--preset--color--heading-text);margin-top:0;margin-bottom:0;font-weight:600;line-height:var(--wp--custom--typography--line-height--card-title)">Tom W.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"var(--wp--preset--font-size--xs-small)","fontWeight":"500","letterSpacing":"var(--wp--custom--typography--letter-spacing--badge)","textTransform":"uppercase"},"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"text":"var:preset|color|primary"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--primary);margin-top:0;margin-bottom:0;font-size:var(--wp--preset--font-size--xs-small);font-weight:500;letter-spacing:var(--wp--custom--typography--letter-spacing--badge);text-transform:uppercase">Performance Plan</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"30%"} -->
<div class="wp-block-column" style="flex-basis:30%"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"100px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo $rating_img; ?>" alt="" style="width:100px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"28px","bottom":"28px","left":"28px","right":"28px"},"blockGap":"var:preset|spacing|40"},"border":{"radius":"12px","color":"var:preset|color|border","width":"1px","style":"solid"},"color":{"background":"var:preset|color|white"},"dimensions":{"minHeight":"0px"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"space-between"}} -->
<div class="wp-block-group has-border-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:12px;background-color:var(--wp--preset--color--white);min-height:0px;padding-top:28px;padding-right:28px;padding-bottom:28px;padding-left:28px"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"28px","height":"28px","scale":"contain","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo $quote_icon; ?>" alt="" style="object-fit:contain;width:28px;height:28px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"var(--wp--custom--typography--line-height--body)","fontWeight":"400","fontStyle":"normal"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"heading-text","fontSize":"large","fontFamily":"fraunces"} -->
<p class="has-heading-text-color has-text-color has-fraunces-font-family has-large-font-size" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:400;line-height:var(--wp--custom--typography--line-height--body)">My digestion has completely turned around. The changes felt manageable and the results came faster.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"16px"}},"border":{"top":{"color":"var:preset|color|border","width":"1px"},"right":{"width":"0px","style":"none"},"bottom":{"width":"0px","style":"none"},"left":{"width":"0px","style":"none"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--border);border-top-width:1px;border-right-style:none;border-right-width:0px;border-bottom-style:none;border-bottom-width:0px;border-left-style:none;border-left-width:0px;padding-top:16px"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"70%"} -->
<div class="wp-block-column" style="flex-basis:70%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"},"dimensions":{"minHeight":"0px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="min-height:0px"><!-- wp:image {"width":"40px","height":"40px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50%"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo $user_7; ?>" alt="" style="border-radius:50%;object-fit:cover;width:40px;height:40px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"4px"},"dimensions":{"minHeight":"0px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group" style="min-height:0px"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","lineHeight":"var(--wp--custom--typography--line-height--card-title)"},"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"text":"var:preset|color|heading-text"}},"fontSize":"medium"} -->
<p class="has-text-color has-medium-font-size" style="color:var(--wp--preset--color--heading-text);margin-top:0;margin-bottom:0;font-weight:600;line-height:var(--wp--custom--typography--line-height--card-title)">Linda Bill</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"var(--wp--preset--font-size--xs-small)","fontWeight":"500","letterSpacing":"var(--wp--custom--typography--letter-spacing--badge)","textTransform":"uppercase"},"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"text":"var:preset|color|primary"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--primary);margin-top:0;margin-bottom:0;font-size:var(--wp--preset--font-size--xs-small);font-weight:500;letter-spacing:var(--wp--custom--typography--letter-spacing--badge);text-transform:uppercase">GUT HEALTH Plan</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"30%"} -->
<div class="wp-block-column" style="flex-basis:30%"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"100px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo $rating_img; ?>" alt="" style="width:100px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->
</div>
<!-- /wp:columns --></section>
<!-- /wp:group -->
