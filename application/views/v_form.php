<section>
    <h1><?php echo $judul ?></h1>
    <form action="<?= base_url() ?>web/cetak" method="post">
        <table>
            <tr>
                <th align="left">Nama Siswa</th>
                <td>:</td>
                <td>
                    <input type="text" name="nama" id="nama">
                </td>
            </tr>
            <tr>
                <th align="left">NIS</th>
                <td>:</td>
                <td>
                    <input type="text" name="nis" id="nis">
                </td>
            </tr>
            <tr>
                <th align="left">Kelas</th>
                <td>:</td>
                <td>
                    <input type="text" name="kelas" id="kelas">
                </td>
            </tr>
            <tr>
                <th align="left">Tanggal Lahir</th>
                <td>:</td>
                <td>
                    <input type="date" name="tanggallahir" id="tanggallahir">
                </td>
            </tr>
            <tr>
                <th align="left">Tempat Lahir</th>
                <td>:</td>
                <td>
                    <input type="text" name="tempatlahir" id="tempatlahir">
                </td>
            </tr>
            <tr>
                <th align="left">Alamat</th>
                <td>:</td>
                <td>
                    <textarea name="alamat" id="alamat" rows="5" cols="30"></textarea>
                </td>
            </tr>
            <tr>
                <th align="left">Jenis Kelamin</th>
                <td>:</td>
                <td>
                    <input type="radio" id="l" name="jeniskelamin" value="Laki-laki">
                    <label for="l">Laki-laki</label>
                    <input type="radio" id="p" name="jeniskelamin" value="Perempuan">
                    <label for="p">Perempuan</label>
                </td>
            </tr>
            <tr>
                <th align="left">Agama</th>
                <td>:</td>
                <td>
                    <select name="agama" id="agama">
                        <option value="">Pilih Agama</option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Budha">Budha</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Protestan">Protestan</option>
                        <option value="Khonghucu">Khonghucu</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <input type="submit" value="Submit">
                </td>
            </tr>
        </table>
    </form>
</section>