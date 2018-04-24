<?php
namespace StringSwap;

/**
 * Autogenerated by Thrift Compiler (0.10.0)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
use Thrift\Base\TBase;
use Thrift\Type\TType;
use Thrift\Type\TMessageType;
use Thrift\Exception\TException;
use Thrift\Exception\TProtocolException;
use Thrift\Protocol\TProtocol;
use Thrift\Protocol\TBinaryProtocolAccelerated;
use Thrift\Exception\TApplicationException;
require_once __DIR__."/../../lib/Thrift/Exception/TException.php";



/**
 * An IOError exception signals that an error occurred communicating
 * to the StringSwap master or an StringSwap region server.  Also used to return
 * more general StringSwap error conditions.
 */
class IOError extends TException {
  static $_TSPEC;

  /**
   * @var string
   */
  public $message = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'message',
          'type' => TType::STRING,
          ),
        );
    }
    if (is_array($vals)) {
      parent::__construct(self::$_TSPEC, $vals);
    }
  }

  public function getName() {
    return 'IOError';
  }

  public function read($input)
  {
    return $this->_read('IOError', self::$_TSPEC, $input);
  }

  public function write($output) {
    return $this->_write('IOError', self::$_TSPEC, $output);
  }

}

/**
 * An IllegalArgument exception indicates an illegal or invalid
 * argument was passed into a procedure.
 */
class IllegalArgument extends TException {
  static $_TSPEC;

  /**
   * @var string
   */
  public $message = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'message',
          'type' => TType::STRING,
          ),
        );
    }
    if (is_array($vals)) {
      parent::__construct(self::$_TSPEC, $vals);
    }
  }

  public function getName() {
    return 'IllegalArgument';
  }

  public function read($input)
  {
    return $this->_read('IllegalArgument', self::$_TSPEC, $input);
  }

  public function write($output) {
    return $this->_write('IllegalArgument', self::$_TSPEC, $output);
  }

}

