<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background: linear-gradient(135deg, #1e3a5f 0%, #2d5a7b 50%, #1e3a5f 100%);
            background-attachment: fixed;
        }
        .pattern-bg {
            background-image: url("data:image/svg+xml,%3Csvg width='100' height='100' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' stroke='%23ffffff' stroke-width='1' opacity='0.05'%3E%3Cpath d='M20 10 L30 20 M25 15 L35 25'/%3E%3Ccircle cx='60' cy='60' r='15'/%3E%3Crect x='10' y='50' width='20' height='20'/%3E%3Cpath d='M70 20 Q80 30 70 40'/%3E%3C/g%3E%3C/svg%3E");
            background-size: 200px 200px;
        }
    </style>
</head>
<body class="pattern-bg min-h-screen flex items-center justify-center p-4">


    <!-- Registration Card -->
    <div class="bg-white rounded-lg shadow-2xl w-full max-w-md p-8 mt-16">
        <h2 class="text-3xl font-bold text-[#1e3a5f] text-center mb-2">Create Account</h2>
        

        <form method="POST" action="{{route('register')}}">
            @csrf

            <!-- Full Name -->
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-medium mb-2">Full Name</label>
                <input 
                    type="text" 
                    id="name" 
                    name="name" 
                    required 
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#2d5a7b] focus:border-transparent transition"
                    placeholder="Enter your full name"
                >
            </div>

            <!-- Email -->
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-medium mb-2">Email Address</label>
                <input 
                    type="email" 
                    id="email" 
                    name="email" 
                    required 
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#2d5a7b] focus:border-transparent transition"
                    placeholder="your.email@example.com"
                >
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
            <div id="kelas-field" class="mb-4 hidden">
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
            <div class="mb-4">
                <label for="password" class="block text-gray-700 font-medium mb-2">Password</label>
                <input 
                    type="password" 
                    id="password" 
                    name="password" 
                    required 
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#2d5a7b] focus:border-transparent transition"
                    placeholder="Create a strong password"
                >
            </div>

            <!-- Confirm Password -->
            <div class="mb-6">
                <label for="password_confirmation" class="block text-gray-700 font-medium mb-2">Confirm Password</label>
                <input 
                    type="password" 
                    id="password_confirmation" 
                    name="password_confirmation" 
                    required 
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#2d5a7b] focus:border-transparent transition"
                    placeholder="Re-enter your password"
                >
            </div>

            <!-- Submit Button -->
            <button 
                type="submit" 
                class="w-full bg-[#2d5a7b] text-white py-3 rounded-lg font-semibold hover:bg-[#1e3a5f] transition transform hover:scale-[1.02] active:scale-[0.98]"
            >
                Sign Up
            </button>

            <!-- Login Link -->
            <p class="text-center text-gray-600 mt-6">
                Already have an account? 
                <a href="/login" class="text-[#2d5a7b] hover:text-[#1e3a5f] font-semibold">Log in</a>
            </p>
        </form>
    </div>
    <script>
        const roleSelect = document.getElementById('role');
        const kelasField = document.getElementById('kelas-field');

        roleSelect.addEventListener('change', function () {
            if (this.value === 'murid') {
                kelasField.classList.remove('hidden');
            } else {
                kelasField.classList.add('hidden');
            }
        });
    </script>

</body>
</html>