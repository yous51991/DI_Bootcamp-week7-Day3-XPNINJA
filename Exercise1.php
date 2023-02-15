<?php

if (isset($_COOKIE['color_scheme'])) {
    $color_scheme = $_COOKIE['color_scheme'];
} else {
    $color_scheme = 'light';
}

if (isset($_POST['color_scheme'])) {
    setcookie('color_scheme', $_POST['color_scheme'], time() + 60 * 60 * 24 * 7);
    $color_scheme = $_POST['color_scheme'];
    $message = 'Color scheme saved';
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>Color Scheme Preferences</title>
</head>

<body>

    <?php if (isset($message)) : ?>
        <p><?php echo $message; ?></p>
    <?php endif; ?>

    <form method="post">
        <label>
            <input type="radio" name="color_scheme" value="light" <?php echo $color_scheme == 'light' ? 'checked' : ''; ?>> Light
        </label>
        <br>
        <label>
            <input type="radio" name="color_scheme" value="dark" <?php echo $color_scheme == 'dark' ? 'checked' : ''; ?>> Dark
        </label>
        <br>
        <input type="submit" value="Save">
    </form>
    
</body>

</html>