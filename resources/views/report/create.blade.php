<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Создание заявления</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex flex-col min-h-screen">
     <header class="flex justify-center mt-4 mb-5 min-h-[10vh] bg-white dark:bg-neutral-700">
        <a href="{{ route('report.index') }}">
            <span class="text-blue-700">НАРУШЕНИЙ</span><span class="text-red-700">.НЕТ</span>
        </a>
    </header>
    <main class="flex-1 bg-blue-100 dark:bg-neutral-800 ">
        <div class="container mx-auto flex flex-row flex-wrap px-4">
            <form action="{{ route('reports.store') }}" method="POST" class="w-full sm:w-1/2 lg:w-1/3 xl:w-1/4">
                @csrf
                <input type="text" name="car_number" id="car_number" placeholder="Номер автомобиля" required class="inline-block px-6 py-2 border-2 border-blue-400 mb-5 mt-4 dark:text-neutral-100 dark:border-blue-400 dark:bg-neutral-500"><br>
                <textarea name="description" id="description" placeholder="Описание нарушения" required class="inline-block px-6 py-2 border-2 border-blue-400 mb-5 dark:text-neutral-100 dark:border-blue-400 dark:bg-neutral-500"></textarea><br>
                <input type="submit" value="Создать" class="inline-block px-6 py-2 border-2 border-red-600 text-red-600 rounded-full hover:bg-red-600 hover:text-white transition dark:text-red-400 dark:border-red-400">
            </form>
        </div>
    </main>
</body>
</html>