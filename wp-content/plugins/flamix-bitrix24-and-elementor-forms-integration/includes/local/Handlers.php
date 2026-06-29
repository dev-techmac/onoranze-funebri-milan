<?php

namespace FlamixLocal\Elementor;

use ElementorPro\Modules\Forms\Classes\Form_Record as ElementorProFormRecord;
use Flamix\Bitrix24\Trace;
use Exception;

class Handlers
{
    /**
     * For develop purpose.
     *
     * @return string
     */
    public static function getSubDomain(): string
    {
        return ($_SERVER['SERVER_NAME'] === 'wp.test.chosten.com') ? 'devlead' : 'leadwp';
    }

    /**
     * Visited pages.
     *
     * @return void
     */
    public static function trace(): void
    {
        $title = @wp_title('', false);

        if (empty($title))
            $title = false;

        Trace::init($title);
    }

    /**
     * Main forms handler.
     *
     * @param ElementorProFormRecord $record
     * @return void
     * @throws Exception
     */
    public static function forms(ElementorProFormRecord $record): void
    {
        $bitrix24 = ['FORM_NAME' => $record->get_form_settings('form_name')];

        $fields = $record->get('fields');
        flamix_log('All fields value:', $fields ?? [], 'Elementorforms'); // Debug

        foreach ($fields as $key => $value) {
            $bitrix24[strtoupper($key)] = $value['value'];
        }

        flamix_log('Formatted:', $bitrix24, 'Elementorforms'); // Debug

        try {
            Helpers::send(['FIELDS' => $bitrix24]);
        } catch (Exception $e) {
            // dd('Error: ',  $e->getMessage()); // Debug
            Helpers::sendError($e->getMessage());
        }
    }
}