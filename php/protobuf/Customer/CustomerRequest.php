<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: customer.proto

namespace Customer;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Request message for creating a new customer.
 * </pre>
 *
 * Protobuf type <code>customer.CustomerRequest</code>
 */
class CustomerRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Unique ID number for a Customer.
     * </pre>
     *
     * <code>int32 id = 1;</code>
     */
    private $id = 0;
    /**
     * <code>string name = 2;</code>
     */
    private $name = '';
    /**
     * <code>string email = 3;</code>
     */
    private $email = '';
    /**
     * <code>string phone = 4;</code>
     */
    private $phone = '';
    /**
     * <code>repeated .customer.CustomerRequest.Address addresses = 5;</code>
     */
    private $addresses;

    public function __construct() {
        \GPBMetadata\Customer::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Unique ID number for a Customer.
     * </pre>
     *
     * <code>int32 id = 1;</code>
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * <pre>
     * Unique ID number for a Customer.
     * </pre>
     *
     * <code>int32 id = 1;</code>
     */
    public function setId($var)
    {
        GPBUtil::checkInt32($var);
        $this->id = $var;
    }

    /**
     * <code>string name = 2;</code>
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * <code>string name = 2;</code>
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;
    }

    /**
     * <code>string email = 3;</code>
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * <code>string email = 3;</code>
     */
    public function setEmail($var)
    {
        GPBUtil::checkString($var, True);
        $this->email = $var;
    }

    /**
     * <code>string phone = 4;</code>
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * <code>string phone = 4;</code>
     */
    public function setPhone($var)
    {
        GPBUtil::checkString($var, True);
        $this->phone = $var;
    }

    /**
     * <code>repeated .customer.CustomerRequest.Address addresses = 5;</code>
     */
    public function getAddresses()
    {
        return $this->addresses;
    }

    /**
     * <code>repeated .customer.CustomerRequest.Address addresses = 5;</code>
     */
    public function setAddresses(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Customer\CustomerRequest_Address::class);
        $this->addresses = $var;
    }

}
