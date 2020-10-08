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
    <form method="POST" enctype="multipart/form-data"  action="/trabalhos?id=<?php echo $id?>"> 
    <input type="hidden" name="_method" value="PUT">
    <div class="form" >
       <div class="inputfield">
          <label>Titulo do Documento</label>
          <input class="input" type="text" name="titulo" value="<?php echo $trabalho->getTitulo() ?>" required><br>
       </div>  
        <div class="inputfield">
          <label>Autor do Documento</label>
          <input class="input" type="text" name="autor" value="<?php echo $trabalho->getAutor() ?>" required><br>
       </div>  
       <div class="inputfield">
        <label>Data de Criação</label>
        <input class="input" type="date" name="ano" value="<?php echo date('Y-m-d',strtotime($trabalho->getAno()))?>" required><br>
      </div> 
 
      <div class="inputfield">
      <label>Area de Estudo</label> 
      <div class="custom_select">
        <select  name="area" >
              <option <?=($trabalho->getArea() == 'Ciências Exatas e Terra')?'selected':''?>>Ciências Exatas e Terra</option>
              <option <?=($trabalho->getArea() == 'Ciências Biológicas')?'selected':''?>>Ciências Biológicas</option>
              <option <?=($trabalho->getArea() == 'Engenharias')?'selected':''?>>Engenharias</option>
              <option <?=($trabalho->getArea() == 'Ciências da Saúde')?'selected':''?>>Ciências da Saúde</option>
              <option <?=($trabalho->getArea() == 'Ciências Agrárias')?'selected':''?>>Ciências Agrárias</option>
              <option <?=($trabalho->getArea() == 'Ciências Sociais')?'selected':''?>> Ciências Sociais </option>
              <option <?=($trabalho->getArea() == 'Ciências Humanas')?'selected':''?>>Ciências Humanas</option>
              <option <?=($trabalho->getArea() == 'Linguística,Letras e Artes')?'selected':''?>>Linguística,Letras e Artes</option>
              <option <?=($trabalho->getArea() == 'Outra')?'selected':''?>>Outra</option>
          </select>
        </div>
     </div> 
     <div class="inputfield">
        <label>Tipo de Documento</label>
        <div class="custom_select" >
          <select  name="tipoDocumento">
          <option <?=($trabalho->getTipoDocumento() == 'Redacao')?'selected':''?>>Redacao</option>
          <option <?=($trabalho->getTipoDocumento() == 'Dissertacao de Mestrado')?'selected':''?>>Dissertacao de Mestrado</option>
          <option <?=($trabalho->getTipoDocumento() == 'TCC')?'selected':''?>>TCC</option>
          <option <?=($trabalho->getTipoDocumento() == 'Artigo')?'selected':''?>>Artigo</option>
          <option <?=($trabalho->getTipoDocumento() == 'Resumo')?'selected':''?>> Resumo</option>
          <option <?=($trabalho->getTipoDocumento() == 'Relatorio')?'selected':''?>>Relatorio</option>
          <option <?=($trabalho->getTipoDocumento() == 'Plano de Negocio')?'selected':''?>>Plano de Negocio</option>
          <option <?=($trabalho->getTipoDocumento() == 'Projeo de Pesquisa')?'selected':''?>>Projeo de Pesquisa</option>
          <option <?=($trabalho->getTipoDocumento() == 'Estudo de Caso')?'selected':''?>>Estudo de Caso</option>
          <option <?=($trabalho->getTipoDocumento() == 'Criticas')?'selected':''?>>Criticas</option>
          <option <?=($trabalho->getTipoDocumento() == 'Monografia')?'selected':''?>> Monografia</option>
          <option <?=($trabalho->getTipoDocumento() == 'Tese')?'selected':''?>>Tese</option>
          <option <?=($trabalho->getTipoDocumento() == 'Resenha')?'selected':''?>>Resenha</option>
          <option <?=($trabalho->getTipoDocumento() == 'Fichamento')?'selected':''?>>Fichamento</option>
        </select>
      </div>
   </div> 
   <div class="inputfield">
          <label>Descricao</label>
          <textarea type="text" name="texto" class="textarea" ><?php echo $trabalho->getDescricao();?> </textarea>
       </div> 
      <div class="inputfield">
        <input type="submit" value="Atualizar" class="btn">
      </div>
      <div class="inputfield">
        <a href="/trabalhos" class="btn"> Voltar </a> 
      </div>
    </div>
    </form>
</div>	
<script src="//<?php echo $_SERVER["HTTP_HOST"]; ?>/js/script.js"></script>
</body>
</html>