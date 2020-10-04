<?php
include '../dbinfo.php';
$dataJenis = "L3150";
$PeriksaQ= $ubuntudbconn->query("SELECT jenisprinter FROM tbl_listprinter WHERE jenisprinter='$dataJenis'");
$HasilQ = $PeriksaQ->fetch_assoc();

if ($HasilQ['jenisprinter'] == $dataJenis) {
	echo "Data Sudah ada";
}else{
	echo "Lanjutkan";
}

?>