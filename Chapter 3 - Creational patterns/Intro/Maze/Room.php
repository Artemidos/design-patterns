<?php

    namespace DesignPatterns\CreationalPatterns\Intro;

    // Room — это конкретный подкласс класса MapSite, который определяет ключевые отношения между компонентами
    // лабиринта. Он содержит ссылки на другие объекты MapSite, а также хранит номер комнаты.

    class Room extends MapSite
    {
        private array $sides = [];
        public int $roomNumber;

        public function __construct(int $roomNo)
        {
            // Все комнаты в лабиринте идентифицируются номерами
            $this->roomNumber = $roomNo;

            // Initialize sides with null or some default
            $this->sides = array_fill(0, 4, null);
        }

        public function GetSide(Direction $direction): ?MapSite
        {
            return $this->sides[$direction->value] ?? null;
        }

        public function SetSide(Direction $direction, MapSite $mapSite): void
        {
            $this->sides[$direction->value] = $mapSite;
        }

        public function Enter(): void
        {
            // Implementation of Enter for Room
        }
    }