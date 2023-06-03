<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IRS - INDEX</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <header>
        <h2 class="text-center">
            IRS - INDEX
        </h2>
    </header>
    <div class="wrapper">
        <div class="container bg-white">
            <h2 class="container-header text-center">Isian Rencana Semester (IRS)</h2>
            <style>
                body {
                    background-color: #f2f2f2;
                    color: #333;
                    margin: 0;
                    padding: 0;
                }
                table {
                    margin: 20px auto;
                    border-collapse: collapse;
                    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
                    background-color: #fff;
                    width: 80%;
                    max-width: 600px;
                    border-radius: 10px;
                    overflow: hidden;
                }
                th, td {
                    padding: 15px;
                    text-align: left;
                    border-bottom: 1px solid #ddd;
                    font-size: 18px;
                    font-weight: normal;
                    color: #555;
                }
                th {
                    background-color: #f2f2f2;
                    font-size: 20px;
                    color: #666;
                    text-transform: uppercase;
                    letter-spacing: 1px;
                    font-weight: bold;
                }
                td {
                    font-weight: 500;
                }
                .btn-container {
                    display: flex;
                    justify-content: center;
                    margin-top: 30px;
                }
                .btn {
                    display: inline-block;
                    background-color: #162953;
                    color: #fff;
                    border: none;
                    padding: 15px 30px;
                    text-align: center;
                    text-decoration: none;
                    font-size: 18px;
                    font-weight: bold;
                    border-radius: 5px;
                    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
                    transition: background-color 0.3s;
                    margin: 10px;
                }
                .btn:hover {
                    background-color: #162953;
                }
            </style>
            <?php
                // Class Mahasiswa
                class Mahasiswa {
                    // Property
                    public $nama;
                    public $nim;
                    public $jurusan;
                    public $sm;

                    // Constructor
                    public function __construct($nama, $nim, $jurusan, $sm) {
                        $this->nama = $nama;
                        $this->nim = $nim;
                        $this->jurusan = $jurusan;
                        $this->sm = $sm;
                    }

                    // Getter
                    public function getNama() {
                        return $this->nama;
                    }

                    public function getNim() {
                        return $this->nim;
                    }

                    public function getJurusan() {
                        return $this->jurusan;
                    }

                    public function getStatusAkademik() {
                        return $this->sm;
                    }
                }

                // Object Mahasiswa
                $mahasiswa = new Mahasiswa($_POST['nama'], $_POST['nim'], $_POST['jurusan'], $_POST['sm']);

                // Function to check if a course is selected
                function isCourseSelected($courseName) {
                    if (isset($_POST[$courseName])) {
                        return true;
                    } else {
                        return false;
                    }
                }

                // Array of courses
                $selectedCourses = array();

                // Check if each course is selected and add it to the selected courses array
                if (isCourseSelected('check1')) {
                    array_push($selectedCourses, 'Kimia');
                }
                if (isCourseSelected('check2')) {
                    array_push($selectedCourses, 'Matematika Teknik');
                }
                if (isCourseSelected('check3')) {
                    array_push($selectedCourses, 'Fisika Dasar');
                }
                if (isCourseSelected('check4')) {
                    array_push($selectedCourses, 'Algoritma dan Pemrograman');
                }
                if (isCourseSelected('check5')) {
                    array_push($selectedCourses, 'Elektronika Dasar');
                }
                if (isCourseSelected('check6')) {
                    array_push($selectedCourses, 'Aljabar Linier');
                }
                if (isCourseSelected('check7')) {
                    array_push($selectedCourses, 'Dasar Komputer dan Pemrograman');
                }

                // Function to display courses in a table
                function displayCourses($courses) {
                    echo '<table>';
                    echo '<tr><th>Mata Kuliah</th></tr>';
                    foreach ($courses as $course) {
                        echo "<tr><td>$course</td></tr>";
                    }
                    echo '</table>';
                }

                // Display student information and selected courses
                echo '<h3>Data Mahasiswa:</h3>';
                echo '<p><strong>Nama:</strong> ' . $mahasiswa->getNama() . '</p>';
                echo '<p><strong>NIM:</strong> ' . $mahasiswa->getNim() . '</p>';
                echo '<p><strong>Jurusan:</strong> ' . $mahasiswa->getJurusan() . '</p>';
                echo '<p><strong>Semester Studi:</strong> ' . $mahasiswa->getStatusAkademik() . '</p>';
                echo '<h3>Mata Kuliah yang Dipilih:</h3>';
                displayCourses($selectedCourses);
            ?>
            <div class="btn-container">
                <a href="index.php" class="btn">Back</a>
                <a href="login.html" class="btn">Logout</a>
            </div>
        </div>
    </div>
</body>
</html>