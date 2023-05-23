<?php ob_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <style>
        html,
        body {
            height: 100%;
        }

        body {
            margin: 0;
            background: linear-gradient(45deg, #49a09d, #5f2c82);
            font-family: sans-serif;
            font-weight: 100;
        }

        .container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        table {
            width: 400px;
            border-collapse: collapse;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        th,
        td {
            padding: 15px;
            background-color: rgba(255, 255, 255, 0.2);
            color: #fff;
        }

        th {
            text-align: center;
            background-color: #55608f;
        }

        thead {
            th {
                background-color: #55608f;
            }
        }

        tbody {
            tr {
                &:hover {
                    background-color: rgba(255, 255, 255, 0.3);
                }
            }

            td {
                position: relative;

                &:hover {
                    &:before {
                        content: "";
                        position: absolute;
                        left: 0;
                        right: 0;
                        top: -9999px;
                        bottom: -9999px;
                        background-color: rgba(255, 255, 255, 0.2);
                        z-index: -1;
                    }
                }
            }
        }

        h1 {
            color: white;
        }

        :root {
            --motion-ease: cubic-bezier(0.68, -0.6, 0.32, 1.6);
            --motion-duration: 0.3s;
        }

        * {
            box-sizing: border-box;
        }

        button {
            appearance: none;
            background: transparent;
            border: 0;
            color: #fff;
            cursor: pointer;
            font: inherit;
            font-weight: 500;
            line-height: 1;
            padding: 1em 1.5em;
            position: relative;
            transition: filter var(--motion-duration);
        }

        button>a {
            text-decoration: none;
            color: white;
            background-color: purple;
            color: white;
            padding: 4px 4px;
            text-transform: uppercase;
            border-radius: 2px;
            transition: transform 100ms ease-in-out;
        }

        input {
            width: 100%;
        }

        a:hover {
            background-color: red;
            transform: scale(1.4);
        }

        form>button {
            margin-top: 10px;
        }

        button:hover {
            filter: brightness(1.1);
        }

        button:active {
            filter: brightness(0.9);
        }

        button>span {
            display: block;
            position: relative;
            transition: transform var(--motion-duration) var(--motion-ease);
            z-index: 1;
        }

        button:hover>span {
            transform: scale(1.05);
        }

        button:active>span {
            transform: scale(0.95);
        }

        button>svg {
            fill: #950cde;
            position: absolute;
            top: -5%;
            left: -5%;
            width: 110%;
            height: 110%;
        }

        button>svg>path {
            transition: var(--motion-duration) var(--motion-ease);
        }

        button:hover>svg>path {
            d: path("M0,0 C0,-5 100,-5 100,0 C105,0 105,100 100,100 C100,105 0,105 0,100 C-5,100 -5,0 0,0");
        }

        button:active>svg>path {
            d: path("M0,0 C30,10 70,10 100,0 C95,30 95,70 100,100 C70,90 30,90 0,100 C5,70 5,30 0,0");
        }
    </style>
</head>
</head>

<body>
    <div class="container">
        <h1>Tambah Data Mahasiswa</h1>
        <form action="" method="post">
            <table>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama" required></td>
                </tr>
                <tr>
                    <td>NIM</td>
                    <td><input type="text" name="nim" required></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td><input type="text" name="jKelamin" required></td>
                </tr>
                <tr>
                    <td>Angkatan</td>
                    <td><input type="text" name="angkatan" required></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat" required></td>
                </tr>
            </table>
            <button type="submit">
                <span>Simpan</span>
                <svg viewBox="-5 -5 110 110" preserveAspectRatio="none" aria-hidden="true">
                    <path d="M0,0 C0,0 100,0 100,0 C100,0 100,100 100,100 C100,100 0,100 0,100 C0,100 0,0 0,0" />
                </svg>
            </button>
        </form>
    </div>
    <?php
    if (isset($_POST['nama']) && isset($_POST['nim']) && isset($_POST['jKelamin']) && isset($_POST['angkatan']) && isset($_POST['alamat'])) {

        include_once("koneksi.php");

        $nama = $_POST["nama"];
        $nim = $_POST["nim"];
        $jKelamin = $_POST['jKelamin'];
        $angkatan = $_POST['angkatan'];
        $alamat = $_POST['alamat'];

        $query = $conn->prepare("INSERT INTO biodata (nama, nim, jKelamin, angkatan, alamat) VALUES (:nama, :nim, :jKelamin, :angkatan, :alamat)");

        $query->execute(array(":nama" => $nama, ":nim" => $nim, ":jKelamin" => $jKelamin, ":angkatan" => $angkatan, ":alamat" => $alamat));

        if ($query->rowCount() > 0) {
            header("Location: read.php");
        } else {
            echo "data gagal ditambahkan";
        }
    }
    ?>
</body>

</html>