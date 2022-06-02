<h1 class="title">Listando Contatos</h1>
<form id="delete" method='post'>
<table class="table table-hover table-bordered table-striped table-dark">
  <thead class="thead-light">
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
      <th scope="col">Telefone</th>
      <th scope="col">opção</th>
    </tr>
  </thead>
  <tbody>
<?php 
foreach($contatos as $id => $contato){
    $cada = explode(';',$contato);
    echo "<tr>";
    echo "<td>$cada[0]</td>";
    echo "<td>$cada[1]</td>";
    echo "<td>$cada[2]</td>";
    echo "<td>
    <button form='delete' type='submit' class='btn btn-warning' name='edit' value='{$id}'>Editar</button>
    <button form='delete' type='submit' class='btn btn-danger' name='delete' value='{$id}'>Excluir</button>    
    </td>";
    echo "</tr>";
}
?>
  </tbody>
</form>