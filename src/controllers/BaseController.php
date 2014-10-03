<?php
namespace Wfsneto\FirstLaravelPackage;

class BaseController extends \Controller
{
    public function __construct()
    {
        \View::addNamespace('first-laravel-package', __DIR__ . '/../views');
    }
}