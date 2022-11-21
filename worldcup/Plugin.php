<?php namespace Mateusz\WorldCup;

use Backend;
use System\Classes\PluginBase;

/**
 * WorldCup Plugin Information File
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
            'name'        => 'WorldCup',
            'description' => 'No description provided yet...',
            'author'      => 'Mateusz',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'Mateusz\WorldCup\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'mateusz.worldcup.some_permission' => [
                'tab' => 'WorldCup',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return []; // Remove this line to activate

        return [
            'worldcup' => [
                'label'       => 'WorldCup',
                'url'         => Backend::url('mateusz/worldcup/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['mateusz.worldcup.*'],
                'order'       => 500,
            ],
        ];
    }
}
