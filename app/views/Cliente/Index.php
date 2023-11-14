<section class="caixa">
				<div class="thead"></div>
				<div class="base-lista">
					<div>
						<div class="text-end d-flex">
							<!-- <a href="cadastro.html" class="btn btn-verde d-inline-block mb-2 mx-1"><i class="fas fa fa-plus-circle" aria-hidden="true"></i> Cadastrar cliente</a> -->
							<!-- <a href="" class="btn btn-azul d-inline-block mb-2 filtro"><i class="fas fa fa-filter" aria-hidden="true"></i> Filtrar</a>
						</div>
					</div>
					<div class="lst mostraFiltro">
						<form action="" method="">
						<div class="rows">
								<div class="col-4">
									<select name="txt_id_empresa">
										<option selected>Selecione o valor...</option>
										<option value="1">Data</option>
										<option value="2">Valor</option>
										<option value="3">Descricao</option>
										
									</select>
								</div>
								<div class="col-6">
									<input type="text"  name="" placeholder="Valor da pesquisar..." >
								</div>
								<div class="col-2">
									<input type="submit" class="btn" value="pesquisar">
								</div>
						</div> 
						</form>
					</div>-->
						
				
				<div class="tabela-responsiva">
					<table width="100%" border="0" cellspacing="0" cellpadding="0" id="dataTable">
						<thead> 
                        <tr>
                                   
                                   <!-- <th align="center" width="16"><Comprovante</th> -->
                                   <th align="left" width="70" class="text-left">Nome_Cliente</th>
                                  
                                   <th align="center" width="370">Pendencia</th>
                                   <th align="center">Prazo</th>
								   <th align="center">Caminho</th>
								   <th align="center">Acao</th>
                                 
								   <th align="center">Cobrado por</th>
								   <th align="center">Encerrado por</th>
                                  
                                  
                               </tr>
						</thead> 
						<tbody>
                        <?php foreach($lista as $cliente){ ?>                        
                             <tr>
								
								<!-- <td align="center"><img src="upload/PANELA_5.jpg" class="img-fluido"></td> -->
								<td align="left"><?php echo $cliente->Nome_Cliente?></td>
								<td align="center"><?php echo $cliente->Pendencia?></td>
								<td align="center"><?php echo $cliente->Prazo?></td>
								<td align="center"><?php echo $cliente->Caminho?></td>
								<td align="center"><?php echo $cliente->Acao?></td>
								
								<!-- class="d-inline-block btn btn-outline-roxo btn-pequeno img-fluido">
								<i class="fas fa-edit"></i> -->
							  
							<?php } ?>	       		
						</tbody>
					</table>
					</div>
										
			
					
					</div>
				</section>