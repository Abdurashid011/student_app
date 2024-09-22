<?php
declare(strict_types=1);
loadPartials('header');
loadPartials('navbar');
?>
<div class="container my-5">
    <h2 class="mb-4">Create New Student</h2>
    <form method="post" action="/create/student">
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="firstName" class="form-label">First Name</label>
                <input name="first_name" type="text" class="form-control" id="firstName" placeholder="Enter first name">
            </div>
            <div class="col-md-6">
                <label for="lastName" class="form-label">Last Name</label>
                <input name="last_name" type="text" class="form-control" id="lastName" placeholder="Enter last name">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="birth" class="form-label">Birth date</label>
                <input name="birth" type="date" class="form-control" id="birth" placeholder="Enter the birth date">
            </div>
            <div class="col-md-6">
                <label for="course" class="form-label">Course</label>
                <select name="course" id="course" class="form-control">
                    <option selected disabled hidden >Select Course</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </div>
        </div>
        <div class="mb-3">
            <label for="scholarship" class="form-label">Scholarship</label>
            <input name="scholarship" type="number" class="form-control" id="scholarship" placeholder="Scholarship">
        </div>
        <button type="submit" class="btn btn-primary">Create Student</button>
    </form>
</div>
<?php loadPartials('footer'); ?>
