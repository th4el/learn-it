<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/explore.css') }}">
</head>
<body>
@include('layout.header')

<div class="container-fluid">
    <div class="row">

        <!-- SIDEBAR -->
        <div class="col-md-2 sidebar">
            <div class="accordion" id="sidebarAccordion">

                <!-- SD -->
                <div class="accordion-item border-0">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                data-bs-target="#sdMenu">
                            SD
                        </button>
                    </h2>
                    <div id="sdMenu" class="accordion-collapse collapse">
                        <div class="accordion-body ps-4">
                            <a href="#">Grade 1</a>
                            <a href="#">Grade 2</a>
                        </div>
                    </div>
                </div>

                <!-- SMP -->
                <div class="accordion-item border-0">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                data-bs-target="#smpMenu">
                            SMP
                        </button>
                    </h2>
                    <div id="smpMenu" class="accordion-collapse collapse">
                        <div class="accordion-body ps-4">
                            <a href="#">Grade 7</a>
                            <a href="#">Grade 8</a>
                        </div>
                    </div>
                </div>

                <!-- SMA -->
                <div class="accordion-item border-0">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                data-bs-target="#smaMenu">
                            SMA
                        </button>
                    </h2>
                    <div id="smaMenu" class="accordion-collapse collapse">
                        <div class="accordion-body ps-4">
                            <a href="#">Grade 10</a>
                            <a href="#">Grade 11</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- MAIN CONTENT — Quote -->
        <div class="col-md-10 d-flex flex-column justify-content-center align-items-center p-5"
             style="min-height: 80vh;">

            <div class="text-center" style="max-width: 700px;">
                <h2 class="fw-bold mb-4">
                    "Education is the most powerful weapon which you can use to change the world."
                </h2>
                <p class="fw-semibold text-secondary fs-5">— Nelson Mandela</p>
            </div>
        </div>
    </div>
</div>

@include('layout.footer')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
