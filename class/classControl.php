<?php
	class control{
		protected $mysqli;
		
		public function __construct(){
				$this->mysqli = new mysqli('localhost','root','usbw','projeto');	
		}
		
		function cadastro($nome_produto,$descricao,$preco,$data){
			if($nome_produto != null){
				$insert = "INSERT INTO projeto (NOME, DESCRICAO, PRECO, DATA_CADASTRO) 
				VALUES ('$nome_produto', '$descricao', '$preco', '$data')";
				
				if($this->mysqli->query($insert)){
					?>
						<script language="javascript" type="text/javascript">
							alert('Produto cadastrado com Sucesso');
						</script>
					<?php
				}else{
					?>
						<script language="javascript" type="text/javascript">
							alert('Ocorreu algum erro');
						</script>
					<?php
				}
			}	
		}
		
		function listarAlimento(){
		
			$select = "SELECT * FROM projeto ";
			$query = $this->mysqli->query($select);
			
			?>
					<table border="1" width="1070px" height="100px">
						<tr bgcolor="lithblue">
							<th>ID</th>
							<th>Nome produto</th>
							<th>Preço</th>
							<th>Descrição</th>
							<th>Data do cadastro</th>
							
						</tr>
					<?php while($resultado = $query->fetch_array()){?>
						<tr>
							<td><?php echo $resultado["ID"]; ?></td>
							<td><?php echo $resultado["NOME"]; ?></td>
							<td><?php echo $resultado["PRECO"]; ?></td>
							<td><?php echo $resultado["DESCRICAO"]; ?></td>
							<td><?php echo $resultado["DATA_CADASTRO"]; ?></td>
						</tr>	
						<?php } ?>
					</table>
					<?php
						
		
		}
	}
?>