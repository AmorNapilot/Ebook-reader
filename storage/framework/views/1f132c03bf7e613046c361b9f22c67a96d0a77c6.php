<!DOCTYPE html>
<html>
<head>
    <title>Login</title>

    <style type="text/css">
  body{
    background:url('/images/typewriter.png') no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size:cover;
    -o-background-size:cover;
    background-size:cover;
    }

    body h1{
    font-style: bold;
    color: white;
    margin: 1em auto;
    border-top-style: dashed;
    border-bottom-style: solid;
    border-color: #7a86de;
    font-size: 30pt;
    font-family: Gill Sans MT;
    padding: 8px;
    width: 800px;
    }

    .box{
    width: 430px;
    height: 500px;
    margin: 3em auto;
    border-style: groove;
    border-color: #7a86de;
    padding-top: 55px;
    padding-left: 35px;
    background-color:rgba(40, 50, 76, 0.66);
    color: white;
    }

    .box h3{
        margin-left: 10px;
    }
    .box p{
    font-size: 12pt;
    font-weight: bold; 
    margin: 10px 50px 20px 10px;
    font-family: Corbel;

    }

    .form{
    width: 350px; 
    height: 45px;
    border-radius: 5px;
    margin-left: 20px;
    color: black;
    }

    .form1{
    margin-left: 4px;
    margin-top: 25px;
    height: 55px;
    width: 350px;
    background-color: #204354;
    border-color: #9ac0de;
    }

</style>
</head>
<body>


<?php $__env->startSection('content'); ?>
<h1><center>Today a reader, tomorrow a programmer.</center></h1>
<div class="box">
<form class="form-horizontal" role="form" method="POST" action="<?php echo e(route('login')); ?>">
                    <?php echo e(csrf_field()); ?>


                         <h3>Continue reading with us</h3>
                         <p>Self-education will make you a fortune but you can't study without a book</p>
                        <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                                <input id="email" type="email" class="form" name="email" value="<?php echo e(old('email')); ?>" placeholder="Email" required autofocus>

                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                        </div>

                        <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">  
                                <input id="password" type="password" class="form" name="password" placeholder="Password" required>

                                <?php if($errors->has('password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                        </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>> Remember Me
                                    </label>
                                
                                <a class="btn btn-link" href="<?php echo e(route('password.request')); ?>">
                                    Forgot Your Password?
                                </a>
                                </div>

                                 <button type="submit" class="form1">
                                    Login
                                </button>
                                
                    </div>
                    </form>
<?php $__env->stopSection(); ?>
</body>
</html>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>