<?php namespace Jointoit\GetQuote;

use Backend;
use System\Classes\PluginBase;

/**
 * JoinToIT Plugin Information File
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
            'name'        => 'jointoit.getquote::lang.plugin.name',
            'description' => 'jointoit.getquote::lang.plugin.description',
            'author'      => 'JoinToIT',
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
    //         'JoinToIT\GetQuote\Components\Quotes' => 'Quotes',
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
            'jointoit.getquote.some_permission' => [
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
