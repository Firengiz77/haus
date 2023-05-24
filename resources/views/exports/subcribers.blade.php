<table>
    <thead>
        <tr>
        <th>Email</th>
           
        </tr>
    </thead>
    <tbody>
        @foreach($subscribers as $subscriber)
            <tr>
                        <td>{{ $subscriber->email }}</td>
            </tr>
        @endforeach

    </tbody>
</table>