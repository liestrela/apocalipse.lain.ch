<?php require_once("../../_langs.php"); $page_head='<script src="/js/copy.js"></script>'; $page_title=L_ME; require_once("../../_header.php"); ?>

                <div class="content">
                    <div class="vertical">
                        <span class="big-text"><strong><?php echo L_ME;?></strong></span>
                        <span class="normal-text"><?php echo L_MYNAME_0;?> <abbr title="(<?php echo L_PRONOUNS;?>)"><?php echo L_MYNAME_1;?></abbr><br>
                        <?php echo L_ILIKE;?></span>
                        <div class="gallery">
                            <div class="pic">
								<a target="_blank" href="/pics/li_3_full.jpg"><img src="/pics/li_3_small.jpg"></a>
								<span class="smaller-text"><?php echo L_DRAWING_0;?></span>
							</div>
							<div class="pic">
                            	<a target="_blank" href="/pics/li_2_full.jpg"><img src="/pics/li_2_small.jpg"></a>
								<span class="smaller-text"><?php echo L_DRAWING_1;?> <a href="https://instagram.com/queijodegato" target="_blank">Robin</a></span>
							</div>
                        </div>
                    </div>
                    <div class="vertical">
                        <span class="big-text"><strong><?php echo L_TALK2ME;?></strong></span>
                        <span><?php echo L_EMAILME;?></span>
                        <span class="code">estrela (<?php echo L_AT;?>) riseup (<?php echo L_DOT;?>) net</span>
                        <span><?php echo L_PGP_0;?> <a href="/stuff/li_0x726B370B.asc" target="_blank"><?php echo L_PGP_1;?></a></span>
						<span><?php echo L_PGP_2;?></span>
                    </div>
                    <div class="vertical">
                        <span class="big-text"><strong><?php echo L_DONATE;?> ($)</strong></span>
                        <span><?php echo L_SENDME; ?></span>
                        <span><strong>BTC (BitCoin): </strong><button onclick="copy('bc1qzpt32hz84lummzrrcxj5san20suyjy2uuwt30j')"><?php echo L_COPY;?></button></span>
                        <span><strong>XMR (Monero): </strong><button onclick="copy('8C8f4SdkMWvHws4d5LryF4HiQAdkNqaq5SGBgy98MQkZZyCizPhqZ8fgkYzVH6DjngirGZyjSF7acPqexd3kZUz8BXcq4zS')"><?php echo L_COPY;?></button></span>
                    </div>
                </div>
<?php require_once("../../_footer.php"); ?>
