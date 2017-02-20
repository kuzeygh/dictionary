<?php

namespace MidoriKocak;

interface EntryInterface
{
    public function setKey(string $key);

    public function getKey(): string;

    public function setValues(array $values);

    public function getValues(): array;

    public function getValue(int $order): string;

    public function setValue(int $order, string $newValue);

    public function addValue(string $value);

    public function deleteValue(int $order);
}
