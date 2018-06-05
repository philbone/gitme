<?php
namespace Gitme;

use Gitme\Command\LogCommand;
use Gitme\Command\StatusCommand;

/**
 *
 */
interface ExamineInterface
{
    const OUTPUT_FORMAT_NARRAY = 0;
    const OUTPUT_FORMAT_DARRAY = 1;
    const OUTPUT_FORMAT_JSON = 2;
    const OUTPUT_FORMAT_XML = 3;
    const OUTPUT_FORMAT_PLAIN = 4;

    public function status() : StatusCommand;

    public function log() : LogCommand;

}
