<?php $__env->startSection('content'); ?>
<style>

    /* NAVBAR */
.navbar {
    background: #1e3c72;
    padding: 1rem;
}

.navbar ul {
    display: flex;
    justify-content: center; /* alinea todo en la misma fila */
    gap: 2rem; /* espacio entre enlaces */
    list-style: none;
    margin: 0;
    padding: 0;
}

.navbar ul li {
    display: inline;
}

.navbar ul li a {
    color: white;
    font-weight: bold;
    text-decoration: none;
    font-size: 1rem;
    padding: 0.5rem 1rem;
    border-radius: 6px;
    transition: background 0.3s, color 0.3s;
}

.navbar ul li a:hover {
    background: #2a5298;
    color: #ffdd57;
}

    /* FORMULARIO */
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background: linear-gradient(to right, #1e3c72, #2a5298);
        min-height: 100vh;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .form-container {
        background: #ffffff;
        border-radius: 12px;
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
        padding: 2rem;
        width: 400px;
        margin-top: 2rem;
    }

    .form-container h2 {
        text-align: center;
        color: #1e3c72;
        font-size: 2rem;
        margin-bottom: 1.5rem;
        text-shadow: 1px 1px 3px rgba(0,0,0,0.2);
    }

    .form-container label {
        font-weight: bold;
        color: #333;
    }

    .form-container input {
        width: 100%;
        padding: 10px;
        margin: 8px 0 16px 0;
        border: 1px solid #ccc;
        border-radius: 6px;
        transition: border-color 0.3s;
    }

    .form-container input:focus {
        border-color: #1e3c72;
        outline: none;
    }

    .form-container button {
        background-color: #1e3c72;
        color: white;
        border: none;
        border-radius: 6px;
        padding: 12px;
        width: 100%;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .form-container button:hover {
        background-color: #2a5298;
    }
</style>

<div class="form-container">
    <h2>Registro</h2>
    <form method="POST" action="<?php echo e(route('register')); ?>">
        <?php echo csrf_field(); ?>

        <div>
            <label for="name">Nombre</label>
            <input id="name" type="text" name="name" required autofocus>
        </div>

        <div>
            <label for="email">Correo</label>
            <input id="email" type="email" name="email" required>
        </div>

        <div>
            <label for="password">Contraseña</label>
            <input id="password" type="password" name="password" required>
        </div>

        <div>
            <label for="password-confirm">Confirmar Contraseña</label>
            <input id="password-confirm" type="password" name="password_confirmation" required>
        </div>

        <button type="submit">Registrar</button>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\fanny\login-lab\resources\views/auth/register.blade.php ENDPATH**/ ?>