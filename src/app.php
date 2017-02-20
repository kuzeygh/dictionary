<?php

require_once 'DictionaryInterface.php';
require_once 'Dictionary.php';
require_once 'EntryInterface.php';
require_once 'Entry.php';

try {
    $dictionary = new MidoriKocak\Dictionary("Nesne Yönelimli Programlama Sözlüğü");

    $nesne = new \MidoriKocak\Entry('nesne', 'aklımızın dışındaki herşey');

    $nesne->addValue('harika bişi');
    $nesne->addValue('ingilizce object');

    $şey = new \MidoriKocak\Entry('şey', 'ismi olmayan nesne');

    $dictionary->addEntry($nesne);
    $dictionary->addEntry($şey);

    $entries = $dictionary->getEntries();

    if (json_decode(@file_get_contents('../data/dictionary.json')) !== $entries) {
        file_put_contents('../data/dictionary.json', json_encode($entries, JSON_UNESCAPED_UNICODE));
    }

    $fromFile = json_decode(file_get_contents('../data/dictionary.json'), true);
    print_r($fromFile);
} catch (Exception $e) {
    echo 'Error on line '.$e->getLine().' in '.$e->getFile()
        .': <b>'.$e->getMessage();
}
