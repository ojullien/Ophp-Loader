<?php
/**
 * This file is a part of the Ophp framework
 *
 * @category Ophp-Loader
 * @package   Exception
 * @license MIT <https://github.com/ojullien/Ophp-Loader/blob/master/LICENSE>
 */
namespace Ophp\Loader\Exception;

/**
 * Exception thrown if a value is not a valid key.
 * This represents errors that cannot be detected at compile time.
 */
class OutOfBoundsException extends \OutOfBoundsException implements ExceptionInterface
{
}
