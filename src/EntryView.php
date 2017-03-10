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

    public function setEntry(EntryInterface $entry)
    {
        $this->entry = $entry;
    }

    public function render()
    {
        if (!isset($this->entry)) {
            throw new \Exception('Cannot render without entry');
        }

        $title = "<h3>" . $this->entry->getKey() . "</h3>";
        $values = $this->entry->getValues();
        $list = "";
        foreach ($values as $value) {
            $list .= "<li>" . $value . "</li>";
        }

        $result = "<p class='entry'>" . $title . "<ol class='values'>" . $list . "</ol>" . "</p>";

        return $result;
    }
}