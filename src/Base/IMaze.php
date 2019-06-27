<?php

namespace Avior\MazeGenerator\Base;

/**
 * Интерфейс для создания объекта который генерирует лабирин
 */
interface IMaze
{
    public function generateMaze($value='');
}
