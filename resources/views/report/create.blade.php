<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Создание заявления</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex flex-col min-h-screen">
    <x-app-layout class="flex-1 bg-blue-100 dark:bg-neutral-800">
        <div class="max-w-7xl mx-auto w-full px-4 sm:px-6 lg:px-8 py-6 sm:py-8 lg:py-12">
            <div class="grid place-items-center">
                <form action="{{ route('reports.store') }}" method="POST" class="w-full max-w-lg bg-white dark:bg-neutral-700 rounded-2xl shadow-sm p-6 sm:p-8">
                    @include('layouts.flash-messages')
                    @csrf
                    
                    <label for="car_number" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Номер автомобиля</label>
                    <input type="text" name="car_number" id="car_number" placeholder="Введите номер автомобиля" required class="w-full px-4 py-3 border-2 border-blue-400 rounded-lg mb-6 dark:text-neutral-100 dark:border-blue-400 dark:bg-neutral-500 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    
                    <label for="description" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Описание нарушения</label>
                    <textarea name="description" id="description" rows="5" placeholder="Опишите детали нарушения" required class="w-full px-4 py-3 border-2 border-blue-400 rounded-lg mb-6 dark:text-neutral-100 dark:border-blue-400 dark:bg-neutral-500 focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                    
                    <input type="submit" value="Создать" class="w-full sm:w-auto px-6 py-3 border-2 border-red-600 text-red-600 rounded-full hover:bg-red-600 hover:text-white transition dark:text-red-400 dark:border-red-400 cursor-pointer">
                </form>
            </div>
        </div>
    </x-app-layout>
</body>
</html>