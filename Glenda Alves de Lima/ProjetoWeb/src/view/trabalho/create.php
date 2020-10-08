<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="//<?php echo $_SERVER["HTTP_HOST"]; ?>/css/styletrabalhos.css">
<link rel="icon" href="//<?php echo $_SERVER["HTTP_HOST"]; ?>/img/IconeLogo.png">
	<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,300,700' rel='stylesheet' type='text/css'>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="jquery-3.1.0.min.js"></script>
<body>
<div class="wrapper">
    <form method="POST" enctype="multipart/form-data"  action="/trabalhos"> 
    <div class="form" >
       <div class="inputfield">
          <label>Titulo do Documento</label>
          <input class="input" type="text" name="titulo" required><br>
       </div>  
        <div class="inputfield">
          <label>Autor do Documento</label>
          <input class="input" type="text" name="autor" required><br>
       </div>  
       <div class="inputfield">
        <label>Ano de Criação</label>
        <input class="input" type="date" name="ano" required><br>
      </div> 

      <div class="inputfield">
      <label>Area de Estudo</label>
      <div class="custom_select">
        <select  name="area" >
              <option>Ciências Exatas e Terra</option>
              <option>Ciências Biológicas</option>
              <option>Engenharias</option>
              <option>Ciências da Saúde</option>
              <option>Ciências Agrárias</option>
              <option>Ciências Sociais </option>
              <option>Ciências Humanas</option>
              <option>Linguística,Letras e Artes</option>
              <option>Outra</option>
          </select>
        </div>
     </div> 
     <div class="inputfield">
        <label>Tipo de Documento</label>
        <div class="custom_select" >
            <select  name="tipoDocumento">
          <option>Redacao</option>
          <option>Dissertacao de Mestrado</option>
          <option>TCC</option>
          <option>Artigo</option>
          <option>Resumo</option>
          <option>Relatorio</option>
          <option>Plano de Negocio</option>
          <option>Projeo de Pesquisa</option>
          <option>Estudo de Caso</option>
          <option>Criticas</option>
          <option>Monografia</option>
          <option>Tese</option>
          <option>Resenha</option>
          <option>Fichamento</option>
          <option>Outra</option>
        </select>
      </div>
   </div> 
      <div class="inputfield">
          <label>Descricao</label>
          <textarea type="text"  name="texto" class="textarea" required></textarea>
       </div> 
       <div class="inputfield">
        <label>Documento</label>
        <input class="input" id="arquivo"  type="file" name="documento" required>
     </div>  
      <div class="inputfield">
        <input type="submit" value="Cadastrar" class="btn">
      </div>
      <div class="inputfield">
        <a href="/benvindo?benvindo" class="btn"> Voltar </a> 
      </div>
    </div>
    </form>
</div>	
<script src="//<?php echo $_SERVER["HTTP_HOST"]; ?>/js/script.js"></script>
</body>
</html>