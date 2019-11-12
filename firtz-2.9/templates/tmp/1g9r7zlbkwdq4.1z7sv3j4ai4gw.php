<!-- breadcrumb -->
<div id="navline-white">
    <?php foreach (($items?:[]) as $item): ?>
        <div class="uk-container uk-text-white">
            <a class="bc-link" href="<?php echo $BASEURL; ?>"><?php echo $feedattr['title']; ?></a> > <?php echo $dict_navi_episode; ?>: <a
                class="bc-link" href="<?php echo $BASEURL; ?><?php echo $feedattr['slug']; ?>/show/<?php echo $item['slug']; ?>"><?php echo $item['slug']; ?> /
            <?php echo $item['title']; ?></a>
        </div>
    <?php endforeach; ?>
</div>


<div class="uk-section-default uk-section">
    <div class="uk-container">
        <div class="uk-grid-margin uk-grid" uk-grid="">
            <!-- episode article: <?php echo $item['slug']; ?> -->
            <?php foreach (($items?:[]) as $item): ?>
                <div class="uk-width-3-4@m uk-first-column">
                    <article class="uk-article status-publish format-standard uk-background-default"
                             typeof="Article">

                        <!-- episode metadata -->
                        <meta property="name" content="<?php echo $item['title']; ?>">
                        <meta property="author" typeof="Person" content="<?php echo $feedattr['author']; ?>">
                        <meta class="uk-margin-remove-adjacent" property="datePublished"
                              content="<?php echo $item['date']; ?>">

                        <?php if ($item['banner'] != ''): ?>
                            <!-- episode banner -->
                            <div class="uk-inline-clip uk-transition-toggle uk-margin-large-bottom">
                                <img width="1200"
                                     height="200"
                                     src="<?php echo $item['banner']; ?>"
                                     class="attachment-post-thumbnail size-post-thumbnail"
                                     alt="Episode <?php echo $item['slug']; ?>"
                                     property="url">
                                <?php if ($item['bannerLicense'] != ''): ?>
                                    <div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-default">
                                        <p>
                                            <?php echo $dict_license; ?>: <?php echo $item['bannerLicense']; ?><?php if ($item['bannerURL'] != ''): ?>,<a target="_blank" href="<?php echo $item['bannerURL']; ?>"> <?php echo $item['bannerPage']; ?></a><?php endif; ?>
                                        </p>
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>

                        <?php foreach ((explode(',',$UI)?:[]) as $tpath): ?>
                            <?php foreach ((glob($tpath.'/episode-header/*.html')?:[]) as $template): ?>
                                <!-- hook: <?php echo 'episode-header/'.basename($template); ?> -->
                                <?php echo $this->render('episode-header/'.basename($template),$this->mime,get_defined_vars(),0); ?>
                            <?php endforeach; ?>
                        <?php endforeach; ?>

                        <!-- produces by -->
                        <div class="uk-container uk-container-small uk-position-relative uk-background-default uk-text-center">
                            <h2 class="uk-article-title uk-margin-remove-bottom"><?php echo $item['title']; ?></h2>
                            <p class="uk-article-meta uk-padding-small uk-padding-remove-top uk-padding-remove-bottom">
                                <?php echo $dict_publicBy; ?> <a href="<?php echo $BASEURL; ?>"><?php echo $feedattr['author']; ?></a> <?php echo $dict_on; ?> <time datetime="<?php echo date('Y-d-m', strtotime($item['date'])); ?>T<?php echo date('H:i:s+00:00',strtotime($item['date'])); ?>"><?php echo date('d M. Y', strtotime($item['date'])); ?></time>.
                            </p>
                        </div>

                        <?php if ((trim($item['subtitle'])!='')): ?>
                            <div class="uk-grid" uk-grid>
                                <div class="uk-width-expand@m">
                                    <div class="uk-card uk-background-default uk-card-body">
                                        <?php if ((trim($item['subtitle'])!='')): ?>
                                            <!-- episode description -->
                                            <p><b><?php echo $this->raw($item['subtitle']); ?></b></p>

                                            <p><?php echo $this->raw($item['summary']); ?></p>
                                        <?php endif; ?>

                                        <?php if (isset($item['contributors_data'])): ?>
                                            <?php foreach (($item['contributors_data']?:[]) as $owner=>$own): ?>
                                                <?php if ($own['type'] == 'guest'): ?>
                                                    <!-- contributors type: guest -->
                                                    <div class="uk-comment">
                                                        <header class="uk-comment-header uk-grid-medium uk-flex-middle"
                                                                uk-grid>
                                                            <div class="uk-width-auto">
                                                                <?php if (isset($own['image'])): ?>
                                                                    <img class="uk-border-circle uk-box-shadow-small"
                                                                         src="<?php echo $own['image']; ?>"
                                                                         width="70"
                                                                         height="70"
                                                                         alt="<?php echo $own['type']; ?> <?php echo $own['name']; ?>">
                                                                <?php endif; ?>
                                                            </div>
                                                            <div class="uk-width-expand">
                                                                <h6 class="uk-margin-remove">
                                                                    <?php echo $dict_guest; ?>

                                                                </h6>
                                                                <h6 class="uk-margin-remove uk-text-secondary uk-text-bold">
                                                                    <a class="uk-link-reset"
                                                                       target="_blank" href="<?php echo $own['url']; ?>"><?php echo $own['name']; ?></a>
                                                                </h6>
                                                                <ul class="uk-comment-meta uk-subnav uk-subnav-divider uk-margin-remove-top">
                                                                    <li class="uk-width-1-10">
                                                                        <?php if (isset($own['description'])): ?>
                                                                            <?php echo $own['description']; ?>

                                                                        <?php endif; ?>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </header>
                                                    </div>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="uk-width-auto@m uk-background-default uk-card-body uk-visible@m">
                                    <?php if (isset($item['image'])): ?>
                                        
                                            <!-- episode poster -->
                                            <img class="uk-border-rounded uk-box-shadow-medium uk-visible@m"
                                                 src="<?php echo $item['image']; ?>"
                                                 width="200"
                                                 height="200"
                                                 alt="<?php echo $item['title']; ?> | Episode: <?php echo $item['title']; ?>">
                                        
                                        <?php else: ?>
                                            <!-- podcast poster -->
                                            <img class="uk-border-rounded uk-box-shadow-medium uk-visible@m"
                                                 src="<?php echo $feedattr['image']; ?>"
                                                 width="200"
                                                 height="200"
                                                 alt="<?php echo $item['title']; ?> | Episode: <?php echo $item['title']; ?>">
                                        
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endif; ?>

                        <div class="article-player">
                            <?php foreach ((explode(',',$UI)?:[]) as $tpath): ?>
                                <?php foreach ((glob($tpath.'/episode-player/*.html')?:[]) as $template): ?>
                                    <!-- hook: <?php echo 'episode-player/'.basename($template); ?> -->
                                    <?php echo $this->render('episode-player/'.basename($template),$this->mime,get_defined_vars(),0); ?>
                                <?php endforeach; ?>
                            <?php endforeach; ?>

                            <?php if ($item['noaudio']==''): ?>
                                <!--article-player-->
                                <?php foreach ((explode(',',$UI)?:[]) as $tpath): ?>
                                    <?php foreach ((glob($tpath.'/player/*.html')?:[]) as $template): ?>
                                        <?php echo $this->render('player/'.basename($template),$this->mime,get_defined_vars(),0); ?>
                                    <?php endforeach; ?>
                                <?php endforeach; ?>

                                <?php if (isset($item['contributors_data'])): ?>
                                    <!-- contributors type: team -->
                                    <h4 class="uk-text-secondary"><?php echo $dict_contris; ?></h4>
                                    <?php foreach (($item['contributors_data']?:[]) as $owner=>$own): ?>
                                        <?php if ($own['type']=='team'): ?>
                                            <div class="uk-comment">
                                                <div class="uk-comment-header uk-grid-medium uk-flex-middle"
                                                     uk-grid>
                                                    <div class="uk-width-auto">
                                                        <?php if (isset($own['image'])): ?>
                                                            <img class="uk-border-circle uk-box-shadow-small"
                                                                 src="<?php echo $own['image']; ?>"
                                                                 width="50"
                                                                 height="50"
                                                                 alt="<?php echo $own['type']; ?> <?php echo $own['name']; ?>">
                                                        <?php endif; ?>
                                                    </div>
                                                    <div class="uk-width-expand">
                                                        <h6 class="uk-margin-remove uk-text-bold">
                                                            <a class="uk-link-reset" target="_blank" href="<?php echo $own['url']; ?>"><?php echo $own['name']; ?></a>
                                                        </h6>
                                                        <ul class="uk-comment-meta uk-subnav uk-subnav-divider uk-margin-remove-top">
                                                            <li class="uk-width-1-10">
                                                                <?php if (isset($own['description'])): ?>
                                                                    <?php echo $own['description']; ?>

                                                                <?php endif; ?>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="uk-width-expand">
                                                        <ul class="uk-comment-meta uk-subnav uk-margin-remove-top">
                                                            <?php if (isset($own['twitter'])): ?>
                                                                <li>
                                                                    <a target="_blank"
                                                                       href="https://twitter.com/<?php echo $own['twitter']; ?>">
                                                                        <span class="uk-icon-button-dark"
                                                                              uk-icon="icon: twitter"></span>
                                                                    </a>
                                                                </li>
                                                            <?php endif; ?>
                                                            <?php if (isset($own['facebook'])): ?>
                                                                <li>
                                                                    <a target="_blank"
                                                                       href="https://facebook.com/<?php echo $own['facebook']; ?>">
                                                                        <span class="uk-icon-button-dark"
                                                                              uk-icon="icon: facebook"></span>
                                                                    </a>
                                                                </li>
                                                            <?php endif; ?>
                                                            <?php if (isset($own['xing'])): ?>
                                                                <li>
                                                                    <a target="_blank"
                                                                       href="https://www.xing.com/profile/<?php echo $own['xing']; ?>">
                                                                        <span class="uk-icon-button-dark"
                                                                              uk-icon="icon: xing"></span>
                                                                    </a>
                                                                </li>
                                                            <?php endif; ?>
                                                            <?php if (isset($own['mastodon'])): ?>
                                                                <li>
                                                                    <a target="_blank"
                                                                       href="<?php echo $own['mastodon']; ?>">
                                                                        <span class="uk-icon-button-dark"
                                                                              uk-icon="icon: mastodon"></span>
                                                                    </a>
                                                                </li>
                                                            <?php endif; ?>
                                                            <?php if (isset($own['github'])): ?>
                                                                <li>
                                                                    <a target="_blank"
                                                                       href="https://github.com/<?php echo $own['github']; ?>">
                                                                        <span class="uk-icon-button-dark"
                                                                              uk-icon="icon: github"></span>
                                                                    </a>
                                                                </li>
                                                            <?php endif; ?>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                <?php endif; ?>

                                <!--episode downloads-->
                                <h4 class="uk-text-secondary">Download</h4>
                                <p><?php echo $this->raw($dict_epi_duration); ?> <b><?php echo $item['duration']; ?></b> <?php echo $dict_epi_duration_end; ?></p>

                                <form class="uk-form-stacked">
                                    <!--download-->
                                    <?php foreach (($item['audiofiles']?:[]) as $audiotype=>$audiofile): ?>
                                        <div class="uk-form-controls uk-margin-top">
                                            <b class="uk-text-primary">Download:</b> <?php echo $audiotype; ?>

                                            (<?php echo ceil($audiofile['length'] / 1048576); ?> MB)
                                        </div>
                                        <div class="uk-inline uk-width-3-4">
                                            <a class="uk-form-icon"
                                               title="download <?php echo $audiotype; ?> - size: <?php echo ceil($audiofile['length'] / 1048576); ?> MB"
                                               href="<?php echo $audiofile['link']; ?>"
                                               uk-icon="icon: cloud-download"></a>
                                            <input class="uk-input uk-text-muted uk-width-1-1"
                                                   type="text"
                                                   field="<?php echo $audiotype; ?>"
                                                   placeholder="<?php echo $audiofile['link']; ?>"
                                                   value="<?php echo $audiofile['link']; ?>">
                                        </div>
                                    <?php endforeach; ?>

                                    <!--download torrents-->
                                    <?php if ($feedattr['bitlove']): ?>
                                        <?php foreach (($feedattr['bitlove']?:[]) as $audiotype=>$bitlove): ?>
                                            <div class="uk-form-controls uk-margin-top">
                                                <b class="uk-text-primary">Torrent:</b> <?php echo $audiotype; ?>

                                                (<?php echo ceil($audiofile['length'] / 1048576); ?> MB)
                                            </div>
                                            <div class="uk-inline uk-width-3-4">
                                                <a class="uk-form-icon"
                                                   title="download as torrent <?php echo $audiotype; ?> - size: <?php echo ceil($audiofile['length'] / 1048576); ?> MB"
                                                   href="http://bitlove.org/<?php echo $bitlove['user']; ?>/<?php echo $bitlove['feed']; ?>/<?php echo $item['slug']; ?>.<?php echo $audiotype; ?>.torrent"
                                                   uk-icon="icon: pull"></a>
                                                <input class="uk-input uk-text-muted uk-width-1-1"
                                                       type="text"
                                                       field="<?php echo $audiotype; ?>"
                                                       placeholder="<?php echo $audiofile['link']; ?>"
                                                       value="http://bitlove.org/<?php echo $bitlove['user']; ?>/<?php echo $bitlove['feed']; ?>/<?php echo $item['slug']; ?>.<?php echo $audiotype; ?>.torrent">
                                            </div>
                                        <?php endforeach; ?>
                                    <?php endif; ?>

                                </form>
                            <?php endif; ?>

                            <?php if ($item['noaudio']==''): ?>
                                <!--shownotes-->
                                <h4 class="uk-text-secondary">Shownotes</h4>
                            <?php endif; ?>

                            <div class="article">
                                <?php if ((trim($item['shownotes'])!='')): ?><?php echo $this->raw($item['shownotes']); ?><?php endif; ?>
                            </div>

                            <?php if ($item['noaudio']==''): ?>
                                <!--license-->
                                <h4 class="uk-text-secondary"><?php echo $dict_license; ?></h4>
                                <div class="license">
                                    <p>
                                        <?php echo $dict_lic_info; ?>

                                    </p>
                                </div>
                                <div class="production">
                                    <ul>
                                        <?php if (isset($item['contributors_data'])): ?>
                                            <!-- license: contibutors -->
                                            <?php foreach (($item['contributors_data']?:[]) as $owner=>$own): ?>
                                                <li>
                                                    <?php if ($own['type'] =='team'): ?><b><?php echo $dict_podcaster; ?>:</b><?php endif; ?>
                                                    <?php if ($own['type'] =='guest'): ?><b><?php echo $dict_guest; ?>:</b><?php endif; ?>
                                                    <a target="_blank" href="<?php echo $own['url']; ?>"><?php echo $own['name']; ?></a>
                                                </li>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                        <?php if ($item['banner'] != ''): ?>
                                            <!-- license: episode banner -->
                                            <?php if ($item['bannerURL']): ?>
                                                <li>
                                                    <b><?php echo $dict_epi_banner; ?>:</b>
                                                    <a target="_blank"
                                                       href="<?php echo $item['bannerURL']; ?>"><?php echo $item['bannerPage']; ?></a>,
                                                    <?php echo $dict_license; ?>: <?php echo $item['bannerLicense']; ?>

                                                </li>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                        <?php if ($item['image'] != ''): ?>
                                            <!-- license: episode poster -->
                                            <?php if ($feedattr['imageCreator'] != '' and $feedattr['imageLicense'] != '' and $feedattr['imageURL'] != ''): ?>
                                                
                                                    <li>
                                                        <b><?php echo $dict_epi_image; ?>:</b> <?php echo $feedattr['imageCreator']; ?>,
                                                        <?php echo $dict_license; ?>: <a target="_blank"
                                                           href="<?php echo $feedattr['imageURL']; ?>"><?php echo $feedattr['imageLicense']; ?></a>
                                                    </li>
                                                
                                                <?php else: ?>
                                                    <li>
                                                        <b><?php echo $dict_epi_image; ?>:</b> <?php echo $feedattr['title']; ?>,
                                                        <?php echo $dict_license; ?> <a href="<?php echo $BASEURL; ?><?php echo $feedattr['slug']; ?>/show/<?php echo $item['slug']; ?>"><?php echo $feedattr['licensename']; ?></a>
                                                    </li>
                                                
                                            <?php endif; ?>
                                        <?php endif; ?>
                                        <?php if ($item['intro_title']): ?>
                                            
                                                <!-- license: intro sound -->
                                                <li>
                                                    <b><?php echo $dict_epi_intro; ?>:</b>
                                                    <a target="_blank"
                                                       href="<?php echo $item['intro_ownerUrl']; ?>"><?php echo $item['intro_title']; ?></a>
                                                    <?php if ($item['intro_owner']): ?>
                                                        by <a href="<?php echo $item['intro_ownerUrl']; ?>"
                                                              target="_blank"><?php echo $item['intro_owner']; ?></a><?php endif; ?>,
                                                    <?php echo $dict_license; ?>: <a href="<?php echo $item['intro_licUrl']; ?>"
                                                                            target="_blank"><?php echo $item['intro_lic']; ?></a>
                                                </li>
                                            
                                            <?php else: ?>
                                                <?php if ($feedattr['intro']): ?>
                                                    <!-- license: intro sound -->
                                                    <li>
                                                        <b><?php echo $dict_epi_intro; ?>:</b>
                                                        <a target="_blank"
                                                           href="<?php echo $feedattr['intro_ownerUrl']; ?>"><?php echo $feedattr['intro_title']; ?></a>
                                                        <?php if ($feedattr['intro_owner']): ?>
                                                            by <a href="<?php echo $feedattr['intro_ownerUrl']; ?>"
                                                                  target="_blank"><?php echo $feedattr['intro_owner']; ?></a><?php endif; ?>,
                                                        <?php echo $dict_license; ?>: <a href="<?php echo $feedattr['intro_licUrl']; ?>"
                                                                                target="_blank"><?php echo $feedattr['intro_lic']; ?></a>
                                                    </li>
                                                <?php endif; ?>
                                            
                                        <?php endif; ?>
                                        <?php if ($item['outro_title']): ?>
                                            
                                                <!-- license: outro sound -->
                                                <li>
                                                    <b><?php echo $dict_epi_outro; ?>:</b>
                                                    <a target="_blank"
                                                       href="<?php echo $item['outro_ownerUrl']; ?>"><?php echo $item['outro_title']; ?></a>
                                                    <?php if ($item['outro_owner']): ?>
                                                        by <a href="<?php echo $item['outro_ownerUrl']; ?>"
                                                              target="_blank"><?php echo $item['outro_owner']; ?></a><?php endif; ?>,
                                                    <?php echo $dict_license; ?>: <a href="<?php echo $item['outro_licUrl']; ?>"
                                                                            target="_blank"><?php echo $item['outro_lic']; ?></a>
                                                </li>
                                            
                                            <?php else: ?>
                                                <?php if ($feedattr['intro']): ?>
                                                    <!-- license: outro sound -->
                                                    <li>
                                                        <b><?php echo $dict_epi_outro; ?>:</b>
                                                        <a target="_blank"
                                                           href="<?php echo $feedattr['outro_ownerUrl']; ?>"><?php echo $feedattr['outro_title']; ?></a>
                                                        <?php if ($feedattr['outro_owner']): ?>
                                                            by <a href="<?php echo $feedattr['outro_ownerUrl']; ?>"
                                                                  target="_blank"><?php echo $feedattr['outro_owner']; ?></a><?php endif; ?>,
                                                        <?php echo $dict_license; ?>: <a href="<?php echo $feedattr['outro_licUrl']; ?>"
                                                                                target="_blank"><?php echo $feedattr['outro_lic']; ?></a>
                                                    </li>
                                                <?php endif; ?>
                                            
                                        <?php endif; ?>
                                        <?php if ($feedattr['licensename']): ?>
                                            <!-- license: podcast -->
                                            <li>
                                                <b><?php echo $dict_lic_end; ?>:</b>
                                                <?php echo date('d M. Y', strtotime($item['date'])); ?>, <?php echo $dict_license; ?>:
                                                <a href="<?php echo $feedattr['licenseurl']; ?>" target="_blank"
                                                   title="<?php echo $feedattr['licensename']; ?>"><?php echo $feedattr['licensename']; ?></a>
                                            </li>
                                        <?php endif; ?>
                                    </ul>
                                </div>
                            <?php endif; ?>

                            <!--keywords-->
                            <?php if ($item['keywords']): ?>
                                <?php foreach ((explode(',',$item['keywords'])?:[]) as $keyword): ?>
                                    <a class="uk-badge"
                                       href="<?php echo $BASEURL; ?><?php echo $feedattr['slug']; ?>/show/search/<?php echo $keyword; ?>"><?php echo $keyword; ?></a>
                                <?php endforeach; ?>
                            <?php endif; ?>



                            <?php foreach ((explode(',',$UI)?:[]) as $tpath): ?>
                                <?php foreach ((glob($tpath.'/episode-footer/*.html')?:[]) as $template): ?>
                                    <!-- hook: <?php echo 'episode-footer/'.basename($template); ?> -->
                                    <?php echo $this->render('episode-footer/'.basename($template),$this->mime,get_defined_vars(),0); ?>
                                <?php endforeach; ?>
                            <?php endforeach; ?>

                            <?php foreach ((explode(',',$UI)?:[]) as $tpath): ?>
                                <?php foreach ((glob($tpath.'/episode-end/*.html')?:[]) as $template): ?>
                                    <!-- hook: <?php echo 'episode-end/'.basename($template); ?> -->
                                    <?php echo $this->render('episode-end/'.basename($template),$this->mime,get_defined_vars(),0); ?>
                                <?php endforeach; ?>
                            <?php endforeach; ?>

                            <?php foreach ((explode(',',$UI)?:[]) as $tpath): ?>
                                <?php foreach ((glob($tpath.'/article-end/*.html')?:[]) as $template): ?>
                                    <!-- hook: <?php echo 'episode-end/'.basename($template); ?> -->
                                    <?php echo $this->render('article-end/'.basename($template),$this->mime,get_defined_vars(),0); ?>
                                <?php endforeach; ?>
                            <?php endforeach; ?>

                        </div>
                    </article>
                </div>
            <?php endforeach; ?>
            <!--sidebar-->
            <?php echo $this->render('set/sidebar.html',$this->mime,get_defined_vars(),0); ?>
        </div>
    </div>
</div>