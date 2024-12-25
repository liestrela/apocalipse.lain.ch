<?php require_once('../_langs.php');$page_title="404 - " . L_404TITLE; require_once("../_header.php"); ?>

                <div class="content">
                    <div class="vertical">
                        <span class="bigger-text"><strong>404</strong></span>
                        <span class="big-text"><?php echo L_404TITLE;?></span>
                        <span class="normal-text"><?php echo L_404DESC_0;?> <span class="address small-text"><?php echo htmlspecialchars($_SERVER['REQUEST_URI']); ?> <?php echo L_404DESC_1?></span> 
                    </div>
                </div>
<?php require_once("../_footer.php"); ?>
