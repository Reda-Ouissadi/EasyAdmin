<?php

namespace App;

use Symfony\Bundle\FrameworkBundle\Kernel\MicroKernelTrait;
use Symfony\Component\HttpKernel\Kernel as BaseKernel;

use Vich\UploaderBundle\VichUploaderBundle;

class Kernel extends BaseKernel
{
    use MicroKernelTrait;
}
