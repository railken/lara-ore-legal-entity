<?php

namespace Railken\LaraOre\LegalEntity\Attributes\CodeITSIA\Exceptions;

use Railken\LaraOre\LegalEntity\Exceptions\LegalEntityAttributeException;

class LegalEntityCodeITSIANotDefinedException extends LegalEntityAttributeException
{
    /**
     * The reason (attribute) for which this exception is thrown.
     *
     * @var string
     */
    protected $attribute = 'code_it_sia';

    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'LEGALENTITY_CODEIT_SIA_NOT_DEFINED';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'The %s is required';
}
