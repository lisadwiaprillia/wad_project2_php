<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Form Hitung</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>
        <br>
        <h1 class="fw-semibold fst-italic text-center"><b>KALKULATOR SEDERHANA</b></h1>
        <br>
        <div class="card">
            <div class="card-body">
                <form action="latihan3.php" method="get">
                    <div class="mb-3">
                        <label for="input_Angka1" class="form-label">Input Angka</label>
                        <input type="number" name="inputAngka1" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="Input_Operator" class="form-label">Pilih Operasi</label>
                        <select name="operator" class="form-select" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            <option value="tambah">+</option>
                            <option value="kurang">-</option>
                            <option value="kali">x</option>
                            <option value="bagi">:</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="input_Angka2" class="form-label">Input Angka</label>
                        <input type="number" name="inputAngka2" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>
    

