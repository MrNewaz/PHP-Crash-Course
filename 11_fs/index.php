<?php
// Magic constants

echo __DIR__ . '<br>';
echo __FILE__ . '<br>';
echo __LINE__ . '<br>';

// Create directory
// mkdir('test.txt');
// Rename directory

// Delete directory

// Read files and folders inside directory

echo file_get_contents('lorem.txt');

// file_get_contents, file_put_contents

echo file_put_contents('lorem.txt', 'sama');

// file_get_contents from URL


$userJson = file_get_contents('https://jsonplaceholder.typicode.com/posts');
// echo ($userJson);
$users = json_decode($userJson, true);

var_dump($users);

// https://www.php.net/manual/en/book.filesystem.php
// file_exists
// is_dir
// filemtime
// filesize
// disk_free_space
// file