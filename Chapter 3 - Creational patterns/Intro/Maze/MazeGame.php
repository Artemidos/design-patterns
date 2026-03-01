<?php

    namespace DesignPatterns\CreationalPatterns\Intro;

    // Класс MazeGame, который создает лабиринт. Самый простой способ сделать это — строить лабиринт последовательностью
    // операций, добавляющих к нему компоненты, которые потом соединяются.

    class MazeGame
    {
        // Следующая функция создаст лабиринт из двух комнат с одной дверью между ними
        public static function CreateMaze(): Maze
        {
            $aMaze = new Maze();
            $r1 = new Room(1);
            $r2 = new Room(2);
            $theDoor = new Door($r1, $r2);

            $aMaze->AddRoom($r1);
            $aMaze->AddRoom($r2);

            $r1->SetSide(Direction::North, new Wall());
            $r1->SetSide(Direction::East, $theDoor);
            $r1->SetSide(Direction::South, new Wall());
            $r1->SetSide(Direction::West, new Wall());

            $r2->SetSide(Direction::North, new Wall());
            $r2->SetSide(Direction::East, new Wall());
            $r2->SetSide(Direction::South, new Wall());
            $r2->SetSide(Direction::West, $theDoor);

            return $aMaze;
        }
    }