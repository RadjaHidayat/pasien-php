<tbody>
    <?php
    include 'koneksi.php';
    $no = 1;
    $hasil = $koneksi->query("SELECT * FROM pasien");
    if ($hasil->num_rows > 0) {
        while ($row = $hasil->fetch_assoc()) {
    ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $row['idPasien']; ?></td>
                <td><?= $row['nmPasien']; ?></td>
                <td><?= $row['jk']; ?></td>
                <td><?= $row['alamat']; ?></td>
                <td>
                    <a href="editpasien.php?edit=<?= $row['idPasien']; ?>" class="btn btn-warning btn-sm">Edit</a>
                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#hapusModal<?= $row['idPasien']; ?>">
                        Hapus
                    </button>
                </td>
            </tr>
    <?php
        }
    } else {
        echo '<tr><td colspan="6">Data tidak ditemukan</td></tr>';
    }
    ?>
</tbody>
