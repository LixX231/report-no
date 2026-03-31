<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Изменение заявления</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex flex-col min-h-screen">
    <x-app-layout class="flex-1 bg-blue-100 md:flex-row sm:flex-col items-center dark:bg-neutral-800">
        <div class="container mx-auto flex flex-row flex-wrap px-4">
            <form action="{{ route('reports.update', $report->id) }}" method="POST" class="w-full sm:w-1/2 lg:w-1/3 xl:w-1/4">
                @method('put')
                @include('layouts.flash-messages')
                @csrf
                <input type="text" name="car_number" id="car_number" value="{{ $report->car_number }}" required class="inline-block px-6 py-2 border-2 border-blue-400 mb-5 mt-4 dark:text-neutral-100 dark:border-blue-400 dark:bg-neutral-500"><br>
                <textarea name="description" id="description" required class="inline-block px-6 py-2 border-2 border-blue-400 mb-5 dark:text-neutral-100 dark:border-blue-400 dark:bg-neutral-500">{{ $report->description }}</textarea><br>
                <input type="submit" value="Обновить" class="inline-block px-6 py-2 border-2 border-red-600 text-red-600 rounded-full hover:bg-red-600 hover:text-white transition dark:text-red-400 dark:border-red-400">
            </form>
        </div>
    </x-app-layout>
</body>
</html>