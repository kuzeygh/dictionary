<?php

namespace MidoriKocak;

class DictionaryView
{
    private $dictionary;
    private $entryView;

    public function __construct(DictionaryInterface $dictionary)
    {
        $this->dictionary = $dictionary;
    }

    private function template(DictionaryInterface $dictionary)
    {
        ob_start();
        require 'Template/dictionary.php';
        return ob_get_clean();
    }

    public function render()
    {
        if (!isset($this->dictionary)) {
            throw new \Exception('Cannot render without dictionary');
        }

        return $this->template($this->dictionary);
    }
}
