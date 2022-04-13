<?php

class node
{
    public $data;
    public $next;
    public $prev;
}

class doubleLinkedList
{
    public $head;

    public function __construct()
    {
        $this->head = null;
    }

    public function dataList() {
        $temp = new node();
        $temp = $this->head;
        if($temp != null) {
          echo "The list contains: ";
          while($temp != null) {
            echo $temp->data." ";
            $temp = $temp->next;
          }
          echo "\n";
        } else {
          echo "The list is empty.\n";
        }
    }
}

$myList = new doubleLinkedList();
//die(var_dump($myList));

//first node
$first = new node();
$first->data = 10;
$first->next = null;
$first->prev = null;
//link with head node
$myList->head = $first;

//second node
$second = new node();
$second->data = 20;
$second->next = null;
//link first code
$second->prev = $first;
$first->next =$second;

//third node
$third = new node();
$third->data = 30;
$third->next = null;
//link with second node
$third->prev = $second;
$second->next = $third;

$myList->dataList();
