<section>
    <h1><?php echo $judul ?></h1>
    <table>
        <tr>
            <th align="left">Nama Siswa</th>
            <th>:</th>
            <td>
                <?= $nama; ?>
            </td>
        </tr>
        <tr>
            <th align="left">NIS</th>
            <th>:</th>
            <td>
                <?= $nis; ?>
            </td>
        </tr>
        <tr>
            <th align="left">Kelas</th>
            <th>:</th>
            <td>
                <?= $kelas; ?>
            </td>
        </tr>
        <tr>
            <th align="left">Tanggal Lahir</th>
            <th>:</th>
            <td>
                <?= $tanggallahir; ?>
            </td>
        </tr>
        <tr>
            <th align="left">Tempat Lahir</th>
            <th>:</th>
            <td>
                <?= $tempatlahir; ?>
            </td>
        </tr>
        <tr>
            <th align="left">Alamat</th>
            <th>:</th>
            <td>
                <?= $alamat; ?>
            </td>
        </tr>
        <tr>
            <th align="left">Jenis Kelamin</th>
            <th>:</th>
            <td>
                <?= $jeniskelamin; ?>
            </td>
        </tr>
        <tr>
            <th align="left">Agama</th>
            <th>:</th>
            <td>
                <?= $agama; ?>
            </td>
        </tr>
        <tr>
            <td colspan="4" align="center">
                <a href="<?= base_url();
                            ?>web/form">Kembali</a>
            </td>
        </tr>
    </table>
</section>