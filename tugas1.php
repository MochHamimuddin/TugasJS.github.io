<?php
$nama = "Siti Aminah";
$produk = "Kulkas";
$JumlahBeli = 3;

switch($produk){
	case 'TV': $harga = 3000000; break;
	case 'Kulkas': $harga = 4000000; break;
	case 'Mesin Cuci': $harga = 5000000; break;
	default: $harga = 0;
}
$bayar =  $harga * $JumlahBeli;
$diskon = ($JumlahBeli > 2) ? $harga * 0.25 : $harga * 0.1;
$ppn = 0.11 * ($harga - $diskon);
$subtotal =  $harga - $diskon + $ppn;
?>
<link rel="stylesheet" href="stylephp.css">
<form>
<table align="center" cellpadding="10" cellspacing="0">
    <thead>
        <th colspan="2">STRUK PEMBELIAN</th>
    </thead>
    <tbody>
        <tr>
            <td>Nama </td>
            <td><?= $nama; ?></td>
        </tr>
        <tr>
            <td>Produk Yang Dibeli </td>
            <td><?= $produk; ?></td>
        </tr>
        <tr>
            <td>Jumlah Beli </td>
            <td><?= $JumlahBeli; ?></td>
        </tr>
        <tr>
            <td>Harga </td>
            <td>Rp. <?= $bayar; ?></td>
        </tr>
        <tr>
            <td>Diskon </td>
            <td>Rp. <?= $diskon; ?></td>
        </tr>
        <tr>
            <td>Subtotal </td>
            <td>Rp. <?= $subtotal; ?></td>
        </tr>
    </tbody>
</table>
</form>