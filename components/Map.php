<?php namespace Hambern\Puzzle\Components;

use Cms\Classes\ComponentBase;
use Lang;

/**
 * Class Map
 *
 * @package hambern\puzzle\components
 */
class Map extends ComponentBase
{

    /**
     * @return array
     */
    public function componentDetails()
    {
        return [
            'name'        => 'hambern.puzzle::lang.components.map.name',
            'description' => 'hambern.puzzle::lang.components.map.description'
        ];
    }

    /**
     * @return array
     */
    public function defineProperties()
    {
        return [
            'width'   => [
                'title'             => 'hambern.puzzle::lang.labels.width',
                'description'       => 'hambern.puzzle::lang.descriptions.width',
                'default'           => '100%',
                'type'              => 'string',
                'validationPattern' => '^[0-9%]+$',
            ],
            'height'  => [
                'title'             => 'hambern.puzzle::lang.labels.height',
                'description'       => 'hambern.puzzle::lang.descriptions.height',
                'default'           => 400,
                'type'              => 'string',
                'validationPattern' => '^[0-9%]+$',
            ],
            'zoom'    => [
                'title'             => 'hambern.puzzle::lang.labels.zoom',
                'description'       => 'hambern.puzzle::lang.descriptions.zoom',
                'default'           => 12,
                'type'              => 'string',
                'validationPattern' => '^[0-9]+$',
            ],
            'address' => [
                'title'       => 'hambern.puzzle::lang.labels.address',
                'description' => 'hambern.puzzle::lang.descriptions.address',
                'default'     => '',
                'type'        => 'string',
            ],
            'maptype' => [
                'title'       => 'hambern.puzzle::lang.labels.maptype',
                'description' => 'hambern.puzzle::lang.descriptions.maptype',
                'default'     => 'roadmap',
                'type'        => 'dropdown',
            ],
            'class'   => [
                'title'       => 'hambern.puzzle::lang.labels.class',
                'description' => 'hambern.puzzle::lang.descriptions.class',
                'default'     => 'google-map',
                'type'        => 'string',
            ],
            'key'     => [
                'title'       => 'hambern.puzzle::lang.labels.key',
                'description' => 'hambern.puzzle::lang.descriptions.key',
                'default'     => '',
                'type'        => 'string',
            ],
            'touch'   => [
                'title'       => 'hambern.puzzle::lang.labels.touch',
                'description' => 'hambern.puzzle::lang.descriptions.touch',
                'default'     => true,
                'type'        => 'checkbox',
            ],
        ];
    }

    /**
     * @return array
     */
    public function getMapTypeOptions()
    {
        return [
            'roadmap'   => Lang::get('hambern.puzzle::lang.maptypes.roadmap'),
            'satellite' => Lang::get('hambern.puzzle::lang.maptypes.satellite'),
            //'hybrid'    => Lang::get('hambern.puzzle::lang.maptypes.hybrid'),
            //'terrain'   => Lang::get('hambern.puzzle::lang.maptypes.terrain'),
        ];
    }
}
