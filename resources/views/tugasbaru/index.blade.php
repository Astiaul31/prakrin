<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    {{-- Bootstrap CSS --}}
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    {{-- Font Source --}}
    <link href="https://fonts.googleapis.com/css2?family=Exo+2&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Exo 2', sans-serif;
        }
    </style>
    <title>TUGAS YANG GILANG !</title>
</head>

<body>

    <nav class="navbar navbar-expand-sm bg-light">
        <div class="container">
            <a class="navbar-brand" href="/Tugas">
                <b>Penjualan</b>
            </a>
        </div>
    </nav>

    <main class="container col-md-8">
        <div class="card shadow-lg mt-5 p-4" data-aos="zoom-in-down">
            <h2>
                <b>Data Barang</b>
            </h2>
            <div class="table-responsive mt-4">
                <table class="table table-bordered border-dark table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>Nomor</th>
                            <th>ID</th>
                            <th>Nama Barang</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th>Nama Supplier</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($barang as $data_barang)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $data_barang->id }}</td>
                                <td>{{ $data_barang->nama_barang }}</td>
                                <td>{{ $data_barang->harga }}</td>
                                <td>{{ $data_barang->stok }}</td>
                                <td>{{ $data_barang->nama_supplier }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="card shadow-lg mt-5 p-4" data-aos="zoom-in-down">
            <h2>
                <b>Data Supplier</b>
            </h2>
            <div class="table-responsive mt-4">
                <table class="table table-bordered border-dark table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>Nomor</th>
                            <th>ID</th>
                            <th>Nama Supplier</th>
                            <th>No Telepon</th>
                            <th>Alamat</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($supplier as $data_supplier)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $data_supplier->id }}</td>
                                <td>{{ $data_supplier->nama_supplier }}</td>
                                <td>{{ $data_supplier->no_telp }}</td>
                                <td>{{ $data_supplier->alamat }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="card shadow-lg mt-5 p-4" data-aos="zoom-in-down">
            <h2>
                <b>Data Pembayaran</b>
            </h2>
            <div class="table-responsive mt-4">
                <table class="table table-bordered border-dark table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>Nomor</th>
                            <th>ID</th>
                            <th>Tanggal Bayar</th>
                            <th>Total Bayar</th>
                            <th>Kode Transaksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($pembayaran as $data_pembayaran)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $data_pembayaran->id }}</td>
                                <td>{{ $data_pembayaran->tgl_bayar }}</td>
                                <td>{{ $data_pembayaran->total_bayar }}</td>
                                <td>{{ $data_pembayaran->kode_transaksi }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="card shadow-lg mt-5 p-4" data-aos="zoom-in-down">
            <h2>
                <b>Data Pembeli</b>
            </h2>
            <div class="table-responsive mt-4">
                <table class="table table-bordered border-dark table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>Nomor</th>
                            <th>ID</th>
                            <th>Nama Pembeli</th>
                            <th>Jenis Kelamin</th>
                            <th>No Telepon</th>
                            <th>Alamat</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($pembeli as $data_pembeli)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $data_pembeli->id }}</td>
                                <td>{{ $data_pembeli->nama_pembeli }}</td>
                                <td>{{ $data_pembeli->jk }}</td>
                                <td>{{ $data_pembeli->no_telp }}</td>
                                <td>{{ $data_pembeli->alamat }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="card shadow-lg my-5 p-4" data-aos="zoom-in-down">
            <h2>
                <b>Data Transaksi</b>
            </h2>
            <div class="table-responsive mt-4">
                <table class="table table-bordered border-dark table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>Nomor</th>
                            <th>ID</th>
                            <th>Nama Barang</th>
                            <th>Nama Pembeli</th>
                            <th>Tanggal</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($transaksi as $data_transaksi)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $data_transaksi->id }}</td>
                                <td>{{ $data_transaksi->nama_barang }}</td>
                                <td>{{ $data_transaksi->nama_pembeli }}</td>
                                <td>{{ $data_transaksi->tanggal }}</td>
                                <td>{{ $data_transaksi->keterangan }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </main>

    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
        });
    </script>

</body>

</html>