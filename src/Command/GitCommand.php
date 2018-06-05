<?php
namespace Gitme\Command;

abstract class GitCommand
{
    const GIT_COMMAND_BASE = 'git';

    const GIT_COMMAND_STATUS = 0;
    const GIT_COMMAND_LOG = 1;
    const GIT_COMMAND_BRANCH = 2;

    protected $name;
    protected $options;
    protected $outputFormat;

    protected static $commandInstance = null;

    public abstract function setOptions($dirtyOptions);

    public function execute(){
        $commandResult = array();

        exec($this->getInputLine(), $commandResult);

        array_unshift($commandResult, $this->outputFormat, $this->getInputLine());

        return  $commandResult;
    }

    public function setOutputFormat(string $outputFormat){
        $this->outputFormat = $outputFormat;
    }

    protected function getInputLine()
    {
        return $this::GIT_COMMAND_BASE . ' ' . $this->name . ' ' . $this->options;
    }

    private function __clone() { }

    private function __wakeup() { }
}
