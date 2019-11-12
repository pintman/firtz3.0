<?php foreach ((explode(',',$UI)?:[]) as $tpath): ?>
    <?php foreach ((glob($tpath.'/footer/*.html')?:[]) as $template): ?>
        <!-- hook: <?php echo 'footer/'.basename($template); ?> -->
        <?php echo $this->render('footer/'.basename($template),$this->mime,get_defined_vars(),0); ?>
    <?php endforeach; ?>
<?php endforeach; ?>


<div class="uk-section uk-section-small uk-footer-line uk-light">
    <div class="uk-container">
        <div class="uk-flex-middle uk-grid-margin uk-grid"
             uk-grid="">
            <div class="uk-width-expand@s">
                <div class="uk-margin uk-text-left@s uk-text-center uk-scrollspy-inview">
                    &copy; Copyright <?php echo date('Y'); ?> by <?php echo $feedattr['title']; ?>

                </div>
            </div>
            <div class="uk-width-expand@s">
                <div class="uk-margin uk-text-right@s uk-text-center uk-scrollspy-inview">
                    <small>
                        <a href="http://firtz.org">firtz</a> by <a href="http://eazy-living.de">Christian Bednarek</a>
                        |
                        <a href="">QuorX III</a> by <a href="http://michael.mccouman.de">Michael McCouman Jr.</a>
                    </small>
                </div>
            </div>
        </div>
    </div>
</div>


<?php foreach ((explode(',',$UI)?:[]) as $tpath): ?>
    <?php foreach ((glob($tpath.'/foot/*.html')?:[]) as $template): ?>
        <!-- hook: <?php echo 'foot/'.basename($template); ?> -->
        <?php echo $this->render('foot/'.basename($template),$this->mime,get_defined_vars(),0); ?>
    <?php endforeach; ?>
<?php endforeach; ?>
</body>
</html>