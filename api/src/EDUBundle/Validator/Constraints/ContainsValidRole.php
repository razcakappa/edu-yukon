<?php

namespace AppBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class ContainsValidRole extends Constraint
{
    public $message = 'Concern about Roles please "{{ string }}". Are You serious?';
}
