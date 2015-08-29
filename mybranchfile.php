<?php

/**
 * I see this commit
 * Now we will see the difference
 */

abstract class ObjectModelCore
{
    /**
     * @var integer Object id
     */
    public $id;

    /** @var string SQL Table name */
    protected $table = NULL;

    /** @var string SQL Table identifier */
    protected $identifier = NULL;

    /** @var array Required fields for admin panel forms */
    protected $fieldsRequired = array();

    /** @var fieldsRequiredDatabase */
    protected static $fieldsRequiredDatabase = NULL;


}