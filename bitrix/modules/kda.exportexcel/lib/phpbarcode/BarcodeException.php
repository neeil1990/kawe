<?php

namespace Barcode\Exceptions;

class BarcodeException extends \Exception {}
class InvalidCharacterException extends BarcodeException {}
class InvalidCheckDigitException extends BarcodeException {}
class InvalidFormatException extends BarcodeException {}
class InvalidLengthException extends BarcodeException {}
class UnknownTypeException extends BarcodeException {}