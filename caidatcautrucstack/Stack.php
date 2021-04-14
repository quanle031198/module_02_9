<?php
class Stack
{
    public $stack;
    public $limit;
    public function __construct($limit = 10)
    {
        $this->stack = array();
        $this->limit = $limit;
    }

    public function push($item)
    {

        if (count($this->stack) < $this->limit) {
            array_unshift($this->stack, $item);
        } else {
            die('Stack is full!');
        }
    }
    
    public function isEmpty() {
        return empty($this->stack);
    }

    public function pop()
    {
        if ($this->isEmpty()) {
           
	      die('Stack is empty!');
	  } else {
           
            return array_shift($this->stack);
        }
    }

    public function top() {
        return current($this->stack);
    }

    
}
