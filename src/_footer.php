            </div>
            <footer>
                <div class="afftitle">
                    <span><?php echo L_AFFIRMATION;?></span>
                    <input id="affstop" type="checkbox" checked>
                </div>
                <marquee direction="right" class="aff">
                    "<?php
						function EchoAffirmation($msg)
						{
							if (empty($msg)) echo A_ERROR;
							else echo $msg;
						}

                        date_default_timezone_set('America/Sao_Paulo');
                        $aff_file="/var/www/website/".F_AFFIRMATIONS;
                        $date = strval(date("dmY"));
                        $today = substr($date,0,4);
						switch ($today) {
                            case "2910":
                                echo A_BIRTHDAY;;
                                break;
                            case "2112":
                                echo A_OHARA;
                                break;
                            case "2512":
                                echo A_XMAS;
                                break;
							case "0907":
								echo A_RAY;
								break;
                            case "3112":
                                echo substr($date,4,8)." ".A_LASTDAY;
                                break;
                            default:
                                srand(str_repeat($date,2));
                                $affs_str=fread(fopen($aff_file,"r"),filesize($aff_file));
                                $affs_arr=explode("\n",$affs_str);
								$rand_index=rand(0,count($affs_arr))-2;
			                    EchoAffirmation(rtrim($affs_arr[$rand_index]));
                                break;
                        }
                    ?>"
                </marquee>
			</footer>
        </div>
        <script>
            let marquee  = document.querySelector('.aff');
            let checkbox = document.querySelector('#affstop');
            let span = (marquee).parentElement.appendChild(document.createElement('span'));

            span.innerHTML = marquee.innerHTML;
            span.style.display = 'none';

            checkbox.addEventListener('change', function () {
                if (this.checked) {
                    marquee.style.display = 'inline';
                    span.style.display = 'none';
                } else {
                    marquee.style.display = 'none';
                    span.style.display = 'inline';
                }
            });
        </script>
		<!-- Disabled temporarily -->
        <!-- script src="/js/piko.js"></script> -->
<?php if (isset($page_bottom)) echo $page_bottom; ?>
	</body>
</html>
