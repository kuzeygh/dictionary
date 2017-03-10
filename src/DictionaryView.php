<?php

namespace MidoriKocak;

class DictionaryView
{
    private $dictionary;
    private $entryView;

    public function __construct(DictionaryInterface $dictionary, EntryView $entryView)
    {
        $this->dictionary = $dictionary;
        $this->entryView = $entryView;
    }

    public function render()
    {
        $title = "<h2>" . $this->dictionary->getTitle() . "<h2>";
        $entries = $this->dictionary->getEntries();
        $list = "";
        foreach ($entries as $entry) {
            $this->entryView->setEntry($entry);
            $list .= $this->entryView->render();
        }

        $result = "<p class='dictionary'>" . $title . $list . "</p>";

        return $result;
    }
}
