<div class="uk-child-width-1-1 uk-grid uk-grid-stack" uk-grid="">
    <?php foreach ((explode(',',$UI)?:[]) as $tpath): ?>
        <?php foreach ((glob($tpath.'/sidebar_header/*.html')?:[]) as $template): ?>
            <!-- hook sidebar header: <?php echo 'sidebar_header/'.basename($template); ?> -->
            <?php echo $this->render('sidebar_header/'.basename($template),$this->mime,get_defined_vars(),0); ?>
        <?php endforeach; ?>
    <?php endforeach; ?>

    <!-- sidebare: about -->
    <div class="uk-first-column">
        <div class="uk-panel">
            <h4 class="uk-heading-divider"><span uk-icon="icon: play-circle; ratio: 1.4"></span>
                <?php echo $dict_sb_about_title; ?></h4>
            <div class="uk-margin">
                <?php echo $feedattr['description']; ?>

            </div>

            <div class="uk-box-shadow-small uk-background-muted uk-padding">
                <?php echo $this->render('set/subscribe-button.html',$this->mime,get_defined_vars(),0); ?>
            </div>

            <div class="uk-margin">
                <small><?php echo $feedattr['summary']; ?></small>
            </div>
        </div>
    </div>

    <!-- sidebar: more infos and links -->
    <div class="uk-grid-margin uk-dark">
        <div class="uk-panel uk-box-shadow-small uk-padding uk-background-muted">
            <h3 class="uk-h5 uk-heading-line">
                <span><?php echo $dict_sb_more; ?></span>
            </h3>
            <ul>
                <?php $pagearr=array(); ?>
                <?php foreach ((explode(',',$UI)?:[]) as $tpath): ?>
                    <?php foreach ((glob($tpath.'/pages/*',GLOB_ONLYDIR)?:[]) as $dir): ?>
                        <?php if (basename($dir) == 'podcast'): ?>
                            <?php if (!in_array(basename($dir),$pagearr)): ?>
                                <?php foreach ((glob($tpath.'/pages/'.basename($dir).'/*.html')?:[]) as $template): ?>
                                    <li>
                                        <a href="<?php echo $BASEURL; ?><?php echo $feedattr['slug']; ?>/show/page/<?php echo basename($dir); ?>/<?php echo basename($template,'.html'); ?><?php echo $exthtml; ?>"><?php echo basename($template,'.html'); ?></a>
                                    </li>
                                <?php endforeach; ?>
                                <?php $pagearr=array_merge($pagearr,array(basename($dir))); ?>
                            <?php endif; ?>
                        <?php endif; ?>
                    <?php endforeach; ?>
                <?php endforeach; ?>
            </ul>

            <?php if ($feedattr['licenseimage']): ?>
                
                    <div class="uk-text-center">
                        <small><?php echo $dict_sb_license; ?> <a
                                href="<?php echo $feedattr['licenseurl']; ?>"><?php echo $feedattr['licensename']; ?></a> <?php echo $dict_license; ?>.
                        </small>
                    </div>
                    <div class="uk-text-center uk-margin-small-top">
                        <a href="<?php echo $feedattr['licenseurl']; ?>"><img
                                src="<?php echo $feedattr['licenseimage']; ?>"
                                title="<?php echo $feedattr['licensename']; ?>"></a>
                    </div>
                
                <?php else: ?>
                    <?php if ($feedattr['licensename']): ?>
                        <a href="<?php echo $feedattr['licenseurl']; ?>"><?php echo $feedattr['licensename']; ?></a>
                    <?php endif; ?>
                
            <?php endif; ?>
        </div>
    </div>

    <?php foreach ((explode(',',$UI)?:[]) as $tpath): ?>
        <?php foreach ((glob($tpath.'/sidebar/*.html')?:[]) as $template): ?>
            <!-- hook sidebar: <?php echo 'sidebar/'.basename($template); ?> -->
            <?php echo $this->render('sidebar/'.basename($template),$this->mime,get_defined_vars(),0); ?>
        <?php endforeach; ?>
    <?php endforeach; ?>


    <?php foreach ((explode(',',$UI)?:[]) as $tpath): ?>
        <?php foreach ((glob($tpath.'/sidebar_footer/*.html')?:[]) as $template): ?>
            <!-- hook sidebar footer: <?php echo 'sidebar_footer/'.basename($template); ?> -->
            <?php echo $this->render('sidebar_footer/'.basename($template),$this->mime,get_defined_vars(),0); ?>
        <?php endforeach; ?>
    <?php endforeach; ?>


</div>