<div class="sa-section">
    <div class="section-content section-padding text-center jarallax section-before"
         style="background-image: url('https://images.unsplash.com/photo-1498079022511-d15614cb1c02?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80');">
        <div class="container">
            <div class="testimonial-slider">
                <?php
                $consult = $pdo->query("SELECT * FROM depoimentos LIMIT 3;");
                $data = $consult->execute();
                ?>
                <?php
                while ($data = $consult->fetch()) {
                    ?>
                    <div class="testimonial">
                        <div class="testimonial-info">
                            <div class="icon">
                                <span><i class="fas fa-quote-left"></i></span>
                            </div>
                            <h2><?= $data['texto'] ?></h2>
                            <div class="testimonial-footer">
                                <div class="testimonial-text">
                                    <div class="testimonial-ratings">
                                        <ul class="global-list">
                                            <li class="checked"><i class="fa fa-star"></i></li>
                                            <li class="checked"><i class="fa fa-star"></i></li>
                                            <li class="checked"><i class="fa fa-star"></i></li>
                                            <li class="checked"><i class="fa fa-star"></i></li>
                                            <li class="checked"><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <div class="testimonial-title">
                                        <h3><?= $data['aluno'] ?></h3>
                                        <span><?= $data['name'] ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.testimonial -->
                <?php } ?>
            </div><!-- /.tutor-slider -->
        </div><!-- /.container -->
    </div><!-- /.section-content -->
</div><!-- /.sa-section -->