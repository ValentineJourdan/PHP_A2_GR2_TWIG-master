<?php
/**
 * @author Benjamin GUILLEMANT (https://github.com/BenjaminGuillemant).
 * This code is under MIT licence (see https://github.com/Irvyne/license/blob/master/MIT.md)
 */

require __DIR__.'/_header.php';

$categories = getCategories($link);

require __DIR__.'/_footer.php';

include __DIR__.'/template/categories.php';