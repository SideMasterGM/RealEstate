<?php
	class TheCodeBrain extends mysqli {
		public function __construct($host, $user, $pass, $db){
			@parent::__construct($host, $user, $pass, $db);
		}
	}

	@$Conexion = new TheCodeBrain("127.0.0.1", "SideMaster", "Inform@tico", "re");

	if ($Conexion->connect_error)
		$error = true;
	else
		$error = false;

	if (!@$Conexion->query("SET NAMES 'utf8'"))
		$error = true;
?>