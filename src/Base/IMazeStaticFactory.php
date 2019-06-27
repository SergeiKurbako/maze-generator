<?php

namespace Avior\MazeGenerator\Base;

use Avior\MazeGenerator\Base\IMazeSettings;

/**
 * Интерфейс для создания фабрики лабиринтов
 */
interface IMazeStaticFactory
{
    public static function build(IMazeSettings $maseSettings): IMaze;
}
