<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Live Polling</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
        <h1 class="text-2xl font-bold mb-6 text-center">Framework Mana Favoritmu?</h1>
        <div class="space-y-4">
            @foreach ($options as $option)
                <div class="flex justify-between items-center">
                    <span class="font-semibold">{{ $option->name }}</span>
                    <div class="flex items-center space-x-4">
                        <span id="vote-count-{{ $option->id }}" class="text-lg font-bold">{{ $option->votes }}</span>
                        <form action="/vote/{{ $option->id }}" method="POST">
                            @csrf
                            <button type="submit"
                                class="bg-blue-500 text-white px-4 py-1 rounded hover:bg-blue-600">Vote</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>

</html>
