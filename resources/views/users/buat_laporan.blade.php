<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Buat Laporan</title>
    <style>
        .form-group {
            color: green;
        }
        
        .card .car-header {
            padding: 0;
        }

        /* Mengubah warna latar belakang dan warna border kotak input */
        input[type="text"] {
            background-color: #f0f8ff; /* Warna latar belakang */
            border: 1px solid green; /* Warna garis tepi */
            padding: 10px;
            border-radius: 5px;
        }

        /* Mengubah warna ketika fokus pada kotak input */
        input[type="text"]:focus {
            background-color: #e0f7fa; /* Warna latar saat fokus */
            border-color: green; /* Warna border saat fokus */
            outline: none; /* Menghilangkan outline default */
        }
        input[type="file"] {
            background-color: #f0f8ff; /* Warna latar belakang */
            border: 1px solid green; /* Warna garis tepi */
            border-radius: 5px;
        }

        /* Mengubah warna ketika fokus pada kotak input */
        input[type="file"]:focus {
            background-color: #e0f7fa; /* Warna latar saat fokus */
            border-color: green; /* Warna border saat fokus */
            outline: none; /* Menghilangkan outline default */
        }
    </style>
</head>

<body>
    <br><br><br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="card col-10 p-0">
                <div class="card-header bg-dark text-white">
                    <h3 class="m-0 p-3">Buat Laporan</h3>
                </div>
                <div class="card-body">
                    <form action="{{ url($userID.'/store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="input1">Judul Laporan</label>
                            <input type="text" class="form-control" id="input1" name="judul_laporan">
                        </div>
                        <div class="form-group">
                            <label for="input2">Upload Gambar</label>
                            <input type="file" name="gambar" id="input2" class="form-control @error('gambar') is-invalid @enderror">
                                @error('gambar')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label for="input3">Deskripsi</label>
                            <input type="text" class="form-control" id="input3" name="description">
                        </div>
                        <button class="btn btn-success mt-4" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>
</body>

</html>
