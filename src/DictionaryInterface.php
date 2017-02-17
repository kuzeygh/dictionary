<?php

namespace MidoriKocak;

interface DictionaryInterface
{
    function setTitle(string $title);

    function getTitle(): string;

    function setEntries(array $array);

    function getEntries(): array;

    function setEntry(EntryInterface $entry);

    function getEntry(string $key): EntryInterface;

    function deleteEntry(string $key);
}