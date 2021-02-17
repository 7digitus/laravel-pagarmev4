<?php

namespace 7digitus\LaravelPagarMeV4\Facades;

use Illuminate\Support\Facades\Facade;

class PagarMeFacade extends Facade{

    protected static function getFacadeAccessor()
    {
        return 'PagarMe';
    }
}
