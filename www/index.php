<?php include_once('../_langs.php'); $page_title=L_VALKYRJASPLACE; require_once("../_header.php"); ?>

                <div class="content">
                    <div class="vertical">
                        <span class="normal-text"><?php echo L_WELCOME_0;?></span>
                        <span class="normal-text"><?php echo L_WELCOME_1;?></span>
                        <span class="normal-text"><?php echo L_BSIDE_0;?> <a target="_blank" href="<?php 
						if ($_SERVER['HIDDEN']=='yes') {
							echo 'http://udq46lzkpd5kcreytznaupsq7yvlmu6pr6tmfhzawnwua6rozjrbz6id.onion';
						} else {
							echo 'https://valkyrja.lain.ch';
						}?>"><?php echo L_BSIDE_1;?></a> <?php echo L_BSIDE_2;?></span>

                        <span class="big-text"><strong><?php echo L_LOOK;?></strong></span>
                        <div class="suggestions">
                            <div class="card">
                                <div class="img"><a href="https://riseup.net"><img src="img/riseup.png"></a></div>
                                <span class="card-title"><a href="https://riseup.net">RiseUp</a></span>
                                <div class="card-description">
								<?php echo L_RISEUP;?>

								</div>
                            </div>
                            <div class="card">
                                <div class="img"><a href="https://github.com/Projeto-Pindorama/"><img src="img/pindorama.png"></a></div>
                                <span class="card-title"><a href="https://github.com/Projeto-Pindorama/">Pindorama</a></span>
                                <div class="card-description">
                                <?php echo L_PINDORAMA;?>

								</div>
                            </div>
                        </div>
                    </div>
                </div>
<?php require_once("../_footer.php"); ?>
