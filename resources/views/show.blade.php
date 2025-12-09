<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Post</title>
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
                                        {{ $sdGrade->name }}
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
                                        {{ $smpGrade->name }}
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
                                        {{ $smaGrade->name }}
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- MAIN CONTENT -->
            <div class="col-md-10 p-4">
                <div class="container">

                    <h2 class="mb-1">{{ $material->title }}</h2>
                    <p class="text-muted">
                        {{ optional($material->teacher)->name ?? 'Unknown' }} •
                        {{ $material->created_at->format('d M Y') }}
                    </p>

                    <hr>

                    @if($material->description)
                        <p>{{ $material->description }}</p>
                    @endif

                    @if($material->pdf_path)
                        <iframe
                            src="{{ asset('storage/' . $material->pdf_path) }}"
                            width="100%"
                            height="600px"
                            style="border-radius: 8px; border: 1px solid #ddd;">
                        </iframe>
                    @else
                        <p class="text-muted">Tidak ada file untuk materi ini.</p>
                    @endif

                </div>
            </div>

        </div>
    </div>
    @include('layout.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>