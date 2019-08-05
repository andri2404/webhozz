<table>
    <tr>
        <th>#</th>
        <th>Kategori</th>
        <th>Nama Product</th>
        <th>Supplier</th>
        <th>Harga</th>
        <th>Lainnya</th>
    </tr>
        <tr>
            <th>1</th>
            <th>1</th>
            <th>Semen</th>
            <th>Pt.sandikas</th>
            <th>50.000</th>
            <th>deals</th>
        </tr>

        // menampilkan data dari database

        @foreach ($products as $a)
        <tr>
            
                <td>{{$a -> category_id}}</td>
               <td>{{$a -> name }}</td>
               <td>{{$a -> supplier}}</td>
                <td>Rp.{{number_format($a -> price,0,',','.')}}</td>
                <td>{{$a -> other}}</td>
                <td>{{$a -> created_at}}</td>
                <td>{{$a -> updated_at}}</td>
        </tr>
        @endforeach

</table>