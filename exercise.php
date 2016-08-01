

<?php
$states = array("Selangor", "Johor", "Kedah",
"Kelantan", "Melaka", "Negeri Sembilan", "Pahang", "Perak", "Perlis", "Pulau Pinang", "Sabah", "Sarawak", "Terengganu");
foreach ($states as $state) {
//echo "<li>".$state . PHP_EOL."</li>";
}

$ibunegeri = array("Shah Alam", "Johor Bahru", "Alor Setar",
"Kota Bahru", "Bandar Melaka", "Seremban", "Kuatan", "Ipoh", "Kangar", "Geogtown", "Kota Kinabalu", "Kuching", "Kuala Terengganu");
foreach ($ibunegeri as $ibunegeri1) {
//echo "<li>".$ibunegeri1 . PHP_EOL."</li>";
}

$shortname = array("SGR", "JHR", "KDH",
"KTN", "MLK", "NSN", "PHG", "PRK", "PLS", "PNG", "SBH", "SWK", "TRG",
"Labuan", "Putrajaya");

?>


<table border="1">

<tr>
<td><?php echo "State Name";?>
</td>
<td><?php echo "Ibu Negeri";?>
</td>
<td><?php echo "Short Name";?>
</td>
</tr>

<tr><td><?php echo $states[0];?>
</td>
<td><?php echo $ibunegeri[0];?>
</td>
<td><?php echo $shortname[0];?>
</td>

</tr>

<tr><td><?php echo $states[1];?>
</td>
<td><?php echo $ibunegeri[1];?>
</td>
<td><?php echo $shortname[1];?>
</td>

</tr>

<tr><td><?php echo $states[2];?>
</td>
<td><?php echo $ibunegeri[2];?>
</td>
<td><?php echo $shortname[2];?>
</td>

<tr><td><?php echo $states[3];?>
</td>
<td><?php echo $ibunegeri[3];?>
</td>
<td><?php echo $shortname[3];?>
</td>

</tr>

<tr><td><?php echo $states[4];?>
</td>
<td><?php echo $ibunegeri[4];?>
</td>
<td><?php echo $shortname[4];?>
</td>

</tr>

<tr><td><?php echo $states[5];?>
</td>
<td><?php echo $ibunegeri[5];?>
</td>
<td><?php echo $shortname[5];?>
</td>

</tr>

<tr><td><?php echo $states[6];?>
</td>
<td><?php echo $ibunegeri[6];?>
</td>
<td><?php echo $shortname[6];?>
</td>

</tr>

<tr><td><?php echo $states[7];?>
</td>
<td><?php echo $ibunegeri[7];?>
</td>
<td><?php echo $shortname[7];?>
</td>

</tr>

<tr><td><?php echo $states[8];?>
</td>
<td><?php echo $ibunegeri[8];?>
</td>
<td><?php echo $shortname[8];?>
</td>

</tr>

<tr><td><?php echo $states[9];?>
</td>
<td><?php echo $ibunegeri[9];?>
</td>
<td><?php echo $shortname[9];?>
</td>

</tr>

<tr><td><?php echo $states[10];?>
</td>
<td><?php echo $ibunegeri[10];?>
</td>
<td><?php echo $shortname[10];?>
</td>

</tr>

<tr><td><?php echo $states[11];?>
</td>
<td><?php echo $ibunegeri[11];?>
</td>
<td><?php echo $shortname[11];?>
</td>

</tr>
<tr><td><?php echo $states[12];?>
</td>
<td><?php echo $ibunegeri[12];?>
</td>
<td><?php echo $shortname[12];?>
</td>

</tr>

</table> 