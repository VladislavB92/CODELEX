<?php

declare(strict_types=1);

class ChatController
{
    private $chatLog;
    private array $currentChat;


    public function __construct()
    {
        $this->chatLog = fopen('chat_engine/chatLog.csv', 'a+');
        $this->saveChat();
    }

    private function saveChat(): void
    {
        if (isset($_POST['message'])) {
            $id = $_SESSION['id'];
            $message = $_POST['message'];

            $userWithMessage = date("[d.m.Y.H:i:s]") . ":" . $id . ":" . $message;
            $messageData = explode(':', $userWithMessage);

            fputcsv($this->chatLog, $messageData);
        }
    }

    public function displayChat()
    {
        $this->currentChat = [];

        $rows = array_map('str_getcsv', file('chat_engine/chatLog.csv'));

        foreach ($rows as $chatLine) {
            $this->currentChat[] = $chatLine[0] . ":" .
                $chatLine[1] . ":" .
                $chatLine[2] . " - " .
                $chatLine[3] . ": " .
                $chatLine[4];
        }

        return array_reverse($this->currentChat);
    }
}
