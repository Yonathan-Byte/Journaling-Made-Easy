<?php
$title = "Answers";

$config = require('config.php');
$db = new Database($config['database']);
$id = $_GET['id'];

$answers = $db->query("SELECT answer FROM faqs WHERE id = :id", ['id' => $id])->fetch();
//dump($answers);
require('views/answers.view.php');