<?php

namespace Avior\MazeGenerator\Base;

/**
 * Класс для создания объекта с настройками лабиринта
 */
class MazeSettings implements IMazeSettings
{
    public $type = 'orthogonal';

    public $width = 11;

    public $height = 11;    
}
