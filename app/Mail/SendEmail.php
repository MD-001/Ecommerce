<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use PhpParser\Node\Stmt\ElseIf_;

class SendEmail extends Mailable
{
    use Queueable, SerializesModels;

    protected $data;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */

    public function build()
{
    // if ($this->status === 'elevator') {
    //     $subject = 'إشعار بوصول شكوى مصعدة ';
    //     $view = 'elevator-complaint';
    //     $pdfName = 'Elevator-Complaint.pdf';
    // } elseif ($this->status === 'new') {
    //     $subject = 'إشعار بوصول شكوى جديدة من العميل';
    //     $view = 'new-complaint-client';
    //     $pdfName = 'New-Complaint-from-client.pdf';
        
    // }else {
    //     $subject = 'إشعار بوصول شكوى معلقة';
    //     $view = 'suspended-complaint';
    //     $pdfName = 'suspended-Complaint.pdf';
    // }
    


    return $this->view('emailViews.sendNewCommade', ['data'=>$this->data])
        ->subject("Une nouvelle commande a été créée par un client ");
}

    
}
