<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    // Propriedade pública para guardar os dados do formulário
    public array $data;

    /**
     * Create a new message instance.
     */
    public function __construct(array $data)
    {
        // Recebe os dados validados do controller
        $this->data = $data;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            // Define o e-mail de "resposta" para o e-mail da pessoa que preencheu o formulário
            replyTo: [
                new Address($this->data['email'], $this->data['name']),
            ],
            // Assunto do e-mail
            subject: 'Nova Mensagem do Portfólio',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        // Define que o e-mail usará uma view Markdown
        return new Content(
            markdown: 'emails.contact-form',
        );
    }

    /**
     * Get the attachments for the message.
     */
    public function attachments(): array
    {
        return [];
    }
}