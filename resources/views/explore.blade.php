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
                            @foreach ($sd as $sdGrade)
                                <a href="{{ route('explore', ['grade'=> $sdGrade->id]) }}">
                                    {{$sdGrade->name}}
                                </a>
                            @endforeach
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
                            @foreach ($smp as $smpGrade)
                                <a href="{{ route('explore', ['grade'=> $smpGrade->id]) }}">
                                    {{$smpGrade->name}}
                                </a>
                            @endforeach
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
                            @foreach ($sma as $smaGrade)
                                <a href="{{ route('explore', ['grade'=> $smaGrade->id]) }}">
                                    {{$smaGrade->name}}
                                </a>
                            @endforeach
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
                    <li class="breadcrumb-item"><a href="#">{{$level}}</a></li>
                    <li class="breadcrumb-item active">{{$grade->name}}</li>
                </ol>
            </nav>

            <!-- SUBJECT CARDS -->
            <div class="row">

                <!-- CARD -->
                @forelse ($categories as $category)
                    <div class="col-md-4 mb-4">
                        <div class="subject-card">
                            <img src="/img/logo.png" alt="">
                            <div class="p-3 text-center">
                                    <h5 class="fw-bold">{{$category->name}}</h5>
                                    <a href="{{ route('post.index', ['grade' => $grade->id, 'category' => $category->id]) }}">
                                        <button class="learn-btn">Learn</button>
                                    </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center text-muted mt-5">
                        <p>Belum ada materi untuk kelas ini.</p>
                    </div>
                @endforelse

            </div>
        </div>
    </div>
</div>
@include('layout.footer')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>