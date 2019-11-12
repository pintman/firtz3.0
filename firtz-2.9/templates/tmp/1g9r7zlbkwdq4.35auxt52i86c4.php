
<?php echo $this->render('set/navi.html',$this->mime,get_defined_vars(),0); ?>
<?php echo $this->render('set/mobile-navi.html',$this->mime,get_defined_vars(),0); ?>
<?php if (!$showpage): ?>
    
        <!--home-->
        <?php if ($singlepage==false): ?>
            <?php if ($templatevars['home'] == 'standard'): ?>
                <?php echo $this->render('set/home.html',$this->mime,get_defined_vars(),0); ?>
            <?php endif; ?>
            <?php if ($templatevars['home'] == 'sidebar'): ?>
                <?php echo $this->render('set/home-sidebar.html',$this->mime,get_defined_vars(),0); ?>
            <?php endif; ?>
        <?php endif; ?>
        <!--episode-->
        <?php if ($singlepage==true): ?>
            <?php echo $this->render('set/episode.html',$this->mime,get_defined_vars(),0); ?>
        <?php endif; ?>
    
    <?php else: ?>
        <!--page-->
        <?php echo $this->render('set/page.html',$this->mime,get_defined_vars(),0); ?>
    
<?php endif; ?>
<!--footer-->
<?php echo $this->render('set/footer.html',$this->mime,get_defined_vars(),0); ?>