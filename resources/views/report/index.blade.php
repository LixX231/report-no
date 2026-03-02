<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>НАРУШЕНИЙ.НЕТ</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <header class="flex justify-between">
        <h1>НАРУШЕНИЙ.НЕТ</h1>
    </header>
    <main>
        <a href="{{route('reports.create')}}">Создать заявление</a>
        <div class="container mx-auto flex flex-row">
            @foreach ($reports as $report)
                <div class="border mb-4 mr-10 ml-4 flexbox">
                    <p>{{ $report->published }}</p><br>
                    <h2>{{ $report->car_number }}</h2><br>
                    <p>{{ $report->description }}</p><br>
                    <p>Статус заявления - {{ $report->status_report }}</p><br>
                    <form action="{{route('reports.destroy', $report->id)}}" method="POST">
                        @method('delete')
                        @csrf
                        <input type="submit" value="Удалить"><br>
                    </form>
                    <a href="{{ route('reports.edit', $report->id) }}">Редактировать</a>
                </div>
            @endforeach
        </div>
    </main>
</body>
</html>