<section id="aa-myaccount">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="aa-myaccount-area">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="aa-myaccount-register">
                                <h4 style="text-align: center">Register</h4>
                                <form action="<?php echo e(route('register.custom')); ?>" method="POST" enctype="multipart/form-data"
                                  class="aa-login-form">
                                    <?php echo csrf_field(); ?>
                                    <label for="">Username<span>*</span></label>
                                    <input type="text" placeholder="Name" id="name" class="text-danger" name="name"
                                           required autofocus>
                                    <?php if($errors->has('name')): ?>
                                        <span class="text-danger"><?php echo e($errors->first('name')); ?></span>
                                    <?php endif; ?>

                                    <label for="">Email address<span>*</span></label>
                                    <input type="text" placeholder="Email" id="email_address"
                                        name="email" required autofocus>
                                    <?php if($errors->has('email')): ?>
                                        <span class="text-danger"><?php echo e($errors->first('email')); ?></span>
                                    <?php endif; ?>

                                    <label for="">Password<span>*</span></label>
                                    <input type="password" placeholder="Password" id="password" name="password"
                                        required>

                                    <button type="submit" class="aa-browse-btn">Register</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php /**PATH C:\wamp64\www\my_aoo\resources\views/auth/registration.blade.php ENDPATH**/ ?>