<?php
require_once __DIR__ . DIRECTORY_SEPARATOR .'AppTable.php';
require_once __DIR__ . DIRECTORY_SEPARATOR .'ProjectTable.php';

use App\Table as AppTable;
use Project\Table as ProjectTable;

AppTable::get();
ProjectTable::get();
