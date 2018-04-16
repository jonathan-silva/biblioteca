<link rel="stylesheet" href="assests/template_cadlivro.css">
<div class="container">

    <div class="" id="form-emprestimo">
      <b class="emprestimo_livro" id="titulo-panel"> Cadastro Livro </b>

      <div class="col-md-6">
        <br/>
        <div class="col-xs-12">
            <label for="ex3" id="titulo01"> TÍTULO DO LIVRO :</label>
            <input type="text" class="form-control" placeholder="Nome do Livro" id="ex3">

            <label for="ex4" id="titulo02"> AUTOR : </label>
            <input type="text" class="form-control" placeholder=" PLU " id="ex4">

            <label for="ex7" id="titulo03"> EDITORA :</label>
            <input type="text" class="form-control" placeholder=" EDITORA " id="ex7">

            <label for="ex2" id="titulo04"> NÚMEROS DE PÁGINAS :</label>
            <input type="text" class="form-control" id="ex2">

            <label for="ex1" id="titulo05"> GÊNERO :</label>
            <select class="form-control" id="ex1">
              <option></option>
              <option>Biografias e Memórias </option>
              <option>Contos e Crônicas</option>
              <option>Ensaios</option>
              <option>Ficção Científica e Fantasia</option>
              <option>Horror / Suspense</option>
              <option>Poesia</option>
              <option>Romance</option>
              <option>Outros</option>
            </select>

            <label for="ex7"> QUANTIDADE DE LIVROS </label>
  		      <input type="number" class="form-control" placeholder=" ESTOQUE " id="ex7">
          </div>
      </div>
<div class="col-md-6">
<form class="md-form">
    <div class="file-field">
        <div class="btn btn-default btn-sm float-left" id="ex8">
            <span>CAPA DO LIVRO</span>
            <input type="file">
        </div>
    </div>
</form>
    </div>
    <button type="submit" class="btn btn-lg btn-success " style="margin-top: 10%; margin-left:37%;" onclick=location.href="#"> SALVAR CADASTRO </button>
  </div>
</div>
