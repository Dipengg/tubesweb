<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Form Pemesanan</title>
</head>

<body class="container mt-4">
    <h3 class="mb-3">Form Order Joss Laundry</h3><br>
    <form method="POST" action="/laundry/store">
        @csrf
        <div class="form-group">
            <label for="nama_pelanggan">Nama Pelanggan</label>
            <input type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan" required>
        </div>

        <div class="form-group">
            <label>Pilih Jasa</label>
            <div class="form-check">
                <input type="radio" class="form-check-input" name="pilihjasa" value="Cuci Setrika" required>
                <label class="form-check-label">Cuci Setrika</label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" name="pilihjasa" value="Cuci Lipat" required>
                <label class="form-check-label">Cuci Lipat</label>
            </div>
        </div>

        <div class="form-group">
            <label>Pembayaran</label>
            <div class="form-check">
                <input type="radio" class="form-check-input" name="pembayaran" value="QRIS" required>
                <label class="form-check-label">QRIS</label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" name="pembayaran" value="Cash" required>
                <label class="form-check-label">Cash</label>
            </div>
        </div>

        <div class="form-group">
            <label for="berat">Berat</label>
            <div class="input-group">
                <input type="text" class="form-control" id="berat" name="berat" required>
                <div class="input-group-append">
                    <span class="input-group-text">kg</span>
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>
