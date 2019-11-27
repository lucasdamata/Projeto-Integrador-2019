<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
	</head>
	</body>
		<?php
			session_start();
			include_once("conexao1.php");

			$utf8 = header("Content-Type:text/html; charset=utd-8");
			$conn->set_charset("utf8");

			//Arquivos permitidos
			$arquivos_permitidos = ['jpg', 'jpeg', 'png'];

			//Capturar dados do formulário
			$arquivos = $_FILES['arquivos'];

			//Capturar nomes dos arquivos
			$nomes = $arquivos['name'];

				for($i = 0; i < count($nomes); $i++):
					$extensao = explode('.', $nomes[$i]);
					$extensao = end($extensao);
					$nomes[$i] = rand() . '-' . $nomes[$i];
					
					//Verificando extensão dos arquivos
					if(in_array($extensao, $arquivos_permitidos)):
						$query = $conn->query("INSERT INTO arquivo values(default, '$nomes[$i]')");
				
							if(mysqli_affected_rows($conn)>0):
								$mover = move_uploaded_file($_FILES['arquivos']['tmp_name'][$i], 'img_projetos/carousel/' . $nomes[$i]);
								$_SESSION['sucesso'] = 'Arquivo(s) enviado(s) com sucesso!';
								$destino = header ("Location: inicial.php");
							endif;
							
						else:
							$_SESSION['erro'] = 'Existem arquivos que não foram enviados por não obedecerem as normas de upload de sistema!';
							$destino = header("Location: inicial.php");
				
					endif;
				endfor;

			?>
		
	</body>
</html>

