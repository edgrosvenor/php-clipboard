<?php

namespace Edgrosvenor\PHPClipboard;

class Clipboard
{
    public $contents;
    private $os;

    public function __construct($contents)
    {
        $this->contents = $contents;
        $this->os = php_uname();
    }

    public function copy(): void
    {
        if (preg_match('/windows/i', $this->os)) {
            $this->windows();

            return;
        }
        if (preg_match('/darwin/i', $this->os)) {
            $this->mac();

            return;
        }
        $this->linux();
    }

    private function mac(): void
    {
        exec('echo '.$this->contents.' | pbcopy');
    }

    private function linux(): void
    {
        exec('echo '.$this->contents.' | xclip -sel clip');
    }

    private function windows(): void
    {
        exec('echo '.$this->contents.' | clip');
    }
}
