<?php

namespace Model;

class User {

public function __construct(int $age) {
$this->age = $age;
}

public function isAnAdult(): bool{
return $this->age >= 18;
}

public function testIsAnAdultReturnsTrueForPeopleOrderThanTreshold(){
    new User(19);
    $this->assertTrue($user->isAnAdult());
    
    $user = new User(55);
    $this->assertTrue($user->isAnAdult());
    
    $user = new User(102);
    $this->assertTrue($user->isAnAdult());
    
    
}
}