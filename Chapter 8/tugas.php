<?php
$server = $_SERVER['PHP_SELF'];
$skor_nilai = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $skor_nilai = $_POST["skor_nilai"];
}
?>
<fieldset>
    <legend>Input Nilai</legend>
    <form action="<?php echo $server; ?>" method="post">
        <table width="301" border="0">
            <tr>
                <td width="91">Nilai</td>
                <td width="10">:</td>
                <td width="178"><input type="text" name="skor_nilai" id="textfield" value="<?php echo $skor_nilai; ?>"></td>
            </tr>
            <tr>
                <td colspan="3">
                    <!-- Menerima data dengan script PHP -->
                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        if ($skor_nilai % 2 == 0) {
                            echo "$skor_nilai adalah bilangan genap.";
                        } else {
                            echo "$skor_nilai adalah bilangan ganjil.";
                        }
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td><input type="submit" name="button" id="button" value="Proses"></td>
            </tr>
        </table>
    </form>
</fieldset>