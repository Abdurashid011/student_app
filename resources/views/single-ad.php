<?php

declare(strict_types=1);

loadPartials('header');

/**
 * @var $students ;
 */
//dd($students);
?>

<body>

<?php loadPartials('navbar'); ?>

<div class="container my-5">
    <h2 class="mb-4">Student Profile</h2>
    <div class="row">
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h3 class="card-title"><?= $students->first_name . ' ' . $students->last_name?></h3>
                    <p class="card-text"><strong>Date</strong> <?= $students->birth_date?></p>
                    <p class="card-text"><strong>Course:</strong> <?= $students->course?></p>
                    <p class="card-text"><strong>Scholarship:</strong> <?= $students->scholarship?></p>
                    <p class="card-text"><strong>Registered:</strong> <?= $students->created_at?> </p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Courses Enrolled</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Data Structures</li>
                        <li class="list-group-item">Web Development</li>
                        <li class="list-group-item">Database Management</li>
                        <li class="list-group-item">Artificial Intelligence</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-12">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Performance Summary</h5>
                    <p class="card-text">
                        John is a dedicated student with excellent performance in most subjects, especially in the field of artificial intelligence. He has participated in multiple hackathons and is a member of the university coding club.
                    </p>
                    <p class="card-text">
                        <strong>Achievements:</strong>
                    <ul>
                        <li>Hackathon Winner - AI Track</li>
                        <li>Top 10% in Web Development</li>
                        <li>Dean's List - Spring 2024</li>
                    </ul>
                    </p>
                </div>
            </div>
        </div>
    </div>
<?php loadPartials('footer'); ?>

