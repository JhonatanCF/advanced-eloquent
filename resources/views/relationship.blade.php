<!DOCTYPE html>
<html>
    <head>
        <title>Relaciones</title>
    </head>
    <body>
        <table border="0" cellpadding="10" border-co>
        <tr>
            <th>Categoria</th>
            <th>Total</th>
            <th>Publicos</th>
        </tr>
        @foreach($categories as $category)
            <tr>
                <th align="left">{{ $category->name }}</th>
                <td align="right">{{ $category->num_books }}</td>
                <td align="right">{{ $category->num_books_filter }}</td>
            </tr>
        @endforeach
        </table>
    </body>
</html>