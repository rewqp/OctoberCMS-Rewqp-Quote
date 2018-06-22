<?php namespace Rewqp\GetQuote;

use Backend;
use System\Classes\PluginBase;

/**
 * Rewqp Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'rewqp.getquote::lang.plugin.name',
            'description' => 'rewqp.getquote::lang.plugin.description',
            'author'      => 'rewqp',
            'icon'        => 'icon-bar-chart-o'
        ];
    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    // public function registerComponents()
    // {
    //     return [
    //         'rewqp\GetQuote\Components\Quotes' => 'Quotes',
    //     ];
    // }

     /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'rewqp.getquote.some_permission' => [
                'tab' => 'Quotes',
                'label' => 'Some permission'
            ],
        ];
    }   

    public function registerSettings()
    {
    }

    public function boot() {
    }
}
