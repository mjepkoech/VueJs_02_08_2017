<?php
trait Formatter
{
    public function format($data)
    {
        // Do some stuff
        return $data;
    }
}

class Mailer
{
    use Formatter;

    public function send($data)
    {
        $data = $this->format($data);
        // Send your mail
    }
}

class Writer
{
    use Formatter;

    public function write($data)
    {
        $data = $this->format($data);
        // Write in file
    }
}

?>