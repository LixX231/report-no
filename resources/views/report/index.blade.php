<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>НАРУШЕНИЙ.НЕТ</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <header>
        <h1>НАРУШЕНИЙ.НЕТ</h1>
    </header>
    <main>
        <div>
            <input type="submit" value="Создать заявление">
            @foreach ($reports as $report)
                <div>
                    
                </div>
            @endforeach
        </div>
    </main>
</body>
</html>