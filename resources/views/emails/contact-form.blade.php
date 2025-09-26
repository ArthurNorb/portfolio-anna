<x-mail::message>
# Nova Mensagem Recebida do Portfólio

Uma nova mensagem foi enviada através do formulário de contato.

**Nome:**<br>
{{ $data['name'] }}

**E-mail:**<br>
{{ $data['email'] }}

---

**Mensagem:**
<x-mail::panel>
{{ $data['message'] }}
</x-mail::panel>

Obrigado,<br>
{{ config('app.name') }}
</x-mail::message>