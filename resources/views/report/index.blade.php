<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>НАРУШЕНИЙ.НЕТ</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="flex flex-col min-h-screen">
    <header class="flex justify-center mt-4 mb-5 min-h-[10vh] bg-white dark:bg-neutral-700">
        <a href="{{ route('report.index') }}">
            <span class="text-blue-700 dark:text-blue-400">НАРУШЕНИЙ</span><span class="text-red-700 dark:text-red-400">.НЕТ</span>
        </a>
    </header>
    <main class="flex-1 bg-blue-100 dark:bg-neutral-800">
        <div class="container mx-auto">
            <a class="mt-10 ml-4 mb-4 inline-block px-6 py-2 border-2 border-red-600 text-red-600 dark:text-red-400 dark:border-red-400 rounded-full hover:bg-red-600 hover:text-white transition" href="{{route('reports.create')}}">Создать заявление</a>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                @foreach ($reports as $report)
                <div class="border mb-4 mr-10 ml-4 mt-4 bg-white dark:bg-neutral-700 rounded-2xl">
                    <p class="text-red-700 dark:text-red-400 ml-8 mr-8 mt-4">{{ $report->created_at }}</p><br>
                    <h2 class="font-bold ml-8 mr-8 dark:text-white">{{ $report->car_number }}</h2><br>
                    <p class="ml-8 mr-8 dark:text-gray-300">{{ $report->description }}</p><br>
                    <form action="{{route('reports.destroy', $report->id)}}" method="POST" class="ml-8 mb-3 mr-8 inline-block px-6 py-2 border-2 border-blue-600 text-blue-600 dark:text-blue-400 dark:border-blue-400 rounded-full hover:bg-blue-600 hover:text-white transition">
                        @method('delete')
                        @csrf
                        <input type="submit" value="Удалить"><br>
                    </form>
                    <a href="{{ route('reports.edit', $report->id) }}" class="mb-8 ml-8 mr-8 inline-block px-6 py-2 border-2 border-red-600 text-red-600 dark:text-red-400 dark:border-red-400 rounded-full hover:bg-red-600 hover:text-white transition">Редактировать</a>
                </div>
                @endforeach
            </div>
        </div>
    </main>
</body>

</html>