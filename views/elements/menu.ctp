<?php

  $username = $this->Session->read('Auth.User.email');
  $userid = $this->Session->read('Auth.User.id');
  $userlevel = $this->Session->read('Auth.User.level');
?>
<div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">Trends Alert</a>
          <div class="nav-collapse">
            <?php if(!empty($userid)): ?>
            <ul class="nav">
              <li>
                <?php echo $this->Html->link('New Alert', array('controller'=>'alerts','action'=>'add')); ?>
              </li>
              <li>
                <?php echo $this->Html->link('My Alerts', array('controller'=>'alerts','action'=>'index')); ?>
              </li>
              <?php if($userlevel==10): ?>
                <li>
                  <?php echo $this->Html->link('Places', array('controller'=>'places','action'=>'index')); ?>
                </li>
                <li>
                  <?php echo $this->Html->link('Users', array('controller'=>'users','action'=>'index')); ?>
                </li>
              <?php endif; ?>
            </ul>
            <p class="navbar-text pull-right">Logged in as <strong><?php echo $username; ?></strong> 
              [<?php echo $this->Html->link('Logout',array('controller'=>'users','action'=>'logout')); ?>]</p>
          <?php else: ?>
        <?php endif; ?>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>