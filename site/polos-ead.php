<?php
require(__DIR__ . '/_config/loader.php');
require(__DIR__ . '/_config/functions.php');
?>

<!DOCTYPE html>
<html lang="en">

<?php include(__DIR__ . '/includes/head.php'); ?>
<body>
<?php include(__DIR__ . '/includes/preloader.php'); ?>

<?php include(__DIR__ . '/includes/header.php'); ?>

<section class="breadcrumb-section" style="background-image: url('https://i.imgur.com/G97vHnM.png')">
    <div class="container">
        <h1>Polos EAD</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= $config['url_site'] ?>">Início</a></li>
            <li class="breadcrumb-item">Polos EAD</li>
        </ol>
    </div><!-- /.container -->
</section><!-- /.breadcrumb-section -->

<style>
    h4 {
        color: #1274b7;
    }
</style>

<div class="sa-section">
    <div class="section-content sa-about section-padding">
        <div class="row" style="margin-right:0px;">
            <div class="col-md-4 hidden-xs"
                 style="background: url(https://i.imgur.com/uEF6zLs.png); background-position: top right; background-repeat: no-repeat; min-height: 900px">
                <!--img src="https://imgur.com/0IYD90q.png"/-->
            </div>
            <div class="col-md-8">
                <div class="contact-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-8 col-lg-8 mb-30">
                                <div class="contact-wrapper">
                                    <select class="form-control form-control-lg " id="select" name="select"
                                            required>
                                        <option value="">Selecionar estado</option>
                                        <option value="ba">Bahia</option>
                                        <option value="ce">Ceará</option>
                                        <option value="go">Goiás</option>
                                        <option value="ma">Maranhão</option>
                                        <option value="mg">Minas Gerais</option>
                                        <option value="pb">Paraíba</option>
                                        <option value="pe">Pernambuco</option>
                                        <option value="pi">Piauí</option>
                                        <option value="rn">Rio Grande do Norte</option>
                                        <option value="sc">Santa Catarina</option>
                                        <option value="to">Tocantins</option>
                                    </select>

                                    <div>
                                        <div class="ba box">
                                            <div class="polos">
                                                <h4>Nova Itarana</h4>
                                                <p>Praça da Bandeira, 10, Centro, Nova Itarana - BA</p>
                                            </div>
                                        </div>
                                        <div class="ce box">
                                            <div class="polos">
                                                <h4>Milagres</h4>
                                                <p>Jaime Henrique Eugênio Neto, N° 100, Milagres - CE</p>
                                                <h4>Várzea Alegre</h4>
                                                <p>Rua Pedro Gonçalves, Nº 226, Centro, Várzea Alegre – CE</p>
                                                <h4>Quixadá</h4>
                                                <p>Rua Professor Júlio Holanda, Nº 105, Irajá, Quixadá - CE</p>
                                            </div>
                                        </div>
                                        <div class="go box">
                                            <div class="polos">
                                                <h4>Itaberaí</h4>
                                                <p>Av. Aureo Cabral c/ Avenida Goiás, Centro, Itaberaí - GO</p>
                                            </div>
                                        </div>
                                        <div class="ma box">
                                            <div class="polos">
                                                <h4>Barreirinhas</h4>
                                                <p>Av. Brasília, nº 131, Centro, Barreirinhas – MA</p>
                                                <h4>Barreirinhas</h4>
                                                <p>Av. Do Carnaubal, s/n, Carnaubal, Barreirinhas – MA</p>
                                                <h4>Brejo</h4>
                                                <p>Brejo - MA</p>
                                                <h4>Cachoeira Grande</h4>
                                                <p>Av. Comércio, s/n Centro, Cachoeira Grande - MA</p>
                                                <h4>Pedreiras</h4>
                                                <p>Avenida Rio Branco, 841, Centro, Pedreiras - MA</p>
                                                <h4>São José de Ribamar</h4>
                                                <p>Via Coletora 4000,04,Parque Vitoria, São José do Ribamar - MA</p>
                                                <h4>São Luis</h4>
                                                <p>Rua 27 QD, 24 nº 13 Cohajap - São Luís - MA</p>
                                                <h4>Vargem Grande</h4>
                                                <p>Rua José Magalhães, Centro, Vargem Grande - MA</p>
                                            </div>
                                        </div>
                                        <div class="mg box">
                                            <div class="polos">
                                                <h4>Contagem</h4>
                                                <p>Av. Antonio Chagas Diniz, 391, Cidade Industrial, Contagem – MG</p>
                                                <h4>Varginha</h4>
                                                <p>Av.Estados Unidos, 345, Jardim Canaã, Varginha - MG</p>
                                            </div>
                                        </div>
                                        <div class="pb box">
                                            <div class="polos">
                                                <h4>Sede João Pessoa</h4>
                                                <p>Avenida Presidente Epitácio Pessoa, 494 - Torre, João Pessoa – PB</p>
                                                <h4>Alhandra</h4>
                                                <p>Rua Carlos Ribeiro Filho, 79, Centro, Alhandra - PB</p>
                                                <h4>Araçagi</h4>
                                                <p>Rua Projetada, SN LT. 58270-000 - Araçagi - PB</p>
                                                <h4>Araruna</h4>
                                                <p>Av. Coronel Lourenço Luiz Targino, 1000, Araruna - PB</p>
                                                <h4>Bom Sucesso</h4>
                                                <p>Rua Ananias da Costa Lima, n. 10, Centro, Bom Sucesso – PB</p>
                                                <h4>Bonito De Santa Fé</h4>
                                                <p>Conj CEAP, s/n, Centro – PB</p>
                                                <h4>Boqueirão</h4>
                                                <p>Rua Dr. José de Oliveira Pinto, nº 128 A, Bairro Novo – PB</p>
                                                <h4>Brejo do Cruz</h4>
                                                <p>Rua Pedro Roque da Silva, nº 45, Centro – PB</p>
                                                <h4>Cacimba De Dentro</h4>
                                                <p>Rua Epitacio Pessoa, 123, Centro, Cacimba De Dentro – PB</p>
                                                <h4>Caiçara</h4>
                                                <p>Rua João Pessoa, 47, Centro, Caiçara - PB</p>
                                                <h4>Campina Grande</h4>
                                                <p>Rua Afonso Campos, 48, Centro, Campina Grande - PB</p>
                                                <h4>Catolé do Rocha</h4>
                                                <p>Rua Francisco Hosano de sousa, Quadra nº 22 - lote 01, casa 01,
                                                    Loteamento Dr. Benjamim, Catolé do Rocha – PB</p>
                                                <h4>Conceição</h4>
                                                <p>Rua Pe. Manoel Otaviana, 515, Centro, Conceição - PB</p>
                                                <h4>Condado</h4>
                                                <p>Rua Odilon Linhares de Araújo, S/N, Centro – PB</p>
                                                <h4>Cuité De Mamanguape</h4>
                                                <p>Rua Luiz Leoncio, S/N, Centro, Cuité De Mamanguape – PB</p>
                                                <h4>Dona Inês</h4>
                                                <p>Rua Manoel Pedro, 20, Centro, Dona Inês -PB</p>
                                                <h4>Guarabira</h4>
                                                <p>Rua Coronel Antônio Uchoa, 44, Centro, Guarabira - PB</p>
                                                <h4>Itabaiana</h4>
                                                <p>Siqueira Campos, 887 Sala 09 1º andar Centro, Itabaiana - PB</p>
                                                <h4>Itaporanga</h4>
                                                <p>Rua Padre Lourenço, nº 271, Centro – PB</p>
                                                <h4>Itapororoca</h4>
                                                <p>Rua Campo Novo, nº 226, Centro – PB</p>
                                                <h4>Itatuba</h4>
                                                <p>Rua João Ernesto, Número 1, Centro, Itatuba – PB</p>
                                                <h4>Jacaraú</h4>
                                                <p>Rua Alcida Domingos Da Costa, Bairro Centro, Nº 71, Jacaraú - PB</p>
                                                <h4>João Pessoa</h4>
                                                <p>Valentina - Rua Maria L. da Conceição, Valentina Figueiredo, nº 100,
                                                    João Pessoa – PB</p>
                                                <h4>Juarez Távora</h4>
                                                <p>Rua Coronel Francisco Luis, Nº 82, Vila Nova, Juarez Tavora – PB</p>
                                                <h4>Juazeirinho</h4>
                                                <p>Rua José Ferreira Ramos, S/N, Bairro Inácia Diniz – PB</p>
                                                <h4>Lagoa De Dentro</h4>
                                                <p>Rua Ministméricro José Ao De Almeida, Nº 160, Centro, Lagoa De Dentro
                                                    – PB</p>
                                                <h4>Marizópolis</h4>
                                                <p>Rua João Vicente de Almeida, S/N, Marizópolis – PB</p>
                                                <h4>Olho D'água</h4>
                                                <p>Rua Manoel Almeida Costa S/N Centro, Olho D'água - PB</p>
                                                <h4>Paulista</h4>
                                                <p>Rua Severo José de Araújo, Bairro Natérico Alves, nº 308 – PB</p>
                                                <h4>Pilões</h4>
                                                <p>Rua Norberto Baracunhy, 654, centro, Pilões – PB</p>
                                                <h4>Pocinhos</h4>
                                                <p>Rua Cap.Salvino Marques De Oliveira, 194.Jardim Etelvina, Pocinhos –
                                                    PB</p>
                                                <h4>Pombal</h4>
                                                <p>Rua Epitácio Pessoa, 692, Centro – PB</p>
                                                <h4>Queimadas</h4>
                                                <p>Rua Oscar Filho, Vila S/N, Queimadas – PB</p>
                                                <h4>Santa Rita/Tibiri</h4>
                                                <p>Rua Mogeiro, 15, Santa Rita – PB</p>
                                                <h4>São Bento</h4>
                                                <p>Rua Francisco Rodriges da Silva, nº 160, Centro – PB</p>
                                                <h4>São José De Caian</h4>
                                                <p>Rua Projetada S/N Centro – São José De Caiana – PB</p>
                                                <h4>São José de Sabugi</h4>
                                                <p>Rua Projetada S/N Centro – São José De Caiana – PB</p>
                                                <h4>São Vicente do Seridó</h4>
                                                <p>Rua Senador Ruy Carneiro, 1100, Centro, São Vicente do Seridó –
                                                    PB</p>
                                                <h4>Soledade</h4>
                                                <p>Rua PC Venancio Martins Sampaio, 70, Jardim Cruzeiro, Soledade –
                                                    PB</p>
                                                <h4>Sousa</h4>
                                                <p>Rua PC Venancio Martins Sampaio, 70, Jardim Cruzeiro, Soledade –
                                                    PB</p>
                                                <h4>Uiraúna</h4>
                                                <p>Rua Francisco Leão Veloso, nº448, Centro, Uiraúna – PB</p>
                                            </div>
                                        </div>
                                        <div class="pe box">
                                            <div class="polos">
                                                <h4>Camaragibe</h4>
                                                <p>Rua Marciolina Alves, 33, Timbi, Camaragibe – PE</p>
                                                <h4>Carnaubeira da Penha</h4>
                                                <p>Rua Major Pedro Nunes, Centro, Carnaubeira da Penha – PE</p>
                                                <h4>Macaparana</h4>
                                                <p>ROD PE-089, nº 160, Macaparana - PE</p>
                                                <h4>Rajada</h4>
                                                <p>Rua Antônio Vaz Filgueira, nº 155 – PE</p>
                                                <h4>Tabira</h4>
                                                <p>Rua Clovis Siqueira Xavier, nº 62, Centro – PE</p>
                                            </div>
                                        </div>
                                        <div class="pi box">
                                            <div class="polos">
                                                <h4>Amarante</h4>
                                                <p>Praça Padre Virgílio Madeira, 520, Centro, Amarante – PI</p>
                                                <h4>Bom Jesus</h4>
                                                <p>Rua José Parente, S/N, Centro, Bom Jesus – PI</p>
                                                <h4>Paulistana</h4>
                                                <p>Rua Senador Candido Ferraz, nº 63, Centro – PI</p>
                                                <h4>Picos</h4>
                                                <p>Rua Joana Alves Costa, N° 221, Canto da Várzea, Picos - PI</p>
                                                <h4>Teresina</h4>
                                                <p>Rua Areolino De Abreu, 1850, Centro, Teresina – PI</p>
                                            </div>
                                        </div>
                                        <div class="rn box">
                                            <div class="polos">
                                                <h4>Baia Formosa</h4>
                                                <p>Rua Anacleto Duarte, 388, Centro, Baía Formosa – RN</p>
                                                <h4>Equador</h4>
                                                <p>Rua São Sebastião, 388, Centro, Equador – RN</p>
                                                <h4>Extremoz</h4>
                                                <p>Av. Adriano Suassuna, 1027, Boca da Ilha, Extremoz - RN</p>
                                                <h4>Lagoa Danta</h4>
                                                <p>Av. Desembargador Francisco Lima, 447, Centro, Lagoa Danta - RN</p>
                                                <h4>Passa e fica</h4>
                                                <p>Rua Gov. Tarcisio Maia, s/n, Passa e Fica - RN</p>
                                                <h4>São Gonçalo do Amarante</h4>
                                                <p>Rua dos Pardais, 38, Centro, São Gonçalo do Amarante - RN</p>
                                            </div>
                                        </div>
                                        <div class="sc box">
                                            <div class="polos">
                                                <h4>Florianópolis</h4>
                                                <p>Rua Prefeito Dib Cherem, 2409 - Sala 2 - SC </p>
                                            </div>
                                        </div>
                                        <div class="to box">
                                            <div class="polos">
                                                <h4>Barra De Ouro</h4>
                                                <p>Avenida Esperança, S/N. Centro. Barra Do Ouro – TO</p>
                                                <h4>Buriti do Tocantins</h4>
                                                <p>Travessa José de Assis, n° 70 - Centro - TO</p>
                                                <h4>Campos Lindos</h4>
                                                <p>Rua Manoel Rodrigues Bezerra, Quadra 13, Lote 03. Centro. Campos
                                                    Lindos – TO</p>
                                                <h4>Itacajá</h4>
                                                <p>Rua B, S/N, Centro, Itacajá – TO</p>
                                                <h4>Itapiratins</h4>
                                                <p>Av. Benedito Pires, Centro, Itapiratins – TO</p>
                                                <h4>Juarina</h4>
                                                <p>Rua Petronio Portela Nunes S/N. Lote 12 – Centro, Juarina – TO</p>
                                                <h4>Pedro Afonso</h4>
                                                <p>Rua 05, n* 442. Setor Aeroporto, Centro. Pedro Afonso - TO</p>
                                                <h4>Recursolândia</h4>
                                                <p>Rua Cindá Cunha, S/N. Centro. Recursolândia – TO</p>
                                                <h4>Santa Terezinha Do Tocatins</h4>
                                                <p>Avenida Manoel Da Rocha Nogueira, Nº 12, Centro, Santa Terezinha -
                                                    TO</p>
                                            </div>
                                        </div>
                                    </div>
                                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
                                    <script>
                                        // jQuery functions to hide and show the div
                                        $(document).ready(function () {
                                            $("select").change(function () {
                                                $(this).find("option:selected")
                                                    .each(function () {
                                                        var optionValue = $(this).attr("value");
                                                        if (optionValue) {
                                                            $(".box").not("." + optionValue).hide();
                                                            $("." + optionValue).show();
                                                        } else {
                                                            $(".box").hide();
                                                        }
                                                    });
                                            }).change();
                                        });
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.section-content -->
</div><!-- /.sa-section -->


