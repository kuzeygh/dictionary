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
        try {
            if (($key != "") && (strlen($key) <= 70)) {
                $this->key = $key;
            } else {
                throw new \InvalidArgumentException('Wrong key title.');
            }
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }

    public function getKey(): string
    {
        return $this->key;
    }

    public function setValues(array $values)
    {
        try {
            if (!empty($values)) {
                $this->values = $values;
            } else {
                throw new \InvalidArgumentException('Array cannot be empty.');
            }
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }

    public function getValues(): array
    {
        return $this->values;
    }

    private function isOrderInValues($order)
    {
        try {
            if (!array_key_exists($order, $this->values)) {
                throw new \OutOfBoundsException('Cannot find entry in dictionary');
            } else {
                return true;
            }
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
        return false;
    }

    public function getValue(int $order): string
    {
        if ($this->isOrderInValues($order)) {
            return $this->values[$order];
        }
        return "";
    }

    public function setValue(int $order, string $newValue)
    {
        if ($this->isOrderInValues($order)) {
            $this->values[$order] = $newValue;
        }
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