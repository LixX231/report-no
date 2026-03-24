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
        <div class="flex p-2">
            <div class="w-1/4 p-2">ФИО</div>
            <div class="w-1/4 p-2">Текст заявления</div>
            <div class="w-1/4 p-2">Номер автомобиля</div>
            <div class="w-1/4 p-2">Статус</div>
        </div>

        @foreach ($reports as $report)
        <div class="flex p-2">
            <div class="w-1/4 p-2">{{ $report->user->name }} {{ $report->user->middlename }} {{ $report->user->lastname }}</div>
            <div class="w-1/4 p-2">{{ Str::limit($report->description, 100) }}</div>
            <div class="w-1/4 p-2">{{ $report->car_number }}</div>
            <div>
                @if ($report->status_id == 1)
                <form class="status-form" action="{{route('reports.status.update', $report->id)}}" method="POST">
                    @method('patch')
                    @csrf
                    <select name="status_id" id="status_id">
                            @foreach($statuses as $status)
                            <option value="{{$status->id}}" {{$status->id == $report->status_id ? 'selected' : ''}}>
                                {{$status->name}}
                            </option>
                            @endforeach
                    </select>
                </form>
                @else
                <p>{{$report->status->name}}</p>
                @endif
            </div>
        </div>
        @endforeach
    </x-app-layout>

</body>

</html>