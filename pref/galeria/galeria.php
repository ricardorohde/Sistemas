<? @include_once("../includes/cabecalho/_meta-css-js.php"); ?>

<!-- Extensao do Menu acessibildiade (tela inteira) -->
<div id="extensao_acessibilidade"></div>

<!-- *********************** Início CONTAINER *********************** -->
<div id="container">

    
    <!-- *********************** CABEÇALHO *********************** -->
    <div id="logo">
    	<? @include_once("../includes/cabecalho/_logo.php"); ?>
    </div>
    <!-- Fim LOGO -->
        
    <!-- Início Barra de MENU ACESSIBILIDADE (centro horizontal) -->
    <div id="menu_acessibilidade">
    	<? @include_once("../includes/cabecalho/_acessibilidade.php"); ?>
    </div>
    <!-- *********************** CABEÇALHO *********************** -->
    <!-- mensagem caso o javaScript esteja desabilitado-->
    <? @include_once("../paginas_erro/nao_javascript.php"); ?> 
    

<!-- INÍCIO DO SUB CONTAINER -->  
<div id="sub_container">     
    <!-- *********************** ESQUERDA *********************** -->
    <div id="menu_navegacao">
    	<? @include_once("../includes/esquerda/_esquerda.php"); ?>      
    </div>
    <!-- *********************** Fim ESQUERDA *********************** -->
    
    
    
    <!-- ***********************  CENTRO *********************** -->
    <div id="conteudo">    
        <!-- Início Menu CEG -->
        <div id="conteudo_ceg">
        	<? @include_once("../includes/centro/_conteudo_ceg.php"); ?> 
        </div>
        <!-- Fim Menu CEG -->  
        
        <!-- Muda conteúdo central -->
        	<? @include_once("visualiza-galeria.php"); ?> 
        <!-- Fim Muda conteúdo central -->
        
        <!-- Início Menu do Conteúdo (inferior) -->
        <div id="conteudo_menu">
        	<? @include_once("../includes/centro/_menu_inferior.php"); ?> 
        </div>
        <!-- Fim Menu do Conteúdo (inferior) -->      
    </div>
    <!-- *********************** Fim CENTRO *********************** -->
    
    
    
    <!-- ***********************  DIREITA *********************** -->
    <div id="menu_interativo">    
    	<? @include_once("../includes/direita/_direita.php"); ?>     
    </div>
    <!-- Fim MENU INTERATIVO -->
</div>
<!-- FIM SUB CONTAINER -->  

    
    <!-- COPYRIGHT (rodapé) -->
    <div id="copyright">
    	<? @include_once("../includes/rodape/_rodape.php"); ?>
    </div>
    <!--  Fim do DIREITA -->



</div>
<!-- *********************** Fim da CONTAINER *********************** -->


<!-- Extensao do RODAPÉ (tela inteira) -->
<div id="extensao_copyright"></div>

</body>
</html>