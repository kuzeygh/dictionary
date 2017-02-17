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
        try {
            if (($title != "") && (strlen($title) <= 70)) {
                $this->title = $title;
            } else {
                throw new \InvalidArgumentException('Wrong title value.');
            }
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getEntries(): array
    {
        return $this->entries;
    }

    public function setEntries(array $entries)
    {
        try {
            if (!empty($entries)) {
                $this->entries = $entries;
            } else {
                throw new \InvalidArgumentException('Array cannot be empty.');
            }
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }

    public function setEntry(EntryInterface $entry)
    {
        $key = $entry->getKey();
        $this->entries[$key] = $entry;
    }

    private function isKeyInEntries($key)
    {
        try {
            if (!array_key_exists($key, $this->entries)) {
                throw new \OutOfBoundsException('Cannot find entry in dictionary');
            } else {
                return true;
            }
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }

    public function getEntry(string $key): EntryInterface
    {
        if ($this->isKeyInEntries($key)) {
            return $this->entries[$key];
        }
    }

    public function deleteEntry(string $key)
    {
        if ($this->isKeyInEntries($key)) {
            unset($this->entries[$key]);
        }
    }

}
