<?php
	// para reconhecer strings acentuadas
	header("Content-Type: text/html;  charset=ISO-8859-1",true); 
	/* conexao com banco de dados */
	include("../../conexao_db/conexaoTecnologia.php");
	mysql_select_db($database_tecnologia, $tecnologia);

	if ($_REQUEST['origem1'] != ''){
		
		$sql = " SELECT ";
		$sql.= " B.cod_origem1, ";
		$sql.= " B.sigla_origem2, ";
		$sql.= " B.cod_origem2, ";
		$sql.= " B.status_origem2 ";
		$sql.= " FROM ";		
		$sql.= " origem2 B, ";
		$sql.= " origem1 A ";
		$sql.= " WHERE ";
		$sql.= " A.cod_origem1 = B.cod_origem1 ";
		$sql.= " AND B.status_origem2 = 'ATIVO' ";
		$sql.= " AND B.cod_origem1 = " . $_REQUEST['origem1'];
		$sql.= " ORDER BY B.sigla_origem2 ";
		
		// sql para testar, e o mesmo que o acima
		/*
			SELECT B.cod_origem1,B.sigla_origem2, B.cod_origem2,B.status_origem2
			FROM origem2 B,origem1 A
			WHERE A.cod_origem1 = B.cod_origem1 AND B.status_origem2 = 'ATIVO' AND B.cod_origem1 = 2
			ORDER BY B.sigla_origem2
		*/
		$rs = mysql_query($sql) or die('Falha na Consulta');
		$combo = "<option value=''>- Selecione -</option>";
	
		/* populando o combo dependente */
		while ($row = mysql_fetch_object($rs)) {
			$combo.= "<option value='" . $row->cod_origem2 . "'>" . $row->sigla_origem2 . "</option>";
		}	
	echo $combo;
}
?>     