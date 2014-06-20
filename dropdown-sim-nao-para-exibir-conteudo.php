<?php
/**
/** dropdown com o sim/não para exibir o conteúdo.


* @Author Quebrando a Cabeça
* @Author URL http://quebrandoacabeca.com
* @Post URL http://quebrandoacabeca.com/dropdown-sim-nao-para-exibir-conteudo
*/?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>dropdown com sim/não para exibir o conteúdo</title>
<!-- CHAMANDO O JQUERY -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>


<style type="text/css">

/* CSS DO CONTEÚDO A SER EXIBIDO/OCULTADO */
#sim_nao {
    display:none; /* POR PADRÃO COMEÇA OCULTO */
    background-color:#efefef;
    width:100%;
	float:left;
    margin-top:15px;    
}

</style>
</head>

<body>
<h1>Dropdown com sim/não para exibir o conteúdo</h1>
<p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
<h4>Exemplo com input</h4>
<label>Você tem ensino superior?</label><br />
	<select name="sim_nao" class="mf_select" id="exibir_esconder">
    <option value="default" name="sim_nao" checked>Selecione uma opcão</option>
	<option value="0" name="sim_nao" >Não</option>
	<option value="1" name="sim_nao" >Sim</option>
    </select>
    
    <!-- CONTEÚDO A SER EXIBIDO (POR DEFAULT CARREGA OCULTO) -->
    <p id="sim_nao">Qual curso? <input type="text" name="idade" id="idade" /></p>
    
<!-- SCRIPT SEMPRE DEVE FICAR ABAIXO DO SELECT -->    
<script type="text/javascript">     
var select = document.getElementById('exibir_esconder'), // #ID DO SELECT
onChange = function(event) {
var shown = this.options[this.selectedIndex].value == 1;
document.getElementById('sim_nao').style.display = shown ? 'block' : 'none'; //#ID DO ELEMENTO A SER EXIBIDO/OCULTADO
};

if (select.addEventListener) {
select.addEventListener('change', onChange, false);
} else {
select.attachEvent('onchange', function() {
onChange.apply(select, arguments);
});
}
</script>

<!--<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-48763518-1', 'quebrandoacabeca.com');
  ga('send', 'pageview');

</script>-->
</body>
</html>
