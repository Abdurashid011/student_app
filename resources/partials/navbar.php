<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">Admin Panel</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="coursesDropdown" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        Courses
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="coursesDropdown">
                        <li><a class="dropdown-item" href="/course/1">1-kurs</a></li>
                        <li><a class="dropdown-item" href="/course/2">2-kurs</a></li>
                        <li><a class="dropdown-item" href="/course/3">3-kurs</a></li>
                        <li><a class="dropdown-item" href="/course/4">4-kurs</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/create/student">Create Student</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
