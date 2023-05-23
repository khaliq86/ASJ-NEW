<?php
$nama = "Muhammad Khaliq Teuku Ansari";
$nim = "2110817310008";
$jKelamin = "Laki-Laki";
$cita2 = "Menjadi Programmer";
$motivasi = "Seiring dengan perkembangan zaman teknologi akan semakin meningkat, sehingga diperlukan lebih
banyak programmer dimasa depan, dan saya ingin menjadi salah satunya.";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ASJ No 1</title>
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
            width: 800px;
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
    </style>
</head>

<body>
    <div class="container">
        <table>
            <tr>
                <td>
                    Nama
                </td>
                <td>
                    <?= $nama ?>
                </td>
            </tr>
            <tr>
                <td>
                    NIM
                </td>
                <td>
                    <?= $nim ?>
                </td>
            </tr>
            <tr>
                <td>
                    Jenis Kelamin
                </td>
                <td>
                    <?= $jKelamin ?>
                </td>
            </tr>
            <tr>
                <td>
                    Cita-cita
                </td>
                <td>
                    <?= $cita2 ?>
                </td>
            </tr>
            <tr>
                <td>
                    Motivasi Berkuliah di TI
                </td>
                <td>
                    <?= $motivasi ?>
                </td>
            </tr>
        </table>
    </div>
</body>

</html>