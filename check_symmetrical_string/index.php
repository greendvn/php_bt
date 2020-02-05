<?php
include_once "StackList.php";
include_once "Queue.php";

$stackList = new StackList(30);
$queueList = new Queue();

$str = 'able was I ere I saw elba';
for ($i = 0; $i < strlen($str); $i++) {
    $stackList->push(substr($str, $i, 1));
    $queueList->enqueue(substr($str, $i, 1));
}
for ($i = 0; $i < strlen($str); $i++) {
    if ($stackList->pop() != $queueList->dequeue()){
        echo "chuoi khong doi xung";
        die();
    }
    else
        continue;
}
echo "chuoi doi xung";