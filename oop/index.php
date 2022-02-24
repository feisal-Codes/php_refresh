<?php


class User
{

    protected $username;
    private $email;
    public $role = "member";

    function __construct($name, $email)
    {
        $this->username = $name;
        $this->email = $email;
        
    }


    public function getName()
    {
        return $this->username;
    }
   public function greeting(){
       return "Hello $this->username, Admin says Hi";
   }
    public function getEmail()
    {
        return $this->email;
    }
}



class AdminUser extends User
{

    public $level = 0;
    public $role = "Admin";
    public function __construct($username, $level, $email)
    {
        $this->level = $level;
        parent::__construct($username, $email);
    }

    public function greeting(){
        return "Hello $this->username, The Members send there greetings!";
    }
}

$admin = new AdminUser("Ali", 5, "fei@gmail.com");
$user1 = new User("feisal", "feimib@gmail.com");

echo $admin->getName();
echo $admin->getEmail();
echo $admin->level;

echo $admin->role;
echo "<br/>";

echo $admin->greeting();
echo "<br/>";

echo $user1->greeting();
//to see what variables or methods available in classes 
//use get_class_vars()
//get_class_methods("pass the class")

// $user1 = new User("feisal", "feimib@gmail.com");
// $user2 =new User("marwa", "marwa@gmail.com");

// $name =$user1->getName();
// echo $name  ."<br/>";
// $name2 =$user2->getEmail();
// echo $name2;
