<!DOCTYPE html>
<html>
<head>
	<title>convert</title>
</head>
<body>
	<form action='' method="post">
		<input type="text" name="valeur" size='4'><br />
		<select name='var'>
			<option name='ougiya' value="ougiya">ougiya to dollar</option>
			<option name='dollar' value="dollar">dollar to ougiya</option>
			<option name='ougiya' value="dh">dh to ougiya</option>
			<option name='euro' value="euro">euro to ougiya</option>
			<option name='ougiya_euro' value="ougiya_euro">ougiya to euro</option>
		</select><br />
		<input type="submit" name="go">
	</form>
	<?
	//var
	$var=$_POST['var'];
	$valeur=$_POST['valeur'];
	$dollar=$_POST['dollar'];
	$ougiya=$_POST['ougiya'];
	$euro=$_POST['euro'];
	$ougiya_euro=$_POST['$ougiya_euro'];
	$dh=$_POST['dh'];
	$go=$_POST['go'];

	//function work
	if (isset($go) and is_numeric($valeur)) {
		//new var
		$one = ($valeur * 350);
		$two = ($valeur / 350);
		$three=($valeur * 38.5);
		$for=($valeur * 450);
		$five=($valeur / 450);
		//switch
		switch ($var) {
		
			case 'ougiya':
				echo $two ;
				break;
			case 'dollar':
				echo  $one;
				break;
			case 'dh':
				echo $three;
				break;
			case 'euro':
				echo $for;
				break;
			case 'ougiya_euro':
				echo $five;
				break;
			default:
				echo "error";
			break;
	}
	}else{
		echo "plz, insert a correct valuer";
	}
	?>
</body>
</html>