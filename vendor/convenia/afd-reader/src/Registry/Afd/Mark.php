<?php

namespace Convenia\AfdReader\Registry\Afd;

use Convenia\AfdReader\Interfaces\RegistryInterface;

class Mark implements RegistryInterface
{
    public $map = [
        1 => [
            'size' => 9,
            'type' => 'numeric',
            'name' => 'sequency',
        ],
        2 => [
            'size' => 1,
            'type' => 'numeric',
            'name' => 'type',
        ],
        3 => [
            'size'  => 8,
            'type'  => 'numeric',
            'name'  => 'date',
            'class' => \Convenia\AfdReader\Field\Date::class,
        ],
        4 => [
            'size'  => 4,
            'type'  => 'numeric',
            'name'  => 'time',
            'class' => \Convenia\AfdReader\Field\Time::class,
        ],
        5 => [
            'size'  => 12,
            'type'  => 'numeric',
            'name'  => 'identityNumber',
            'class' => \Convenia\AfdReader\Field\IdentityNumber::class,
        ],
    ];

    /**
     * Return may about line type.
     *
     * @method map
     *
     * @return array Map
     */
    public function map()
    {
        return $this->map;
    }
}
