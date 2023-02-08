<style>

    .row {
        margin-right: 0px;
    }

</style>

<?php include('includes/capa-periodicos.php'); ?>

<?php

$text_f = "<div class='container'>
Revista brasileira de cineantropometria e desempenho humano
https://periodicos.ufsc.br/index.php/rbcdh/index

REVISTA BRASILEIRA DE PSICOLOGIA DO ESPORTE
https://portalrevistas.ucb.br/index.php/RBPE

Revista motricidade
https://revistas.rcaap.pt/motricidade

REVISTA BRASILEIRA DE EDUCAÇÃO FÍSICA E ESPORTE
https://www.revistas.usp.br/rbefe

Revista Brasileira de Prescrição e Fisiologia do Exercício
http://www.rbpfex.com.br/index.php/rbpfex/issue/view/90

Revista Pensar a Prática
https://revistas.ufg.br/fef/issue/view/2094

Revista Brasileira de Nutrição Esportiva
http://www.rbne.com.br/index.php/rbne/issue/view/96

Revista Interdisciplinar de Promoção da Saúde
https://online.unisc.br/seer/index.php/ripsunisc/index

Fisioterapia em Movimento
https://periodicos.pucpr.br/fisio/index

Revista Brasileira de Ciência e Movimento
https://portalrevistas.ucb.br/index.php/RBCM/index

Revista Movimento
https://seer.ufrgs.br/index.php/Movimento/issue/view/648

Conexões: Educação Física, Esporte e SaúdE
https://periodicos.sbu.unicamp.br/ojs/index.php/conexoes/issue/view/1545

Revista Mackenzie de Educação Física e Esporte
http://editorarevistas.mackenzie.br/index.php/remef/index

REVISTA BRASILEIRA DE ATIVIDADE FÍSICA E SAÚDE
https://rbafs.org.br/RBAFS/about

– EDUCAÇÃO FÍSICA EM REVISTA
https://portalrevistas.ucb.br/index.php/efr

– REVISTA DA ASSOCIAÇÃO BRASILEIRA DE NUTRIÇÃO
https://www.rasbran.com.br/rasbran

REVISTA BRASILEIRA EM PROMOÇÃO DA SAÚDE
https://periodicos.unifor.br/rbp

Revista Motrivivência 
http://www.periodicos.ufsc.br/index.php/motrivivencia/index

Revista Licere 
https://seer.ufmg.br/index.php/licere

Caderno de Educação Física: ESTUDOS E REFLEXÕES 
http://e-revista.unioeste.br/index.php/cadernoedfisica/index

Caderno Brasileiro de Ensino de Física
https://periodicos.ufsc.br/index.php/fisica

Cadernos de Educação Física 
http://e-revista.unioeste.br/index.php/cadernoedfisica/index

Cinergis
http://online.unisc.br/seer/index.php/cinergis/index

Revista Brasileira Ciência do Envelhecimento Humano
http://www.upf.br/seer/index.php/rbceh

Arquivos em Movimento
https://revistas.ufrj.br/index.php/am

Revista Paulista de Educação Física
http://www.usp.br/eef/rpef/

CORPOCONSCIÊNCIA
https://periodicoscientificos.ufmt.br/ojs/index.php/corpoconsciencia

REPERTÓRIO: TEATRO & DANÇA
https://periodicos.ufba.br/index.php/revteatro

REVISTA BRASILEIRA DE QUALIDADE DE VIDA
https://periodicos.utfpr.edu.br/rbqv

REVISTA BRASILEIRA DE OBESIDADE, NUTRIÇÃO E EMAGRECIMENTO
http://www.rbone.com.br/index.php/rbone

REVISTA BRASILEIRA DE FUTSAL E FUTEBOL
http://www.rbff.com.br/index.php/rbff
</div>";


$texts = explode("\n\n", $text_f);
foreach ($texts as $text) {
    $parts = explode("\n", $text);
    echo "<p><a href=\"{$parts[1]}\" target=\"_blank\" rel=\"noopener noreferrer\">{$parts[0]}</a></p><hr>";
}
