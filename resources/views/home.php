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

<!-- Main Content -->
<div class="container my-5">
    <h2 class="mb-4">Students Information</h2>
    <div class="row">
        <!-- Example Student Card -->
        <?php foreach ($students as $student): ?>
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <a href="/student/info/<?= $student->id ?>" class="card-title h5 text-decoration-none">
                            <?= $student->first_name . ' ' . $student->last_name; ?>
                        </a>
                        <p class="card-text"><strong>Date:</strong> <?= $student->birth_date ?></p>
                        <p class="card-text"><strong>Course:</strong> <?= $student->course ?></p>
                        <p class="card-text"><strong>Scholarship:</strong> <?= $student->scholarship ?></p>
                    </div>
                    <div class="card-footer text-muted">
                        <?= $student->created_at ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<?php loadPartials('footer'); ?>
</body>
