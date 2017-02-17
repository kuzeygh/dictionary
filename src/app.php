<?php

require_once 'DictionaryInterface.php';
require_once 'Dictionary.php';

$dictionary = new MidoriKocak\Dictionary("");
$dictionary->setTitle("Doğru başlık");
$dictionary->getTitle();