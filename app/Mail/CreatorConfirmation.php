<?php

    namespace App\Mail;

    use App\Models\Creator;
    use Illuminate\Bus\Queueable;
    use Illuminate\Contracts\Queue\ShouldQueue;
    use Illuminate\Mail\Mailable;
    use Illuminate\Mail\Mailables\Content;
    use Illuminate\Mail\Mailables\Envelope;
    use Illuminate\Queue\SerializesModels;

    class CreatorConfirmation extends Mailable
    {
        use Queueable, SerializesModels;

        /**
         * Create a new message instance.
         */
        public function __construct(private Creator $creator)
        {
            //
        }

        /**
         * Get the message envelope.
         */
        public function envelope(): Envelope
        {
            return new Envelope(
                subject: 'Creator Account Confirmation',
            );
        }

        /**
         * Get the message content definition.
         */
        public function content(): Content
        {
            $creatorId = $this->creator->id;
            $creator_name = $this->creator->name;
            $created_at = $this->creator->created_at;
            $link = url('') . '/verify_email/'. base64_encode($creatorId . "/" . $creator_name . "/" . $created_at) ;

            return new Content(
                view: 'auth.email_confirmation',
                with: [
                    'creator_name' => $this->creator->name,
                    'creator_email' => $this->creator->email,
                    'link' => $link
                ]
            );
        }

        /**
         * Get the attachments for the message.
         *
         * @return array<int, \Illuminate\Mail\Mailables\Attachment>
         */
        public function attachments(): array
        {
            return [];
        }
    }
