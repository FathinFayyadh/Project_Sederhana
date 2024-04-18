<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="container mt-4">
        <div class="card">
            <div class="card-header bg-primary text-light">
                <h2>Data Mahasiswa</h2>
            </div>
            <div class="card-body">
                <a href="route.php?action=/tambah-mahasiswa" class="btn btn-success mb-3">Tambah</a>
                <div class="table-container overflow-x-auto">
                    <?php if ($mahasiswa): ?>
                        <?php $i = 1; ?>
                        <table class="table table-striped table-hover border">  
                            
                        <thead>
                            <tr >

                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>NPM</th>
                                <th>Prodi</th>
                                <th>Heandphone</th>
                                <th class="text-center">Action</th>
                            </trcla>
                        </thead>
                     
                        <tbody>
                                <?php foreach($mahasiswa as $mhs):?>
                                    <tr>
                                    <td><?= $i++;?></td>
                                    <td><?= $mhs['nama'];?></td>
                                    <td><?= $mhs['email'];?></td>
                                    <td><?= $mhs['npm'];?></td>
                                    <td><?= $mhs['prodi'];?></td>
                                    <td><?= $mhs['heandphone'];?></td>
                                <td>
                                    <a href="route.php?action=/detail-mahasiswa&id" <?php $mhs['id'];?> class="btn btn-info"> detail</a>
                                    <a href="route.php?action=/update-mahasiswa&id" <?php $mhs['id'];?> class="btn btn-warning"> Update</a>
                                    <a href="route.php?action=/delete-mahasiswa&id" <?php $mhs['id'];?> class="btn btn-danger"> delete</a>
                                </td>
                                    </tr>
                                    <?php endforeach?>                           
                        </tbody>
                        </table>
                            <?php else: ?>
                       <div class="alert alert-warning " role="alert">
                     Data Mahasiswa Kosong
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
