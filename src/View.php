<?php
namespace MidoriKocak;


class View
{
    private $data;

    public function __construct()
    {
        $this->data = [];
    }

    public function set()
    {
        $args = func_num_args();
        if ($args == 1 && is_array(func_get_arg(0))) {
            $this->data = func_get_arg(0);
        } elseif ($args == 2 && is_string(func_get_arg(0))) {
            $this->data[func_get_arg(0)] = func_get_arg(1);
        } else {
            throw new \InvalidArgumentException('Cannot set variable for View.');
        }
    }

    public function render(string $filename)
    {
        extract($this->data);

        ob_start();
        require 'Template/' . $filename . '.php';
        return ob_get_clean();
    }
}