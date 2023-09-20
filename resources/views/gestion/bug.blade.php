<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('editBudget',$budgets->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('POST')
        <div>
            <label for="sorties">Sorties</label>
            <input name="sorties" type="number" value="{{ $budgets->sorties }}">
        </div>
        <div>
            <label for="entres">Sorties</label>
            <input name="entres" type="number" value="{{ $budgets->entres }}">
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>

    </form>
</body>
</html>