<?php
use App\Models\Comments;

$comment = new Comments($db);

var_dump($_POST);
var_dump($_SESSION);
var_dump($_GET);