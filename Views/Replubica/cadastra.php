<div class="container">
  <h2>Registra Replubica</h2>
  <form action="?controller=replubica&&action=save" method="POST">
    <div class="form-group">
      <label for="text">Nome:</label>
      <input required type="text" class="form-control" id="nome" placeholder="Informe seu Nome" name="nome">
    </div>

    <div class="form-group">
      <label for="text">Endereço:</label>
      <input required type="text" name="endereco" id="endereco" class="form-control" placeholder="Informe seu Endereço">
    </div>
    
    <button type="submit" class="btn btn-primary">Salvar</button>
  </form>
</div>