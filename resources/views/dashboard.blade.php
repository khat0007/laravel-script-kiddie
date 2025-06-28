<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Load Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class'
        }
    </script>
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .dropdown:hover .dropdown-menu {
            display: block;
        }
    </style>
</head>
<body class="bg-gray-100 dark:bg-gray-900">
<div class="min-h-screen">
    <!-- Header -->
    <header class="bg-white dark:bg-gray-800 shadow">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center py-6">
                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                    Dashboard
                </h2>

                <!-- User Profile Dropdown -->
                <div class="relative dropdown">
                    <button class="flex items-center space-x-2 focus:outline-none">
                        <div class="w-8 h-8 rounded-full bg-blue-500 flex items-center justify-center text-white">
                            <i class="fas fa-user"></i>
                        </div>
                        <span class="text-gray-700 dark:text-gray-300 font-medium">
                            {{ Auth::user()->name }}
                        </span>
                        <i class="fas fa-chevron-down text-gray-500 dark:text-gray-400 text-xs"></i>
                    </button>

                    <!-- Dropdown Menu -->
                    <div class="dropdown-menu absolute right-0 mt-2 w-48 bg-white dark:bg-gray-700 rounded-md shadow-lg py-1 z-50 hidden">
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-600">
                            <i class="fas fa-user mr-2"></i> Profile
                        </a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-600">
                            <i class="fas fa-cog mr-2"></i> Settings
                        </a>
                        <div class="border-t border-gray-200 dark:border-gray-600"></div>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="w-full text-left block px-4 py-2 text-sm text-red-600 hover:bg-gray-100 dark:hover:bg-gray-600">
                                <i class="fas fa-sign-out-alt mr-2"></i> Sign out
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex justify-between items-center">
                        <div>
                            <h3 class="text-lg font-medium">Welcome back, {{ Auth::user()->name }}!</h3>
                            <p class="text-gray-500 dark:text-gray-400 mt-1">You're logged in to your account.</p>
                        </div>
                        <div class="flex space-x-4">
                            <div class="bg-blue-100 dark:bg-blue-900 p-4 rounded-lg">
                                <p class="text-blue-800 dark:text-blue-200 text-sm">Total Projects</p>
                                <p class="text-2xl font-bold text-blue-600 dark:text-blue-300">12</p>
                            </div>
                            <div class="bg-green-100 dark:bg-green-900 p-4 rounded-lg">
                                <p class="text-green-800 dark:text-green-200 text-sm">Tasks Completed</p>
                                <p class="text-2xl font-bold text-green-600 dark:text-green-300">47</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

<script>
    // Toggle dropdown on click (for mobile)
    document.querySelector('.dropdown button').addEventListener('click', function(e) {
        e.stopPropagation();
        const menu = this.parentElement.querySelector('.dropdown-menu');
        menu.classList.toggle('hidden');
    });

    // Close dropdown when clicking outside
    document.addEventListener('click', function() {
        document.querySelectorAll('.dropdown-menu').forEach(menu => {
            menu.classList.add('hidden');
        });
    });
</script>
</body>
</html>
