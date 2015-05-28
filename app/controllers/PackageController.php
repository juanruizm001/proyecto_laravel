<?php

class PackageController extends BaseController {

    //Constructor para validar si el usuario está logeado
    public function __construct()
    {
        $this->beforeFilter('auth'); //bloqueo de acceso
    }

    public function getIndex()
    {


        return View::make('package.index');
    }
}