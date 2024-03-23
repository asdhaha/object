<?php

// require_once __DIR__ . '/CourseCategory.php';
namespace Model;

interface CourseCategoryService
{
    public function getCourseCategories(): array;
}