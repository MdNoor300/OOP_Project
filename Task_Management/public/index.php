<?php
use app\Classes\DeadlineTask;
use app\Classes\TaggedDeadlineTask;

include 'autoloader.php';

$task1 = new TaggedDeadlineTask('Task1 : ','Should be done on thursday','04-10-2023','07-10-2023');
$task1->addTag('Frontend');
$task1->addTag('contact_Page');
$task1->addAssignee('Noor');
$task1->addAssignee('Shanto');

$task2 = new TaggedDeadlineTask('Task2 : ','Should be done on Sunday','04-10-2023','07-10-2023');
$task2->addAssignee('Sohag');

$tasks =[$task1,$task2];

foreach($tasks as $task){
    echo "Title " . $task->getTitle() . PHP_EOL;
    echo "Description: " . $task->getDescription() . PHP_EOL;
    echo "Start Date: " . $task->getStartDate() . PHP_EOL;
    echo "Due Date: " . $task->getDueDate() . PHP_EOL;

if($task instanceof TaggedDeadlineTask){
    echo "Tags: " . implode(', ', $task->getTags()) .  PHP_EOL;
}

    echo "Assignee: " . implode(', ', $task->getAssignees()) .  PHP_EOL;
    echo "Priority: " . $task->getPriority() . PHP_EOL;
    echo "Completed: " . ($task->isCompleted() ? 'Yes' : 'No') . PHP_EOL;

}

$task1->markAsCompleted();
   echo "After marking task1 as completed \n";
   echo "completed: " . ($task1->isCompleted() ? 'yes' : 'Mo' )."\n\n";