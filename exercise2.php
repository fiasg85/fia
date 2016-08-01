<?php
$states = array("Selangor", "Johor", "Kedah",
"Kelantan", "Melaka", "Negeri Sembilan", "Pahang", "Perak", "Perlis", "Pulau Pinang", "Sabah", "Sarawak", "Terengganu");


$ibunegeri = array("Shah Alam", "Johor Bahru", "Alor Setar",
"Kota Bahru", "Bandar Melaka", "Seremban", "Kuatan", "Ipoh", "Kangar", "Geogtown", "Kota Kinabalu", "Kuching", "Kuala Terengganu");


$shortname = array("SGR", "JHR", "KDH",
"KTN", "MLK", "NSN", "PHG", "PRK", "PLS", "PNG", "SBH", "SWK", "TRG");

echo "<strong>Malaysia States:</strong>";

echo "<table border='1'  cellspacing ='0'  cellpadding ='0'>";

echo "<tr><td width = 150px align ='center'><strong>State name</strong></td><td width = 150px align ='center'><strong>Ibu Negeri</strong></td><td width = 150px align ='center'><strong>Shortname</strong></td></tr>";

$num = 0;
do{

echo "<table border='1'  cellspacing ='0'  cellpadding ='0'>";

if ($states[$num]=="Johor")
	echo "<tr><td width = 150px align ='center'><strong>".$states[$num]."</strong></td><td width = 150px align ='center'><strong>".$ibunegeri[$num]."</strong></td><td width = 150px align ='center'><strong>".$shortname[$num].
"</strong></td></tr></table>";

else
	echo "<tr><td width = 150px align ='center'>".$states[$num]."</td><td width = 150px align ='center'>".$ibunegeri[$num]."</td><td width = 150px align ='center'>".$shortname[$num].
"</td></tr></table>";

$num++;
}while($num <=12);

?>

<hr/>
<?php
echo "* <strong>Bold</strong> state is the state you're living in";


?>