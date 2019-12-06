<?php

namespace App\Services\Checks;


interface iFraudCheck
{

    public function evaluate($data): fraudCheckResult;

}
