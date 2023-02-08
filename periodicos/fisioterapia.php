<style>

    .row {
        margin-right: 0px;
    }


</style>

<?php include('includes/capa-periodicos.php'); ?>
<?php

$text_f = "<div class='container'>
Revista Brasileira de Fisioterapia
https://www.scielo.br/j/rbfis/

Fisioterapia em Movimento 
https://www.scielo.br/j/fm/grid

Revista de Pesquisa em Fisioterapia 
https://www5.bahiana.edu.br/index.php/fisioterapia/issue/archive

Fisioterapia e pesquisa 
https://www.revistas.usp.br/fpusp

Fisioterapia e Saúde Funcional- 
http://periodicos.ufc.br/fisioterapiaesaudefuncional/issue/archive

Revista Brasileira de Ciência e Movimento
http://portalrevistas.ucb.br/index.php/RBCM

Novafisio
https://www.novafisio.com.br/

Revista Fisio&Terapia
https://www.novafisio.com.br/

Revista fisioterapia & reabilitação 
http://www.portaldeperiodicos.unisul.br/index.php/rfr

Revista de atenção à saúde 
http://seer.uscs.edu.br/index.php/revista_ciencias_saude/article/view/2339

Fisioterapia Brasil
https://www.portalatlanticaeditora.com.br/index.php/fisioterapiabrasil/index

Acta Fisiátrica
https://www.revistas.usp.br/actafisiatrica

Anais Brasileiros de Dermatologia
http://www.anaisdedermatologia.org.br/

Arquivos Brasileiros de Cardiologia
https://www.scielo.br/j/abc/

Ação ergonômica 
https://www.revistaacaoergonomica.org/revista/index.php/ojs/issue/view/32

Revista Bioética  
https://revistabioetica.cfm.org.br/index.php/revista_bioetica/issue/archive

Revista da Associação Brasileira de Atividade Motora Adaptada 
https://revistas.marilia.unesp.br/index.php/sobama/issue/archive

Cadernos de Saúde Pública
https://www.scielo.br/j/csp/grid

Ciência & Saúde Coletiva
https://www.scielo.br/j/csc/grid

Revista Movimenta
https://www.revista.ueg.br/index.php/movimenta

Estudos Interdisciplinares sobre o Envelhecimento
https://seer.ufrgs.br/index.php/RevEnvelhecer

Revista Brasileira de Ciências do Envelhecimento Humano
http://seer.upf.br/index.php/rbceh

Revista Brasileira de Epidemiologia
https://www.scielo.br/j/rbepid/

Revista Brasileira de Medicina do Esporte
https://www.scielo.br/j/rbme/

Saúde em Debate
https://www.scielo.br/j/sdeb/grid

Revista Brasileira de Ortopedia
https://www.scielo.br/j/rbort/i/2021.v56n3/

MOVIMENTO
https://seer.ufrgs.br/index.php/Movimento/issue/archive

REVISTA BRASILEIRA DE CIÊNCIA E MOVIMENTO
http://portalrevistas.ucb.br/index.php/RBCM/issue/archive

Arquivos Brasileiros de Endocrinologia e Metabologia
https://www.scielo.br/j/abem/
</div>";

$texts = explode("\r\n\r\n", $text_f);
foreach ($texts as $text) {
    $parts = explode("\r\n", $text);
    echo "<p><a href=\"{$parts[1]}\" target=\"_blank\" rel=\"noopener noreferrer\">{$parts[0]}</a></p><hr>";
}
