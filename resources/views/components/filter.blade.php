@props(['sort', 'status'])
<div>
    <div class="container mx-auto">

        <!-- 🔹 Кнопка 1 -->
        <button id="dropdownBtn1" data-dropdown-toggle="dropdown1" data-dropdown-placement="bottom" data-dropdown-animation="true" class="inline-flex items-center justify-center text-black bg-brand box-border border border-transparent hover:bg-brand-strong shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none transition-transform duration-150 hover:scale-[1.02] active:scale-[0.98]" type="button">
            Сортировка по дате создания
            <svg class="w-4 h-4 ms-1.5 -me-0.5 transition-transform duration-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7" />
            </svg>
        </button>

        <!-- 🔹 Меню 1 -->
        <div id="dropdown1" class="z-10 hidden bg-neutral-primary-medium border border-default-medium rounded-base shadow-lg w-44 transform transition-all duration-200 ease-out origin-top opacity-0 scale-95 data-[popper-reference-hidden]:hidden data-[popper-placement]:opacity-100 data-[popper-placement]:scale-100">
            <ul class="p-2 text-sm text-body font-medium" aria-labelledby="dropdownBtn1">
                <li>
                    <a href="{{route('report.index', ['sort' => 'asc', 'status' => $status])}}" class="hover:bg-neutral-tertiary-medium hover:border-l-2 hover:border-brand hover:border-red-500 inline-flex items-center w-full p-2 hover:bg-neutral-tertiary-medium hover:text-heading rounded transition-colors duration-150">Сначала старые</a>
                </li>
                <li>
                    <a href="{{route('report.index', ['sort' => 'desc', 'status' => $status])}}" class="hover:bg-neutral-tertiary-medium hover:border-l-2 hover:border-brand hover:border-red-500 inline-flex items-center w-full p-2 hover:bg-neutral-tertiary-medium hover:text-heading rounded transition-colors duration-150">Сначала новые</a>
                </li>
            </ul>
        </div>

        <!-- 🔹 Кнопка 2 -->
        <button id="dropdownBtn2" data-dropdown-toggle="dropdown2" data-dropdown-placement="bottom" data-dropdown-animation="true" class="inline-flex items-center justify-center text-black bg-brand box-border border border-transparent hover:bg-brand-strong shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none transition-transform duration-150 hover:scale-[1.02] active:scale-[0.98]" type="button">
            Фильтрация по статусу заявки
            <svg class="w-4 h-4 ms-1.5 -me-0.5 transition-transform duration-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7" />
            </svg>
        </button>

        <!-- 🔹 Меню 2 -->
        <div id="dropdown2" class="z-10 hidden bg-neutral-primary-medium border border-default-medium rounded-base shadow-lg w-44 transform transition-all duration-200 ease-out origin-top opacity-0 scale-95 data-[popper-reference-hidden]:hidden data-[popper-placement]:opacity-100 data-[popper-placement]:scale-100">
            <ul class="p-2 text-sm text-body font-medium" aria-labelledby="dropdownBtn2">
                @foreach ($statuses as $status)
                <li>
                    <a class="hover:bg-neutral-tertiary-medium hover:border-l-2 hover:border-brand hover:border-red-500 inline-flex items-center w-full p-2 hover:bg-neutral-tertiary-medium hover:text-heading rounded transition-colors duration-150" href="{{route('report.index', ['sort' => $sort, 'status' => $status->id])}}">
                        {{$status->name}}
                    </a>
                </li>
                @endforeach
            </ul>
        </div>

    </div>