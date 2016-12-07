<?php namespace Hambern\Puzzle\Components;

use Cms\Classes\ComponentBase;
use Lang;

/**
 * Class Timeline
 *
 * @package hambern\puzzle\components
 */
class Timeline extends ComponentBase
{

    /**
     *
     */
    public function onRun()
    {
        $this->addJs('http://platform.twitter.com/widgets.js');
    }

    /**
     * @return array
     */
    public function componentDetails()
    {
        return [
            'name'        => 'hambern.puzzle::lang.components.timeline.name',
            'description' => 'hambern.puzzle::lang.components.timeline.description'
        ];
    }

    /**
     * @return array
     */
    public function defineProperties()
    {
        return [
            'width'      => [
                'title'             => 'hambern.puzzle::lang.labels.width',
                'description'       => 'hambern.puzzle::lang.descriptions.width',
                'default'           => '100%',
                'type'              => 'string',
                'validationPattern' => '^[0-9%]+$',
            ],
            'height'     => [
                'title'             => 'hambern.puzzle::lang.labels.height',
                'description'       => 'hambern.puzzle::lang.descriptions.height',
                'default'           => 600,
                'type'              => 'string',
                'validationPattern' => '^[0-9%]+$',
            ],
            'profile'    => [
                'title'       => 'hambern.puzzle::lang.labels.profile',
                'description' => 'hambern.puzzle::lang.descriptions.profile',
                'default'     => 'Hambern',
                'type'        => 'string',
            ],
            'lang'       => [
                'title'       => 'hambern.puzzle::lang.labels.lang',
                'description' => 'hambern.puzzle::lang.descriptions.lang',
                'default'     => 'en',
                'type'        => 'string',
            ],
            'theme'      => [
                'title'       => 'hambern.puzzle::lang.labels.theme',
                'description' => 'hambern.puzzle::lang.descriptions.theme',
                'default'     => 'light',
                'type'        => 'dropdown',
            ],
            'limit'      => [
                'title'             => 'hambern.puzzle::lang.labels.limit',
                'description'       => 'hambern.puzzle::lang.descriptions.limit',
                'default'           => '',
                'type'              => 'string',
                'validationPattern' => '^[0-9]+$',
            ],
            'class'      => [
                'title'       => 'hambern.puzzle::lang.labels.class',
                'description' => 'hambern.puzzle::lang.descriptions.class',
                'default'     => '',
                'type'        => 'string',
            ],
            'header'     => [
                'title'       => 'hambern.puzzle::lang.labels.header',
                'description' => 'hambern.puzzle::lang.descriptions.header',
                'default'     => false,
                'type'        => 'checkbox',
            ],
            'footer'     => [
                'title'       => 'hambern.puzzle::lang.labels.footer',
                'description' => 'hambern.puzzle::lang.descriptions.footer',
                'default'     => false,
                'type'        => 'checkbox',
            ],
            'background' => [
                'title'       => 'hambern.puzzle::lang.labels.background',
                'description' => 'hambern.puzzle::lang.descriptions.background',
                'default'     => false,
                'type'        => 'checkbox',
            ],
            'scrollbar'  => [
                'title'       => 'hambern.puzzle::lang.labels.scrollbar',
                'description' => 'hambern.puzzle::lang.descriptions.scrollbar',
                'default'     => true,
                'type'        => 'checkbox',
            ],
        ];
    }

    /**
     * @return array
     */
    public function getThemeOptions()
    {
        return [
            'light' => Lang::get('hambern.puzzle::lang.labels.light'),
            'dark'  => Lang::get('hambern.puzzle::lang.labels.dark'),
        ];
    }
}
