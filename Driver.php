<?php
include_once 'Worker.php';
//Сделайте класс Driver (Водитель), который будет наследоваться от класса Worker из предыдущей задачи. Этот метод должен вносить
//следующие private поля: водительский стаж, категория вождения (A, B, C).
class Driver extends Worker
{
private $experience;
private $category;

public function getExperience(){
    return $this->experience;
}

public function getCategory()
{
   return $this->category;
}

public function setExperience($experience){
    $this->experience = $experience;
}

public function setCategory($category){
    $this->category = $category;
}
}