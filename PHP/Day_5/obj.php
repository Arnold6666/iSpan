<?php 

// 物件導向具有屬性property，方法method(即物件中的function)
// 物件導向四大特性，封裝，繼承，多形，抽象
// 定義物件
class Person {

  // 成員變數member variable，屬於該class的變數
  // public 公有
  // private 私有
  // public readonly string $hairColor;
  // private $name = '';

  // 建構子函數 建立實體時必定實行
  // 也可以在建構子函數中宣告變數為公有或私有
  function __construct(protected string $name,public readonly string $color){
    // $this->name = $name;
    // $this->hairColor = $color;
  }

  // 解構子函數 記憶體回收的時候執行，例如進行一次存檔等等
  function __destruct(){
    echo "{$this->name}: will do garbage collection\n";
  }

  // 成員函數member function
  // 若未定義其
  // 操作成員變數透過$this
  // 可以透過method存取private 屬性
  function sendMail(){
    echo "{$this->name}: send mail done\n";
  }
  
  function getName(){
    return $this->name;
  }
}

class NewPerson extends Person{

  // private無法被繼承
  // protected
  // 繼承對象為父類別super parent
  function fly(){
    echo "{$this->name} can fly\n";
  }

  // 可複寫父類別的方法，函數名稱與參數必須一樣
  function sendMail(){
    echo "new send mail\n";
  }

  function parentSendMail($type){
    $type::sendMail();
  }
}

// 實體化new
// 透過->操作物件
$david = new NewPerson("david","black");
// 操作其屬性不用加上$
// $david->hairColor = "black";
// $david->name = "david";
$david->hairColor = 'green';
echo $david->hairColor . "\n";
// echo $david->name . "\n";

// $david->parentSendMail(NewPerson::class); //NewPerson::class 相當於self
$david->parentSendMail(Person::class); //Person::class 相當於parent
// $david->fly();
// echo $david->getName() . "\n";

// $betty = new Person("Betty","white");
// $betty->name = "Betty";
// $betty->sendMail();