<!Doctype html>
 <head>
 <style type="text/css">
  body{
    background:url('images/typewriter.png') no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size:cover;
    -o-background-size:cover;
    background-size:cover;
    }

    body h1{
    font-style: bold;
    color: white;
    margin: 0em auto;
    border-top-style: dashed;
    border-bottom-style: solid;
    border-color: #7a86de;
    font-size: 30pt;
    font-family: Gill Sans MT;
    padding: 8px;
    width: 800px;
    }

    .box{
    width: 500px;
    height: 600px;
    margin: 3em auto;
    border-style: groove;
    border-color: #7a86de;
    padding-top: 25px;
    padding-left: 30px;
    background-color:rgba(40, 50, 76, 0.66);
    color: white;
    }

    .box p{
    font-size: 11pt;
    font-weight: bold; 
    margin-bottom: 0px;
    margin-left: 50px;
    margin-top: 5px;
    }

    .form{
    width: 350px;
    margin-left: 50px; 
    height: 45px;
    border-radius: 5px;
    }

    .form2{
    margin-left: 36px;
    margin-top: 25px;
    height: 55px;
    width: 350px;
    background-color: #204354;
    border-color: #9ac0de;
    }


</style>
     <title>Register</title>
 </head>
 <body>

<?php $__env->startSection('content'); ?>
<div class="container">
<h1><center>Today a reader, tomorrow a programmer.</center></h1>
<div class='box'>
                     <form class="form-horizontal" role="form" method="POST" action="<?php echo e(route('register')); ?>">
                            <?php echo e(csrf_field()); ?>


                    <h2>Go get our eBook</h2> 
                    <h4>Fill in the form to get instant access.</h4>
        
                            <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
                       <p>Name</p>
                        <input id="name" type="text" class="form" name="name" value="<?php echo e(old('name')); ?>" required autofocus>

                                <?php if($errors->has('name')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('name')); ?></strong>
                                    </span>
                                <?php endif; ?>
                             </div>

                            <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                    <p>Email</p>
                        <input id="email" type="email" class="form" name="email" value="<?php echo e(old('email')); ?>"  required>

                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                    
                            <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                    <p>Password</p>
                        <input id="password" type="password" class="form" name="password" required>

                                <?php if($errors->has('password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                     </div>
                        <div class="form-group">
                    <p>Confirm password</p>
                        <input id="password-confirm" type="password" class="form" name="password_confirmation" required>
                        </div>
 <button type="submit" class="form2">
                                    Register
                               </button>                                             
            </form>

</div>
<?php $__env->stopSection(); ?>
 </body>
 </html>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>