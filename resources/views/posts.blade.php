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

        <!-- MAIN CONTENT -->
        <div class="col-md-10 p-4">

            <!-- Search Bar -->
            <form class="mb-4">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search....">
                    <button class="btn btn-outline-secondary d-flex align-items-center justify-content-center" type="submit">
                        <img src="{{ asset('img/vector.png') }}" alt="search" style="width: 18px; height: 18px;">
                    </button>
                </div>
            </form>

            <!-- Breadcrumbs -->
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">SMA</a></li>
                    <li class="breadcrumb-item"><a href="#">Grade 11</a></li>
                    <li class="breadcrumb-item active">Mathematics</li>
                </ol>
            </nav>

            <!-- FILE TABLE -->
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Title</th>
                            <th scope="col">Uploaded By</th>
                            <th scope="col">Date Added</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="#" class="text-decoration-none text-dark">Lorem_Gipsum.pdf</a></td>
                            <td>Yanto</td>
                            <td>20/01/2025</td>
                        </tr>
                        <tr>
                            <td><a href="#" class="text-decoration-none text-dark">Aljakbar.pdf</a></td>
                            <td>Yanti</td>
                            <td>20/01/2025</td>
                        </tr>
                        <tr>
                            <td><a href="#" class="text-decoration-none text-dark">Sin_cos_tan.pdf</a></td>
                            <td>Eric</td>
                            <td>20/01/2025</td>
                        </tr>
                        <tr>
                            <td><a href="#" class="text-decoration-none text-dark">Aritmatika.pdf</a></td>
                            <td>Eko</td>
                            <td>20/01/2025</td>
                        </tr>
                        <tr>
                            <td><a href="#" class="text-decoration-none text-dark">Latihan + Pembahasan.pdf</a></td>
                            <td>Eric</td>
                            <td>20/01/2025</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <nav aria-label="Page navigation">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">&lt;</a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item"><a class="page-link" href="#">6</a></li>
                    <li class="page-item"><a class="page-link" href="#">7</a></li>
                    <li class="page-item"><a class="page-link" href="#">8</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">&gt;</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
@include('layout.footer')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>