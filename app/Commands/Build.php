<?php

namespace App\Commands;

class Build extends BaseCommand
{
    protected $signature = 'build {doc}';
    protected $description = 'Download and package the doc specified as argument.';
}
