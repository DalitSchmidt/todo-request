<?php
require 'functions.php';

// request/api.php?action=XXX&id=XXX

$action = $_GET['action'];

if ( $action == 'getTask' ) {
		$id = $_GET['id'];
		echo getTask( $id );
	} elseif ( $action == 'getAllTasks' ) {
		echo getAllTasks();
	} elseif ( $action == 'deleteTask' ) {
		$id = $_GET['id'];
		deleteTask( $id );
}