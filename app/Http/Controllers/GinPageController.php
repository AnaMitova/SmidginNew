<?php

namespace App\Http\Controllers;

use App\Models\Gin;

class GinPageController extends Controller
{
    /**
     * Page for a gin created in the admin panel.
     */
    public function show(Gin $gin)
    {
        abort_unless($gin->active, 404);

        // Gins tied to one of the hand-built pages live there, not here.
        if ($gin->custom_path) {
            return redirect($gin->custom_path);
        }

        return view('gins.show', compact('gin'));
    }
}
