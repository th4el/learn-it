<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous"
    />
    <title>Document</title>
</head>
<body>
    <header style="margin-bottom: 10px">
        Hallo selamat datang
        <h1>{{Auth::user()->name}}</h1>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button class="btn btn-danger">Logout</button>
            <button class="btn btn-success">Upload</button>
        </form>
    </header>
    <main style="margin-left: 20px;" class="d-flex flex-wrap gap-3">
        @foreach ($materials as $item)
            <div class="card" style="width: 18rem;">
                <img src="{{asset('img/card.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$item->title}}</h5>
                    <p class="text-sm text-gray-600 mb-2">
                        By <strong>{{ $item->teacher->name }}</strong> 
                        in <strong>{{ $item->category->name }}</strong>
                    </p>
                    <p class="card-text">{{$item->description}}</p>
                    <a href="/post/{{$item->id}}" class="btn btn-primary">See full material &raquo;</a>
                </div>
            </div>
        @endforeach
        
    </main>
</body>
<script
    src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"
></script>
</html>