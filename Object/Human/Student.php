<?php
declare(strict_types=1);
namespace Object\Human;

class Student
{
    public string $name, $surname;
    private const int MIN_AGE = 18;
    private const int MAX_AGE = 25;

    public function __construct(string $name, string $surname)
    {
        $this->name = mb_convert_case($name, MB_CASE_TITLE, "UTF-8");
        $this->surname = mb_convert_case($surname, MB_CASE_TITLE, "UTF-8");
        echo "Студент $this->name $this->surname" . PHP_EOL;
    }

    public function checkStudentAge($age): void
    {
        $nameInitial = mb_substr($this->name, 0, 1);
        $fullness = $nameInitial. '.' . $this->surname;

        if ($age > self::MIN_AGE && $age < self::MAX_AGE) {
            echo "$fullness студент учебного заведения" . PHP_EOL;
        } else {
            echo "$fullness студентом не является" . PHP_EOL;
        }
        echo PHP_EOL;
    }
}
