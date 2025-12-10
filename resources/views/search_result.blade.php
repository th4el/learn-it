    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Explore</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/explore.css') }}">

        <style>
            html, body{
                height:100%;
            }

            body {
                display:flex;
                flex-direction: column;
                h
            }
        </style>

    </head>



    <body>
    @include('layout.header')
    <div class="container-fluid">
        <div class="flex-grow-1">
                    <div class="row">

        
            <!-- MAIN CONTENT -->
            <div class="col-md-10 p-4">

                <!-- Search Bar -->
                
                <form class="mb-4" method="GET" action="{{route('search')}}">
                    <div class="input-group">
                        <input type="text" class="form-control" name="search"  placeholder="Search...." value="{{ request('search') }}">
                        <button class="btn btn-outline-secondary d-flex align-items-center justify-content-center" type="submit">
                            <img src="{{ asset('img/vector.png') }}" alt="search" style="width: 18px; height: 18px;">
                        </button>
                    </div>
                </form>

                

                <div class="mb-3">
                    @if(request('search'))
                    <h3>
                        {{$materials->count() ? 'Search Result for' : 'No Result for'}} "{{request('search')}}"
                    </h3>
                        
                    @endif
                    
                </div>

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
                            @forelse ($materials as $material)
                                <tr>
                                    <td>
                                        <a href="{{ route('materials.show', $material->id)}}" 
                                        class="text-decoration-none text-dark" target="_blank">
                                            {{ $material->title }}
                                        </a>
                                    </td>
                                    <td>{{ optional($material->teacher)->name ?? 'Unknown' }}</td>
                                    <td>{{ $material->created_at->format('d/m/Y') }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-center text-muted">Tidak ada materi yang sesuai hasil pencarian.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                <div class="d-flex justify-content-center">
                    {{ $materials->withQueryString()->links() }}
                </div>
            </div>
        </div>
    </div>
        </div>

    @include('layout.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
    </html>