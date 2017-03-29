<?php
namespace MidoriKocak;


class App
{
    private $dictionary;

    public function __construct()
    {
        $dictionary = new Dictionary("Nesne Yönelimli Programlama Sözlüğü");

        $nesne = new Entry('nesne', 'aklımızın dışındaki herşey');

        $nesne->addValue('harika bişi');
        $nesne->addValue('ingilizce object');

        $şey = new Entry('şey', 'ismi olmayan nesne');

        $dictionary->addEntry($nesne);
        $dictionary->addEntry($şey);

        $this->dictionary = $dictionary;
    }

    public function render(){
        $dictionaryView = new View();

        $dictionaryView->set('dictionary', $this->dictionary);

        $dictionaryContent =  $dictionaryView->render('dictionary');

        $header = new View();
        $header->set('title', 'Sözlük Uygulaması');
        $headerContent = $header->render('header');

        $main = new View();
        $main->set('aside','aside');
        $main->set('sectionTitle','Sözlüklerim');
        $main->set('sectionContent',$dictionaryContent);
        $mainContent = $main->render('main');

        $footer = new View();
        $footerContent = $footer->render('footer');

        $page = new View();
        $page->set('title', 'Sözlük Uygulaması');
        $page->set('content', $headerContent.$mainContent.$footerContent);

        return $page->render('layout');
    }

}