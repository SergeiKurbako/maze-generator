<?php

namespace Avior\MazeGenerator;

use Avior\MazeGenerator\Base\IMazeStaticFactory;
use Avior\MazeGenerator\Base\IMazeSettings;
use Avior\MazeGenerator\Base\IMaze;
use Avior\MazeGenerator\Mazes\Maze;

/**
 * Класс создающий лабиринт
 */
class MazeStaticFactory implements IMazeStaticFactory
{
    public static function build(IMazeSettings $maseSettings): IMaze
    {
        switch ($maseSettings->type) {
            case 'orthogonal':
                $maze = new OrthogonalMaze($maseSettings);
                break;

            default:
                // code...
                break;
        }

        return $maze;
    }
}
