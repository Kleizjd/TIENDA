<?php 

	class Usuarios extends Controllers{
		public function __construct()
		{
			sessionStart();
			parent::__construct();
			// session_start();
			if(empty($_SESSION['login']))
			{
				header('Location: '.base_url().'/login');
				die();
			}
			getPermisos(MUSUARIOS);
		}

		public function Usuarios()
		{
			if(empty($_SESSION['permisosMod']['r'])){
				header("Location:".base_url().'/dashboard');
			}
			$data['page_tag'] = "Usuarios";
			$data['page_title'] = "USUARIOS <small>Tienda Virtual</small>";

			$data['page_name'] = "usuarios";
			$data['page_functions_js'] = "functions_usuarios.js";
			$this->views->getView($this,"usuarios",$data);
		}

		public function setUsuario(){
			if($_POST){			
				if(empty($_POST['txtIdentificacion']) || empty($_POST['txtNombre']) || empty($_POST['txtApellido']) || empty($_POST['txtTelefono']) || empty($_POST['txtEmail']) || empty($_POST['listRolid']) || empty($_POST['listStatus']) )
				{
					$arrResponse = array("status" => false, "msg" => 'Datos incorrectos.');
				}else{ 
					$idUsuario = intval($_POST['idUsuario']);
					$strIdentificacion = strClean($_POST['txtIdentificacion']);
					$strNombre = ucwords(strClean($_POST['txtNombre']));
					$strApellido = ucwords(strClean($_POST['txtApellido']));
					$intTelefono = intval(strClean($_POST['txtTelefono']));
					$strEmail = strtolower(strClean($_POST['txtEmail']));
					$intTipoId = intval(strClean($_POST['listRolid']));
					$intStatus = intval(strClean($_POST['listStatus']));
					$request_user = "";
					if($idUsuario == 0)
					{
						$option = 1;
						$strPassword =  empty($_POST['txtPassword']) ? hash("SHA256",passGenerator()) : hash("SHA256",$_POST['txtPassword']);

						if($_SESSION['permisosMod']['w']){
							$request_user = $this->model->insertUsuario($strIdentificacion,
																				$strNombre, 
																				$strApellido, 
																				$intTelefono, 
																				$strEmail,
																				$strPassword, 
																				$intTipoId, 
																				$intStatus );
						}
					}else{
						$option = 2;
						$strPassword =  empty($_POST['txtPassword']) ? "" : hash("SHA256",$_POST['txtPassword']);
						if($_SESSION['permisosMod']['u']){
							$request_user = $this->model->updateUsuario($idUsuario,
																		$strIdentificacion, 
																		$strNombre,
																		$strApellido, 
																		$intTelefono, 
																		$strEmail,
																		$strPassword, 
																		$intTipoId, 
																		$intStatus);
						}

					}

					if($request_user > 0 )
					{
						if($option == 1){
							$arrResponse = array('status' => true, 'msg' => 'Datos guardados correctamente.');
						}else{
							$arrResponse = array('status' => true, 'msg' => 'Datos Actualizados correctamente.');
						}
					}else if($request_user == 'exist'){
						$arrResponse = array('status' => false, 'msg' => '??Atenci??n! el email o la identificaci??n ya existe, ingrese otro.');		
					}else{
						$arrResponse = array("status" => false, "msg" => 'No es posible almacenar los datos.');
					}
				}
				echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
			}
			die();
		}

		public function getUsuarios()
		{
			if($_SESSION['permisosMod']['r']){
				$arrData = $this->model->selectUsuarios();
				for ($i=0; $i < count($arrData); $i++) {
					$btnView = '';
					$btnEdit = '';
					$btnDelete = '';

					if($arrData[$i]['status'] == 1)
					{
						$arrData[$i]['status'] = '<span class="badge badge-success">Activo</span>';
					}else{
						$arrData[$i]['status'] = '<span class="badge badge-danger">Inactivo</span>';
					}

					if($_SESSION['permisosMod']['r']){
						$btnView = '<button class="btn btn-info btn-sm btnViewUsuario" onClick="fntViewUsuario('.$arrData[$i]['idpersona'].')" title="Ver usuario"><i class="far fa-eye"></i></button>';
					}
					if($_SESSION['permisosMod']['u']){
						if(($_SESSION['idUser'] == 1 and $_SESSION['userData']['idrol'] == 1) ||
							($_SESSION['userData']['idrol'] == 1 and $arrData[$i]['idrol'] != 1) ){
							$btnEdit = '<button class="btn btn-primary  btn-sm btnEditUsuario" onClick="fntEditUsuario(this,'.$arrData[$i]['idpersona'].')" title="Editar usuario"><i class="fas fa-pencil-alt"></i></button>';
						}else{
							$btnEdit = '<button class="btn btn-secondary btn-sm" disabled ><i class="fas fa-pencil-alt"></i></button>';
						}
					}
					if($_SESSION['permisosMod']['d']){
						if(($_SESSION['idUser'] == 1 and $_SESSION['userData']['idrol'] == 1) ||
							($_SESSION['userData']['idrol'] == 1 and $arrData[$i]['idrol'] != 1) and
							($_SESSION['userData']['idpersona'] != $arrData[$i]['idpersona'] )
							 ){
							$btnDelete = '<button class="btn btn-danger btn-sm btnDelUsuario" onClick="fntDelUsuario('.$arrData[$i]['idpersona'].')" title="Eliminar usuario"><i class="far fa-trash-alt"></i></button>';
						}else{
							$btnDelete = '<button class="btn btn-secondary btn-sm" disabled ><i class="far fa-trash-alt"></i></button>';
						}
					}
					$arrData[$i]['options'] = '<div class="text-center">'.$btnView.' '.$btnEdit.' '.$btnDelete.'</div>';
				}
				echo json_encode($arrData,JSON_UNESCAPED_UNICODE);
			}
			die();
		}

		public function getUsuario($idpersona){
			if($_SESSION['permisosMod']['r']){
				$idusuario = intval($idpersona);
				if($idusuario > 0)
				{
					$arrData = $this->model->selectUsuario($idusuario);
					if(empty($arrData))
					{
						$arrResponse = array('status' => false, 'msg' => 'Datos no encontrados.');
					}else{
						$arrResponse = array('status' => true, 'data' => $arrData);
					}
					echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
				}
			}
			die();
		}

		public function delUsuario()
		{
			if($_POST){
				if($_SESSION['permisosMod']['d']){
					$intIdpersona = intval($_POST['idUsuario']);
					$requestDelete = $this->model->deleteUsuario($intIdpersona);
					if($requestDelete)
					{
						$arrResponse = array('status' => true, 'msg' => 'Se ha eliminado el usuario');
					}else{
						$arrResponse = array('status' => false, 'msg' => 'Error al eliminar el usuario.');
					}
					echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
				}
			}
			die();
		}
//                 <!------------------  [ Profile // Perfil ]     !-------------->
		public function perfil(){
			$data['page_tag'] = "Perfil";
			$data['page_title'] = "Perfil de usuario";
			$data['page_name'] = "perfil";
			$data['page_functions_js'] = "functions_usuarios.js";
			$this->views->getView($this,"perfil",$data);
		}

		public function putPerfil(){
			// dep($_POST);
			// $imgPortada = 'img_'.md5(date('d-m-Y H:i:s')).'.jpg';

			// echo $imgPortada;
			// exit();
			if($_POST){
				if(empty($_POST['txtIdentificacion']) || empty($_POST['txtNombre']) || empty($_POST['txtApellido']) || empty($_POST['txtTelefono']) )
				{
					$arrResponse = array("status" => false, "msg" => 'Datos incorrectos.');
				}else{
					$idUsuario = $_SESSION['idUser'];
					$strIdentificacion = strClean($_POST['txtIdentificacion']);
					$strNombre = strClean($_POST['txtNombre']);
					$strApellido = strClean($_POST['txtApellido']);
					$intTelefono = intval(strClean($_POST['txtTelefono']));
					$strPassword = "";

					$ruta = strtolower(clear_cadena($strNombre));
					$ruta = str_replace(" ","-",$ruta);

					$foto   	 	= $_FILES['foto'];
					$nombre_foto 	= $foto['name'];
					$type 		 	= $foto['type'];
					$url_temp    	= $foto['tmp_name'];
					$imgPortada 	= 'upload-user.svg';
					$request_categoria = "";

					if($nombre_foto != ''){
						$imgPortada = 'img_'.md5(date('d-m-Y H:i:s')).'.jpg';
					}
					if(!empty($_POST['txtPassword'])){
						$strPassword = hash("SHA256",$_POST['txtPassword']);
					}
					if($nombre_foto == ''){
						if($_POST['foto_actual'] != 'upload-user.svg' && $_POST['foto_remove'] == 0 ){
							$imgPortada = $_POST['foto_actual'];
						}
					$request_user = $this->model->updatePerfil($idUsuario,
																$strIdentificacion, 
																$strNombre,
																$strApellido, 
																$imgPortada, 
																$intTelefono, 
																$strPassword);
					if($request_user)
					{
						sessionUser($_SESSION['idUser']);
						$arrResponse = array('status' => true, 'msg' => 'Datos Actualizados correctamente.');
					}else{
						$arrResponse = array("status" => false, "msg" => 'No es posible actualizar los datos.');
					}
				}
				echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
			}
			die();
		}

		// public function putDFical(){
		// 	if($_POST){
		// 		if(empty($_POST['txtNit']) || empty($_POST['txtNombreFiscal']) || empty($_POST['txtDirFiscal']) )
		// 		{
		// 			$arrResponse = array("status" => false, "msg" => 'Datos incorrectos.');
		// 		}else{
		// 			$idUsuario = $_SESSION['idUser'];
		// 			$strNit = strClean($_POST['txtNit']);
		// 			$strNomFiscal = strClean($_POST['txtNombreFiscal']);
		// 			$strDirFiscal = strClean($_POST['txtDirFiscal']);
		// 			$request_datafiscal = $this->model->updateDataFiscal($idUsuario,
		// 																$strNit,
		// 																$strNomFiscal, 
		// 																$strDirFiscal);
		// 			if($request_datafiscal)
		// 			{
		// 				sessionUser($_SESSION['idUser']);
		// 				$arrResponse = array('status' => true, 'msg' => 'Datos Actualizados correctamente.');
		// 			}else{
		// 				$arrResponse = array("status" => false, "msg" => 'No es posible actualizar los datos.');
		// 			}
		// 		}
		// 		echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
		// 	}
		// 	die();
		// }
	// public function setFotoPerfil(){
	// 	if($_POST){
	// 		if(empty($_POST['txtIdentificacion']) || empty($_POST['txtNombre']) || empty($_POST['txtApellido'])){
	// 			$arrResponse = array("status" => false, "msg" => 'Datos incorrectos.');
	// 		}else{

	// 			$intIdFotoPerfil = intval($_POST['idFotoPerfil']);
	// 			$strFotoPerfil =  strClean($_POST['txtNombre']);
	// 			$strDescipcion = strClean($_POST['txtApellido']);

	// 			$ruta = strtolower(clear_cadena($strFotoPerfil));
	// 			$ruta = str_replace(" ","-",$ruta);

	// 			$foto   	 	= $_FILES['foto'];
	// 			$nombre_foto 	= $foto['name'];
	// 			$type 		 	= $foto['type'];
	// 			$url_temp    	= $foto['tmp_name'];
	// 			$imgPortada 	= 'portada_categoria.png';
	// 			$request_cateria = "";
	// 			if($nombre_foto != ''){
	// 				$imgPortada = 'img_'.md5(date('d-m-Y H:i:s')).'.jpg';
	// 			}

	// 			if($intIdFotoPerfil == 0)
	// 			{
	// 				//Crear
	// 				if($_SESSION['permisosMod']['w']){
	// 					$request_cateria = $this->model->inserCategoria($strFotoPerfil, $strDescipcion,$imgPortada,$ruta,$intStatus);
	// 					$option = 1;
	// 				}
	// 			}else{
	// 				//Actualizar
	// 				if($_SESSION['permisosMod']['u']){
	// 					if($nombre_foto == ''){
	// 						if($_POST['foto_actual'] != 'portada_categoria.png' && $_POST['foto_remove'] == 0 ){
	// 							$imgPortada = $_POST['foto_actual'];
	// 						}
	// 					}
	// 					$request_cateria = $this->model->updateCategoria($intIdFotoPerfil,$strFotoPerfil, $strDescipcion,$imgPortada,$ruta,$intStatus);
	// 					$option = 2;
	// 				}
	// 			}
	// 			if($request_cateria > 0 )
	// 			{
	// 				if($option == 1)
	// 				{
	// 					$arrResponse = array('status' => true, 'msg' => 'Datos guardados correctamente.');
	// 					if($nombre_foto != ''){ uploadImagePerfil($foto,$imgPortada); }
	// 				}else{
	// 					$arrResponse = array('status' => true, 'msg' => 'Datos Actualizados correctamente.');
	// 					if($nombre_foto != ''){ uploadImagePerfil($foto,$imgPortada); }

	// 					if(($nombre_foto == '' && $_POST['foto_remove'] == 1 && $_POST['foto_actual'] != 'portada_categoria.png')
	// 						|| ($nombre_foto != '' && $_POST['foto_actual'] != 'portada_categoria.png')){
	// 						deleteFile($_POST['foto_actual']);
	// 					}
	// 				}
	// 			}else if($request_cateria == 'exist'){
	// 				$arrResponse = array('status' => false, 'msg' => '??Atenci??n! La categor??a ya existe.');
	// 			}else{
	// 				$arrResponse = array("status" => false, "msg" => 'No es posible almacenar los datos.');
	// 			}
	// 		}
	// 		echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
	// 	}
	// 	die();
	// }
	// function uploadImagePerfil(array $data, string $name)
	// {
	// 	$url_temp = $data['tmp_name'];
	// 	$destino    = 'Views/Usuarios/UploadsProfile/' . $name;
	// 	$move = move_uploaded_file($url_temp, $destino);
	// 	return $move;
	}

	}
