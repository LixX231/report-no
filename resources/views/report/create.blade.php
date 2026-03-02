<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Создание заявления</title>
</head>
<body>
     <header>
        <h1>Создание заявления</h1>
    </header>
    <main>
        <div class="container mx-auto">
            <form action="{{ route('reports.store') }}" method="POST">
                @csrf
                <input type="date" name="published" id="published" placeholder="Дата" required><br>
                <input type="text" name="car_number" id="car_number" placeholder="Номер автомобиля" required><br>
                <textarea name="description" id="description" placeholder="Описание нарушения" required></textarea><br>
                <input type="text" name="status_report" id="status_report" placeholder="Статус" required><br>
                <input type="submit" value="Создать">
            </form>
        </div>
    </main>
</body>
</html>