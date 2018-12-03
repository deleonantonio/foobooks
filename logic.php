<?php

// used to open up the files
$booksJson = file_get_contents('books.json');

$books = json_decode($booksJson, true);


// dump($books['The Bell Jar']['author']);