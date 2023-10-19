<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>HASIL KALKULATOR</title>
    </head>
    <body>
    <?php
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $angka1 = $_GET['inputAngka1'];
            $angka2 = $_GET['inputAngka2'];
            $operator = $_GET['operator'];
            $hasil = 0;                       
            if (is_numeric($angka1) && is_numeric($angka2)) {
                switch ($operator) {
                    case 'tambah':
                        $hasil = $angka1 + $angka2;
                        break;
                    case 'kurang':
                        $hasil = $angka1 - $angka2;
                        break;
                    case 'kali':
                        $hasil = $angka1 * $angka2;
                        break;
                    case 'bagi':
                        if ($angka2 != 0) {
                            $hasil = $angka1 / $angka2;
                        } else {
                            echo "Pembagian dengan angka 0 tidak diizinkan.";
                        }
                        break;
                    default:
                        echo "Operator tidak valid.";
                        break;
                }
                echo "Hasil: $angka1 $operator $angka2 = $hasil";
            } else {
                echo "Masukkan harus berupa angka.";
            }
        }
    ?>
    </body>
</html>


                        