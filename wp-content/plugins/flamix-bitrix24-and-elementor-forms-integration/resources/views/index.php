<?php
if (!defined('ABSPATH')) exit;

use Flamix\Plugin\WP\Markup;
use Flamix\Plugin\WP\Recommendations;
use FlamixLocal\Elementor\Settings\Setting;

echo Markup::adminMessage(wp_kses_post(sprintf(__('Install the Lead interceptor <a href="%s" target="_blank">module in Bitrix24</a>!', 'flamix-bitrix24-and-elementor-forms-integration'), Setting::PLUGIN_URL)));
?>
<div class="wrap">
    <h2><?php esc_html_e('Bitrix24 ← Elementor Forms', 'flamix-bitrix24-and-elementor-forms-integration'); ?></h2>

    <form method="post" action="options.php">
        <?php settings_fields(Setting::getOptionName('group')); ?>
        <table class="form-table">
            <?php Markup::markup_input(Setting::getOptionName('lead_domain'), [
                'value' => Setting::getOption('lead_domain'),
                'label' => esc_html__('Bitrix24 Portal Domain', 'flamix-bitrix24-and-elementor-forms-integration'),
                'placeholder' => 'company.bitrix24.com',
                'description' => esc_html__('Your Bitrix24 portal domain', 'flamix-bitrix24-and-elementor-forms-integration'),
            ]); ?>

            <?php Markup::markup_input(Setting::getOptionName('lead_api'), [
                'value' => Setting::getOption('lead_api'),
                'label' => esc_html__('Flamix Plugin Secret Key', 'flamix-bitrix24-and-elementor-forms-integration'),
                'placeholder' => 'xxxxxx.....xxxxx',
                'description' => wp_kses_post(__('Your Flamix Secret KEY (Do not confuse with License Key). Read FAQ <a href="https://en.flamix.solutions/faq/en-secret-integration-key/" target="_blank">Where can I get the secret integration key</a>', 'flamix-bitrix24-and-elementor-forms-integration')),
            ]); ?>

            <?php Markup::markup_input(Setting::getOptionName('lead_backup_email'), [
                'value' => Setting::getOption('lead_backup_email'),
                'label' => 'Backup mailbox',
                'placeholder' => 'backup@mail.com',
                'description' => 'When an error occurs, send a message to this mail',
            ]); ?>
        </table>

        <input type="submit" class="button-primary" value="<?php esc_html_e('Save', 'flamix-bitrix24-and-elementor-forms-integration'); ?>"/>
    </form>

    <table style="width: 95%;">
        <tr class="form-field">
            <td style="width: 33%; vertical-align: top;"><?php include 'configuration.php'; ?></td>
            <td style="width: 33%; vertical-align: top;"><?php include 'recommendations.php'; ?></td>
            <td style="width: 33%; vertical-align: top; text-align: right;"><?php echo wp_kses_post(Recommendations::banner('flamix-bitrix24-and-elementor-forms-integration')); ?></td>
        </tr>
    </table>
</div>