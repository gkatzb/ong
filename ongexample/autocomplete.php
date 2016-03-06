<?php header( 'Cache-Control: no-cache' );
	header( 'Content-type: application/html; charset="utf-8"', true );
$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql passworD
$db_name="test"; // Database name


	$con = mysql_connect($host,$username,$password) or die(mysql_error());
	mysql_select_db($db_name, $con)  or die(mysql_error());

	
	mysql_query("SET NAMES 'utf8'");

mysql_query('SET character_set_connection=utf8');

mysql_query('SET character_set_client=utf8');

mysql_query('SET character_set_results=utf8'); 
$cname=null;
switch($_GET["item"]){
	
	case 'evento':
		$q = strtolower($_GET["q"]);
		if (!$q) return;

		$sql = "SELECT `NomeEvento` FROM `evento` WHERE `NomeEvento` LIKE '%$q%'";
		$rsd = mysql_query($sql);
		while($rs = mysql_fetch_array($rsd)) {
			$cname = $rs['NomeEvento'];
			
			echo "$cname\n";
		}
	break;
	
	case 'nome':
		$q = strtolower($_GET["q"]);
		if (!$q) return;

		$sql = "SELECT `NomePessoaFisicaJuridica` FROM `pessoafisicajuridica` WHERE `NomePessoaFisicaJuridica` LIKE '%$q%'";
		$rsd = mysql_query($sql);
		while($rs = mysql_fetch_array($rsd)) {
			$cname = $rs['NomePessoaFisicaJuridica'];
			
			echo "$cname\n";
		}
	break;
	
	case 'atividade':
		$q = strtolower($_GET["q"]);
		if (!$q) return;

		$sql = "SELECT `NomeAtividade` FROM `atividade` WHERE `NomeAtividade` LIKE '%$q%'";
		$rsd = mysql_query($sql);
		while($rs = mysql_fetch_array($rsd)) {
			$cname = $rs['NomeAtividade'];
			
			echo "$cname\n";
		}
	break;
	
	case 'natureza':
		$q = strtolower($_GET["q"]);
		if (!$q) return;

		$sql = "SELECT `NomeNatureza` FROM `natureza` WHERE `NomeNatureza` LIKE '%$q%'";
		$rsd = mysql_query($sql);
		while($rs = mysql_fetch_array($rsd)) {
			$cname = $rs['NomeNatureza'];
			
			echo "$cname\n";
		}
	break;
	
	case 'setor':
		$q = strtolower($_GET["q"]);
		if (!$q) return;

		$sql = "SELECT `NomeSetor` FROM `setor` WHERE `NomeSetor` LIKE '%$q%'";
		$rsd = mysql_query($sql);
		while($rs = mysql_fetch_array($rsd)) {
			$cname = $rs['NomeSetor'];
			
			echo "$cname\n";
		}
	break;
	
	case 'prodserv':
		$q = strtolower($_GET["q"]);
		if (!$q) return;

		$sql = "SELECT `NomeProdutoServico` FROM `produtoservico` WHERE `NomeProdutoServico` LIKE '%$q%'";
		$rsd = mysql_query($sql);
		while($rs = mysql_fetch_array($rsd)) {
			$cname = $rs['NomeProdutoServico'];
			
			echo "$cname\n";
		}
	break;
}
?>