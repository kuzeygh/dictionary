<?php

namespace MidoriKocak;

interface DictionaryInterface
{
    public function setTitle(string $title);

    public function getTitle(): string;

    public function setEntries(array $array);

    public function getEntries(): array;

    public function addEntry(EntryInterface $entry);

    public function getEntry(string $key): EntryInterface;

    public function deleteEntry(string $key);
}
