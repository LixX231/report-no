<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>НАРУШЕНИЙ.НЕТ</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="flex flex-col min-h-screen">
    <x-app-layout class="mx-auto bg-blue-100 dark:bg-neutral-800">
        
        <x-filter :sort=$sort :status=$status class="px-4 sm:px-6 lg:px-8"></x-filter>

        <div class="max-w-7xl mx-auto w-full px-4 sm:px-6 lg:px-8">
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6 mt-6 sm:mt-8 lg:mt-12">
                
                @foreach ($reports as $report)
                <div class="grid grid-rows-[auto_1fr_auto] border bg-white dark:bg-neutral-700 rounded-2xl shadow-sm hover:shadow-md transition-shadow duration-200">
                    
                    <div class="px-4 sm:px-6 pt-4 sm:pt-6">
                        @isset($report->path_img)
                            <img src="{{ Storage::url($report->path_img) }}" class="contact-block__img" alt="">
                        @endisset
                        <p class="text-red-700 dark:text-red-400 text-xs sm:text-sm">
                            {{ \Carbon\Carbon::parse($report->created_at)->translatedFormat('j F Y H:i') }}
                        </p>
                        <h2 class="font-bold text-base sm:text-lg mt-2 dark:text-white">
                            {{ $report->car_number }}
                        </h2>
                        <p class="text-sm sm:text-base mt-2 dark:text-gray-300 leading-relaxed">
                            {{ $report->description }}
                        </p>
                    </div>
                    
                    <div class="px-4 sm:px-6">
                        <x-status :type="$report->status->id">
                            {{ $report->status->name }}
                        </x-status>
                    </div>
                    
                    <div class="px-4 sm:px-6 pb-4 sm:pb-6 mt-4 grid grid-cols-2 gap-3">
                        <form action="{{ route('reports.destroy', $report->id) }}" method="POST">
                            @method('delete')
                            @csrf
                            <input type="submit" 
                                   value="Удалить" 
                                   class="w-full px-4 py-2 text-sm border-2 border-blue-600 text-blue-600 dark:text-blue-400 dark:border-blue-400 rounded-full hover:bg-blue-600 hover:text-white transition cursor-pointer text-center">
                        </form>
                        
                        <a href="{{ route('reports.edit', $report->id) }}" 
                           class="w-full px-4 py-2 text-sm border-2 border-red-600 text-red-600 dark:text-red-400 dark:border-red-400 rounded-full hover:bg-red-600 hover:text-white transition text-center">
                            Редактировать
                        </a>
                    </div>
                </div>
                @endforeach

            </div>
            
            <div class="px-4 sm:px-6 py-6 sm:py-8 grid place-items-center">
                {{ $reports->appends(request()->query())->links() }}
            </div>
            
        </div>
    </x-app-layout>
</body>

</html>