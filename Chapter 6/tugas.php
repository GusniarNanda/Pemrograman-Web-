<?php
$server = $_SERVER['PHP_SELF'];
?>
<h2>FORM PENJUMLAHAN</h2>
<form action="<?php echo $server;?>" method="post">
<table>
    <tr>
        <td>Nilai A</td>
        <td>:</td>
        <td><input type="text" name="nilai1" value=" " /></td>
    </tr>
<tr>
        <td>Nilai B</td>
        <td>:</td>
        <td><input type="text" name="nilai2" value=" " /></td>
</tr>
<tr>
        <td><input type="submit" name="submit" value="Tambah"/></td>
        <td><input type="reset" name="Reset" value="Reset"/></td>
<tr>
</table>
<form></form>

<?php
if(isset($_POST['submit'])) {
    $nilA = $_POST['nilai1'];
    $nilB = $_POST['nilai2'];
    $hasil=$nilA+$nilB;
    echo "<br>Hasil: ".$hasil;
}
?>