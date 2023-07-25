<?php
class Entity
{
    protected $id;

    public function __construct($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function toJson()
    {
           return json_encode($this);
    }
}