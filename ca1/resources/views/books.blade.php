<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Details</title>
</head>
<body>
    <div id="book">
        <h1>Book Details:</h1>
        @if ($book)
        <li><strong>Title:&nbsp;</strong>{{ $book['title'] }}</li>
        <li><strong>Author:&nbsp;</strong> {{ $book['author'] }}</li>
        <li><strong>Price:&nbsp;</strong> {{ $book['price'] }}</li>
        <li><strong>Description:&nbsp;</strong> {{ $book['description'] }}.</li>
        @else
        <li>Book not found.</li>
        @endif
    </div>
</body>
</html>
