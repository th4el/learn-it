<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #1e3a5f 0%, #2d5a7b 50%, #1e3a5f 100%);
            background-attachment: fixed;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            background-image: 
                url("data:image/svg+xml,%3Csvg width='150' height='150' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' stroke='%23ffffff' stroke-width='1' opacity='0.06'%3E%3Cg transform='rotate(23 20 20)'%3E%3Cpath d='M15 10 L25 20 L15 30 L5 20 Z'/%3E%3C/g%3E%3Cg transform='rotate(-15 60 60)'%3E%3Ccircle cx='60' cy='60' r='12'/%3E%3C/g%3E%3Cg transform='rotate(45 30 90)'%3E%3Crect x='25' y='85' width='10' height='10'/%3E%3C/g%3E%3Cg transform='rotate(-30 120 30)'%3E%3Cpath d='M115 25 L125 35 L115 45' stroke-width='2'/%3E%3C/g%3E%3Cg transform='rotate(60 90 90)'%3E%3Cpolygon points='90,80 85,95 95,95'/%3E%3C/g%3E%3Cg transform='rotate(-45 40 50)'%3E%3Ctext x='35' y='55' font-size='16' fill='%23fff' opacity='0.08'%3EA+%3C/text%3E%3C/g%3E%3Cg transform='rotate(75 110 80)'%3E%3Cpath d='M105 75 Q115 80 105 85'/%3E%3C/g%3E%3Cg transform='rotate(-60 70 120)'%3E%3Ccircle cx='70' cy='120' r='5'/%3E%3C/g%3E%3Cg transform='rotate(15 130 110)'%3E%3Cpath d='M125 105 L135 115 M130 105 L130 115'/%3E%3C/g%3E%3Cg transform='rotate(-90 20 130)'%3E%3Crect x='17' y='127' width='6' height='6'/%3E%3C/g%3E%3Cg transform='rotate(35 100 40)'%3E%3Cpath d='M95 40 L100 35 L105 40 L100 45 Z'/%3E%3C/g%3E%3Cg transform='rotate(-25 50 20)'%3E%3Ctext x='45' y='25' font-size='14' fill='%23fff' opacity='0.06'%3E?%3C/text%3E%3C/g%3E%3C/g%3E%3C/svg%3E"),
                linear-gradient(135deg, #1e3a5f 0%, #2d5a7b 50%, #1e3a5f 100%);
            background-size: 250px 250px, cover;
            margin: 0;
        }
        .register-card {
            background: white;
            border-radius: 8px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.3);
            padding: 40px;
            max-width: 500px;
            width: 100%;
        }
        .register-card h2 {
            color: #1e3a5f;
            font-size: 2rem;
            font-weight: bold;
            text-align: center;
            margin-bottom: 10px;
        }
        .form-control:focus {
            border-color: #2d5a7b;
            box-shadow: 0 0 0 0.2rem rgba(45, 90, 123, 0.25);
        }
        .btn-primary-custom {
            background-color: #2d5a7b;
            border: none;
            padding: 12px;
            font-weight: 600;
            color: white;
        }
        .btn-primary-custom:hover {
            background-color: #1e3a5f;
        }
        .login-link {
            text-align: center;
            color: #6b7280;
            margin-top: 20px;
        }
        .login-link a {
            color: #2d5a7b;
            font-weight: 600;
            text-decoration: none;
        }
        .login-link a:hover {
            color: #1e3a5f;
        }
    </style>
</head>
<body>
    <!-- Registration Card -->
    <div class="register-card">
        <h2>Create Account</h2>
        

        <form method="POST" action="{{route('register')}}">
            @csrf

            <!-- Full Name -->
            <div class="mb-3">
                <label for="name" class="form-label fw-medium">Full Name</label>
                <input type="text" class="form-control" id="name" name="name" required placeholder="Enter your full name">
            </div>

            <!-- Email -->
            <div class="mb-3">
                <label for="email" class="form-label fw-medium">Email Address</label>
                <input type="email" class="form-control" id="email" name="email" required placeholder="your.email@example.com">
            </div>

            {{-- Role --}}
            <div class="mb-4">
                <label for="role" class="block text-gray-700 font-medium mb-2">Select Role</label>
                <select
                    id="role"
                    name="role"
                    required
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none 
                        focus:ring-2 focus:ring-[#2d5a7b] focus:border-transparent transition"
                >
                    <option value="" disabled selected>Choose a role</option>
                    <option value="guru">Guru</option>
                    <option value="murid">Murid</option>
                </select>
            </div>
            {{-- Piliih kelas (murid pakai js ini) --}}
            <div id="kelas-field" class="mb-4 d-none">
                <label for="grade_id" class="block text-gray-700 font-medium mb-2">Pilih Kelas</label>
                <select
                    id="grade_id"
                    name="grade_id"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none 
                        focus:ring-2 focus:ring-[#2d5a7b] focus:border-transparent transition"
                >
                    <option value="" disabled selected>Pilih kelas</option>

                    @foreach($grades as $grade)
                        <option value="{{ $grade->id }}">{{ $grade->name }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Password -->
            <div class="mb-3">
                <label for="password" class="form-label fw-medium">Password</label>
                <input type="password" class="form-control" id="password" name="password" required placeholder="Create a strong password">
            </div>

            <!-- Confirm Password -->
            <div class="mb-4">
                <label for="password_confirmation" class="form-label fw-medium">Confirm Password</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required placeholder="Re-enter your password">
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary-custom w-100">Sign Up</button>

            <!-- Login Link -->
            <div class="login-link">
                Already have an account? <a href="/login">Log in</a>
            </div>
        </form>
    </div>

    <script>
        const roleSelect = document.getElementById('role');
        const kelasField = document.getElementById('kelas-field');

        roleSelect.addEventListener('change', function () {
            if (this.value === 'murid') {
                kelasField.classList.remove('d-none');
            } else {
                kelasField.classList.add('d-none');
            }
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>