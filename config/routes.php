<?php

use Core\Components\Route;

/* qr codes */

Route::get("/qr/:uuid", "Application@nowqrcode");


/* catchall */
Route::catchall("Application@catch");
