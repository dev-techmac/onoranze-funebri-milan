<?php
if (!defined('ABSPATH')) exit;

use Flamix\Plugin\General\Checker;
use FlamixLocal\Elementor\Helpers;
?>
<h2><?php esc_html_e('Diagnostics', 'flamix-bitrix24-and-elementor-forms-integration'); ?></h2>
<ul>
    <li><?php
        try {
            $status = Helpers::send(['status' => 'check'], 'check');
            echo Checker::params('Status', ($status['status'] ?? '') === 'success', [
                __('Working', 'flamix-bitrix24-and-elementor-forms-integration'),
                __('Bad Domain or API Key', 'flamix-bitrix24-and-elementor-forms-integration'),
            ]);
        } catch (\Exception $e) {
            echo Checker::params('Status', false, [
                __('Working', 'flamix-bitrix24-and-elementor-forms-integration'),
                $e->getMessage(),
            ]);
        } ?>
    </li>
    <li><?php echo Checker::params(__('Elementor Forms exist', 'flamix-bitrix24-and-elementor-forms-integration'), Checker::isPluginActive('elementor'), [
            __('Yes', 'flamix-bitrix24-and-elementor-forms-integration'),
            __('No. You must install theme!', 'flamix-bitrix24-and-elementor-forms-integration'),
        ]); ?></li>
    <li><?php echo Checker::params('PHP version', version_compare(PHP_VERSION, '7.4.0') >= 0, [
            sprintf(__('Ok (%s)', 'flamix-bitrix24-and-elementor-forms-integration'), PHP_VERSION),
            sprintf(__('Bad PHP version (%s)! Update PHP version on your hosting!', 'flamix-bitrix24-and-elementor-forms-integration'), PHP_VERSION),
        ]); ?></li>
    <li><?php echo Checker::params('cURL', extension_loaded('curl')); ?></li>
    <li><?php echo Checker::params('SSL', is_ssl()); ?></li>
    <li><?php echo Checker::params('Backup email', !empty(Helpers::get_backup_email()), [
            sprintf(__('Valid (%s)', 'flamix-bitrix24-and-elementor-forms-integration'), Helpers::get_backup_email()),
            __('Invalid', 'flamix-bitrix24-and-elementor-forms-integration'),
        ]); ?></li>
</ul>