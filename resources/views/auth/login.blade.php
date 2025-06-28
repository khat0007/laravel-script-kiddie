<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
<div class="min-h-screen flex items-center justify-center">
    <div class="w-full max-w-md p-8 space-y-6 bg-white rounded-lg shadow">
        <h1 class="text-2xl font-bold text-center">Welcome</h1>

        <form class="space-y-4">
            <div>
                <label class="block text-sm font-medium">Email</label>
                <input type="email" class="w-full px-3 py-2 border rounded">
            </div>

            <div>
                <label class="block text-sm font-medium">Password</label>
                <input type="password" class="w-full px-3 py-2 border rounded">
            </div>
            <div class="block mt-4">
                <label class="inline-flex items-center">
                    <input type="checkbox" name="remember" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                </label>
            </div>

            <button type="submit" class="w-full py-2 px-4 bg-blue-600 text-white rounded">
                Sign In
            </button>
        </form>
    </div>
</div>
</body>
</html>
