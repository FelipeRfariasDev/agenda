<!doctype html>
<html language="pt-br">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta charset="utf-8">
	<thead>
		<title>Site</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="stylesheet" href="<?php echo URL_BASE ?>assets/css/style3.css">
		<!--font icones-->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
		
		
	</thead>
	
	
		<body>
	
		<div class="conteudo"> Agenda de Tarefas</div>
				
					<section class="caixa">		
					<?php $this->load($view, $viewData) ?>
					</section>
			
		</div>
		<div>
		<?php include_once 'rodape.php';?>	
		</div>
		
	</body>
</html>