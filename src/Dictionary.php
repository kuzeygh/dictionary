<?php

namespace MidoriKocak;

class Dictionary
{
    private $title;
    private $entries;

    public function __construct(string $title)
    {
        $this->title = $title;
        $this->entries = [];
    }

    public function getTitle():string
    {
        return $this->title;
    }

    public function setTitle(string $title)
    {
        if (($title != "") && (strlen($title) <= 70)) {
            $this->title = $title;
        }
    }

    public function getEntries():array
    {
        return $this->entries;
    }

    public function setEntries(array $entries)
    {
        $this->entries = $entries;
    }

    public function addEntry(string $key, string $value)
    {
        return $this->entries[$key] = $value;
    }

    public function getEntry(string $key):string
    {
        return $this->entries[$key];
    }

    public function deleteEntry(string $key)
    {
        unset($this->entries[$key]);
    }
}
