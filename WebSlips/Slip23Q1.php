<?php
    
    class Slip23Q1 {
        public $MAX;
        public $items;
        public $top;

        public function __construct() {
            $this->MAX = 5;
            $this->items = array();
            $this->top = -1;
        }
        
        public function push($n) {
            if ($this->top == $this->MAX - 1) {
                echo "Stack Overflow<br>";
            } else {
                $this->items[++$this->top] = $n;
                echo "$n is pushed.<br>";
            }
        }

        public function pop() {
            if ($this->top == -1) {
                echo "Stack Underflow<br>";
            } else {
                return $this->items[$this->top--];
            }
        }
    }

    $stack = new Slip23Q1();
    $n = 1;
    
    $stack->push("1");
    $stack->push("2");
    $stack->push("3");
    $stack->push("4");
    $stack->push("5");
    $stack->push("6");
    
    echo"<br>Stack contents:<br>";
    print_r($stack->items);
    
    echo"<br><br>";
    echo $stack->pop()." is popped.<br>";
    echo $stack->pop()." is popped.<br>";
    echo $stack->pop()." is popped.<br>";
    echo $stack->pop()." is popped.<br>";
    echo $stack->pop()." is popped.<br>";
    echo $stack->pop()."<br>";
?>