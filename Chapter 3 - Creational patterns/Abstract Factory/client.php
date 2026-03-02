<?php
    use DesignPatterns\CreationalPatterns\AbstractFactory\MazeGame;

    $game = new MazeGame();
    $mazeFactory = $game->CreateMazeFactory();