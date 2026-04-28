<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'nome' => ['required', 'string', 'max:120'],
            'email' => ['required', 'email', 'max:255'],
            'perfil' => ['required', 'in:assessor,mesa,instituicao,investidor,outro'],
            'mensagem' => ['required', 'string', 'max:5000'],
        ]);

        Log::info('Contato The Way', $data);

        return back()->with('contact_ok', true);
    }
}
