<?php require_once('../../_langs.php'); $page_head = '<link rel="stylesheet" type="text/css" href="/css/pictures.css"/>'; $page_title = L_PICSTITLE; require_once('../../_header.php'); ?>

                <div class="content pictures-content">
                    <span class="big-text"><b><?php echo L_PICSTITLE;?></b></span>
                    <span class="small-text"><?php echo L_PICSDESC_0;?></span>
					<span class="small-text"><?php echo L_PICSDESC_1;?></span>
                    <div class="gallery">
                        <?php
                            $files = glob('*.{jpg}', GLOB_BRACE);
                            $i = 0;
                            echo '<div class="pic-row">'."\n\t\t\t\t\t\t";
                            foreach ($files as $file) {
                                if ($i==3) {
                                    echo '</div>'."\n\t\t\t\t\t\t".'<div class="pic-row">'."\n\t\t\t\t\t\t";
                                    $i=0;
                                }
                                $name = basename($file, ".jpg");
                                if ($name=="li_2_full" or $name=="li_2_small" 
                                 or $name=="li_full" or $name=="li_small"
								 or $name=="li_3_full"or $name=="li_3_small") continue;
                                $pic_name=basename($name,"_small");
                                echo '<div class="img-frame"><a href="https://ia601406.us.archive.org/15/items/apocalipselainchfullpics/'.$pic_name.'_full.png"><img class="pic" src="'.$pic_name.'_small.jpg"></a></div> <!-- alternatively, https://apocalipse.lain.ch/pics/'.$pic_name.'_full.png -->'."\n\t\t\t\t\t\t";
                                $i++;
                            }
                            echo "</div>";
                        ?>

                    </div>
                </div>
<?php require_once('../../_footer.php'); ?>
