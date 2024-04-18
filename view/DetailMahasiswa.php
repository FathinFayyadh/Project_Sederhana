<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail-mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="container mt-4">
        <div class="card">
            <div class="card-header bg-primary text-light">
                <h2>Detail Mahasiswa</h2>
            </div>
            <div class="card-body">
                <a href="route.php?action=/tambah-mahasiswa" class="btn btn-success mb-3">Tambah</a>
              
                <div class="button my-2 mb-4">
                    <button class="btn btn-warning btn-sm">update</button>

                    <a href="route.php?action=/delete-mahasiswa&id=<?= $mahasiswa['id'];?>" class="btn btn-danger btn-sm">delete</a>
                </div>
                <?php

?>

                <table class="table table-striped table-hover">
                    <tbody>
                        <tr>    
                            <th>Nama</th>
                            <td><?= $mahasiswa['nama'];?></td>
                        </tr>
                        <tr>
                            <th>email</th>
                            <td><?=$mahasiswa['email'];?></td>
                        </tr>
                        <tr>
                            <th>NPM</th>
                            <td><?=$mahasiswa['npm'];?></td>
                        </tr>
                        <tr>
                            <th>Prodi</th>
                            <td><?=$mahasiswa['prodi'];?></td>
                        </tr>
                        <tr>
                            <th>No telp</th>
                            <td><?=$mahasiswa['heandphone'];?></td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
