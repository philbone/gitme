<?php
namespace Gitme\Command;

/**
 *
 */
class StatusCommand extends GitCommand
{
    private function __construct()
    {
        $this->name = 'status';
    }

    public static function getInstance() {
        if ( !(self::$commandInstance instanceof self) ) {
            self::$commandInstance = new self();
        }
        return self::$commandInstance;
    }

    public function setOptions($dirtyOptions)
    {
        $this->options = $dirtyOptions;
    }
}
