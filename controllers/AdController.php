<?php

namespace Controller;

use App\User;
use Exception;

class AdController
{
    public function home(): void
    {
        $students = (new User())->getStudents();
        Loadview('home', ['students' => $students]);
    }

    public function show(int $id): void
    {
        $student = (new User())->getStudent($id);
        Loadview('single-ad', ['student' => $student]);
    }

    public function showCourse(int $course_id): void
    {
        $students = (new User())->getStudentCourse($course_id);
        Loadview('home', ['students' => $students]);
    }

    public function createStudent(): void
    {
        if (!isset($_POST['first_name']) ||
            !isset($_POST['last_name']) ||
            !isset($_POST['birth']) ||
            !isset($_POST['course']) ||
            !isset($_POST['gender']) ||
            !isset($_POST['email']) ||
            !isset($_POST['address'])) {
            exit("Barcha maydonlarni to'ldiring");
        }

        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $birth = $_POST['birth'];
        $course = (int)$_POST['course'];
        $scholarship = !empty($_POST['scholarship']) ? (int)$_POST['scholarship'] : null;
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $address = $_POST['address'];

        try {
            (new User())->createStudent($first_name, $last_name, $birth, $course, $scholarship, $email, $address, $gender);
            $this->home();
        } catch (Exception $e) {
            exit("Xato: " . $e->getMessage());
        }
    }
}
