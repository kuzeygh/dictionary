<?php

namespace MidoriKocak;

class Entry implements EntryInterface
{
    private $key;
    private $values;

    public function __construct(string $key, string $value)
    {
        $this->setKey($key);
        $this->values = [];
        array_push($this->values, $value);
    }

    public function setKey(string $key)
    {
        if (($key != "") && (strlen($key) <= 70)) {
            $this->key = $key;
        } else {
            throw new \InvalidArgumentException('Wrong key title.');
        }
    }

    public function getKey(): string
    {
        return $this->key;
    }

    public function setValues(array $values)
    {
        if (!empty($values)) {
            $this->values = $values;
        } else {
            throw new \InvalidArgumentException('Array cannot be empty.');
        }
    }

    public function getValues(): array
    {
        return $this->values;
    }

    private function isOrderInValues($order)
    {
        if (!array_key_exists($order, $this->values)) {
            throw new \OutOfBoundsException('Cannot find entry in dictionary');
        } else {
            return true;
        }
    }

    public function setValue(int $order, string $newValue)
    {
        if ($this->isOrderInValues($order)) {
            $this->values[$order] = $newValue;
        }
    }

    public function getValue(int $order): string
    {
        if ($this->isOrderInValues($order)) {
            return $this->values[$order];
        }
        return "";
    }

    public function addValue(string $value)
    {
        array_push($this->values, $value);
    }

    public function deleteValue(int $order)
    {
        if ($this->isOrderInValues($order)) {
            unset($this->values[$order]);
        }
    }
}
