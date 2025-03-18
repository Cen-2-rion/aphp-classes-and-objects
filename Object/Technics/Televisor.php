<?php
declare(strict_types=1);
namespace Object\Technics;

class Televisor
{
    public string $brand, $screenType;
    public int $permission;

    public function __construct(string $brand, string $screenType)
    {
        $this->brand = $brand;
        $this->screenType = $screenType;
        echo "Телевизор $this->brand, тип экрана: $this->screenType,";
    }

    public function getScreenResolution(): void
    {
        switch (true) {
            case ($this->screenType == 'sd'):
                $this->permission = 720;
                echo " разрешение: $this->permission";
                break;
            case ($this->screenType == 'hd'):
                $this->permission = 1920;
                echo " разрешение: $this->permission";
                break;
            case ($this->screenType == '4k'):
                $this->permission = 3840;
                echo " разрешение: $this->permission";
                break;
            default:
                echo ' разрешение: Информация отсутствует!';
        }
        echo PHP_EOL;
    }
}
