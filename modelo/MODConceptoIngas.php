<?php
/**
*@package pXP
*@file MODConceptoIngas.php
*@author  Gonzalo Sarmiento Sejas
*@date 18-02-2013 21:30:07
*@description Clase que envia los parametros requeridos a la Base de datos para la ejecucion de las funciones, y que recibe la respuesta del resultado de la ejecucion de las mismas
*/

class MODConceptoIngas extends MODbase{
	
	function __construct(CTParametro $pParam){
		parent::__construct($pParam);
	}
			
	function listarConceptoIngas(){
		//Definicion de variables para ejecucion del procedimientp
		$this->procedimiento='pre.f_concepto_ingas_sel';
		$this->transaccion='PRE_CINGAS_SEL';
		$this->tipo_procedimiento='SEL';//tipo de transaccion
				
		//Definicion de la lista del resultado del query
		$this->captura('id_concepto_ingas','int4');
		$this->captura('estado_reg','varchar');
		$this->captura('id_servicio','int4');
		$this->captura('id_oec','int4');
		$this->captura('id_item','int4');
		$this->captura('tipo','varchar');
		$this->captura('sw_tesoro','int4');
		$this->captura('desc_ingas','varchar');
		$this->captura('fecha_reg','timestamp');
		$this->captura('id_usuario_reg','int4');
		$this->captura('fecha_mod','timestamp');
		$this->captura('id_usuario_mod','int4');
		$this->captura('usr_reg','varchar');
		$this->captura('usr_mod','varchar');
		
		//Ejecuta la instruccion
		$this->armarConsulta();
		$this->ejecutarConsulta();
		
		//Devuelve la respuesta
		return $this->respuesta;
	}
			
	function insertarConceptoIngas(){
		//Definicion de variables para ejecucion del procedimiento
		$this->procedimiento='pre.f_concepto_ingas_ime';
		$this->transaccion='PRE_CINGAS_INS';
		$this->tipo_procedimiento='IME';
				
		//Define los parametros para la funcion
		$this->setParametro('estado_reg','estado_reg','varchar');
		$this->setParametro('id_servicio','id_servicio','int4');
		$this->setParametro('id_oec','id_oec','int4');
		$this->setParametro('id_item','id_item','int4');
		$this->setParametro('tipo','tipo','varchar');
		$this->setParametro('sw_tesoro','sw_tesoro','int4');
		$this->setParametro('desc_ingas','desc_ingas','varchar');

		//Ejecuta la instruccion
		$this->armarConsulta();
		$this->ejecutarConsulta();

		//Devuelve la respuesta
		return $this->respuesta;
	}
			
	function modificarConceptoIngas(){
		//Definicion de variables para ejecucion del procedimiento
		$this->procedimiento='pre.f_concepto_ingas_ime';
		$this->transaccion='PRE_CINGAS_MOD';
		$this->tipo_procedimiento='IME';
				
		//Define los parametros para la funcion
		$this->setParametro('id_concepto_ingas','id_concepto_ingas','int4');
		$this->setParametro('estado_reg','estado_reg','varchar');
		$this->setParametro('id_servicio','id_servicio','int4');
		$this->setParametro('id_oec','id_oec','int4');
		$this->setParametro('id_item','id_item','int4');
		$this->setParametro('tipo','tipo','varchar');
		$this->setParametro('sw_tesoro','sw_tesoro','int4');
		$this->setParametro('desc_ingas','desc_ingas','varchar');

		//Ejecuta la instruccion
		$this->armarConsulta();
		$this->ejecutarConsulta();

		//Devuelve la respuesta
		return $this->respuesta;
	}
			
	function eliminarConceptoIngas(){
		//Definicion de variables para ejecucion del procedimiento
		$this->procedimiento='pre.f_concepto_ingas_ime';
		$this->transaccion='PRE_CINGAS_ELI';
		$this->tipo_procedimiento='IME';
				
		//Define los parametros para la funcion
		$this->setParametro('id_concepto_ingas','id_concepto_ingas','int4');

		//Ejecuta la instruccion
		$this->armarConsulta();
		$this->ejecutarConsulta();

		//Devuelve la respuesta
		return $this->respuesta;
	}
			
}
?>