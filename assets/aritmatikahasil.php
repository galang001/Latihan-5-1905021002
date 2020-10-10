<style>
    table,
    th,
    td {
        border: 1px solid black;
        border-collapse: collapse;
        padding: 5px;
    }
</style>
<?php
$angka1 = $_POST['angka1'];
$angka2 = $_POST['angka2'];
$suku = $_POST['jumlah'];

echo "Deret Aritmatika";
echo "<p>";
echo "
    <table>
        <tr align=left>
            <td>Suku ke-1</td>
            <td>$angka1</td>
        <tr>
        <tr align=left>
            <td>Suku ke-2</td>
            <td>$angka2</td>
        </tr>";


for ($i = 3; $i <= $suku; $i++) {
    $selisih = $angka2 - $angka1;
    $hasil = $angka2 + $selisih;
    echo "
        <tr align=left>
            <td>Suku ke-$i</td>
            <td>$hasil</td>
        </tr>";

    $angka1 = $angka2;
    $angka2 = $hasil;
}
echo "</table>";
