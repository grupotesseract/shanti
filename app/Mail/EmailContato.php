<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class EmailContato extends Mailable
{
    use Queueable, SerializesModels;

    public $nome;
    public $email;
    public $telefone;
    public $observacao;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($nome, $email, $telefone, $observacao)
    {
        $this->nome =  $nome;
        $this->email =  $email;
        $this->telefone =  $telefone;
        $this->observacao =  $observacao;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->from($this->email)
            ->to('contato@institutoshanti.com')
            ->subject('# Shanti # Contato pelo site <---')
            ->view('emails.contato');
    }
}
