<?php
use League\Plates\Engine;

require "vendor/autoload.php";

$templates = new Engine( './partials');
echo $templates->render("privacidad");