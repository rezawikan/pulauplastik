<?php

namespace App\Http\ViewComposer;

use Illuminate\View\View;
use App\Models\OtherType;

class OtherTypeComposer
{
    public function compose(View $view)
    {
        $view->with([
            'types' => OtherType::orderBy('type')->get()
        ]);
    }
}
