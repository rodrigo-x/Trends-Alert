<?php

  $username = $this->Session->read('Auth.Usuario.login');
  $userid = $this->Session->read('Auth.Usuario.id');
?>
<div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">Germídias</a>
          <div class="nav-collapse">
            <?php if(!empty($userid)): ?>
            <ul class="nav">
              <li <?php if($controller == "Monitoramentos") echo 'class="active"'; ?>>
                <?php echo $this->Html->link('Monitoramentos', array('controller'=>'monitoramentos')); ?>
              </li>
              <li <?php if($controller == "Tags") echo 'class="active"'; ?>>
                <?php echo $this->Html->link('Tags', array('controller'=>'tags')); ?>
              </li>
              <li <?php if($controller == "Seguidors") echo 'class="active"'; ?>>
                <?php echo $this->Html->link('Seguidores', array('controller'=>'seguidors')); ?>
              </li>
              <li <?php if($controller == "Usuarios") echo 'class="active"'; ?>>
                <?php echo $this->Html->link('Usuários', array('controller'=>'usuarios')); ?>
              </li>
            </ul>
            <p class="navbar-text pull-right">Você entrou como <strong><?php echo $username; ?></strong> 
              [<?php echo $this->Html->link('Sair',array('controller'=>'usuarios','action'=>'logout')); ?>]</p>
          <?php else: ?>
        <?php endif; ?>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>