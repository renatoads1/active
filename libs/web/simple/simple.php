<?php
require_once dirname(__FILE__) . '/../../ActiveRecord.php';

// assumes a table named "books" with a pk named "id"
// see simple.sql
class Book extends ActiveRecord\Model { }

// initialize ActiveRecord
// change the connection settings to whatever is appropriate for your mysql server 
ActiveRecord\Config::initialize(function($cfg)
{
    $cfg->set_model_directory('.');
    $cfg->set_connections(array('development' => 'mysql://nave:nave@192.168.15.50/testerenato'));
});

//print_r(Book::first()->attributes());
$user = Book::find_by_name('java');
//$user = User::find_by_name('Tito');
print_r($user->name);
?>
