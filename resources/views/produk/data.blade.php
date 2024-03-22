<table id="tbl-produk" class="table table-compact table stripped">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama Produk</th>
            <th>Kode</th>
            <th>Stock</th>
            <th>Jenis</th>
            <th>Harga</th>
            <th>Tools</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($produk as $p)
            <tr>
                <td>{{ $i = !isset($i) ? ($i = 1) : ++$i }}</td>
                <td>{{ $p->nama_produk }}</td>
                <td>{{ $p->kode }}</td>
                <td>{{ $p->stock }}</td>
                <td>{{ $p->kategori }}</td>
                <td>{{ $p->harga }}</td>
                <td>
                    <button class="btn" data-toggle="modal" data-target="#modalFormProduk" data-mode="edit"
                        data-id="{{ $p->id }}" data-nama_produk="{{ $p->nama_produk }}"
                        data-kode="{{ $p->kode }}" data-stock="{{ $p->stock }}" data-jenis="{{ $p->kategori }}" data-harga="{{ $p->harga }}">
                        <i class="fas fa-edit text-success"></i>
                    </button>
                    <form method="post" action="{{ route('produk.destroy', $p->id) }}" style="display: inline">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn delete-data" data-nama-produk="{{ $p->nama_produk }}">
                            <i class="fas fa-trash text-danger"></i>
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<script>
    // $(function() {
    //     $('#tbl-produk').DataTable()

    //     //dialog hapus data
    //     $('.btn-delete').on('click', function(e) {
    //         let nama_produk = $(this).closest('tr').find('')
    //     })
    // // })
</script>
