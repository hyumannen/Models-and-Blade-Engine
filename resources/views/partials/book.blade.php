@include('partials.header')

<h1>List of Books</h1>
<table border='1'>
    <tr>
        <td>ID</td>
        <td>ISBN</td>
        <td>Title</td>
        <td>Author</td>
        <td>Description</td>
        <td>Date Published</td>
    </tr>

    <tr>
        <td>{{$book['id']}}</td>
        <td>{{$book['isbn']}}</td>
        <td>{{$book['title']}}</td>
        <td>{{$book['author']}}</td>
        <td>{{$book['description']}}</td>
        <td>{{$book['date_public']}}</td>
    </tr>
</table>

@include('partials.footer')
