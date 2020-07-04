{{-- pada tbody --}}
<tbody>
    @foreach($item as $key => $item)
    <tr>
        <td> {{ $key+1 }} </td>
        <td> {{ $item-> }} </td>
        <td> {{ $item-> }} </td>
        <td> {{ $item-> }} </td>
        <td> {{ $item-> }} </td>
    </tr>
    @endforeach
</tbody>