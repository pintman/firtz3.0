<div class="tm-header-mobile uk-hidden@m">
    <nav class="uk-navbar-container <?php if ($templatevars['navicolor']== 'white'): ?>uk-navbar-white uk-navbar-transparent<?php endif; ?> uk-navbar" uk-navbar="">
        <div class="uk-navbar-left">
            <a class="uk-navbar-item uk-logo" href="<?php echo $BASEURL; ?>">
                <?php if ($templatevars['logoType'] == 'poster'): ?>
                    
                        <img src="<?php echo $BASEURL; ?><?php echo $TptPath; ?>poster.png"
                             style="width: 76px;"
                             class="uk-responsive-height"
                             alt="<?php echo $feedattr['title']; ?>">
                    
                    <?php else: ?>
                        <img src="<?php echo $BASEURL; ?><?php echo $TptPath; ?>logo.png"
                             style='width:<?php echo $templatevars['logoSize']; ?>'
                             class="uk-responsive-height"
                             alt="<?php echo $feedattr['title']; ?>">
                    
                <?php endif; ?>
            </a>
        </div>
        <div class="uk-navbar-right">
            <a class="uk-navbar-toggle" href="#tm-mobile" uk-toggle="">
                <div uk-navbar-toggle-icon="" class="uk-navbar-toggle-icon uk-icon"></div>
            </a>
        </div>
    </nav>
    <!-- mobile-modal -->
    <div id="tm-mobile" class="uk-modal-full uk-modal" uk-modal="">
        <div class="uk-modal-dialog uk-modal-body uk-text-center uk-flex"
             uk-height-viewport=""
             style="box-sizing: border-box; min-height: 100vh; height: 100vh;">
            <button class="uk-modal-close-full uk-close uk-icon"
                    type="button"
                    uk-close=""></button>
            <div class="uk-margin-auto-vertical uk-width-1-1">
                <div class="uk-child-width-1-1 uk-grid" uk-grid="">
                    <div>
                        <div class="uk-panel">
                            <ul class="uk-nav uk-nav-primary uk-nav-center">
                                <li <?php if ($pagename == ''): ?>class="uk-active"<?php endif; ?>>
                                    <a href="<?php echo $BASEURL; ?>">Home</a>
                                </li>

                                <?php $pagearr=array(); ?>
                                <?php foreach ((explode(',',$UI)?:[]) as $tpath): ?>
                                    <?php foreach ((glob($tpath.'/pages/*.html')?:[]) as $template): ?>
                                        <?php if (!in_array(basename($template),$pagearr)): ?>
                                            <li>
                                                <a href="<?php echo $BASEURL; ?><?php echo $feedhome; ?><?php echo $feedattr['slug']; ?>/show/page/<?php echo basename($template,'.html'); ?><?php echo $exthtml; ?>"><?php echo basename($template,'.html'); ?></a>
                                            </li>

                                            <?php $pagearr=array_merge($pagearr,array(basename($template))); ?>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                <?php endforeach; ?>

                                <!-- podcast subpages -->
                                <?php $pagearr=array(); ?>
                                <?php foreach ((explode(',',$UI)?:[]) as $tpath): ?>
                                    <?php foreach ((glob($tpath.'/pages/*',GLOB_ONLYDIR)?:[]) as $dir): ?>
                                        <?php if (basename($dir) != 'podcast'): ?>
                                            <?php if (!in_array(basename($dir),$pagearr)): ?>
                                                <li>
                                                    <a href="#"><?php echo basename($dir); ?></a>
                                                    <div class="uk-navbar-dropdown">
                                                        <ul class="uk-nav uk-navbar-dropdown-nav">
                                                            <?php foreach ((glob($tpath.'/pages/'.basename($dir).'/*.html')?:[]) as $template): ?>
                                                                <li>
                                                                    <a href="<?php echo $BASEURL; ?><?php echo $feedhome; ?><?php echo $feedattr['slug']; ?>/show/page/<?php echo basename($dir); ?>/<?php echo basename($template,'.html'); ?><?php echo $exthtml; ?>"><?php echo basename($template,'.html'); ?></a>
                                                                </li>
                                                            <?php endforeach; ?>
                                                        </ul>
                                                    </div>
                                                </li>


                                                <?php $pagearr=array_merge($pagearr,array(basename($dir))); ?>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                    <?php if ($templatevars['navisearch'] == 'on'): ?>
                        <div>
                            <div class="uk-panel widget-search" id="widget-search-1">
                                <form id="search-mobile" action="<?php echo $BASEURL; ?>" method="get" role="search"
                                      class="uk-search uk-search-default">
                                    <span uk-search-icon="" class="uk-search-icon uk-icon"></span>
                                    <input name="s" placeholder="Suche&nbsp;…" type="search" class="uk-search-input">
                                </form>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>