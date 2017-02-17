<?php

namespace MidoriKocak;


interface EntryInterface
{
    function setKey(string $key);

    function getKey(): string;

    function setValues(array $values);

    function getValues(): array;

    function getValue(int $order): string;

    function setValue(int $order, string $newValue);

    function addValue(string $value);

    function deleteValue(int $order);
}