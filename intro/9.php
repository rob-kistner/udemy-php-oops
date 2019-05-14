<?php

require('./components/utilities.php');

class User
{
  protected $name = 'Brad';
  protected $age;

  public function __construct($name, $age)
  {
    $this->name = $name;
    $this->age = $age;
  }
}

class Customer extends User
{
  private $balance;

  public function __construct($name, $age, $balance)
  {
    parent::__construct($name, $age);
    $this->balance = $balance;
  }

  public function pay($amount)
  {
    return $this->name . ' paid $' . $amount;
  }

  public function getBalance()
  {
    return $this->balance;
  }
}

$cust1 = new Customer('John', 33, 300.00);

para($cust1->pay(300));
para($cust1->getBalance());