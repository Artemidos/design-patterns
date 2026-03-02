<?php

    namespace DesignPatterns\CreationalPatterns\AbstractFactory;

    use DesignPatterns\CreationalPatterns\Intro\Room,
        DesignPatterns\CreationalPatterns\Intro\Wall,
        DesignPatterns\CreationalPatterns\Intro\Door;

    class MazeGame
    {
    // Напомним, что функция CreateMaze строит небольшой лабиринт, состоящий всего из двух комнат, соединенных одной
    // дверью. В ней жестко «зашиты» имена классов, поэтому воспользоваться функцией для создания лабиринтов с другими
    // компонентами проблематично. Следующая версия CreateMaze избавлена от подобного недостатка, поскольку она получает MazeFactory в параметре
        public function createMazeFactory(): MazeFactory
        {
            return (new MazeFactory())
              ->addPart('wall', Wall::class)
              ->addPart('room', Room::class)
              ->addPart('door', Door::class);
        }
    }
