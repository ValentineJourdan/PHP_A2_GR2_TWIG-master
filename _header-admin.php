<?php
/**
 * @author Benjamin GUILLEMANT (https://github.com/BenjaminGuillemant).
 * This code is under MIT licence (see https://github.com/Irvyne/license/blob/master/MIT.md)
 */

require __DIR__.'/_header.php';

if (!isConnected()) {
    header('Location: ../login.php');
    die('Forbidden Area');
}

