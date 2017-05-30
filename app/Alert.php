<?php
/**
 * Created by PhpStorm.
 * User: hendrikob
 * Date: 5/25/17
 * Time: 11:55 AM
 */

namespace App;

use Illuminate\Session\SessionManager as Session;
use Illuminate\View\Factory as View;

class Alert
{
    public function __construct(Session $session, View $view)
    {
        $this->session = $session;
        $this->view = $view;
    }

    public function message($message, $type)
    {
        $this->session->flash('alert', compact('message', 'type'));
    }

    public function render()
    {
        return $this->view->make('components/alert', session('alert'));
    }
}