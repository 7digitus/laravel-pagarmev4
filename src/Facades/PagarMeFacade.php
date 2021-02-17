<?php

namespace 7Digitus\LaravelPagarMe\Facades;

use Illuminate\Support\Facades\Facade;

class PagarMeFacade extends Facade{

    protected static function getFacadeAccessor()
    {
        return 'PagarMe';
    }
}
