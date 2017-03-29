<?php

namespace MidoriKocak;

class EntryView
{
    private $entry;

    public function __construct(EntryInterface $entry = null)
    {
        if ($entry !== null) {
            $this->entry = $entry;
        }
    }

    private function template(EntryInterface $entry)
    {
        ob_start();
        require 'Template/entry.php';
        return ob_get_clean();
    }

    public function setEntry(EntryInterface $entry)
    {
        $this->entry = $entry;
    }

    public function render()
    {
        if (!isset($this->entry)) {
            throw new \Exception('Cannot render without entry');
        }

        return $this->template($this->entry);
    }
}