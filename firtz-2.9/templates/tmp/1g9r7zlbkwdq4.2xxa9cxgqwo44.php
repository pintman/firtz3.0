
    <div id="player-<?php echo $item['slug']; ?>"></div>
    <script src="<?php echo $BASEURL; ?>ext/webplayer/embed.js"></script>
    <script>
        podlovePlayer("#player-<?php echo $item['slug']; ?>", {
            show: {
                title: '<?php echo $this->raw($feedattr['title']); ?>',
                subtitle: <?php echo json_encode($feedattr['description']); ?>,
                summary: <?php echo json_encode($feedattr['summary']); ?>,
                poster: '<?php echo $feedattr['image']; ?>',
                link: '<?php echo $BASEURL; ?>'
            },
            title: <?php echo json_encode($item['title']); ?>,
            subtitle: <?php echo json_encode($item['description']); ?>,
            summary:  <?php echo json_encode($item['summary']); ?>,
            <?php if ($feedattr['language'] =='de-DE'): ?>
            publicationDate: "<?php echo date('Y-m-d', strtotime($item['date'])); ?>T<?php echo date('H:m:s+00:00', strtotime($item['date'])); ?>",
            
            <?php else: ?>
            publicationDate: "<?php echo date('Y-d-m', strtotime($item['date'])); ?>T<?php echo date('H:m:s+00:00', strtotime($item['date'])); ?>",
            
            <?php endif; ?>
            poster: <?php if ($item['image']): ?>"<?php echo $item['image']; ?>"<?php else: ?>"<?php echo $feedattr['image']; ?>"<?php endif; ?>,
            duration: "<?php echo $item['duration']; ?>",
            link: "<?php echo $BASEURL; ?><?php echo $feedattr['slug']; ?>/show/<?php echo $item['slug']; ?>",
            <?php if ($item['chapters']): ?>"chapters": <?php echo json_encode($item['chapters']); ?>,<?php endif; ?>
            audio: [<?php foreach (($item['audiofiles']?:[]) as $audiotype=>$audio): ?>
                <?php if (substr($audio['type'],0,5)=='audio' || substr($audio['type'],0,5)=='video'): ?>
                {
                    url: '<?php echo $audio['link']; ?>',
                    mimeType: '<?php echo $audio['type']; ?>',
                    size: '<?php echo $audio['length']; ?>',
                    title: 'Audio <?php echo $audiotype; ?>'
                },
                <?php endif; ?>
            <?php endforeach; ?>],
            reference: {
                base: '<?php echo $BASEURL; ?>ext/webplayer',
                config: '<?php echo $BASEURL; ?><?php echo $feedattr['slug']; ?>/share/<?php echo $item['slug']; ?>',
                share: '<?php echo $BASEURL; ?>share'
            },
            theme: {
                main: '<?php echo $templatevars['color']; ?>'
                <?php if ($extvars['webplayer']['color']): ?>,
                highlight: '<?php echo $extvars['webplayer']['color']; ?>'<?php endif; ?>
            },
            runtime: {
                platform: 'desktop',
                <?php if ($feedattr['language'] =='de-DE'): ?>language: 'de'<?php else: ?>language: 'en'<?php endif; ?>
            }
            <?php if (isset($item['contributors_data'])): ?>,
            contributors: [
                <?php foreach (($item['contributors_data']?:[]) as $owner=>$own): ?>
                {
                    avatar: '<?php echo $own['image']; ?>',
                    name: '<?php echo $own['name']; ?>'
                },
                <?php endforeach; ?>
            ]
            <?php endif; ?>
        });
    </script>
