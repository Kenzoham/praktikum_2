<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dosen</title>
<body>
    <h2 align='center'>Daftar Dosen</h2>
    <table border="1" style="color : red" class='table'>
        <thead>
            <tr>
                <th>NO</th>
                <th>Nama</th>
                <th>Gender</th>
                <th>Tempat lahir</th>
                <th>Tanggal lahir</th>
                <th>NIDN</th>
                <th>Pendidikan</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $nomor=1;
                foreach($dosen as $dsn){
            ?>
                <tr>
                    <td><?=$nomor?></td>
                    <td><?=$dsn->nama?></td>
                    <td><?=$dsn->gender?></td>
                    <td><?=$dsn->tmp_lahir?></td>
                    <td><?=$dsn->tgl_lahir?></td>
                    <td><?=$dsn->nidn?></td>
                    <td><?=$dsn->pendidikan?></td>
                </tr>
            <?php
                $nomor++;
                }
            ?>
        </tbody>
    </table>
</body>
</html>