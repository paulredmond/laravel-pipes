<?php

namespace Mshule\LaravelPipes\Matching;

use Illuminate\Http\Request;
use Mshule\LaravelPipes\Pipe;

interface ValidatorInterface
{
    /**
     * Validate a given rule against a pipe and request.
     *
     * @param  \Mshule\LaravelPipes\Pipe  $pipe
     * @param  \Illuminate\Http\Request  $request
     * @return bool
     */
    public function matches(Pipe $pipe, Request $request);
}
