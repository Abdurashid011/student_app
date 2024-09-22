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
                <input name="first_name" type="text" class="form-control" id="firstName" placeholder="Enter first name"
                       required>
            </div>
            <div class="col-md-6">
                <label for="lastName" class="form-label">Last Name</label>
                <input name="last_name" type="text" class="form-control" id="lastName" placeholder="Enter last name"
                       required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="birth" class="form-label">Birth date</label>
                <input name="birth" type="date" class="form-control" id="birth" placeholder="Enter the birth date"
                       required>
            </div>
            <div class="col-md-6">
                <label for="course" class="form-label">Course</label>
                <select name="course" id="course" class="form-control" required>
                    <option selected disabled hidden>Select Course</option>
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

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input name="email" type="email" class="form-control" id="email" placeholder="Enter email address" required>
        </div>

        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <input name="address" type="text" class="form-control" id="address" placeholder="Enter address" required>
        </div>

        <div class="mb-3">
            <label for="gender" class="form-label">Gender</label>
            <select name="gender" id="gender" class="form-control" required>
                <option selected disabled hidden>Select Gender</option>
                <option value="Erkak">Erkak</option>
                <option value="Ayol">Ayol</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Create Student</button>
    </form>
</div>
<?php loadPartials('footer'); ?>
