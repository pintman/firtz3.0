<?php if ($singlepage==true && isset($item)): ?>
    
        <!-- post comments -->
        <h3 style="margin-top:30px; cursor: pointer;" class="firtz-episode-title">
            <i class="firtz-icon-comments"></i> <span style="color:#222; cursor: pointer; text-decoration: none;"><?php echo $dict_showcomments; ?></span>
        </h3>

        <p>
            Bitte lese Dir unsere <a class="uk-text-bold"
                                     href="<?php echo $BASEURL; ?><?php echo $feedattr['slug']; ?>/show/page/Rechtliches/Netiquette"
                                     target="_blank">Kommentar-Regeln</a> durch, bevor Du einen Kommentar schreibst.
        </p>

        <a id='comment_<?php echo $item['slug']; ?>'
           onclick="loadDisqus(jQuery(this), '<?php echo $item['guid']; ?>', '<?php echo $BASEURL; ?><?php echo $feedattr['slug']; ?>/show/<?php echo $item['slug']; ?>');">
            <div id="disqus_thread">
                <div class="uk-panel uk-box-shadow-small uk-padding uk-background-muted">
                    <div class="info-box-disqus">
                        <p><b>Hier könnte Deine Meinung stehen!</b></p>
                        <p>Unsere Kommentarfunktion stammt vom Online-Dienst Disqus.
                            Klicke hier, um Kommentare zu lesen oder zu schreiben. </p>
                    </div>
                </div>
            </div>
        </a>
    
    <?php else: ?>
        <hr>
        <!-- page comments -->
        <h3 style="margin-top:30px; cursor: pointer;" class="firtz-episode-title">
            <i class="firtz-icon-comments"></i> <span style="color:#222; cursor: pointer; text-decoration: none;"><?php echo $dict_showcomments; ?></span>
        </h3>

        <p>
            Bitte lese Dir unsere <a class="uk-text-bold"
                                     href="<?php echo $BASEURL; ?><?php echo $feedattr['slug']; ?>/show/page/Rechtliches/Netiquette"
                                     target="_blank">Kommentar-Regeln</a> durch, bevor Du einen Kommentar schreibst.
        </p>

        <a id='comment_<?php echo $pagename; ?>'
           onclick="loadDisqus(jQuery(this), 'page-<?php echo $pagename; ?>', '<?php echo $BASEURL; ?><?php echo $feedattr['slug']; ?>/show/page/<?php echo $pagename; ?>');">
            <div id="disqus_thread">
                <div class="uk-panel uk-box-shadow-small uk-padding uk-background-muted">
                    <div class="info-box-disqus">
                        <p><b>Hier könnte Deine Meinung stehen!</b></p>
                        <p>Unsere Kommentarfunktion stammt vom Online-Dienst Disqus.
                            Klicke hier, um Kommentare zu lesen oder zu schreiben. </p>
                    </div>
                </div>
            </div>
        </a>
    
<?php endif; ?>

<style>
    .info-box-disqus {
        background: url(<?php echo $BASEURL; ?>ext/disqus/disqus.svg) no-repeat;
        background-size: 170px auto;
        background-position: 7px 11px;
        padding: 7px 7px 7px 225px;
        color: #000;
    }

    .info-box-disqus p {
        margin: 5px !important;
    }
</style>