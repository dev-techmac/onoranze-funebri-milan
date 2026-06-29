<?php
/**
 * Title: Blog
 * Slug: nutri-coach/blog
 * Categories: nutri-coach
 */

$img    = get_template_directory_uri() . '/assets/images/';
$blog_1 = esc_url( $img . 'blog-1.jpg' );
$blog_2 = esc_url( $img . 'blog-2.jpg' );
$blog_3 = esc_url( $img . 'blog-3.jpg' );
$blog_4 = esc_url( $img . 'blog-4.jpg' );
?>
<!-- wp:group {"tagName":"section","metadata":{"name":"Blog","patternName":"nutri-coach-fse/blog","categories":["blog","posts"]},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"0px"},"color":{"background":"var:preset|color|background-light"}},"layout":{"type":"constrained","wideSize":"1200px"}} -->
<section class="wp-block-group alignfull has-background" style="background-color:var(--wp--preset--color--background-light);padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns {"style":{"spacing":{"padding":{"bottom":"0px"}}}} -->
<div class="wp-block-columns" style="padding-bottom:0px"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"has-text-align-center","style":{"typography":{"fontWeight":"600","letterSpacing":"var(--wp--custom--typography--letter-spacing--label)","textTransform":"uppercase","textAlign":"center"},"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"text":"var:preset|color|primary"}},"fontSize":"small"} -->
<p class="has-text-align-center has-text-color has-small-font-size" style="color:var(--wp--preset--color--primary);margin-top:0;margin-bottom:0;font-weight:600;letter-spacing:var(--wp--custom--typography--letter-spacing--label);text-transform:uppercase">BLOGs</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"wp-block-heading has-text-align-center has-fraunces-font-family has-heading-h2-font-size","style":{"typography":{"fontWeight":"600","lineHeight":"var(--wp--custom--typography--line-height--heading)","letterSpacing":"var(--wp--custom--typography--letter-spacing--heading)","fontStyle":"normal","textAlign":"center","textTransform":"capitalize"},"spacing":{"margin":{"bottom":"0px","top":"0px"}},"color":{"text":"var:preset|color|heading-text"}},"fontSize":"heading-h2"} -->
<h2 class="wp-block-heading has-text-align-center has-fraunces-font-family has-heading-h2-font-size has-text-color has-heading-h-2-font-size" style="color:var(--wp--preset--color--heading-text);margin-top:0px;margin-bottom:0px;font-style:normal;font-weight:600;letter-spacing:var(--wp--custom--typography--letter-spacing--heading);line-height:var(--wp--custom--typography--line-height--heading);text-transform:capitalize">Notes from <mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-primary-light-color">the kitchen</mark></h2>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"0","left":"60px"}},"border":{"width":"0px","style":"none"}}} -->
<div class="wp-block-columns alignwide" style="border-style:none;border-width:0px"><!-- wp:column {"verticalAlignment":"top","width":"53%","style":{"spacing":{"blockGap":"0","padding":{"top":"60px"}}}} -->
<div class="wp-block-column is-vertically-aligned-top" style="padding-top:60px;flex-basis:53%"><!-- wp:group {"className":"blog-feat-image-wrap","style":{"spacing":{"blockGap":"0","padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"dimensions":{"minHeight":"0px"}},"layout":{"type":"default"}} -->
<div class="wp-block-group blog-feat-image-wrap" style="min-height:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":{"topLeft":"12px","topRight":"12px","bottomLeft":"12px","bottomRight":"12px"}}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo $blog_1; ?>" alt="" style="border-top-left-radius:12px;border-top-right-radius:12px;border-bottom-left-radius:12px;border-bottom-right-radius:12px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"16px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="padding-top:16px"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"var(--wp--custom--typography--line-height--label)","fontStyle":"normal","fontWeight":"400","letterSpacing":"2px","fontSize":"var(--wp--preset--font-size--xs-small)"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"primary-dark"} -->
<p class="has-primary-dark-color has-text-color" style="margin-top:0;margin-bottom:0;font-size:var(--wp--preset--font-size--xs-small);font-style:normal;font-weight:400;letter-spacing:2px;line-height:var(--wp--custom--typography--line-height--label)">HEALTHY </p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"var(--wp--custom--typography--line-height--label)","fontStyle":"normal","fontWeight":"400","letterSpacing":"2px","fontSize":"var(--wp--preset--font-size--xs-small)"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"muted-text"} -->
<p class="has-muted-text-color has-text-color" style="margin-top:0;margin-bottom:0;font-size:var(--wp--preset--font-size--xs-small);font-style:normal;font-weight:400;letter-spacing:2px;line-height:var(--wp--custom--typography--line-height--label)"> • APR 09, 2026 </p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"className":"wp-block-heading has-fraunces-font-family has-heading-h2-font-size","style":{"typography":{"fontWeight":"600","lineHeight":"var(--wp--custom--typography--line-height--card-title)","letterSpacing":"var(--wp--custom--typography--letter-spacing--heading-sm)","fontStyle":"normal","fontSize":"26px"},"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"0"}},"color":{"text":"var:preset|color|heading-text"}}} -->
<h3 class="wp-block-heading has-fraunces-font-family has-heading-h2-font-size has-text-color" style="color:var(--wp--preset--color--heading-text);margin-top:var(--wp--preset--spacing--20);margin-bottom:0;font-size:26px;font-style:normal;font-weight:600;letter-spacing:var(--wp--custom--typography--letter-spacing--heading-sm);line-height:var(--wp--custom--typography--line-height--card-title)">Balanced Eating Made Easy : Beginner's Guide</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"var(--wp--preset--font-size--medium)","lineHeight":"var(--wp--custom--typography--line-height--standard)","fontStyle":"normal","fontWeight":"400","letterSpacing":"0.4px"},"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"0"}},"color":{"text":"var:preset|color|paragraph-text"}},"fontFamily":"inter"} -->
<p class="has-text-color has-inter-font-family" style="color:var(--wp--preset--color--paragraph-text);margin-top:var(--wp--preset--spacing--20);margin-bottom:0;font-size:var(--wp--preset--font-size--medium);font-style:normal;font-weight:400;letter-spacing:0.4px;line-height:var(--wp--custom--typography--line-height--standard)">Begin by planning meals ahead, choosing fresh ingredients whenever possible, and listening to your body's hunger and fullness signals.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"47%","style":{"spacing":{"blockGap":"0","padding":{"top":"60px"}}}} -->
<div class="wp-block-column is-vertically-aligned-top" style="padding-top:60px;flex-basis:47%"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"0px","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="margin-top:0;margin-bottom:0"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"24px"},"padding":{"top":"24px","bottom":"24px"}},"border":{"top":{"color":"var:preset|color|border","width":"1px"},"right":{"width":"0px","style":"none"},"bottom":{"color":"var:preset|color|border","width":"1px"},"left":{"width":"0px","style":"none"}}}} -->
<div class="wp-block-columns" style="border-top-color:var(--wp--preset--color--border);border-top-width:1px;border-right-style:none;border-right-width:0px;border-bottom-color:var(--wp--preset--color--border);border-bottom-width:1px;border-left-style:none;border-left-width:0px;padding-top:24px;padding-bottom:24px"><!-- wp:column {"width":"65%"} -->
<div class="wp-block-column" style="flex-basis:65%"><!-- wp:group {"style":{"spacing":{"blockGap":"8px"},"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"var(--wp--custom--typography--line-height--label)","fontStyle":"normal","fontWeight":"400","letterSpacing":"2px","fontSize":"var(--wp--preset--font-size--xs-small)"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"primary-dark"} -->
<p class="has-primary-dark-color has-text-color" style="margin-top:0;margin-bottom:0;font-size:var(--wp--preset--font-size--xs-small);font-style:normal;font-weight:400;letter-spacing:2px;line-height:var(--wp--custom--typography--line-height--label)">HABITS </p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"var(--wp--custom--typography--line-height--label)","fontStyle":"normal","fontWeight":"400","letterSpacing":"2px","fontSize":"var(--wp--preset--font-size--xs-small)"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"muted-text"} -->
<p class="has-muted-text-color has-text-color" style="margin-top:0;margin-bottom:0;font-size:var(--wp--preset--font-size--xs-small);font-style:normal;font-weight:400;letter-spacing:2px;line-height:var(--wp--custom--typography--line-height--label)"> • APR 09, 2026 </p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"24px","fontWeight":"600","lineHeight":"var(--wp--custom--typography--line-height--card-title)","letterSpacing":"var(--wp--custom--typography--letter-spacing--heading-sm)","fontStyle":"normal"},"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"text":"var:preset|color|heading-text"}},"fontFamily":"fraunces"} -->
<h3 class="wp-block-heading has-text-color has-fraunces-font-family" style="color:var(--wp--preset--color--heading-text);margin-top:0;margin-bottom:0;font-size:24px;font-style:normal;font-weight:600;letter-spacing:var(--wp--custom--typography--letter-spacing--heading-sm);line-height:var(--wp--custom--typography--line-height--card-title)">Quick Nutritious Meal Ideas</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"var(--wp--preset--font-size--medium)","lineHeight":"var(--wp--custom--typography--line-height--body-loose)","fontWeight":"400"},"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"text":"var:preset|color|paragraph-text"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--paragraph-text);margin-top:0;margin-bottom:0;font-size:var(--wp--preset--font-size--medium);font-weight:400;line-height:var(--wp--custom--typography--line-height--body-loose)">Discover simple, tasty, and nutritious recipes that make healthy eating easier for everyday life.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:image {"width":"200px","height":"120px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"12px"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo $blog_2; ?>" alt="" style="border-radius:12px;object-fit:cover;width:200px;height:120px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"24px"},"padding":{"top":"24px","bottom":"24px","left":"0px","right":"0px"}},"border":{"top":{"width":"0px","style":"none"},"right":{"width":"0px","style":"none"},"bottom":{"color":"var:preset|color|border","width":"1px"},"left":{"width":"0px","style":"none"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center" style="border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-color:var(--wp--preset--color--border);border-bottom-width:1px;border-left-style:none;border-left-width:0px;padding-top:24px;padding-right:0px;padding-bottom:24px;padding-left:0px"><!-- wp:column {"width":"65%"} -->
<div class="wp-block-column" style="flex-basis:65%"><!-- wp:group {"style":{"spacing":{"blockGap":"8px"},"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"var(--wp--custom--typography--line-height--label)","fontStyle":"normal","fontWeight":"400","letterSpacing":"2px","fontSize":"var(--wp--preset--font-size--xs-small)"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"primary-dark"} -->
<p class="has-primary-dark-color has-text-color" style="margin-top:0;margin-bottom:0;font-size:var(--wp--preset--font-size--xs-small);font-style:normal;font-weight:400;letter-spacing:2px;line-height:var(--wp--custom--typography--line-height--label)">DIET </p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"var(--wp--custom--typography--line-height--label)","fontStyle":"normal","fontWeight":"400","letterSpacing":"2px","fontSize":"var(--wp--preset--font-size--xs-small)"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"muted-text"} -->
<p class="has-muted-text-color has-text-color" style="margin-top:0;margin-bottom:0;font-size:var(--wp--preset--font-size--xs-small);font-style:normal;font-weight:400;letter-spacing:2px;line-height:var(--wp--custom--typography--line-height--label)"> • APR 09, 2026 </p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600","lineHeight":"var(--wp--custom--typography--line-height--card-title)","letterSpacing":"var(--wp--custom--typography--letter-spacing--heading-sm)","fontStyle":"normal"},"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"text":"var:preset|color|heading-text"}},"fontSize":"heading-h5","fontFamily":"fraunces"} -->
<h3 class="wp-block-heading has-text-color has-fraunces-font-family has-heading-h-5-font-size" style="color:var(--wp--preset--color--heading-text);margin-top:0;margin-bottom:0;font-style:normal;font-weight:600;letter-spacing:var(--wp--custom--typography--letter-spacing--heading-sm);line-height:var(--wp--custom--typography--line-height--card-title)">Avocado Toast with Eggs</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"var(--wp--preset--font-size--medium)","lineHeight":"var(--wp--custom--typography--line-height--body-loose)","fontWeight":"400"},"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"text":"var:preset|color|paragraph-text"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--paragraph-text);margin-top:0;margin-bottom:0;font-size:var(--wp--preset--font-size--medium);font-weight:400;line-height:var(--wp--custom--typography--line-height--body-loose)">A quick and healthy breakfast recipe packed with protein, healthy fats, and fresh flavors.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:image {"width":"200px","height":"120px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":{"topLeft":"12px","topRight":"12px","bottomLeft":"12px","bottomRight":"12px"}}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo $blog_3; ?>" alt="" style="border-top-left-radius:12px;border-top-right-radius:12px;border-bottom-left-radius:12px;border-bottom-right-radius:12px;object-fit:cover;width:200px;height:120px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"24px"},"padding":{"top":"24px","bottom":"24px"}},"border":{"top":{"width":"0px","style":"none"},"right":{"width":"0px","style":"none"},"bottom":{"color":"var:preset|color|border","width":"1px"},"left":{"width":"0px","style":"none"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center" style="border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-color:var(--wp--preset--color--border);border-bottom-width:1px;border-left-style:none;border-left-width:0px;padding-top:24px;padding-bottom:24px"><!-- wp:column {"width":"68%"} -->
<div class="wp-block-column" style="flex-basis:68%"><!-- wp:group {"style":{"spacing":{"blockGap":"8px"},"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"var(--wp--custom--typography--line-height--label)","fontStyle":"normal","fontWeight":"400","letterSpacing":"2px","fontSize":"var(--wp--preset--font-size--xs-small)"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"primary-dark"} -->
<p class="has-primary-dark-color has-text-color" style="margin-top:0;margin-bottom:0;font-size:var(--wp--preset--font-size--xs-small);font-style:normal;font-weight:400;letter-spacing:2px;line-height:var(--wp--custom--typography--line-height--label)">FITNESS </p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"var(--wp--custom--typography--line-height--label)","fontStyle":"normal","fontWeight":"400","letterSpacing":"2px","fontSize":"var(--wp--preset--font-size--xs-small)"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"muted-text"} -->
<p class="has-muted-text-color has-text-color" style="margin-top:0;margin-bottom:0;font-size:var(--wp--preset--font-size--xs-small);font-style:normal;font-weight:400;letter-spacing:2px;line-height:var(--wp--custom--typography--line-height--label)"> • APR 09, 2026 </p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600","lineHeight":"var(--wp--custom--typography--line-height--card-title)","letterSpacing":"var(--wp--custom--typography--letter-spacing--heading-sm)","fontStyle":"normal"},"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"text":"var:preset|color|heading-text"}},"fontSize":"heading-h5","fontFamily":"fraunces"} -->
<h3 class="wp-block-heading has-text-color has-fraunces-font-family has-heading-h-5-font-size" style="color:var(--wp--preset--color--heading-text);margin-top:0;margin-bottom:0;font-style:normal;font-weight:600;letter-spacing:var(--wp--custom--typography--letter-spacing--heading-sm);line-height:var(--wp--custom--typography--line-height--card-title)">Garlic Butter Salmon Rice</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"var(--wp--preset--font-size--medium)","lineHeight":"var(--wp--custom--typography--line-height--body-loose)","fontWeight":"400"},"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"text":"var:preset|color|paragraph-text"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--paragraph-text);margin-top:0;margin-bottom:0;font-size:var(--wp--preset--font-size--medium);font-weight:400;line-height:var(--wp--custom--typography--line-height--body-loose)">Tender salmon served with rice and vegetables for a balanced meal full of flavor and nutrients.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:image {"width":"200px","height":"120px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"12px"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo $blog_4; ?>" alt="" style="border-radius:12px;object-fit:cover;width:200px;height:120px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->
