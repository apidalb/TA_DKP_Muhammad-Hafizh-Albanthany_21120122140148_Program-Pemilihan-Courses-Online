<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IRS - INDEX</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <?php
        // Variabel
        $title = "IRS - INDEX";

        // Tipe Data
        $semesterOptions = array("1", "2", "3");

        // Pengkondisian
        $isSubmitted = isset($_POST['Submit']);
        $message = "";

        if ($isSubmitted) {
            // Mendapatkan data dari form
            $nama = $_POST['nama'];
            $nim = $_POST['nim'];
            $jurusan = $_POST['jurusan'];
            $sm = $_POST['sm'];

            // Perulangan
            $selectedMk = array();
            foreach ($_POST as $key => $value) {
                if (substr($key, 0, 5) == "check") {
                    $selectedMk[] = $value;
                }
            }

            // Function
            function getStatusAkademik($semester) {
                if ($semester == "Semester 1") {
                    return "Aktif";
                } else {
                    return "Tidak Aktif";
                }
            }

            // Menampilkan pesan
            $message = "Data telah disubmit!";
        }
    ?>

    <header>
        <h2 class="text-center">
            <?php echo $title; ?>
        </h2>
    </header>

    <div class="wrapper">
        <div class="container bg-white">
            <h2 class="container-header text-center">Buat IRS</h2>
            <form class="form" action="hasil.php" method="post" id="form">
                <div class="form-group form-book">
                    <label for="nama">Nama</label>
                    <input type="text" id="nama" name="nama" required>
                </div>
                <div class="form-group form-book">
                    <label for="nim">NIM</label>
                    <input type="text" id="nim" name="nim" required>
                </div>
                <div class="form-group form-book">
                    <label for="jurusan">Jurusan</label>
                    <input type="text" id="jurusan" name="jurusan" required>
                </div>
                <br>
                <div class="form-group form-book">
                    <label for="sm">Semester Studi</label>
                    <select class="form-select" aria-label="Default select example" name="sm" id="sm">
                        <option selected disabled>Pilih Semester</option>
                        <?php
                            // Perulangan
                            foreach ($semesterOptions as $semesterOption) {
                                echo "<option value=\"$semesterOption\">$semesterOption</option>";
                            }
                        ?>
                    </select>
                </div>
                <br>
                <div class="form-group form-book">
                    <label for="mk">Mata Kuliah</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="check1" value="Kimia" id="flexCheckDefault">
                        <label class="form-check-label">
                            Kimia
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="check2" value="Matematika Teknik" id="flexCheckDefault">
                        <label class="form-check-label">
                            Matematika Teknik
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="check3" value="Fisika Dasar" id="flexCheckDefault">
                        <label class="form-check-label">
                            Fisika Dasar
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="check4" value="Algoritma dan Pemrograman" id="flexCheckDefault">
                        <label class="form-check-label">
                            Algoritma dan Pemrograman
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="check5" value="Elektronika Dasar" id="flexCheckDefault">
                        <label class="form-check-label">
                            Elektronika Dasar
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="check6" value="Aljabar Linier" id="flexCheckDefault">
                        <label class="form-check-label">
                            Aljabar Linier
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="check7" value="Dasar Komputer dan Pemrograman" id="flexCheckDefault">
                        <label class="form-check-label">
                            Dasar Komputer dan Pemrograman
                        </label>
                    </div>
                </div>
                <input type="submit" value="Submit" name="Submit" class="btn-submit">
                <br>
            </form>
        </div>
    </div>
</body>
</html>
