<table border="1" width="75%">
    <tr style="background: purple;color:white">
        <td>No</td>
        <td>Judul</td>
        <td>Gambar</td>
    </tr>

    @foreach($gallery as $item)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $item->judul }}</td>
        <td>{{ $item->gambar }}</td>
      </tr>

    @endforeach
</table>