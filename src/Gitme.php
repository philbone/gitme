<?php
namespace Gitme;

use Gitme\Command\LogCommand;
use Gitme\Command\StatusCommand;

class Gitme implements ExamineInterface
{
    private $statusCommand;
    private $logCommand;

    private static $gitmeInstance = null;

    private function __construct()
    {
        $this->statusCommand = StatusCommand::getInstance();
        $this->logCommand = LogCommand::getInstance();
    }

    public static function getInstance() {
        if ( !(self::$gitmeInstance instanceof self) ) {
            self::$gitmeInstance = new self();
        }
        return self::$gitmeInstance;
    }

    public function status() : StatusCommand
    {
        return $this->statusCommand;
    }

    public function log() : LogCommand
    {
        return $this->logCommand;
    }

    private function __clone() { }

    private function __wakeup() { }

}
