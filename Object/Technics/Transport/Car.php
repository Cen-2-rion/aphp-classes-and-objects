<?php
declare(strict_types=1);
namespace Object\Technics\Transport;

class Car
{
    public string $brand, $color, $model;
    public function isCar(): array
    {
        return [
            'Брэнд' => $this->brand,
            'Цвет' => $this->color,
            'Модель' => $this->model,
        ];
    }

    public function carInfo(): void
    {
        $arr = $this->isCar();

        foreach ($arr as $key => $value) {
            echo $key . ': ' . $value . PHP_EOL;
        }
        echo PHP_EOL;
    }
}
