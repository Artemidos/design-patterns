<?php

    namespace DesignPatterns\CreationalPatterns\Intro;

    // Тип "Перечисление" (с PHP 8.1)
    enum Direction: int
    {
        case North = 0;
        case South = 1;
        case East = 2;
        case West = 3;
    }