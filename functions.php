<?php
define('FILENAME', 'data.json');

function getAllTasks() {
    $tasks = file_get_contents(FILENAME);
    
	return json_decode($tasks, true);
}

function saveTask( $task ) {
    $tasks = getAllTasks();

    return file_put_contents(FILENAME, $tasks);
}

function getTask( $index ) {
    $tasks = getAllTasks();

    return json_encode( $tasks[ $index ] );
}

function deleteTask( $index ) {
    $tasks = getAllTasks();

    unset( $tasks[ $index ] );
}