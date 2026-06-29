<?php
/**
 * Title: Consultation Hero
 * Slug: nutri-coach/consultation-hero
 * Categories: nutri-coach
 */

$star_icon = esc_url( get_template_directory_uri() . '/assets/images/hero.png' );
?>
<!-- wp:group {"tagName":"section","metadata":{"name":"Consultation Hero","patternName":"nutri-coach/consultation-hero","categories":["nutri-coach-consultation-hero"]},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"32px"},"color":{"background":"var:preset|color|background-light"}},"layout":{"type":"constrained","contentSize":"680px"}} -->
<section class="wp-block-group alignfull has-background" style="background-color:var(--wp--preset--color--background-light);padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"12px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="padding-bottom:12px"><!-- wp:group {"className":"has-white-background-color","style":{"border":{"radius":"999px","color":"#e8e6dc","width":"1px"},"spacing":{"padding":{"top":"5px","bottom":"5px","left":"14px","right":"14px"},"blockGap":"6px"},"color":{"background":"var:preset|color|white"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group has-white-background-color has-border-color has-background" style="border-color:#e8e6dc;border-width:1px;border-radius:999px;background-color:var(--wp--preset--color--white);padding-top:5px;padding-right:14px;padding-bottom:5px;padding-left:14px"><!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"layout":{"selfStretch":"fixed","flexSize":"14px"},"spacing":{"margin":{"top":"-10px"}}}} -->
<figure class="wp-block-image size-full" style="margin-top:-10px"><img src="<?php echo $star_icon; ?>" alt="" style="aspect-ratio:1;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"14px","fontWeight":"400","lineHeight":"var(--wp--custom--typography--line-height--button)","fontStyle":"normal"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"heading-text"} -->
<p class="has-heading-text-color has-text-color" style="margin-top:0px;margin-bottom:0px;font-size:14px;font-style:normal;font-weight:400;line-height:var(--wp--custom--typography--line-height--button)">Free - No Commitment</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading {"className":"wp-block-heading has-text-align-center has-fraunces-font-family has-heading-h2-font-size","style":{"typography":{"fontWeight":"600","lineHeight":"var(--wp--custom--typography--line-height--heading-snug)","letterSpacing":"var(--wp--custom--typography--letter-spacing--heading)","fontStyle":"normal","textTransform":"capitalize"},"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"text":"var:preset|color|heading-text"}},"fontSize":"heading-h2"} -->
<h2 class="wp-block-heading has-text-align-center has-fraunces-font-family has-heading-h2-font-size has-text-color has-heading-h-2-font-size" style="color:var(--wp--preset--color--heading-text);margin-top:0;margin-bottom:0;font-style:normal;font-weight:600;letter-spacing:var(--wp--custom--typography--letter-spacing--heading);line-height:var(--wp--custom--typography--line-height--heading-snug);text-transform:capitalize">Free first session to<br>understand <mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-primary-light-color">your goals</mark></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"var(--wp--preset--font-size--heading-h6)","lineHeight":"var(--wp--custom--typography--line-height--body)","fontWeight":"400"},"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"text":"var:preset|color|paragraph-text"}}} -->
<p class="has-text-align-center has-text-color" style="color:var(--wp--preset--color--paragraph-text);margin-top:0;margin-bottom:0;font-size:var(--wp--preset--font-size--heading-h6);font-weight:400;line-height:var(--wp--custom--typography--line-height--body)">A complimentary consultation with no commitment — and clear guidance on your next step.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary","textColor":"white","className":"is-style-fill","style":{"border":{"radius":"50px"},"spacing":{"padding":{"top":"14px","bottom":"14px","left":"32px","right":"32px"}},"typography":{"fontSize":"var(--wp--preset--font-size--medium)","fontWeight":"600"}}} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-white-color has-primary-background-color has-text-color has-background has-custom-font-size wp-element-button" style="border-radius:50px;padding-top:14px;padding-right:32px;padding-bottom:14px;padding-left:32px;font-size:var(--wp--preset--font-size--medium);font-weight:600">Book your free session</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
