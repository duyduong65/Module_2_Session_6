<?php
include_once "Node.php";

class MyLinkedList
{
    public $fistNode;
    public $lastNode;
    public $numNodes;

    function MyLinkedList()
    {
        $this->fistNode = NULL;
        $this->lastNode = NULL;
        $this->numNodes = 0;
    }

    function addFirst($data)
    {
        $node = new Nodes();
        $node->link = $this->fistNode;
        $this->fistNode = $node;
        if (!$this->lastNode) {
            $this->lastNode = $node;
        }
        $this->numNodes++;
    }

    function addLastNode($data)
    {
        if ($this->fistNode) {
            $node = new Nodes();
            $this->lastNode->link = $node;
            $node->link = NULL;
            $this->lastNode = $node;
            $this->numNodes++;
        } else {
            $this->addFirst($data);
        }
    }

    function size(){
        return $this->numNodes;
    }

}