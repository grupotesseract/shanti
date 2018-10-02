<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class EmailContatoProgramacao extends Mailable
{
    use Queueable, SerializesModels;

    public $nome;
    public $email;
    public $telefone;
    public $observacao;
    public $idProgramacao;
    public $nomeProgramacao;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($nome, $email, $telefone, $observacao, $itemProgramacao)
    {
        $this->nome =  $nome;
        $this->email =  $email;
        $this->telefone =  $telefone;
        $this->observacao =  $observacao;
        $this->idProgramacao = $itemProgramacao->id;
        $this->nomeProgramacao =  $itemProgramacao->nome;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->from('contato@institutoshanti.com')
            ->to('contato@institutoshanti.com')
            ->subject('♡ Shanti: Inscrição/Interesse em: '. $this->nomeProgramacao)
            ->view('emails.contato-programacao');
    }
}
