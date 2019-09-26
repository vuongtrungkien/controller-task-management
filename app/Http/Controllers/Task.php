<?php


namespace App\Http\Controllers;


class Task
{
    protected $id;
    protected $name;
    protected $description;
    protected $date;
    protected $person;


    public function __construct($id, $name, $description, $date, $person)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->date = $date;
        $this->person = $person;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return mixed
     */
    public function getPerson()
    {
        return $this->person;
    }

}
