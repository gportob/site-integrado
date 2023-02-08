<h4>Depoimentos dos alunos</h4>
<div class="comments-area">
    <ul class="comment-list global-list">
        <?php
        $consult = $pdo->query("SELECT * FROM depoimentos LIMIT 3;");
        $data = $consult->execute();
        ?>
        <?php
        while ($data = $consult->fetch()) {
        ?>
        <li class="media">
            <div class="commenter-avatar">
                <img class="img-fluid" src="<?= $data['foto'] ?>" alt="Image">
            </div>
            <div class="comment-box media-body">
                <div class="comment-meta">
                    <span class="title float-left"><?= $data['aluno'] ?></span>
                </div>
                <div class="comment-content">
                    <p>"<?= $data['texto'] ?>"</p>
                </div>
            </div>
        </li>
        <?php } ?>
    </ul>
</div><!-- /.comments-area -->