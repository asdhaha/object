<?php

namespace Model;

class CourseCategory implements CourseCategoryService
{
    private $uuid;
    private $categoryName;
    private $categoryTime;
    public function __construct($name, $time)
    {
        $this->uuid = uniqid();
        $this->categoryName = $name;
        $this->categoryTime = $time;
    }

    public function getUUID()
    {
        return $this->uuid;
    }

    public function getName()
    {
        return $this->categoryName;
    }

    public function getTime()
    {
        return $this->categoryTime;
    }
    public function getCourseCategories(): array{
        return [
            "uuid" => $this->getUUID(),
            "name" => $this->getName(),
            "time" => $this->getTime(),
        ];
    }
}
