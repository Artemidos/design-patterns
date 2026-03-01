<?php

    namespace DesignPatterns\CreationalPatterns\Intro;

    // Двери

    class Door extends MapSite
    {
        private ?Room $room1;
        private ?Room $room2;
        private bool $isOpen;

        public function __construct(?Room $r1 = null, ?Room $r2 = null)
        {
            $this->room1 = $r1;
            $this->room2 = $r2;
            $this->isOpen = false;
        }

        public function Enter(): void
        {
            // Implementation of Enter for Door
        }

        public function OtherSideFrom(Room $room): ?Room
        {
            if ($room === $this->room1) {
                return $this->room2;
            } elseif ($room === $this->room2) {
                return $this->room1;
            }
            return null;
        }
    }