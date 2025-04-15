<?php

class PHP_Email_Form {
    public $to = '';
    public $from_name = '';
    public $from_email = '';
    public $subject = '';
    public $smtp = [];
    public $ajax = false;
    private $messages = [];

    // Add messages to email body
    public function add_message($content, $label, $priority = 0) {
        $this->messages[] = "$label: $content\n";
    }

    // Send the email
    public function send() {
        $email_headers = "From: " . $this->from_name . " <" . $this->from_email . ">\r\n";
        $email_headers .= "Reply-To: " . $this->from_email . "\r\n";
        $email_headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

        $email_body = implode("\n", $this->messages);

        if (!empty($this->smtp)) {
            // Use SMTP (Optional)
            return $this->send_with_smtp($email_body, $email_headers);
        } else {
            // Use PHP's mail() function
            return mail($this->to, $this->subject, $email_body, $email_headers);
        }
    }

    private function send_with_smtp($body, $headers) {
        // Basic SMTP integration (optional, requires additional libraries like PHPMailer)
        return false; // Placeholder: implement SMTP if needed
    }
}
