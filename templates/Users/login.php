<!-- File: templates/Articles/add.php -->

<!-- <h1>Login</h1> -->
<?php
    // echo $this->Form->create();
    // // Hard code the user for now.
    // echo $this->Form->control('email');
    // echo $this->Form->control('password');
    // echo $this->Form->button(__('Login'));
    // echo $this->Form->end();
?>




<div id="main" role="main">

      <!-- MAIN CONTENT -->
    <?php // echo $this->Form->create();  ?>

      <form class="lockscreen animated flipInY" method="post" enctype="multipart/form-data" action="">
      
        <div class="logo">
          <h1 class="semi-bold"><!-- <img src="oldimg/logo-o.png" alt="" />  --><span style="color:#4FACE5">Admin</span>Panel</h1>
        </div>
        <div>
          <?php echo $this->Html->image('/admin_theme/oldimg/avatars/logo1.png',array('height' => '120', 'width' => '120')); ?>
          <div>
            <h1><i class="fa fa-user fa-3x text-muted air air-top-right hidden-mobile"></i>Admin Login </h1>
                <div class="input-group">
              <input class="form-control" type="text" name="email" placeholder="Username">
              <div class="input-group-btn">
                <a class="btn btn-primary" type="submit">
                  <i class="fa fa-user"></i>
                </a>
              </div>
            </div>
</br>
            <div class="input-group">
              <input class="form-control" type="password" name="password" placeholder="Password">
              <div class="input-group-btn">
                <a class="btn btn-primary" type="submit">
                  <i class="fa fa-key"></i>
                </a>
              </div>
            </div>
            </br>

<div class="input-group">
            <input type="checkbox" class="ace" name="remember" value="1"   checked="checked" />

                                <span class="lbl"> Remember Me | <a href=""/> Forget Password? </a></span>
            </div>
            </br>


            <div class="input-group">
          <button type="submit" class="btn btn-primary" name="submit">
                    Sign in
                  </button>
            </div>
          
          </div>

        </div>
        <p class="font-xs margin-top-5">
        Version: V.2.0.1  Copyright &copy;  2020

        </p>
      </form>

    </div>
