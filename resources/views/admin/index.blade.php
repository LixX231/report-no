<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <x-app-layout>
        <h1>Административная панель</h1>
        <div class="grid grid-cols-1">
                @foreach ($reports as $report)
                <div>
                    <h2>ФИО: {{ $report->user_id}}</h2>
                    <p>{{ $report->created_at }}</p><br>
                    <h2>{{ $report->car_number }}</h2><br>
                    <p>{{ $report->description }}</p><br>
                    <p>Статус: {{$report->status->name}}</p>
                    <form action="{{route('reports.destroy', $report->id)}}" method="POST">
                        @method('delete')
                        @csrf
                        <input type="submit" value="Удалить"><br>
                    </form>
                    <a href="{{ route('reports.edit', $report->id) }}">Редактировать</a>
                </div>
                @endforeach
    </x-app-layout>
    
</body>
</html>