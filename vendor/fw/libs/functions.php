<?php

use fw\core\ErrorHandler;

function abort()
{
      throw new \Exception("Страница не найдена", 404);
}



