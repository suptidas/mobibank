<table class="table table-bordered">
        <tr>
            <th>Title</th>
            <th>body</th>
        </tr>
        @foreach ($jsonData as $data)
        <tr>
            <td>{{ $data['title'] }}</td>
            <td>{{ $data['body'] }}</td>            
        </tr>
        @endforeach
    </table>
