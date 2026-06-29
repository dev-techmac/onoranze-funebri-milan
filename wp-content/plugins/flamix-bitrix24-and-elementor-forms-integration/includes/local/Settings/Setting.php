<?php

namespace FlamixLocal\Elementor\Settings;

use Flamix\Plugin\General\Helpers;

class Setting
{
    use Menu;

    const PLUGIN_NAME = 'Bitrix24 ← Elementor Forms';
    const PLUGIN_TITLE = 'Bitrix24 and Elementor Forms integration';
    const PLUGIN_URL = 'https://flamix.solutions/bitrix24/integrations/site/elementor-forms.php';

    public static function init()
    {
        self::registerMenu();
        self::registerFields();
    }

    public static function registerFields()
    {
        add_action('admin_init', function () {
            register_setting(self::getOptionName('group'), self::getOptionName('lead_domain'), [Helpers::class, 'parseDomain']);
            register_setting(self::getOptionName('group'), self::getOptionName('lead_api'));
            register_setting(self::getOptionName('group'), self::getOptionName('lead_backup_email'));
        });
    }

    /**
     * Get Full Options Name
     *
     * @param string $name
     * @return string
     */
    public static function getOptionName(string $name): string
    {
        return 'Flamix_Bitrix24_Elementor_FORM_' . $name;
    }

    /**
     * Get Options VALUE by Name
     *
     * @param string $name Option name
     * @param bool|int|string|null $default Default options value
     * @return mixed|void
     */
    public static function getOption(string $name, $default = false)
    {
        return get_option(self::getOptionName($name), $default);
    }
}