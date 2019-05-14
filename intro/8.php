<?php

class User
{
  private $name;
  private $age;

  public function __construct($name, $age)
  {
    $this->name = $name;
    $this->age = $age;
  }

  // simple get method
  public function getName()
  {
    return $this->name;
  }

  // simple set method
  public function setName($name)
  {
    $this->name = $name;
  }

  /**
   * ----------------------------------------
   * __get and __set Magic Methods
   * 
   * Allows you to get / set any property
   * that matches a parameter passed in.
   * Keeps you from having to write custom
   * getters / setters for every property.
   * ----------------------------------------
   */
  // __get MAGIC METHOD
  public function __get($property)
  {
    if(property_exists($this, $property)) {
      return $this->$property;
    }
  }

  // __set MAGIC METHOD
  public function __set($property, $value)
  {
    if(property_exists($this, $property)) {
      $this->$property = $value;
    }
  }
}

$user1 = new User('John', 40);

// using simple get method
echo $user1->getName();

// using set magic method
$user1->__set('name', 'Jeff');
$user1->__set('age', 41);

// using get magic method
echo $user1->__get('name');
echo $user1->__get('age');
