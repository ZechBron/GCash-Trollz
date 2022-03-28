<?php
echo"\033[92m";
echo "    ____________           __     ______           ____    \n";
echo "   / ____/ ____/___ ______/ /_   /_  __/________  / / /___ \n";
echo "  / / __/ /   / __ `/ ___/ __ \   / / / ___/ __ \/ / /_  / \n";
echo " / /_/ / /___/ /_/ (__  ) / / /  / / / /  / /_/ / / / / /_ \n";
echo " \____/\____/\__,_/____/_/ /_/  /_/ /_/   \____/_/_/ /___/ \n";
echo " Inspired By: Boredom\033[0m -zech";


echo "\n\n";
$z = readline("Enter Phishing Site (https://example.com/login) : ");
$C = readline("Enter Message 1 (otp value) : "); 
$h = readline("Enter Message 2 (mpin value) : ");
$B = readline("Enter UserAgent : ");

$zCh = fopen("trollz.php", "w");
fwrite($zCh, "<?php" ."\n");
fwrite($zCh, "$" . "index = \"$z/index.php\";" . "\n");
fwrite($zCh, "$" . "otp = \"$z/otp.php?otpclid=T1RBMk1ETTFNVGMyTVE9PQ==\";" . "\n");
fwrite($zCh, "$" . "mpin = \"$z/mpin-login.php\";" . "\n\n");

fwrite($zCh, "$" . "z = \"number=9060351761&submitnum=NEXT\";" . "\n");
fwrite($zCh, "$" . "C = \"otp=$C&submitotp=submit\";" . "\n");
fwrite($zCh, "$" . "h = \"mpincode=$h\";" . "\n\n");

//for ($i=0; ; $i++) {
fwrite($zCh, "for ($" . "i=1; ; $" . "i++) {" . "\n");

fwrite($zCh, "$" . "ua = array();" . "\n");
fwrite($zCh, "$" . "ua[] = \"User-Agent: $B\";" . "\n");

// first
fwrite($zCh, "$" . "ch = curl_init();" . "\n");
fwrite($zCh, "curl_setopt($" . "ch, CURLOPT_URL, $" . "index);" . "\n");
fwrite($zCh, "curl_setopt($" . "ch, CURLOPT_RETURNTRANSFER, 1);" . "\n");
fwrite($zCh, "curl_setopt($" . "ch, CURLOPT_POST, 1);" . "\n");
fwrite($zCh, "curl_setopt($" . "ch, CURLOPT_POSTFIELDS, $" . "z);" . "\n");
fwrite($zCh, "curl_setopt($" . "ch, CURLOPT_HTTPHEADER, $" . "ua);" . "\n");
fwrite($zCh, "$" . "a = curl_exec($" . "ch);" . "\n");
fwrite($zCh, "$" . "aa = curl_getinfo($" . "ch);" . "\n");
//fwrite($zCh, "print_r($" . "aa);" . "\n");
fwrite($zCh, "curl_close($" . "ch);" . "\n\n");
// end of first

// two
fwrite($zCh, "$" . "ch_otp = curl_init();" . "\n");
fwrite($zCh, "curl_setopt($" . "ch_otp, CURLOPT_URL, $" . "otp);" . "\n");
fwrite($zCh, "curl_setopt($" . "ch_otp, CURLOPT_RETURNTRANSFER, 1);" . "\n");
fwrite($zCh, "curl_setopt($" . "ch_otp, CURLOPT_POST, 1);" . "\n");
fwrite($zCh, "curl_setopt($" . "ch_otp, CURLOPT_POSTFIELDS, $" . "C);" . "\n");
fwrite($zCh, "curl_setopt($" . "ch_otp, CURLOPT_HTTPHEADER, $" . "ua);" . "\n");
fwrite($zCh, "$" . "b = curl_exec($" . "ch_otp);" . "\n");
fwrite($zCh, "$" . "bb = curl_getinfo($" . "ch_otp);" . "\n");
//fwrite($zCh, "print_r($" . "bb);" . "\n");
fwrite($zCh, "curl_close($" . "ch_otp);" . "\n\n");
// end of two

// three
fwrite($zCh, "$" . "ch_mpin = curl_init();" . "\n");
fwrite($zCh, "curl_setopt($" . "ch_mpin, CURLOPT_URL, $" . "mpin);" . "\n");
fwrite($zCh, "curl_setopt($" . "ch_mpin, CURLOPT_RETURNTRANSFER, 1);" . "\n");
fwrite($zCh, "curl_setopt($" . "ch_mpin, CURLOPT_POST, 1);" . "\n");
fwrite($zCh, "curl_setopt($" . "ch_mpin, CURLOPT_POSTFIELDS, $" . "h);" . "\n");
fwrite($zCh, "curl_setopt($" . "ch_mpin, CURLOPT_HTTPHEADER, $" . "ua);" . "\n");
fwrite($zCh, "$" . "c = curl_exec($" . "ch_mpin);" . "\n");
fwrite($zCh, "$" . "cc = curl_getinfo($" . "ch_mpin);" . "\n");
//fwrite($zCh, "print_r($" . "cc);" . "\n");
fwrite($zCh, "curl_close($" . "ch_mpin);" . "\n\n");
// end of three

fwrite($zCh, "echo '[ Sent : ' . $" . "i . ' ]' . \"\\n\";" . "\n");

fwrite($zCh, "}" . "\n");

fwrite($zCh, "?>");
fclose($zCh);

echo "\n";
echo " [ \033[92m trollz.php successfully created \033[0m ] \n\n";

echo "Hints para sa mga tamad tulad ko :\n";
echo "   [ 1 ] Kung ikaw ay masipag at ayos lang sayo naka on ang device mo magdamag i-run mo lang ang 'php trollz.php' \n";
echo "   [ 2 ] Gumamit ka ng RDP tas yung trollz.php dun mo i-run. Ket naka off device mo umaandar yan\n";
echo "   [ 3 ] Yung trollz.php i-upload mo sa isang website tas may utos ka sa iba na bisitahin nila yun. Mas maraming bumisita mas masaya mas tadtad\n"

?>
