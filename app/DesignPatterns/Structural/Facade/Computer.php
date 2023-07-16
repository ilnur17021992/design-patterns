<?php

namespace App\DesignPatterns\Structural\Facade;

use App\DesignPatterns\Structural\Facade\Components\CPU;
use App\DesignPatterns\Structural\Facade\Components\Memory;
use App\DesignPatterns\Structural\Facade\Components\HardDrive;

class Computer
{
    protected $cpu;
    protected $memory;
    protected $hardDrive;

    /**
     * Computer constructor.
     * Инициализируем части
     */
    public function __construct()
    {
        $this->cpu = new CPU();
        $this->memory = new Memory();
        $this->hardDrive = new HardDrive();
    }

    /**
     * Упрощённая обработка поведения "запуск компьютера"
     */
    public function startComputer()
    {
        $cpu = $this->cpu;
        $memory = $this->memory;
        $hardDrive = $this->hardDrive;

        $cpu->freeze();
        $memory->load(
            $memory::BOOT_ADDRESS,
            $hardDrive->read($hardDrive::BOOT_SECTOR, $hardDrive::SECTOR_SIZE)
        );
        $cpu->jump($memory::BOOT_ADDRESS);
        $cpu->execute();
    }
}
