<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Data Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">

        <center>
            <h2> FORM INPUT DATA SISWA </h2>
        </center>
        <hr>
        <form method="POST" class="row g-3" action="<?php echo base_url() . 'Welcome/tabel' ?>">
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Nama Siswa</label>
                <input type="text" class="form-control" name="nama">
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">NIS</label>
                <input type="text" class="form-control" name="nis">
            </div>
            <fieldset class="row mb-3">
                <legend class="col-form-label col-sm-2 pt-0">Kelas</legend>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="kelas" id="gridRadios1" value="kelas 10" checked>
                        <label class="form-check-label" for="gridRadios1">
                            Kelas 10
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="kelas" id="gridRadios2" value="kelas 11">
                        <label class="form-check-label" for="gridRadios2">
                            Kelas 11
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="kelas" id="gridRadios2" value="kelas 12">
                        <label class="form-check-label" for="gridRadios2">
                            Kelas 12
                        </label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="inputAddress" class="form-label">Alamat</label>
                    <input type="text" class="form-control" name="alamat" placeholder="Kec. Desa, RT/RW ">
                </div>

                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Tempat Lahir</label>
                    <input type="text" class="form-control" name="tempat_lahir">
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Tanggal Lahir</label>
                    <input type="date" class="form-control" name="tanggal_lahir">
                </div>
                <div class="mb-3">
                    <label for="inputagama" class="form-label">Agama</label>
                    <select class="form-select" name="agama" aria-label="Default select example">
                        <option selected>Pilih Agama</option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Buddha">Buddha</option>
                        <option value="Katolik">Katolik</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Protestan">Protestan</option>
                        <option value="Khonghucu">Khonghucu</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="inputjenis_kelamin" class="form-label">Jenis Kelamin</label>
                    <select class="form-select" name="jenis_kelamin" aria-label="Default select example">
                        <option selected>Pilih Jenis Kelamin</option>
                        <option value="Laki-Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="col-15">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
        </form>

    </div>
    </select>
</body>

</html>