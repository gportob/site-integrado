<div class="col-md-12">
    <div class="pagenition_bar">
        <nav>
            <ul class="pagination paginition_text mg_bottom60">
                <?php

                if ($pag > 1) {
                    $paginacao = "<li><a id='anterior' href='$prefix_pag" . $ant . "'><i class='fa fa-angle-left' aria-hidden='true'></i></a></li>";
                }


                if ($ultima_pag <= 5) {
                    for ($i = 1; $i < $ultima_pag + 1; $i++) {
                        if ($i == $pag) {
                            $paginacao .= "<li class=\"disabled\"><a href='$prefix_pag" . $i . "'>" . $i . "</a></li>";
                        } else {
                            $paginacao .= "<li><a href='$prefix_pag" . $i . "'>" . $i . "</a></li>";
                        }
                    }
                }

                if ($ultima_pag > 5) {
                    if ($pag < 1 + (2 * $adjacentes)) {
                        for ($i = 1; $i < 2 + (2 * $adjacentes); $i++) {
                            if ($i == $pag) {
                                $paginacao .= "<li class=\"disabled\"><a class='' href='$prefix_pag" . $i . "'>" . $i . "</a></li>";
                            } else {
                                $paginacao .= "<li><a href='$prefix_pag" . $i . "'>" . $i . "</a></li>";
                            }
                        }
                        #$paginacao .= "<li>...</li>";
                        $paginacao .= "<li><a href='$prefix_pag" . $penultima . "'>" . $penultima . "</a></li>";
                        $paginacao .= "<li><a href='$prefix_pag" . $ultima_pag . "'>" . $ultima_pag . "</a></li>";
                    } elseif ($pag > (2 * $adjacentes) && $pag < $ultima_pag - 3) {
                        $paginacao .= "<li><a href ='$prefix_pag1'>1</a></li>";
                        $paginacao .= "<li><a href ='$prefix_pag1'>2</a></li> <!--  ...  --> ";
                        for ($i = $pag - $adjacentes; $i <= $pag + $adjacentes; $i++) {
                            if ($i == $pag) {
                                $paginacao .= "<li class=\"disabled\"><a class='' href='$prefix_pag" . $i . "'>" . $i . "</a></li>";
                            } else {
                                $paginacao .= "<li><a href='$prefix_pag" . $i . "'>" . $i . "</a></li>";
                            }
                        }
                        #$paginacao .= "...";
                        $paginacao .= "<li><a href='$prefix_pag" . $penultima . "'>" . $penultima . "</a></li>";
                        $paginacao .= "<li><a href='$prefix_pag" . $ultima_pag . "'>" . $ultima_pag . "</a></li>";
                    } else {
                        $paginacao .= "<li><a href='$prefix_pag1'>1</a></li>";
                        $paginacao .= "<li><a href='$prefix_pag1'>2</a> </li> <!--  ...  --> ";
                        for ($i = $ultima_pag - (4 + (2 * $adjacentes)); $i <= $ultima_pag; $i++) {
                            if ($i == $pag) {
                                $paginacao .= "<li class=\"disabled\"><a class='' href='$prefix_pag" . $i . "'>" . $i . "</a></li>";
                            } else {
                                $paginacao .= "<li><a href='$prefix_pag" . $i . "'>" . $i . "</a></li>";
                            }
                        }
                    }
                }

                if ($prox <= $ultima_pag && $ultima_pag > 2) {
                    $paginacao .= "<li><a href='$prefix_pag" . $prox . "'><i class='fa fa-angle-right' aria-hidden='true'></i></a></li>";
                }

                echo $paginacao;
                ?>
            </ul>
        </nav>
    </div>
</div>
