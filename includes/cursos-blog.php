<div class="widget widget_recent_entries">
    <h3 class="widget_title">Graduação Presencial</h3>
    <?php
    $consulta = $pdo->prepare("SELECT * FROM courses WHERE kind > 0 AND `level` = 1 AND `modality` = 1 ORDER by id DESC LIMIT 3;");
    $consulta->execute();
    while ($linha = $consulta->fetch()) {
        ?>
        <ul>
            <li class="media">
                <div class="media-body">
                    <a href="<?= $config['url_site'] ?>curso/<?= $linha['id'] ?>"><?= $linha['name'] ?></a>
                </div>
            </li>
        </ul>
    <?php } ?>
    <div style="margin-top: 30px; text-align: end;">
        <a style="color: var(--primary-color);" class="read-more"
           href="<?= $config['url_site'] ?>cursos">Ver Mais</a>
    </div>
</div><!-- /.widget -->
<div class="widget widget_recent_entries">
    <h3 class="widget_title">Graduação EAD</h3>
    <?php
    $consulta = $pdo->prepare("SELECT * FROM courses WHERE kind > 0 AND `level` = 1 AND `modality` = 2 ORDER by id DESC LIMIT 3;");
    $consulta->execute();
    while ($linha = $consulta->fetch()) {
        ?>
        <ul>
            <li class="media">
                <div class="media-body">
                    <a href="<?= $config['url_site'] ?>curso/<?= $linha['id'] ?>"><?= $linha['name'] ?></a>
                </div>
            </li>
        </ul>
    <?php } ?>
    <div style="margin-top: 30px; text-align: end;">
        <a style="color: var(--primary-color);" class="read-more"
           href="<?= $config['url_site'] ?>cursos-ead">Ver Mais</a>
    </div>
</div><!-- /.widget -->
<div class="widget widget_recent_entries">
    <h3 class="widget_title">Pós-Graduação</h3>
    <ul>
        <li class="media">
            <div class="media-body">
                <a href="#">Visual Basic Web Course With Live Project</a>
            </div>
        </li>
    </ul>
    <div style="margin-top: 30px; text-align: end;">
        <a style="color: var(--primary-color);" class="read-more"
           href="blog-details.html">Ver Mais</a>
    </div>
</div><!-- /.widget -->