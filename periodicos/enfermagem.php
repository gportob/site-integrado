<style>

    .row {
        margin-right: 0px;
    }

</style>

<?php include('includes/capa-periodicos.php'); ?>
<?php

$text_f = "<div class='container'>Revista Científica de Enfermagem – RECIEN
https://www.recien.com.br/index.php/Recien

Enfermagem em Foco – COFEN
http://revista.cofen.gov.br/index.php/enfermagem/issue/archive

Revista Latino-Americana de Enfermagem – RLAE
https://www.revistas.usp.br/rlae

Revista de Enfermagem Contemporânea
https://www5.bahiana.edu.br/index.php/enfermagem

Ciência Cuidado e Saúde
https://periodicos.uem.br/ojs/index.php/CiencCuidSaude

Texto & Contexto Enfermagem
https://periodicos.ufsc.br/index.php/textoecontexto

Escola Ana Nery- Revista de Enfermagem
http://revistaenfermagem.eean.edu.br/

-Acta Paulista de Enfermagem
https://www.scielo.br/j/ape/grid

Enfermagem Atual
https://revistaenfermagematual.com.br/index.php/revista

Revista de Enfermagem e Atenção à Saúde
https://seer.uftm.edu.br/revistaeletronica/index.php/enfer
Revista mineira de enfermagem
http://www.reme.org.br/numerosanteriores

Revista eletrônica de enfermagem –UFG
https://revistas.ufg.br/fen/index

Revista Cogitare Enfermagem
https://revistas.ufpr.br/cogitare

-Revista da Rede de Enfermagem do Nordeste
http://periodicos.ufc.br/rene

Reusfm –revista de enfermagem UFMS
https://periodicos.ufsm.br/index.php/reufsm

Revista enfermagem da UFPE
https://periodicos.ufpe.br/revistas/revistaenfermagem

Revista cuidado fundamental
http://www.seer.unirio.br/index.php/cuidadofundamental

Revista Brasileira de Enfermagem – REBEN
http://reben.com.br/revista/

Enfermagem revista –PUC Minas
http://periodicos.pucminas.br/index.php/enfermagemrevista

Áltera Revista de Antropologia
https://periodicos.ufpb.br/index.php/altera/issue/archive

Ensino, Saúde e Ambiente
https://periodicos.uff.br/ensinosaudeambiente/issue/archive

Conselho Nacional de Saúde
http://conselho.saude.gov.br/revistas-cns

Revista Enfermagem Digital Cuidado e Promoção da Saúde – REDCPS
http://www.redcps.com.br/numeros-anteriores

Revista Bioética
https://revistabioetica.cfm.org.br/index.php/revista_bioetica

Revista de Ciências Médicas e Biológicas
https://periodicos.ufba.br/index.php/cmbio/

Revista Brasileira em Promoção da Saúde
https://ojs.unifor.br/RBPS/article/view/10285

Revista Gestão & Saúde
https://periodicos.unb.br/index.php/rgs/about

Enfermería Global
http://revistas.um.es/eglobal/

Revista Brasileira de Cancerologia
https://rbc.inca.gov.br/index.php/revista

Revista Emergência (Novo Hamburgo)
https://www.revistaemergencia.com.br/?menu=Jyjb
</div>";

$texts = explode("\r\n\r\n", $text_f);
foreach ($texts as $text) {
    $parts = explode("\r\n", $text);
    echo "<p><a href=\"{$parts[1]}\" target=\"_blank\" rel=\"noopener noreferrer\">{$parts[0]}</a></p><hr>";
}
