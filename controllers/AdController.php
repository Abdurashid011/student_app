<?php

namespace Controller;

use App\User;

class AdController
{
    public function home(): void
    {
        $students = (new User())->getStudents();
        Loadview('home', ['students' => $students]);
    }

    public function show(int $id): void
    {
        $students = (new User())->getStudent($id);
        Loadview('single-ad', ['students' => $students]);
    }

    public function showCourse(int $course_id): void
    {
        $courses = (new User())->getStudentCourse($course_id);
        loadView('home', ['students' => $courses]);
    }
    public function createStudent(): void
    {
        if (!isset($_POST['first_name']) &&
            !isset($_POST['last_name']) &&
            !isset($_POST['birth']) &&
            !isset($_POST['course']) &&
            !isset($_POST['scholarship']))
        {
            exit("Barcha Maydonlarni To'ldiring");
        }
        $first_last = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $birth = $_POST['birth'];
        $course = (int)$_POST['course'];
        $scholarship = (int)$_POST['scholarship'];

        $newStudent = (new User())->createStudent($first_last, $last_name, $birth, $course, $scholarship);
        if (!$newStudent) {
            exit("Talaba yaratilmadi");
        }

        $this->home();
    }
}