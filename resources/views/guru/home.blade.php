<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<<<<<<< HEAD
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous"
    />
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    @include('layout.header') 
    <style>
        
        body {
            background: linear-gradient(135deg, #1e3a5f 0%, #2d5a7b 50%, #1e3a5f 100%);
            background-attachment: fixed;
            min-height: 100vh;
            background-image: 
                url("data:image/svg+xml,%3Csvg width='150' height='150' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' stroke='%23ffffff' stroke-width='1' opacity='0.06'%3E%3Cg transform='rotate(23 20 20)'%3E%3Cpath d='M15 10 L25 20 L15 30 L5 20 Z'/%3E%3C/g%3E%3Cg transform='rotate(-15 60 60)'%3E%3Ccircle cx='60' cy='60' r='12'/%3E%3C/g%3E%3Cg transform='rotate(45 30 90)'%3E%3Crect x='25' y='85' width='10' height='10'/%3E%3C/g%3E%3Cg transform='rotate(-30 120 30)'%3E%3Cpath d='M115 25 L125 35 L115 45' stroke-width='2'/%3E%3C/g%3E%3Cg transform='rotate(60 90 90)'%3E%3Cpolygon points='90,80 85,95 95,95'/%3E%3C/g%3E%3Cg transform='rotate(-45 40 50)'%3E%3Ctext x='35' y='55' font-size='16' fill='%23fff' opacity='0.08'%3EA+%3C/text%3E%3C/g%3E%3Cg transform='rotate(75 110 80)'%3E%3Cpath d='M105 75 Q115 80 105 85'/%3E%3C/g%3E%3Cg transform='rotate(-60 70 120)'%3E%3Ccircle cx='70' cy='120' r='5'/%3E%3C/g%3E%3Cg transform='rotate(15 130 110)'%3E%3Cpath d='M125 105 L135 115 M130 105 L130 115'/%3E%3C/g%3E%3Cg transform='rotate(-90 20 130)'%3E%3Crect x='17' y='127' width='6' height='6'/%3E%3C/g%3E%3Cg transform='rotate(35 100 40)'%3E%3Cpath d='M95 40 L100 35 L105 40 L100 45 Z'/%3E%3C/g%3E%3Cg transform='rotate(-25 50 20)'%3E%3Ctext x='45' y='25' font-size='14' fill='%23fff' opacity='0.06'%3E?%3C/text%3E%3C/g%3E%3C/g%3E%3C/svg%3E"),
                linear-gradient(135deg, #1e3a5f 0%, #2d5a7b 50%, #1e3a5f 100%);
            background-size: 250px 250px, cover;
            margin: 0;
        }
        .hero-section {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            padding: 20px;
        }
        .hero-content {
            text-align: center;
            max-width: 800px;
            width: 100%;
        }
        .hero-title {
            color: white;
            font-size: 3.5rem;
            font-weight: bold;
            margin-bottom: 60px;
        }
        .search-container {
            display: flex;
            align-items: center;
            background: white;
            border-radius: 8px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.3);
            overflow: hidden;
            max-width: 700px;
            margin: 0 auto;
        }
        .search-input {
            flex: 1;
            padding: 18px 24px;
            border: none;
            font-size: 1.1rem;
            color: #374151;
        }
        .search-input:focus {
            outline: none;
        }
        .search-btn {
            background-color: #2d5a7b;
            color: white;
            border: none;
            padding: 18px 24px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .search-btn:hover {
            background-color: #1e3a5f;
        }
        .search-icon {
            width: 24px;
            height: 24px;
        }
    </style>
</head>
<body>
    <!-- Hero Section with Search -->
    <div class="hero-section">
        <div class="hero-content">
            <h1 class="hero-title">What are we learning today?</h1>
            
            <!-- Search Bar -->
            <div class="search-container">
                <input type="text" class="search-input" placeholder="Search.....">
                <button class="search-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" class="search-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
@include('layout.footer') 
</html>