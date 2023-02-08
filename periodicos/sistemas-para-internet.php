<style>

    .row {
        margin-right: 0px;
    }

</style>
<?php include('includes/capa-periodicos.php'); ?>
<?php

$text_f = "<div class='container'>Informática na Educação: teoria & prática
https://seer.ufrgs.br/index.php/InfEducTeoriaPratica/index

Revista Brasileira de Computação aplicada
http://seer.upf.br/index.php/rbca/index

Comunicações em Informática 
https://periodicos.ufpb.br/index.php/cei/index

ACM TRANSACTIONS ON GRAPHICS:ACM
https://dl.acm.org/loi/tog

Revista de Ciência da Computação
https://revistas.unifenas.br/index.php/RE3C/issue/view/39

Tecnologias em projeção
http://revista.faculdadeprojecao.edu.br/index.php/projecao4

Isys - revista brasileira de sistemas de informação
http://www.seer.unirio.br/index.php/isys

Revista Ciência e Tecnologia 
http://www.revista.unisal.br/sj/index.php/123

Revista Gestão do Conhecimento e Tecnologia da Informação
https://portalrevistas.ucb.br/index.php/RGCTI/login?source=%2Findex.php%2FRGCTI%2Fuser

Revista Computação Brasil
https://www.sbc.org.br/publicacoes-2/298-computacao-brasil

Revista eletrônica de sistemas de informação e de gestão tecnológica
https://periodicos.unifacef.com.br/index.php/resiget/index

Revista brasileira de ensino de ciência e tecnologia
https://periodicos.utfpr.edu.br/rbect

Simpósio Brasileiro de Informática na Educação – SBIE
http://www.br-ie.org/pub/index.php/sbie

RENOTE –  Revista Novas Tecnologias na Educação
https://seer.ufrgs.br/renote/index

RBIE – Revista Brasileira de Informática na Educação
http://www.br-ie.org/pub/index.php/rbie

CADERNOS DE INFORMÁTICA
https://seer.ufrgs.br/cadernosdeinformatica

CADERNOS DO IME – SÉRIE INFORMÁTICA
https://www.epublicacoes.uerj.br/index.php/cadinf/login?source=%2Findex.php%2Fcadinf%2Fuser

REVISTA DE SISTEMAS DE INFORMAÇÃO DA FACULDADE SALESIANA MARIA AUXILIADORA
http://www.fsma.edu.br/si/sistemas.html

Semina: ciências exatas e tecnológicas
http://www.uel.br/revistas/uel/index.php/semexatas

AUTOMATICA: ELMSFORD, NY, US: PERGAMON PRESS (OXFORD)
https://www.sciencedirect.com/journal/automatica

ENGENHARIA DE SOFTWARE MAGAZINE: DEVMEDIA
https://www.devmedia.com.br/revista-engenharia-de-software-magazine#revistasgold

Revista de Informática Teórica e Aplicada – RITA
https://seer.ufrgs.br/index.php/rita/index

Journal of the Brazilian Computer Society
https://www.scielo.br/j/jbcos/
</div>";

$texts = explode("\r\n\r\n", $text_f);
foreach ($texts as $text) {
    $parts = explode("\r\n", $text);
    echo "<p><a href=\"{$parts[1]}\" target=\"_blank\" rel=\"noopener noreferrer\">{$parts[0]}</a></p><hr>";
}
