<?php

namespace Symfony\Components\Validator\Constraints;

class File extends \Symfony\Components\Validator\Constraint
{
    public $maxSize = null;
    public $mimeTypes = array();
    public $notFoundMessage = 'Symfony.Validator.File.notFoundMessage';
    public $notReadableMessage = 'Symfony.Validator.File.notReadableMessage';
    public $maxSizeMessage = 'Symfony.Validator.File.maxSizeMessage';
    public $mimeTypesMessage = 'Symfony.Validator.File.mimeTypesMessage';
}
