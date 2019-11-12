<div class="tm-header uk-visible@m" uk-header="">
    <div class="uk-navbar-container uk-box-shadow-small"
         uk-sticky=""
         media="768"
         show-on-up=""
         animation="uk-animation-slide-top"
         cls-active="uk-active uk-navbar-sticky">
        <div class="uk-container">
            <nav class="uk-navbar" uk-navbar>
                <div class="uk-navbar-left">
                    <a href="<?php echo $BASEURL; ?>" class="uk-navbar-item uk-logo">
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
                    <ul class="uk-navbar-nav">
                        <li class="uk-active">
                            <a class="uk-navbar-toggle" uk-navbar-toggle-icon
                               href="<?php echo $BASEURL; ?>"></a>
                        </li>
                        <li>
                            <a class="uk-navbar-toggle"
                               href="<?php echo $BASEURL; ?>">Home</a>
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


                <div class="uk-navbar-right">
                    <?php if ($templatevars['navisearch'] == 'on'): ?>
                        <div class="uk-navbar-item widget-search uk-padding-right" id="widget-search-1">
                            <a href="#search-firtz-modal"
                               uk-search-icon=""
                               uk-toggle=""
                               class="uk-search-icon uk-icon"></a>
                            <div id="search-firtz-modal" class="uk-modal-full uk-modal" uk-modal="">
                                <div class="uk-modal-dialog uk-flex uk-flex-center uk-flex-middle"
                                     uk-height-viewport=""
                                     style="box-sizing: border-box; min-height: 100vh; height: 100vh;">
                                    <button class="uk-modal-close-full uk-close uk-icon" type="button"
                                            uk-close=""></button>
                                    <div class="uk-search uk-search-large">
                                        <form id="search-firtz"
                                              action="<?php echo $BASEURL; ?>search"
                                              method="get"
                                              role="search"
                                              class="uk-search uk-search-large">
                                            <input type="text"
                                                   style="display:none;"
                                                   value="<?php echo $BASEURL; ?><?php echo $feedattr['slug']; ?>"
                                                   name="f">
                                            <input name="s"
                                                   placeholder="<?php echo $dict_searchtext; ?>"
                                                   type="search"
                                                   class="uk-search-input uk-text-center"
                                                   autofocus="">
                                            <input type="submit" style="display:none;" value="Submit">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if ($templatevars['navisocial'] == 'on'): ?>
                        <!-- social media icons -->
                        <div class="uk-navbar-item">
                            <ul class="uk-grid-small uk-flex-inline uk-flex-middle uk-flex-nowrap uk-grid" uk-grid="">
                                <?php if ($feedattr['twitter']): ?>
                                    <li>
                                        <a href="https://twitter.com/<?php echo $feedattr['twitter']; ?>"
                                           class="uk-icon-button uk-icon-button-light"
                                           uk-icon="icon: twitter"></a>
                                    </li>
                                <?php endif; ?>
                                <?php if ($feedattr['mastodon']): ?>
                                    <li>
                                        <a href="<?php echo $feedattr['mastodon']; ?>"
                                           class="uk-icon-button uk-icon-button-light"
                                           uk-icon="icon: mastodon"></a>
                                    </li>
                                <?php endif; ?>
                                <?php if ($feedattr['facebook']): ?>
                                    <li>
                                        <a href="https://facebook.com/<?php echo $feedattr['facebook']; ?>"
                                           class="uk-icon-button uk-icon-button-light"
                                           uk-icon="icon: facebook"></a>
                                    </li>
                                <?php endif; ?>
                                <?php if ($feedattr['github']): ?>
                                    <li>
                                        <a href="https://github.com/<?php echo $feedattr['github']; ?>"
                                           class="uk-icon-button uk-icon-button-light"
                                           uk-icon="icon: github"></a>
                                    </li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                </div>
            </nav>
        </div>
    </div>
    <div class="uk-sticky-placeholder"
         style="height: 100px; margin: 0px;"
         hidden="hidden"></div>
</div>