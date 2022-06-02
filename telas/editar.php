<h1 class="title"> Editar Contato</h1>
				<form method="POST" action="">
					<div class="mb-3"><label class="form-label" >Nome</label>
                    <input  class="form-control" type="text" name="nome" value="<?php echo $dados[0]?>" required="">
					</div><div class="mb-3">
					<label class="form-label" >Email</label>
					<input  class="form-control"  type="email" name="email" value="<?php echo $dados[1]?>" required="">
					</div><div class="mb-3">
					<label class="form-label" >telefone</label>
                    <input  class="form-control"  type="numeric" name="telefone" value="<?php echo $dados[2]?>" size="11" mminlength="11" maxlength="11"  required="">
					</div><div class="mb-3">
					<button class ="btn btn-dark" name="editar" value ="<?php echo $id?>">Editar</button>
				</form>
		