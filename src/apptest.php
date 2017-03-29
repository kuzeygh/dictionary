<?php

require_once 'DictionaryInterface.php';
require_once 'Dictionary.php';
require_once 'EntryInterface.php';
require_once 'Entry.php';
require_once 'View.php';

try {
    $dictionary = new MidoriKocak\Dictionary("Nesne Yönelimli Programlama Sözlüğü");

    $nesne = new MidoriKocak\Entry('nesne', 'aklımızın dışındaki herşey');

    $nesne->addValue('harika bişi');
    $nesne->addValue('ingilizce object');

    $şey = new MidoriKocak\Entry('şey', 'ismi olmayan nesne');

    $dictionary->addEntry($nesne);
    $dictionary->addEntry($şey);

    $entriesArray = $dictionary->getEntriesAsArray();

    $entries = $dictionary->getEntries();

    $dictionaryView = new \MidoriKocak\View();

    $dictionaryView->set('dictionary', $dictionary);

    echo $dictionaryView->render('dictionary');

} catch (Exception | Error $e) {
    echo 'Error on line ' . $e->getLine() . ' in ' . $e->getFile()
        . ': <b>' . $e->getMessage();
}