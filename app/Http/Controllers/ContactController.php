<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail; // Importe a Facade de Mail

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        // 1. Valida os dados do formulário
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|min:10',
        ]);

        // 2. Tenta enviar o e-mail usando a classe Mailable que criamos
        Mail::to('annabeatrizcomunica@gmail.com')->send(new ContactFormMail($validated));

        // 3. Se o envio for bem-sucedido, redireciona de volta com uma mensagem de sucesso
        return redirect()->route('contact.index')
            ->with('success', 'Mensagem enviada com sucesso! Obrigado pelo contato.');
    }
}
