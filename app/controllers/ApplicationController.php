<?php

namespace App\Controllers;

use Core\Components\ActionController;

class ApplicationController extends ActionController
{
  public function catch()
  {
    $site_redirect_url = $this->config('nowqrcode.site_redirect_url');
    header("Location: " . $site_redirect_url);
    exit;
  }

  public function nowqrcode()
  {
    $uuid = $this->route_param('uuid');
    $qr_lookup_url = $this->config('nowqrcode.qr_lookup_url') . "/" . $uuid;
    header("Location: " . $qr_lookup_url);
    exit;
  }
}
