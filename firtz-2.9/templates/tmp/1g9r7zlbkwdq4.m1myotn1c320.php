<?php if ($showpage): ?>
    
        <aside id="tm-sidebar-episode" class="tm-sidebar uk-width-1-4@m">
            <?php echo $this->render('set/sidebar-content.html',$this->mime,get_defined_vars(),0); ?>
        </aside>
    
    <?php else: ?>
        <aside id="tm-sidebar" class="tm-sidebar ps-sidebar uk-width-1-4@m">
            <?php echo $this->render('set/sidebar-content.html',$this->mime,get_defined_vars(),0); ?>
        </aside>
    
<?php endif; ?>

