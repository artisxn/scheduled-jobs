<?php

namespace codicastudio\NovaScheduledJobs\Http\Controllers;

use Illuminate\Http\Request;
use codicastudio\NovaScheduledJobs\Rules\JobExist;

class DispatchJobController
{
    /**
     * Dispatch job command.
     *
     * @param  \Illuminate\Http\Request $request
     */
    public function create(Request $request)
    {
        $data = $request->validate([
            'command' => ['required', 'string', new JobExist]
        ]);

        $command = resolve($data['command']);

        dispatch($command);
    }
}
