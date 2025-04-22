<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Cerita Aja | Sman1porong</title>
    <link rel="shortcut icon" href="logo.png" type="image">

    <!---Custom CSS File--->
    <link rel="stylesheet" href="form.css" />
</head>

<body>
    <section class="container">
        <header>Lapor Bu</header>
        <form action="log.php" method="POST" enctype="multipart/form-data" class="form">
            <div class="input-box">
                <label>Nama Lengkap</label>
                <input type="text" placeholder="Isi nama lengkap anda" required name="nama" />
            </div>
            <div class="input-box">
                <label>Kelas</label>
                <input type="text" placeholder="Isi kelas anda" required name="kelas" />
            </div>

            <div class="input-box">
                <label>Nomor Telfon</label>
                <input type="Text" placeholder="+62895XXXXX87" required name="nomor" />
            </div>
            <div class="input-box address">
                <label>Jenis Kelamin Pelapor</label>
                <div class="column">
                    <div class="select-box">
                        <select name="jenis">
                            <option>Laki - Laki</option>
                            <option>Perempuan</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="input-box address">
                <label>Sebagai</label>
                <div class="column">
                    <div class="select-box">
                        <select name="sebagai">
                            <option>Korban</option>
                            <option>Pelaku</option>
                            <option>Saksi</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="input-box">
                <label>Kronologi</label>
                <input style="height: 90px;" type="text" placeholder="Isi kronologi secara lengkap" required name="kronologi" />
            </div>
            <div class="input-box">
                <label>Lampiran</label>
                <input type="file" name="image">
                <a style="color: red;"> Harus berupa foto!</a>
            </div>

            <button>Submit</button>
        </form>
    </section>
</body>

</html>