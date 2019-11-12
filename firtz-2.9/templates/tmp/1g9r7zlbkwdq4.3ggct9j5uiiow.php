<!--podlove-sub-button-->
<script type="text/javascript">
    window.podcastData = {
        "title": <?php echo $this->raw(json_encode($feedattr['title'])); ?>,
        "subtitle": <?php echo $this->raw(json_encode($feedattr['description'])); ?>,
        "description": <?php echo $this->raw(json_encode($feedattr['summary'])); ?>,
        "cover": "<?php echo $feedattr['image']; ?>",
        "feeds": [ <?php foreach (($feedattr['audioformats']?:[]) as $format): ?>
            {
                "type":"<?php echo explode('/',$mimetypes[$format])[0]; ?>",
                "format": "<?php echo $format; ?>",
                "url": "<?php echo $feedattr['baserel']; ?><?php echo $format; ?><?php echo $extxml; ?>",
            },<?php endforeach; ?>
        ]
    }
</script>
<script class="podlove-subscribe-button"
        src="https://cdn.podlove.org/subscribe-button/javascripts/app.js"
        data-format="cover"
        data-language="de"
        data-size="big"
        data-json-data="podcastData"
        data-colors="<?php echo $templatevars['color']; ?>;<?php echo $templatevars['dark']; ?>;<?php echo $templatevars['color']; ?>;;;;#fff;<?php echo $templatevars['color']; ?>;; "
        data-buttonid="psb-<?php echo $feedattr['slug']; ?>"
        data-style="<?php echo $templatevars['subscribe']; ?>"></script>
<style>
    #psb-<?php echo $feedattr['slug']; ?> {
        background: #fff;
    }
</style>
<!--//podlove-sub-button-->