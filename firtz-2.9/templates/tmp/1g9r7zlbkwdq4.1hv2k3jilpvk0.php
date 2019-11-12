<?php echo $this->render('set/header.html',$this->mime,get_defined_vars(),0); ?>
<?php if ($templatevars['layout'] =='box'): ?>
    
        <div class="uk-offcanvas-content">
            <div class="tm-page">
                <div class="uk-margin-auto">
                    <?php echo $this->render('container.html',$this->mime,get_defined_vars(),0); ?>
                </div>
            </div>
        </div>
    
    <?php else: ?>
        <?php echo $this->render('container.html',$this->mime,get_defined_vars(),0); ?>
    
<?php endif; ?>