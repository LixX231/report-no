@props(['sort', 'status'])
<div>
    <div class="container mx-auto">
        <a class="mt-10 ml-4 mb-4 inline-block px-6 py-2 border-2 border-red-600 text-red-600 dark:text-red-400 dark:border-red-400 rounded-full hover:bg-red-600 hover:text-white transition" href="{{route('reports.create')}}">Создать заявление</a>
        <div class="mx-auto">
            <span class="ml-8 mr-8 mb-8">Сортировка по дате создания:</span>
            <a class="ml-8 mr-8 mb-8" href="{{route('report.index', ['sort' => 'desc', 'status' => $status])}}">Сначала новые</a>
            <a class="ml-8 mr-8 mb-8" href="{{route('report.index', ['sort' => 'asc', 'status' => $status])}}">Сначала старые</a>
        </div>

        <div class="mx-auto">
            <p class="ml-8 mr-8 mb-8 mt-8">Фильтрация по статусу заявки:</p>
            <ul>
                @foreach ($statuses as $status)
                <li class="ml-4 mr-4 mb-4">
                    <a class="ml-8 mr-8 mb-8" href="{{route('report.index', ['sort' => $sort, 'status' => $status->id])}}">
                        {{$status->name}}
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>