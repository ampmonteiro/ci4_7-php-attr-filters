<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Minified version -->
    <link rel="stylesheet" href="https://cdn.simplecss.org/simple.min.css">
</head>

<body>
    <?= form_open(url_to('home.create')) ?>
    <label>
        Modulo
        <input type="text" name="module">
    </label>

    <label>
        with auth
        <input type="checkbox" name="auth">
    </label>
    <button>Create</button>
    </form>


    <?php if (session('module')): ?>
        <p>Modulos</p>
        <ul>
            <?php foreach (session('module') as $item): ?>
                <li><?= $item ?></li>
            <?php endforeach ?>
        </ul>

        <?= form_open(url_to('home.delete')) ?>
        <button>delete</button>
        </form>
    <?php endif ?>

    <?php if (session('auth')): ?>
        <p>auth: yes</p>

    <?php endif ?>

    <p>
        <a href="<?= url_to('secret.index') ?>">
            Secret Area
        </a>
    </p>
</body>

</html>