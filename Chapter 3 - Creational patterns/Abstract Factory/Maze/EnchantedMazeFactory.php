<?php

    namespace DesignPatterns\CreationalPatterns\AbstractFactory;

    use DesignPatterns\CreationalPatterns\Intro\DoorNeedingSpell;
    use DesignPatterns\CreationalPatterns\Intro\Room,
        DesignPatterns\CreationalPatterns\AbstractFactory\EnchantedRoom;

    // Чтобы создать фабрику EnchantedMazeFactory для производства волшебных лабиринтов, следует породить подкласс от
    // MazeFactory. В этом подклассе замещены различные функции класса, так что он возвращает другие подклассы классов
    // Room, Wall и т.д.

    class EnchantedMazeFactory extends MazeFactory
    {
        public function MakeRoom(int $n): EnchantedRoom
        {
            return new EnchantedRoom($n, $this->CastSpell());
        }

        public function MakeDoor(Room $r1, Room $r2): DoorNeedingSpell
        {
            return new DoorNeedingSpell($r1, $r2);
        }

        protected function CastSpell()
        {
            // Implementation of CastSpell should be here
        }
    }
