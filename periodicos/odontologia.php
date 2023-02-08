<style>

    .row {
        margin-right: 0px;
    }

</style>
<?php include('includes/capa-periodicos.php'); ?>
<?php

$text_f = "<div class='container'>Revista de Cirurgia e Traumatologia Buco-Maxilo-Facial (Brazilian Journal of Oral and Maxillofacial Surgery)
http://www.revistacirurgiabmf.com/

Revista Odonto Ciência (Journal of Dental Science)
http://revistaseletronicas.pucrs.br/ojs/index.php/fo/index

Revista Saúde – UNG
http://revistas.ung.br/index.php/saude/index

ROBRAC - Revista Odontológica do Brasil Central
http://www.robrac.org.br/seer/index.php/ROBRAC

Physis. Revista de saúde coletiva
http://www.scielo.br/scielo.php?script=sci_serial&pid=0103-7331&lng=en&nrm=iso

Revista da ACBO
http://www.rvacbo.com.br/ojs/index.php/ojs/

Revista da Faculdade de Ciências Médicas de Sorocaba
http://revistas.pucsp.br/index.php/RFCMS

Revista da Faculdade de Odontologia - UPF - RFO
http://www.upf.br/seer/index.php/rfo

Perspectivas em Medicina Legal e Perícias Médicas
http://perspectivas.med.br/

RBOL - Revista Brasileira de Odontologia Legal
http://portalabol.com.br/rbol/index.php/RBOL/index

Revista Brasileira de Cancerologia
http://www.inca.gov.br/rbc/

Stomatos
http://revodonto.bvsalud.org/scielo.php?script=sci_serial&lng=pt&pid=1519-4442

Revista de Cirurgia e Traumatologia Buco-maxilo-facial
http://revodonto.bvsalud.org/scielo.php?script=sci_serial&lng=pt&pid=1808-5210

Revista da Associacao Paulista de Cirurgioes Dentistas
http://revodonto.bvsalud.org/scielo.php?script=sci_serial&lng=pt&pid=0004-5276

Revista da ABENO
http://revodonto.bvsalud.org/scielo.php?script=sci_serial&lng=pt&pid=1679-5954

Revista Odonto Ciência
http://revodonto.bvsalud.org/scielo.php?script=sci_serial&lng=pt&pid=1980-6523


Revista Brasileira de Odontologia
http://revodonto.bvsalud.org/scielo.php?script=sci_serial&lng=pt&pid=0034-7272

RSBO 
http://revodonto.bvsalud.org/scielo.php?script=sci_serial&lng=pt&pid=1984-5685

Revista de Pós-Graduação da Faculdade de Odontologia da Universidade de São Paulo
http://revodonto.bvsalud.org/scielo.php?script=sci_serial&lng=pt&pid=0104-5695

RGO. Revista Gaúcha de Odontologia
http://revodonto.bvsalud.org/scielo.php?script=sci_serial&lng=pt&pid=1981-8637

RFO UPF
http://revodonto.bvsalud.org/scielo.php?script=sci_serial&lng=pt&pid=1413-4012

CES Odontología,
https://revistas.ces.edu.co/index.php/odontologia

JBG - Jornal Brasileiro de Odontogeriatria
https://www.dtscience.com/journal/jornal-brasileiro-de-odontogeriatria

Jornal Brasileiro de Dentística & Estética
http://www.dtscience.com/journal/jornal-brasileiro-de-dentistica-estetica

Jornal Brasileiro de Oclusão, ATM & Dor Orofacial
http://www.dtscience.com/journal/jornal-brasileiro-de-oclusao-atm-dor-orofacial

Jornal Brasileiro de Ortodontia & Ortopedia Facial
http://www.dtscience.com/journal/jornal-brasileiro-de-ortodontia-ortopedia-facial

Odontologia Clínico-Científica – Scientific-Clinical Odontology – Revista CRO-PE
https://www.cro-pe.org.br/revista.php

Revista ALOP - Revista de la Asociación Latinoamericana de Odontopediatría
https://odontopediatria.cl/revista-alop/

Revista Bahiana de Odontologia
https://www5.bahiana.edu.br/index.php/odontologia

Revista da Faculdade de Odontologia da UNESP
http://www.revodontolunesp.com.br/
</div>";

$texts = explode("\r\n\r\n", $text_f);
foreach ($texts as $text) {
    $parts = explode("\r\n", $text);
    echo "<p><a href=\"{$parts[1]}\" target=\"_blank\" rel=\"noopener noreferrer\">{$parts[0]}</a></p><hr>";
}
