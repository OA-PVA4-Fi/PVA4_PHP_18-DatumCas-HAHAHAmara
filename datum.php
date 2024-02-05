<?php
//1
echo date("Y- m- d");
echo date("Y- m- d");
echo date("H:i:s");
echo date("Y- m- d- H:i:s");
echo date('\V\z\o\r j. n. Y. H:i');

//2
$dnesek = strtotime("today");
echo 'Dnes: '.date("Y-m-d", $dnesek);
$zitrek =strtotime("+1 day");
echo  'zitra: '.date("Y-m-d", $zitrek);
$prvnimesice = strtotime("+25 days");
echo 'random: '. date("Y-m-d", $prvnimesice);
$poslednimesice = strtotime("+55 days");
echo 'random2: '. date("Y-m-d", $poslednimesice);
$vcera = strtotime("-1 day");
echo 'vcera' .date("Y-m-d", $vcera);
$ctrnactdni = strtotime("+14 days");
echo 'datum splatnosti blablabla: '. date("Y-m-d", $ctrnactdni);
$zdanit = strtotime("-3 days");
echo 'pred trema dnama!!!!!!! :' .date("Y-m-d", $zdanit);

//3

?>
