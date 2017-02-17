<?php

require_once 'DictionaryInterface.php';
require_once 'Dictionary.php';
require_once 'EntryInterface.php';
require_once 'Entry.php';

$dictionary = new MidoriKocak\Dictionary("Nesne Yönelimli Programlama Sözlüğü");

$nesne = new \MidoriKocak\Entry('nesne', 'aklımızın dışındaki herşey');

$nesne->addValue('harika bişi');
$nesne->addValue('ingilizce object');

$şey = new \MidoriKocak\Entry('şey', 'ismi olmayan nesne');

$dictionary->addEntry($nesne);
$dictionary->addEntry($şey);

print_r($dictionary->getEntries());