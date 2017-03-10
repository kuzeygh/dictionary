<?php

namespace MidoriKocak;

class Dictionary implements DictionaryInterface
{
    private $title;
    private $entries;

    public function __construct(string $title)
    {
        $this->setTitle($title);
        $this->entries = [];
    }

    public function setTitle(string $title)
    {
        if (($title != "") && (strlen($title) <= 70)) {
            $this->title = $title;
        } else {
            throw new \InvalidArgumentException('Wrong title value.');
        }
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getEntriesAsArray(): array
    {
        $entries = [];
        /* @var $entry EntryInterface */
        foreach ($this->entries as $entry) {
            $entries[$entry->getKey()] = $entry->getValues();
        }
        return $entries;
    }

    public function getEntries(): array
    {
        return $this->entries;
    }

    public function setEntries(array $entries)
    {
        if (!empty($entries)) {
            $this->entries = $entries;
        } else {
            throw new \InvalidArgumentException('Array cannot be empty.');
        }
    }

    public function addEntry(EntryInterface $entry)
    {
        $key = $entry->getKey();
        $this->entries[$key] = $entry;
    }

    private function isKeyInEntries($key) :bool
    {
        if (!array_key_exists($key, $this->entries)) {
            throw new \OutOfBoundsException('Cannot find entry in dictionary');
        } else {
            return true;
        }
    }

    public function getEntry(string $key): EntryInterface
    {
        if ($this->isKeyInEntries($key)) {
            return $this->entries[$key];
        }
        return new NullEntry();
    }

    public function deleteEntry(string $key)
    {
        if ($this->isKeyInEntries($key)) {
            unset($this->entries[$key]);
        }
    }
}
