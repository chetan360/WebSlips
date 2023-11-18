<?php 
    class Slip22Q1 {
        public $MAX;
        public $items;
        public $fr, $rr;

        public function __construct() {
            $this->MAX = 5;
            $this->items = array();
            $this->fr = -1;
            $this->rr = -1;
        }
        
        public function enqueue($n) {
            if ($this->rr == $this->MAX - 1) {
                echo "Queue is full.<br>";
            } else {
                $this->items[++$this->rr] = $n;
                echo "$n is inserted at queue.<br>";
            }
        }

        public function dqueue() {
            if ($this->fr == $this->rr) {
                echo "Queue is empty.<br>";
            } else {
                return $this->items[++$this->fr];
            }
        }
    }

    $queue = new Slip22Q1();
    $n = 1;
    
    $queue->enqueue("1");
    $queue->enqueue("2");
    $queue->enqueue("3");
    $queue->enqueue("4");
    $queue->enqueue("5");
    $queue->enqueue("6");
    
    echo"<br>Queue contents:<br>";
    print_r($queue->items);
    
    echo"<br><br>";
    echo $queue->dqueue()." is deleted from queue.<br>";
    echo $queue->dqueue()." is deleted from queue.<br>";
    echo $queue->dqueue()." is deleted from queue.<br>";
    echo $queue->dqueue()." is deleted from queue.<br>";
    echo $queue->dqueue()." is deleted from queue.<br>";
    echo $queue->dqueue()."<br>";
    
?>