<?php

namespace Model;

class Course
{
    private $uuid;
    private $courseName;
    private $coursePrice;
    private $courseType;
    public function __construct($name, $price, $type)
    {
        $this->uuid = uniqid();
        $this->courseName = $name;
        $this->coursePrice = $price;
        $this->courseType = $type;
    }
    public function getUUID()
    {
        return $this->uuid;
    }
    public function getCourseName()
    {
        return $this->courseName;
    }
    public function getCoursePrice()
    {
        return $this->coursePrice;
    }
    public function getCourseType()
    {
        return $this->courseType;
    }
}
