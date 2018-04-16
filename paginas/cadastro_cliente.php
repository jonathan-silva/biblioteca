<link rel="stylesheet" href="assests/template_cadcliente.css">
<div class="container">

    <div class="" id="form-cliente">
      <b class="cliente_livro" id="titulo-panel"> Cadastro Cliente </b>

      <div class="col-md-6">
        <br/>
          <form class="col-xs-9">
            <label for="ex3" id="titulo01"> NOME COMPLETO :</label>
            <input type="text" class="form-control" placeholder="Digite aqui" id="ex3">

            <label for="ex4" id="titulo02"> CPF : </label>
            <input type="text" class="form-control" placeholder=" CPF " id="ex4">

            <label for="ex5" id="titulo03"> ENDEREÇO : </label>
            <input type="text" class="form-control" placeholder=" Rua, Quadra, Lote, Bairro " id="ex5">

            <label for="ex6" id="titulo04"> CIDADE :</label>
            <select class="form-control" id="ex6">
              <option></option>
              <option> Luziânia </option>
              <option> Jardim Ingá </option>
              <option> Valparaíso de Goiâs </option>
              <option> Gama</option>
            </select>
          </form>
      </div>

      <div class="col-md-6">

        <form class="col-xs-9">
          <br/>
          <label for="ex7" id="titulo05"> E-MAIL :</label>
          <input type="email" class="form-control" placeholder=" Digite seu email " id="ex7">

          <label for="ex9" id="titulo06"> DATA NASCIMENTO : </label>
          <input type="date" class="form-control" id="ex9">

          <label for="ex11"> TELEFONE :</label>
          <input type="text" class="form-control" placeholder=" (--) 0 0000-0000 " id="ex11">

        </form>
      </div>
      <button type="submit" class="btn btn-lg btn-success " style="margin-top: 25%; margin-left:37%;"onclick=location.href="#"> SALVAR CADASTRO </button>
  </div>
</div>
