<?php
require_once 'init.php';

require_once 'routing.php';

\core\SessionUtils::loadMessages(false);

\core\App::getRouter()->go();