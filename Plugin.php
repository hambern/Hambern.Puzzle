<?php namespace hambern\puzzle;

use System\Classes\PluginBase;

/**
 * Class Plugin
 *
 * @package hambern\puzzle
 */
class Plugin extends PluginBase
{

    /**
     * @return array
     */
    public function registerComponents()
    {
        return [
            'Hambern\Puzzle\Components\Map'      => 'Map',
            'Hambern\Puzzle\Components\Timeline' => 'Timeline',
        ];
    }
}
