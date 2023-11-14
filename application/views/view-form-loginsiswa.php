<html>

<head>
    <title>Form Input Data Siswa</title>
</head>

<body>
    <center>
        <form   action="<?=   base_url('loginsiswa');   ?>"method="post">
        <table>
            <tr>
                <th colspan="3">
                    Form Login Siswa
                </th>
            </tr>
            <tr>
                <td colspan="3">
                    <hr>
                </td>
            </tr>
            <tr>
                <th>Nama</th>
                <th>:</th>
                <td>
                    <input type="text" name="nama" id="nama">
                </td>
            </tr>
            <tr>
                <th>NIS</th>
                <th>:</th>
                <td>
                    <input type="text" name="nis" id="nis">
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                <button class="btn btn-lg btn-primary btn-block" name="submit" value="login" type="submit" <?php echo site_url("loginsiswa/ceklogin")?>>Login</button>
                </td>
            </tr>
        </table>
        </form>
    </center>

</body>

</html>