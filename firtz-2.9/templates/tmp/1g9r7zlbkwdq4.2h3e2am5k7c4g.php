<!--breadcrumb-->
<div id="navline-white">
    <div class="uk-container uk-text-white">
        <a class="bc-link" href="<?php echo $BASEURL; ?>"><?php echo $feedattr['title']; ?></a> > <?php echo $dict_navi_allepisodes; ?>

    </div>
</div>

<!--home-->
<div id="tm-main" class="tm-main uk-section uk-section-default" uk-height-viewport="expand: true"
     style="box-sizing: border-box;">
    <div class="uk-container">
        <div class="uk-grid" uk-grid="">
            <div class="uk-width-expand@m uk-first-column">
                <div class="uk-child-width-1-1@m uk-grid uk-grid-stack" uk-grid="">
                    <div class="uk-first-column">
                        <?php foreach (($items?:[]) as $item): ?>
                            <!-- episode article: <?php echo $item['slug']; ?> -->
                            <article class="uk-article has-post-thumbnail"
                                     typeof="Article">

                                <!-- episode metadata -->
                                <meta property="name" content="<?php echo $item['title']; ?>">
                                <meta property="author" typeof="Person" content="<?php echo $feedattr['author']; ?>">
                                <meta class="uk-margin-remove-adjacent" property="datePublished"
                                      content="<?php echo $item['date']; ?>">

                                <?php if ($item['banner'] != ''): ?>
                                    <?php if ($templatevars['pwp'] != 'down'): ?>
                                        <!-- episode banner -->
                                        <div class="uk-inline-clip uk-transition-toggle uk-margin-large-top uk-margin-large-bottom">
                                            <a href="<?php echo $BASEURL; ?><?php echo $feedattr['slug']; ?>/show/<?php echo $item['slug']; ?>" title="<?php echo $item['slug']; ?>" name="<?php echo $item['slug']; ?>">
                                                <img width="1200"
                                                     height="200"
                                                     src="<?php echo $item['banner']; ?>"
                                                     class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                                     alt="Episode <?php echo $item['slug']; ?>"
                                                     property="url"></a>
                                            <?php if ($item['bannerLicense'] != ''): ?>
                                                <div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-default">
                                                    <p>
                                                        <?php echo $dict_license; ?>: <?php echo $item['bannerLicense']; ?><?php if ($item['bannerURL'] != ''): ?>,<a target="_blank" href="<?php echo $item['bannerURL']; ?>"> <?php echo $item['bannerPage']; ?></a><?php endif; ?>
                                                    </p>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    <?php endif; ?>
                                <?php endif; ?>

                                <!-- produces by -->
                                <div class="uk-margin-medium-bottom uk-container uk-container-small uk-text-center">
                                    <h2 class="uk-article-title uk-margin-remove-top">
                                        <a href="<?php if ($singlepage==false): ?><?php echo $BASEURL; ?><?php echo $feedattr['slug']; ?>/show/<?php echo $item['slug']; ?><?php endif; ?>" title="<?php echo $item['slug']; ?>" name="<?php echo $item['slug']; ?>"><?php echo $item['title']; ?></a>
                                    </h2>
                                    <p class="uk-article-meta">
                                        <?php echo $dict_publicBy; ?><a href="<?php echo $BASEURL; ?>"><?php echo $feedattr['author']; ?></a> am <time
                                            datetime="<?php echo date ('Y-d-m', strtotime($item['date'])); ?>T<?php echo date ('H:m:s+00:00',
                                        strtotime($item['date'])); ?>"><?php echo date ('d M. Y', strtotime($item['date'])); ?></time>.
                                    </p>
                                </div>

                                <!-- episode overview -->
                                <div class="uk-container uk-container-small uk-margin-large-bottom">
                                    <?php if ($templatevars['pwp'] == 'down' or $templatevars['pwp'] == 'on'): ?>
                                        <p></p>
                                        <?php if ($item['banner'] != '' and $templatevars['pwp'] != 'on'): ?>
                                            <!-- episode banner -->
                                            <div class="uk-inline-clip uk-transition-toggle uk-margin-bottom">
                                                <a href="<?php echo $BASEURL; ?><?php echo $feedattr['slug']; ?>/show/<?php echo $item['slug']; ?>"
                                                   title="<?php echo $item['slug']; ?> - <?php echo $item['title']; ?>"
                                                   name="<?php echo $item['slug']; ?>">
                                                    <img width="1200"
                                                         height="200"
                                                         src="<?php echo $item['banner']; ?>"
                                                         class="attachment-post-thumbnail size-post-thumbnail"
                                                         alt="Episode <?php echo $item['slug']; ?>"
                                                         property="url"></a>
                                                <?php if ($templatevars['home_pwp_position'] == 'out'): ?>
                                                    <?php if ($item['bannerLicense'] != ''): ?>
                                                        <div class="uk-transition-slide-top uk-position-top uk-overlay uk-overlay-default">
                                                            <p>
                                                                <small><?php echo $dict_license; ?>: <?php echo $item['bannerLicense']; ?><?php if ($item['bannerURL'] != ''): ?>,<a target="_blank" href="<?php echo $item['bannerURL']; ?>"> <?php echo $item['bannerPage']; ?></a><?php endif; ?></small>
                                                            </p>
                                                        </div>
                                                    <?php endif; ?>
                                                <?php endif; ?>
                                                <?php if ($templatevars['home_pwp_position'] == 'in'): ?>
                                                    <div class="uk-transition-slide-bottom uk-position-bottom uk-overlay" style="background: <?php echo $templatevars['color']; ?>">
                                                        <center>
                                                            <!--article-player-->
                                                            <?php foreach ((explode(',',$UI)?:[]) as $tpath): ?>
                                                                <?php foreach ((glob($tpath.'/player/*.html')?:[]) as $template): ?>
                                                                    <?php echo $this->render('player/'.basename($template),$this->mime,get_defined_vars(),0); ?>
                                                                <?php endforeach; ?>
                                                            <?php endforeach; ?>
                                                        </center>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        <?php endif; ?>

                                        <div style="background: <?php echo $templatevars['color']; ?>; margin-top: -30px;" class="uk-margin-bottom">
                                            <div style="padding-bottom: 10px;"></div>
                                            <center>
                                                <!--article-player-->
                                                <?php foreach ((explode(',',$UI)?:[]) as $tpath): ?>
                                                    <?php foreach ((glob($tpath.'/player/*.html')?:[]) as $template): ?>
                                                        <?php echo $this->render('player/'.basename($template),$this->mime,get_defined_vars(),0); ?>
                                                    <?php endforeach; ?>
                                                <?php endforeach; ?>
                                            </center>
                                            <div style="padding-bottom: 10px;"></div>
                                        </div>

                                        <?php if ((trim($item['subtitle'])!='')): ?>
                                            <div property="text">
                                                <p><b><?php echo $this->raw($item['subtitle']); ?></b></p>
                                            </div>
                                        <?php endif; ?>
                                    <?php endif; ?>

                                    <div property="text">
                                        <?php if ((trim($item['subtitle'])!='' and $templatevars['pwp'] == 'off')): ?>
                                            <div property="text">
                                                <p class="uk-text-center"><b><?php echo $this->raw($item['subtitle']); ?></b></p>
                                            </div>
                                        <?php endif; ?>
                                        <div class="uk-column-1-2@m">
                                            <?php if ((trim($item['summary'])!='')): ?><?php echo $this->raw($item['summary']); ?><?php endif; ?>
                                        </div>
                                    </div>

                                    <p class="uk-text-center uk-margin-medium">
                                        <a class="uk-button uk-button-secondary"
                                           href="<?php echo $BASEURL; ?><?php echo $feedattr['slug']; ?>/show/<?php echo $item['slug']; ?>"><i
                                                uk-icon="icon: play-circle"></i> <?php echo $dict_readmore; ?></a>
                                    </p>
                                </div>
                            </article>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <?php echo $this->render('set/sidebar.html',$this->mime,get_defined_vars(),0); ?>
        </div>
    </div>
