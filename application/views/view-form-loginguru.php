<html>

<head>
    <title>Form Input Data Siswa</title>
</head>

<body>
    <center>
        <form   action="<?=   base_url('loginguru');   ?>"method="post">
        <table>
            <tr>
                <th colspan="3">
                    Form Login Guru
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
                <th>No Guru</th>
                <th>:</th>
                <td>
                    <input type="text" name="noguru" id="noguru">
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <input type="submit" value="submit">
                </td>
            </tr>
        </table>
        </form>
    </center>

</body>

</html>