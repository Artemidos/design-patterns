<?php

    namespace DesignPatterns\CreationalPatterns\Intro;

    // Класс Maze для представления набора комнат.

    class Maze
    {
        private array $rooms = [];

        public function __construct()
        {
            // Maze constructor logic if any
        }

        public function AddRoom(Room $room): void
        {
            $this->rooms[$room->roomNumber] = $room;
        }

        // В этот класс включена операция RoomNo для нахождения комнаты по ее номеру.
        public function RoomNo(int $roomNumber): ?Room
        {
            return $this->rooms[$roomNumber] ?? null;
        }
    }