<?php
$title = "Ask Away ";

$config = require('config.php');
$db = new Database($config['database']);

if($_SERVER['REQUEST_METHOD']==='POST'){
    $db->query('INSERT INTO faqs(question,user_id) VALUES(:question,:user_id)',[
        'question'=>$_POST['body'],
        'user_id'=>1
    ]);
}

require('views/ask.question.view.php');