<?php include(__DIR__ . '/includes/opiniao-alunos.php'); ?>
<?php include(__DIR__ . '/includes/noticia.php'); ?>
<?php include(__DIR__ . '/includes/redes-sociais.php'); ?>
<?php include(__DIR__ . '/includes/footer.php'); ?>
<!-- JS -->
<script src="<?= $config['url_site'] ?>assets/js/jquery.min.js"></script>
<script src="<?= $config['url_site'] ?>assets/js/popper.min.js"></script>
<script src="<?= $config['url_site'] ?>assets/js/bootstrap.min.js"></script>
<script src="<?= $config['url_site'] ?>assets/js/inview.min.js"></script>
<script src="<?= $config['url_site'] ?>assets/js/slick.min.js"></script>
<script src="<?= $config['url_site'] ?>assets/js/jquery-ui-min.js"></script>
<script src="<?= $config['url_site'] ?>assets/js/jarallax.min.js"></script>
<script src="<?= $config['url_site'] ?>assets/js/counterup.min.js"></script>
<script src="<?= $config['url_site'] ?>assets/js/waypoints.min.js"></script>
<script src="<?= $config['url_site'] ?>assets/js/YTPlayer.min.js"></script>
<script src="<?= $config['url_site'] ?>assets/js/validate.js"></script>
<script src="<?= $config['url_site'] ?>assets/js/main.js"></script>
</body>
</html>