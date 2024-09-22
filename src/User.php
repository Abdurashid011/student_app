<?php

declare(strict_types=1);

namespace App;

use Cassandra\Date;
use PDO;

class User
{
    protected PDO $pdo;

    public function __construct()
    {
        $this->pdo = DB::connect();
    }

    public function getStudents(): false|array
    {
        $query = "SELECT * FROM `students`";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function getStudent(int $id)
    {
        $query = "SELECT * FROM `students` WHERE `id` = :id";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        return $stmt->fetch();
    }

    public function getStudentCourse(int $courseId): false|array
    {
        $query = "SELECT * FROM students WHERE course = :course";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':course', $courseId);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function createStudent(string $firstName, string $lastName, $birthDate, int $course, int $scholarship): bool
    {
        $query = "INSERT INTO students (`first_name`, `last_name`, `birth_date`, `course`, `scholarship`, `created_at`)
              VALUES (:first_name, :last_name, :birth_date, :course, :scholarship, NOW())";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':first_name', $firstName);
        $stmt->bindParam(':last_name', $lastName);
        $stmt->bindParam(':birth_date', $birthDate);
        $stmt->bindParam(':course', $course);
        $stmt->bindParam(':scholarship', $scholarship);
        return $stmt->execute();
    }


}