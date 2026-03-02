<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Обновление информации</h1>
    </header>
    <main>
        <div class="container mx-auto">
            <form action="{{ route('reports.update', $report->id) }}" method="POST">
                @method('put')
                @csrf
                <input type="date" name="published" id="published" value="{{ $report->published }}" required><br>
                <input type="text" name="car_number" id="car_number" value="{{ $report->car_number }}" required><br>
                <textarea name="description" id="description" required>{{ $report->description }}</textarea><br>
                <input type="text" name="status_report" id="status_report" value="{{ $report->status_report }}" required><br>
                <input type="submit" value="Обновить">
            </form>
        </div>
    </main>
</body>
</html>