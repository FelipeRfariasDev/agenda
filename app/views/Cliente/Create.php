<section class="caixa">
<form action="<?php echo URL_BASE. "cliente/salvar"?>" method="POST">
<?php
                            $this-> verMsg();
                            $this-> verErro();
                            ?>
							
			
							
							
					<div class="col-4 mb-2">
                            <label class="text-label">Acao</label>
                            <select class="form-campo" name="Acao">
							<option value="" >Selecione</option> 
								<option value="Cobrar" >Cobrar</option>
								<option value="Executar" >Executar</option>  
								</select>
                    </div>        
								
									
									<div class="col-1">				
										<label>Nome_Cliente</label>
										<input name="Nome_Cliente" value="<?php echo isset($cliente->Nome_Cliente)? $cliente->Nome_Cliente: null?>" type="text" placeholder="Insira o Nome_Cliente" class="form-campo">
									</div>
								</div>
								<div class="col-2">
								
										<label>Pendencia</label>
										<input name="Pendencia" value="<?php echo isset($cliente->Pendencia)? $cliente->Pendencia: null?>" type="text" placeholder="Descreva a Pendência" class="form-campo">
									</div>
									<div class="col-3">
										<label>Prazo</label>
										<input name="Prazo" value="<?php echo isset($cliente->Prazo)? $cliente->Prazo: null?>" type="text" placeholder="Insira um Prazo" class="form-campo">
									</div>
									<div class="col-5">
										<label>Caminho</label>
										<input name="Caminho" value="<?php echo isset($cliente->Caminho)? $cliente->Caminho: null?>" type="text" placeholder="Insira o caminho do documento" class="form-campo">
									</div>
								</div>
									</select>						
								<input type="hidden" name="id_cliente" value="" />
								<input type="submit" value="Cadastrar" class="btn">
						</form>
					</div>
				</div>
				</section>