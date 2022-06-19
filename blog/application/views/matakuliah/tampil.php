<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mata kuliah</title>
<body>
    <h2 align='center'>Daftar matakuliah</h2>
    <table border="1" style="color : red" class='table'>
        <thead>
            <tr>
                <th>NO</th>
                <th>Nama</th>
                <th>SKS</th>
                <th>Kode</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $nomor=1;
                foreach($matakuliah as $matkul){
            ?>
                <tr>
                    <td><?=$nomor?></td>
                    <td><?=$matkul->nama?></td>
                    <td><?=$matkul->sks?></td>
                    <td><?=$matkul->kode?></td>
                </tr>
            <?php
                $nomor++;
                }
            ?>
        </tbody>
    </table>
</body>
</html>