</div>
<?php if ($page!=0): ?>
    <!--pagination-->
    <div id="tm-pagination" class="tm-main uk-section uk-section-muted"
         uk-height-viewport="expand: true"
         style="box-sizing: border-box;">
        <div class="uk-container">
            <div class="uk-grid uk-grid-large uk-grid-divider uk-grid-stack" uk-grid="">
                <div class="uk-width-expand@m uk-first-column">
                    <ul class="uk-pagination uk-margin-large uk-flex-center">
                        <?php if ($page>1): ?>
                            
                                <li class="uk-active">
                                    <a href="<?php echo $BASEURL; ?><?php echo $feedattr['slug']; ?>/show/pager/<?php echo $page-1; ?>">
                                        <i uk-icon="icon: chevron-left"></i>
                                        <span class="page-numbers current">
                                            <?php echo $dict_newer; ?>

                                        </span>
                                    </a>
                                </li>
                            
                            <?php else: ?>
                                <li class="uk-text-muted">
                                    <?php echo $dict_newer; ?>

                                </li>
                            
                        <?php endif; ?>
                        <?php if ($page<$maxpage): ?>
                            
                                <li class="uk-active">
                                    <a class="page-numbers"
                                       href="<?php echo $BASEURL; ?><?php echo $feedattr['slug']; ?>/show/pager/<?php echo $page+1; ?>">
                                        <span class="page-numbers current">
                                            <?php echo $dict_older; ?>

                                        </span>
                                        <i uk-icon="icon: chevron-right"></i>
                                    </a>
                                </li>
                            
                            <?php else: ?>
                                <li class="uk-text-muted">
                                    <?php echo $dict_older; ?>

                                </li>
                            
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
