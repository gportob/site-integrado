<style>

    .row {
        margin-right: 0px;
    }


</style>

<?php include('includes/capa-periodicos.php'); ?>
<?php

$text_f = "<div class='container'>Revista de Direito GV
https://direitosp.fgv.br/revista-direito-gv

Revista Digital de Direito Administrativo – RDDA - USP
https://www.revistas.usp.br/rdda/search 

Revista Eletrônica Direito e Justiça
https://revistaseletronicas.pucrs.br/ojs/index.php/fadir 

Revista brasileira de política internacional 
https://www.scielo.br/j/rbpi/ 

Revista da Faculdade de Direito da UFG
https://revistas.ufg.br/revfd 

Latin American Human Rights Studies
https://revistas.ufg.br/lahrs 

Revista da Faculdade de Direito - USP
https://www.revistas.usp.br/rfdusp 

Revista Direito Público - IDP
https://www.portaldeperiodicos.idp.edu.br/direitopublico 

Revista brasileira de segurança Pública
https://revista.forumseguranca.org.br/index.php/rbsp/issue/archive 

SUR – Revista Internacional de Direitos Humanos 
https://sur.conectas.org/en/
</div>";

$texts = explode("\n\n", $text_f);
foreach ($texts as $text) {
    $parts = explode("\n", $text);
    echo "<p><a href=\"{$parts[1]}\" target=\"_blank\" rel=\"noopener noreferrer\">{$parts[0]}</a></p><hr>";
}
