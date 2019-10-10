<?php

class ArrayList
{
    public $arrayList;

    public function ArrayList($arrayList = "")
    {
        if (is_array($arrayList)) {
            $this->arrayList = $arrayList;
        } else {
            $this->arrayList = [];
        }
    }

    function add($Obj)
    {
        array_push($this->arrayList, $Obj);
    }

    function get($index)
    {
        if ($this->isInteger($index) && $index < $this->size()) {
            return $this->arrayList[$index];
        } else {
            die("Error: in arrayList.get");
        }
    }

    function isInteger($index)
    {
        return preg_match("/^[0-9]+$/", $index);
    }

    function size()
    {
        return count($this->arrayList);
    }
}