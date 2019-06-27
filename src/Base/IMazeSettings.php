<?php

namespace Avior\MazeGenerator\Base;

/**
 * Интерфейс для создания объекта с настройками лабиринта
 */
interface IMazeSettings
{
    public function __construct(IMazeSettings $maseSettings);

    public function generate(): string;
}
