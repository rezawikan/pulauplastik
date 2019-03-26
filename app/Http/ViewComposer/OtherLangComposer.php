<?php

namespace App\Http\ViewComposer;

use Illuminate\View\View;
use App\Models\OtherLang;

class OtherLangComposer
{
    public function compose(View $view)
    {
        $view->with([
            'langs' => OtherLang::orderBy('name')->get()
        ]);
    }
}
