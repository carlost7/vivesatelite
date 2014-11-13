<?php

if ($_SESSION['error'])
{
    ?>
    <div>
        <ul>
            <li><?php echo $_SESSION['error']; ?></li>
        </ul>
    </div>
    <?php
    unset($_SESSION['error']);
}
?>

<?php
if ($_SESSION['mensaje'])
{
    ?>
    <div>
        <ul>
            <li><?php echo $_SESSION['mensaje']; ?></li>
        </ul>
    </div>
    <?php
    unset($_SESSION['mensaje']);
}
?>