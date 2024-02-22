<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Student App</title>
</head>
<body>

<div class="container-fluid ">
    <div class="row flex-nowrap h-100">
        <!-- The sidebar -->
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-secondary-subtle">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white  min-vh-100 ">
                <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                    <span class="fs-5 d-none d-sm-inline ">Student Management</span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <a href="{{ url('/') }}" class="nav-link align-middle px-0 text-dark">
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/students') }}" class="nav-link px-0 align-middle text-dark">
                            <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Students</span> </a>
                    </li>
                    <li>
                        <a href="{{ url('/teachers') }}" class="nav-link px-0 align-middle text-dark">
                            <i class="fs-4 bi-person-badge"></i> <span class="ms-1 d-none d-sm-inline">Teachers</span> </a>
                    </li>
                    <li>
                        <a href="{{ url('/courses') }}" class="nav-link px-0 align-middle text-dark">
                            <i class="fs-4 bi-book"></i> <span class="ms-1 d-none d-sm-inline">Courses</span> </a>
                    </li>
                    <li>
                        <a href="{{ url('/batches') }}" class="nav-link px-0 align-middle text-dark">
                            <i class="fs-4 bi-calendar"></i> <span class="ms-1 d-none d-sm-inline">Batch</span> </a>
                    </li>
                    <li>
                        <a href="{{ url('/enrollments') }}" class="nav-link px-0 align-middle text-dark">
                            <i class="fs-4 bi-card-checklist"></i> <span class="ms-1 d-none d-sm-inline">Enrollment</span> </a>
                    </li>
                    <li>
                        <a href="{{ url('/payments') }}" class="nav-link px-0 align-middle text-dark">
                            <i class="fs-4 bi-cash"></i> <span class="ms-1 d-none d-sm-inline">Payment</span> </a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Page content -->
        <div class="col py-3">
            @yield('content')
        </div>
    </div>
</div>

</body>
</html>
