<?php
if (!defined('ABSPATH')) exit;

use Flamix\Plugin\General\Checker;
use Flamix\Plugin\WP\Recommendations;
?>

<h2><?php esc_html_e('Recommendations', 'flamix-bitrix24-and-elementor-forms-integration'); ?></h2>

<ul>
    <?php foreach (Recommendations::plugins() as $plugin): ?>
        <?php if (Checker::isPluginActive($plugin['wp'])): ?>
            <li>
                <?php echo Checker::params($plugin['name'], Checker::isPluginActive($plugin['flamix']), [
                    __('🥳 Integrated with Bitrix24', 'flamix-bitrix24-and-elementor-forms-integration'),
                    sprintf(__('😱 Oh no! It looks like you still need to <a href="%s" target="_blank">integrate this plugin with Bitrix24</a>', 'flamix-bitrix24-and-elementor-forms-integration'), $plugin['url']),
                ]); ?>
            </li>
        <?php endif; ?>
    <?php endforeach; ?>
    <?php if (wp_get_theme('Divi')->exists()): ?>
        <li>
            <?php echo Checker::params('Divi Contact Form', Checker::isPluginActive('flamix-bitrix24-and-divi-contact-form-integration'), [
                __('🥳 Integrated with Bitrix24', 'flamix-bitrix24-and-elementor-forms-integration'),
                sprintf(__('😱 Oh no! It looks like you still need to <a href="%s" target="_blank">integrate this plugin with Bitrix24</a>', 'flamix-bitrix24-and-elementor-forms-integration'), 'https://flamix.solutions/bitrix24/integrations/site/divi-contact-form.php'),
            ]); ?>
        </li>
    <?php endif; ?>
</ul>