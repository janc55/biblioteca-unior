<style>
    body {
        background: linear-gradient(135deg, #f5f5f5, #eeeeee);
        font-family: 'Segoe UI', sans-serif;
    }

    .login-box {
        background: white;
        border-radius: 20px;
        box-shadow: 0 8px 20px rgba(211, 47, 47, 0.2);
        padding: 40px 30px;
        max-width: 420px;
        margin: auto;
    }

    .login-logo img {
        width: 90px;
        margin-bottom: 10px;
    }

    .login-logo h1 {
        color: #d32f2f;
        font-size: 26px;
        font-weight: 700;
        margin-top: 5px;
    }

    .form-control {
        background: #fafafa;
        border: 2px solid #ddd;
        color: #333;
        border-radius: 12px;
        padding: 12px 15px;
        transition: all 0.3s ease;
    }

    .form-control:focus {
        border-color: #d32f2f;
        box-shadow: 0 0 8px rgba(211, 47, 47, 0.3);
        background-color: #fff;
    }

    .input-group-text {
        background: transparent;
        border: none;
        color: #d32f2f;
        font-size: 18px;
    }

    .btn-red {
        background-color: #d32f2f;
        color: white;
        font-weight: bold;
        border-radius: 12px;
        transition: 0.3s ease-in-out;
        padding: 10px 0;
    }

    .btn-red:hover {
        background-color: #b71c1c;
        transform: scale(1.03);
    }

    .btn-light {
        background-color: #f1f1f1;
        color: #d32f2f;
        font-weight: 500;
        border-radius: 12px;
        padding: 10px 0;
        transition: 0.3s ease;
    }

    .btn-light:hover {
        background-color: #e0e0e0;
        transform: scale(1.03);
    }

    .icheck-primary input:checked + label::before {
        background-color: #d32f2f !important;
        border-color: #d32f2f !important;
    }

    .divider {
        text-align: center;
        margin: 20px 0;
        color: #aaa;
        font-weight: bold;
        position: relative;
    }

    .divider::before,
    .divider::after {
        content: "";
        height: 1px;
        width: 40%;
        background: #ddd;
        position: absolute;
        top: 50%;
    }

    .divider::before {
        left: 0;
    }

    .divider::after {
        right: 0;
    }
</style>


<?php ( $login_url = View::getSection('login_url') ?? config('adminlte.login_url', 'login') ); ?>
<?php ( $register_url = View::getSection('register_url') ?? config('adminlte.register_url', 'register') ); ?>
<?php ( $password_reset_url = View::getSection('password_reset_url') ?? config('adminlte.password_reset_url', 'password/reset') ); ?>

<?php if(config('adminlte.use_route_url', false)): ?>
    <?php ( $login_url = $login_url ? route($login_url) : '' ); ?>
    <?php ( $register_url = $register_url ? route($register_url) : '' ); ?>
    <?php ( $password_reset_url = $password_reset_url ? route($password_reset_url) : '' ); ?>
<?php else: ?>
    <?php ( $login_url = $login_url ? url($login_url) : '' ); ?>
    <?php ( $register_url = $register_url ? url($register_url) : '' ); ?>
    <?php ( $password_reset_url = $password_reset_url ? url($password_reset_url) : '' ); ?>
<?php endif; ?>


    <?php $__env->startSection('auth_body'); ?>
<div class="text-center mb-4">
      <h1 style="color: #d32f2f; font-size: 24px; font-weight: bold;">Biblioteca Virtual</h1>
</div>

<form action="<?php echo e($login_url); ?>" method="post">
    <?php echo csrf_field(); ?>

    <div class="input-group mb-3">
        <input type="text" name="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
               value="<?php echo e(old('email')); ?>" placeholder="Código de estudiante" autofocus>
        <div class="input-group-append">
            <span class="input-group-text"><i class="fas fa-user"></i></span>
        </div>
        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <span class="invalid-feedback d-block" role="alert"><strong><?php echo e($message); ?></strong></span>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>

    <div class="input-group mb-3">
        <input type="password" name="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
               placeholder="Contraseña">
        <div class="input-group-append">
            <span class="input-group-text"><i class="fas fa-lock"></i></span>
        </div>
        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <span class="invalid-feedback d-block" role="alert"><strong><?php echo e($message); ?></strong></span>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>

    <div class="row mb-3">
        <div class="col-6">
            <div class="icheck-primary">
                <input type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                <label for="remember">Recordar</label>
            </div>
        </div>
        <div class="col-6 text-right">
            <button type="submit" class="btn btn-red btn-block">
                <i class="fas fa-sign-in-alt"></i> Ingresar
            </button>
        </div>
    </div>
</form>

<div class="divider">O</div>

<form action="<?php echo e(route('invitado')); ?>">
    <?php echo csrf_field(); ?>
    <button type="submit" class="btn btn-light btn-block">
        <i class="fas fa-user-secret"></i> Ingresar como invitado
    </button>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::auth.auth-page', ['auth_type' => 'login'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\ProgramData\envkit\projects\biblioteca\resources\views/auth/login.blade.php ENDPATH**/ ?>