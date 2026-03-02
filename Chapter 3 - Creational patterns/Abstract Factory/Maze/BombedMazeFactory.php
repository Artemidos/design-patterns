<?php

    namespace DesignPatterns\CreationalPatterns\AbstractFactory;

    use DesignPatterns\CreationalPatterns\AbstractFactory\BombedWall;

    class BombedMazeFactory extends MazeFactory
    {
        public function MakeWall(): BombedWall
        {
            return new BombedWall();
        }

        public function MakeRoom(int $n): RoomWithABomb
        {
            return new RoomWithABomb($n);
        }
    }
