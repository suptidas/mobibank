<table class="table table-bordered">
        <tr>
            <th>Title</th>
            <th>body</th>
        </tr>
        @foreach ($jsonData as $data)
        <tr>
            <td>{{ $data['Tpe'] }}</td>
            <td>{{ $data['username'] }}</td>            
        </tr>
        @endforeach
    </table>
