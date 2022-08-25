<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFormRequest;
use App\Models\Submission;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Log;

class FormController extends Controller
{
    /**
     * return blade
     * @return Factory|View|Application
     */
    public function index(): Factory|View|Application
    {

        return view('contact-us.index');

    }

    /**
     * Store request
     * @param StoreFormRequest $request
     * @return RedirectResponse
     */
    public function store(StoreFormRequest $request): RedirectResponse
    {
        $submission = new Submission();
        $submission->fill($request->all());
        $submission->save();

        Log::info('Submission from ' . $request->email . ' SAVED TO DB');
        return back()->with('success','success_message');
    }
}
