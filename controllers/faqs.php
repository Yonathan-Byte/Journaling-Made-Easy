<?php
$title = "FAQ's";

$config = require('config.php');
$db = new Database($config['database']);

$questions = $db->query('SELECT * FROM faqs WHERE user_id=1')->fetchAll();


require('views/faqs.view.php');