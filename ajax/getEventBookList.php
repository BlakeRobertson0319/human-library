<?php

$eventId = $_GET['eventId'];


//echo $eventId;

include_once "../classes/book.class.php";

$book = new Book();

echo json_encode($book->getEventBookList($eventId));