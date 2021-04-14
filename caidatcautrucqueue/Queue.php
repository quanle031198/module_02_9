<?php
include_once 'Node.php';
class Queue
{
    public $front = NULL;
    public $back = NULL;

    public function isEmpty()
    {
        return $this->front == NULL;
    }

    public function enqueue($value)
    {
        $oldBack = $this->back;
        $this->back = new Node();
        $this->back->value = $value;
        if ($this->isEmpty()) {
            $this->front = $this->back;
        } else {
            $oldBack->next = $this->back;
        }
    }

    public function dequeue()
    {
        if ($this->isEmpty()) {
            return null;
        }
        $removedValue = $this->front->value;
        $this->front = $this->front->next;
        return $removedValue;
    }
}
