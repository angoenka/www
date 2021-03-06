<?php

/**
 * Base class that represents a row from the 'userpreference' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.3.0-dev on:
 *
 * 12/12/08 17:42:00
 *
 * @package    lib.model.om
 */
abstract class BaseUserpreference extends BaseObject  implements Persistent {


  const PEER = 'UserpreferencePeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        UserpreferencePeer
	 */
	protected static $peer;

	/**
	 * The value for the preferenceid field.
	 * @var        int
	 */
	protected $preferenceid;

	/**
	 * The value for the userid field.
	 * @var        int
	 */
	protected $userid;

	/**
	 * The value for the language field.
	 * Note: this column has a database default value of: 'en-us'
	 * @var        string
	 */
	protected $language;

	/**
	 * The value for the ourupdates field.
	 * Note: this column has a database default value of: 1
	 * @var        int
	 */
	protected $ourupdates;

	/**
	 * The value for the admincontact field.
	 * Note: this column has a database default value of: 1
	 * @var        int
	 */
	protected $admincontact;

	/**
	 * The value for the agreementversion field.
	 * Note: this column has a database default value of: '1.0'
	 * @var        string
	 */
	protected $agreementversion;

	/**
	 * The value for the themeid field.
	 * Note: this column has a database default value of: '1.0'
	 * @var        string
	 */
	protected $themeid;

	/**
	 * Flag to prevent endless save loop, if this object is referenced
	 * by another object which falls in this transaction.
	 * @var        boolean
	 */
	protected $alreadyInSave = false;

	/**
	 * Flag to prevent endless validation loop, if this object is referenced
	 * by another object which falls in this transaction.
	 * @var        boolean
	 */
	protected $alreadyInValidation = false;

	/**
	 * Initializes internal state of BaseUserpreference object.
	 * @see        applyDefaults()
	 */
	public function __construct()
	{
		parent::__construct();
		$this->applyDefaultValues();
	}

	/**
	 * Applies default values to this object.
	 * This method should be called from the object's constructor (or
	 * equivalent initialization method).
	 * @see        __construct()
	 */
	public function applyDefaultValues()
	{
		$this->language = 'en-us';
		$this->ourupdates = 1;
		$this->admincontact = 1;
		$this->agreementversion = '1.0';
		$this->themeid = '1.0';
	}

	/**
	 * Get the [preferenceid] column value.
	 * 
	 * @return     int
	 */
	public function getPreferenceid()
	{
		return $this->preferenceid;
	}

	/**
	 * Get the [userid] column value.
	 * 
	 * @return     int
	 */
	public function getUserid()
	{
		return $this->userid;
	}

	/**
	 * Get the [language] column value.
	 * 
	 * @return     string
	 */
	public function getLanguage()
	{
		return $this->language;
	}

	/**
	 * Get the [ourupdates] column value.
	 * 
	 * @return     int
	 */
	public function getOurupdates()
	{
		return $this->ourupdates;
	}

	/**
	 * Get the [admincontact] column value.
	 * 
	 * @return     int
	 */
	public function getAdmincontact()
	{
		return $this->admincontact;
	}

	/**
	 * Get the [agreementversion] column value.
	 * 
	 * @return     string
	 */
	public function getAgreementversion()
	{
		return $this->agreementversion;
	}

	/**
	 * Get the [themeid] column value.
	 * 
	 * @return     string
	 */
	public function getThemeid()
	{
		return $this->themeid;
	}

	/**
	 * Set the value of [preferenceid] column.
	 * 
	 * @param      int $v new value
	 * @return     Userpreference The current object (for fluent API support)
	 */
	public function setPreferenceid($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->preferenceid !== $v) {
			$this->preferenceid = $v;
			$this->modifiedColumns[] = UserpreferencePeer::PREFERENCEID;
		}

		return $this;
	} // setPreferenceid()

	/**
	 * Set the value of [userid] column.
	 * 
	 * @param      int $v new value
	 * @return     Userpreference The current object (for fluent API support)
	 */
	public function setUserid($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->userid !== $v) {
			$this->userid = $v;
			$this->modifiedColumns[] = UserpreferencePeer::USERID;
		}

		return $this;
	} // setUserid()

	/**
	 * Set the value of [language] column.
	 * 
	 * @param      string $v new value
	 * @return     Userpreference The current object (for fluent API support)
	 */
	public function setLanguage($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->language !== $v || $v === 'en-us') {
			$this->language = $v;
			$this->modifiedColumns[] = UserpreferencePeer::LANGUAGE;
		}

		return $this;
	} // setLanguage()

	/**
	 * Set the value of [ourupdates] column.
	 * 
	 * @param      int $v new value
	 * @return     Userpreference The current object (for fluent API support)
	 */
	public function setOurupdates($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->ourupdates !== $v || $v === 1) {
			$this->ourupdates = $v;
			$this->modifiedColumns[] = UserpreferencePeer::OURUPDATES;
		}

		return $this;
	} // setOurupdates()

	/**
	 * Set the value of [admincontact] column.
	 * 
	 * @param      int $v new value
	 * @return     Userpreference The current object (for fluent API support)
	 */
	public function setAdmincontact($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->admincontact !== $v || $v === 1) {
			$this->admincontact = $v;
			$this->modifiedColumns[] = UserpreferencePeer::ADMINCONTACT;
		}

		return $this;
	} // setAdmincontact()

	/**
	 * Set the value of [agreementversion] column.
	 * 
	 * @param      string $v new value
	 * @return     Userpreference The current object (for fluent API support)
	 */
	public function setAgreementversion($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->agreementversion !== $v || $v === '1.0') {
			$this->agreementversion = $v;
			$this->modifiedColumns[] = UserpreferencePeer::AGREEMENTVERSION;
		}

		return $this;
	} // setAgreementversion()

	/**
	 * Set the value of [themeid] column.
	 * 
	 * @param      string $v new value
	 * @return     Userpreference The current object (for fluent API support)
	 */
	public function setThemeid($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->themeid !== $v || $v === '1.0') {
			$this->themeid = $v;
			$this->modifiedColumns[] = UserpreferencePeer::THEMEID;
		}

		return $this;
	} // setThemeid()

	/**
	 * Indicates whether the columns in this object are only set to default values.
	 *
	 * This method can be used in conjunction with isModified() to indicate whether an object is both
	 * modified _and_ has some values set which are non-default.
	 *
	 * @return     boolean Whether the columns in this object are only been set with default values.
	 */
	public function hasOnlyDefaultValues()
	{
			// First, ensure that we don't have any columns that have been modified which aren't default columns.
			if (array_diff($this->modifiedColumns, array(UserpreferencePeer::LANGUAGE,UserpreferencePeer::OURUPDATES,UserpreferencePeer::ADMINCONTACT,UserpreferencePeer::AGREEMENTVERSION,UserpreferencePeer::THEMEID))) {
				return false;
			}

			if ($this->language !== 'en-us') {
				return false;
			}

			if ($this->ourupdates !== 1) {
				return false;
			}

			if ($this->admincontact !== 1) {
				return false;
			}

			if ($this->agreementversion !== '1.0') {
				return false;
			}

			if ($this->themeid !== '1.0') {
				return false;
			}

		// otherwise, everything was equal, so return TRUE
		return true;
	} // hasOnlyDefaultValues()

	/**
	 * Hydrates (populates) the object variables with values from the database resultset.
	 *
	 * An offset (0-based "start column") is specified so that objects can be hydrated
	 * with a subset of the columns in the resultset rows.  This is needed, for example,
	 * for results of JOIN queries where the resultset row includes columns from two or
	 * more tables.
	 *
	 * @param      array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
	 * @param      int $startcol 0-based offset column which indicates which restultset column to start with.
	 * @param      boolean $rehydrate Whether this object is being re-hydrated from the database.
	 * @return     int next starting column
	 * @throws     PropelException  - Any caught Exception will be rewrapped as a PropelException.
	 */
	public function hydrate($row, $startcol = 0, $rehydrate = false)
	{
		try {

			$this->preferenceid = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->userid = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
			$this->language = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->ourupdates = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
			$this->admincontact = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
			$this->agreementversion = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
			$this->themeid = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			// FIXME - using NUM_COLUMNS may be clearer.
			return $startcol + 7; // 7 = UserpreferencePeer::NUM_COLUMNS - UserpreferencePeer::NUM_LAZY_LOAD_COLUMNS).

		} catch (Exception $e) {
			throw new PropelException("Error populating Userpreference object", $e);
		}
	}

	/**
	 * Checks and repairs the internal consistency of the object.
	 *
	 * This method is executed after an already-instantiated object is re-hydrated
	 * from the database.  It exists to check any foreign keys to make sure that
	 * the objects related to the current object are correct based on foreign key.
	 *
	 * You can override this method in the stub class, but you should always invoke
	 * the base method from the overridden method (i.e. parent::ensureConsistency()),
	 * in case your model changes.
	 *
	 * @throws     PropelException
	 */
	public function ensureConsistency()
	{

	} // ensureConsistency

	/**
	 * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
	 *
	 * This will only work if the object has been saved and has a valid primary key set.
	 *
	 * @param      boolean $deep (optional) Whether to also de-associated any related objects.
	 * @param      PropelPDO $con (optional) The PropelPDO connection to use.
	 * @return     void
	 * @throws     PropelException - if this object is deleted, unsaved or doesn't have pk match in db
	 */
	public function reload($deep = false, PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("Cannot reload a deleted object.");
		}

		if ($this->isNew()) {
			throw new PropelException("Cannot reload an unsaved object.");
		}

		if ($con === null) {
			$con = Propel::getConnection(UserpreferencePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = UserpreferencePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

		} // if (deep)
	}

	/**
	 * Removes this object from datastore and sets delete attribute.
	 *
	 * @param      PropelPDO $con
	 * @return     void
	 * @throws     PropelException
	 * @see        BaseObject::setDeleted()
	 * @see        BaseObject::isDeleted()
	 */
	public function delete(PropelPDO $con = null)
	{

    foreach (sfMixer::getCallables('BaseUserpreference:delete:pre') as $callable)
    {
      $ret = call_user_func($callable, $this, $con);
      if ($ret)
      {
        return;
      }
    }


		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(UserpreferencePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		
		$con->beginTransaction();
		try {
			UserpreferencePeer::doDelete($this, $con);
			$this->setDeleted(true);
			$con->commit();
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	

    foreach (sfMixer::getCallables('BaseUserpreference:delete:post') as $callable)
    {
      call_user_func($callable, $this, $con);
    }

  }
	/**
	 * Persists this object to the database.
	 *
	 * If the object is new, it inserts it; otherwise an update is performed.
	 * All modified related objects will also be persisted in the doSave()
	 * method.  This method wraps all precipitate database operations in a
	 * single transaction.
	 *
	 * @param      PropelPDO $con
	 * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
	 * @throws     PropelException
	 * @see        doSave()
	 */
	public function save(PropelPDO $con = null)
	{

    foreach (sfMixer::getCallables('BaseUserpreference:save:pre') as $callable)
    {
      $affectedRows = call_user_func($callable, $this, $con);
      if (is_int($affectedRows))
      {
        return $affectedRows;
      }
    }


		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(UserpreferencePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		
		$con->beginTransaction();
		try {
			$affectedRows = $this->doSave($con);
			$con->commit();
    foreach (sfMixer::getCallables('BaseUserpreference:save:post') as $callable)
    {
      call_user_func($callable, $this, $con, $affectedRows);
    }

			UserpreferencePeer::addInstanceToPool($this);
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Performs the work of inserting or updating the row in the database.
	 *
	 * If the object is new, it inserts it; otherwise an update is performed.
	 * All related objects are also updated in this method.
	 *
	 * @param      PropelPDO $con
	 * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
	 * @throws     PropelException
	 * @see        save()
	 */
	protected function doSave(PropelPDO $con)
	{
		$affectedRows = 0; // initialize var to track total num of affected rows
		if (!$this->alreadyInSave) {
			$this->alreadyInSave = true;

			if ($this->isNew() ) {
				$this->modifiedColumns[] = UserpreferencePeer::PREFERENCEID;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = UserpreferencePeer::doInsert($this, $con);
					$affectedRows += 1; // we are assuming that there is only 1 row per doInsert() which
										 // should always be true here (even though technically
										 // BasePeer::doInsert() can insert multiple rows).

					$this->setPreferenceid($pk);  //[IMV] update autoincrement primary key

					$this->setNew(false);
				} else {
					$affectedRows += UserpreferencePeer::doUpdate($this, $con);
				}

				$this->resetModified(); // [HL] After being saved an object is no longer 'modified'
			}

			$this->alreadyInSave = false;

		}
		return $affectedRows;
	} // doSave()

	/**
	 * Array of ValidationFailed objects.
	 * @var        array ValidationFailed[]
	 */
	protected $validationFailures = array();

	/**
	 * Gets any ValidationFailed objects that resulted from last call to validate().
	 *
	 *
	 * @return     array ValidationFailed[]
	 * @see        validate()
	 */
	public function getValidationFailures()
	{
		return $this->validationFailures;
	}

	/**
	 * Validates the objects modified field values and all objects related to this table.
	 *
	 * If $columns is either a column name or an array of column names
	 * only those columns are validated.
	 *
	 * @param      mixed $columns Column name or an array of column names.
	 * @return     boolean Whether all columns pass validation.
	 * @see        doValidate()
	 * @see        getValidationFailures()
	 */
	public function validate($columns = null)
	{
		$res = $this->doValidate($columns);
		if ($res === true) {
			$this->validationFailures = array();
			return true;
		} else {
			$this->validationFailures = $res;
			return false;
		}
	}

	/**
	 * This function performs the validation work for complex object models.
	 *
	 * In addition to checking the current object, all related objects will
	 * also be validated.  If all pass then <code>true</code> is returned; otherwise
	 * an aggreagated array of ValidationFailed objects will be returned.
	 *
	 * @param      array $columns Array of column names to validate.
	 * @return     mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objets otherwise.
	 */
	protected function doValidate($columns = null)
	{
		if (!$this->alreadyInValidation) {
			$this->alreadyInValidation = true;
			$retval = null;

			$failureMap = array();


			if (($retval = UserpreferencePeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	/**
	 * Retrieves a field from the object by name passed in as a string.
	 *
	 * @param      string $name name
	 * @param      string $type The type of fieldname the $name is of:
	 *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     mixed Value of field.
	 */
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = UserpreferencePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		$field = $this->getByPosition($pos);
		return $field;
	}

	/**
	 * Retrieves a field from the object by Position as specified in the xml schema.
	 * Zero-based.
	 *
	 * @param      int $pos position in xml schema
	 * @return     mixed Value of field at $pos
	 */
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getPreferenceid();
				break;
			case 1:
				return $this->getUserid();
				break;
			case 2:
				return $this->getLanguage();
				break;
			case 3:
				return $this->getOurupdates();
				break;
			case 4:
				return $this->getAdmincontact();
				break;
			case 5:
				return $this->getAgreementversion();
				break;
			case 6:
				return $this->getThemeid();
				break;
			default:
				return null;
				break;
		} // switch()
	}

	/**
	 * Exports the object as an array.
	 *
	 * You can specify the key type of the array by passing one of the class
	 * type constants.
	 *
	 * @param      string $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                        BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. Defaults to BasePeer::TYPE_PHPNAME.
	 * @param      boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns.  Defaults to TRUE.
	 * @return     an associative array containing the field names (as keys) and field values
	 */
	public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true)
	{
		$keys = UserpreferencePeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getPreferenceid(),
			$keys[1] => $this->getUserid(),
			$keys[2] => $this->getLanguage(),
			$keys[3] => $this->getOurupdates(),
			$keys[4] => $this->getAdmincontact(),
			$keys[5] => $this->getAgreementversion(),
			$keys[6] => $this->getThemeid(),
		);
		return $result;
	}

	/**
	 * Sets a field from the object by name passed in as a string.
	 *
	 * @param      string $name peer name
	 * @param      mixed $value field value
	 * @param      string $type The type of fieldname the $name is of:
	 *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     void
	 */
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = UserpreferencePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	/**
	 * Sets a field from the object by Position as specified in the xml schema.
	 * Zero-based.
	 *
	 * @param      int $pos position in xml schema
	 * @param      mixed $value field value
	 * @return     void
	 */
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setPreferenceid($value);
				break;
			case 1:
				$this->setUserid($value);
				break;
			case 2:
				$this->setLanguage($value);
				break;
			case 3:
				$this->setOurupdates($value);
				break;
			case 4:
				$this->setAdmincontact($value);
				break;
			case 5:
				$this->setAgreementversion($value);
				break;
			case 6:
				$this->setThemeid($value);
				break;
		} // switch()
	}

	/**
	 * Populates the object using an array.
	 *
	 * This is particularly useful when populating an object from one of the
	 * request arrays (e.g. $_POST).  This method goes through the column
	 * names, checking to see whether a matching key exists in populated
	 * array. If so the setByName() method is called for that column.
	 *
	 * You can specify the key type of the array by additionally passing one
	 * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
	 * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
	 * The default key type is the column's phpname (e.g. 'AuthorId')
	 *
	 * @param      array  $arr     An array to populate the object from.
	 * @param      string $keyType The type of keys the array uses.
	 * @return     void
	 */
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = UserpreferencePeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setPreferenceid($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setUserid($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setLanguage($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setOurupdates($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setAdmincontact($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setAgreementversion($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setThemeid($arr[$keys[6]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(UserpreferencePeer::DATABASE_NAME);

		if ($this->isColumnModified(UserpreferencePeer::PREFERENCEID)) $criteria->add(UserpreferencePeer::PREFERENCEID, $this->preferenceid);
		if ($this->isColumnModified(UserpreferencePeer::USERID)) $criteria->add(UserpreferencePeer::USERID, $this->userid);
		if ($this->isColumnModified(UserpreferencePeer::LANGUAGE)) $criteria->add(UserpreferencePeer::LANGUAGE, $this->language);
		if ($this->isColumnModified(UserpreferencePeer::OURUPDATES)) $criteria->add(UserpreferencePeer::OURUPDATES, $this->ourupdates);
		if ($this->isColumnModified(UserpreferencePeer::ADMINCONTACT)) $criteria->add(UserpreferencePeer::ADMINCONTACT, $this->admincontact);
		if ($this->isColumnModified(UserpreferencePeer::AGREEMENTVERSION)) $criteria->add(UserpreferencePeer::AGREEMENTVERSION, $this->agreementversion);
		if ($this->isColumnModified(UserpreferencePeer::THEMEID)) $criteria->add(UserpreferencePeer::THEMEID, $this->themeid);

		return $criteria;
	}

	/**
	 * Builds a Criteria object containing the primary key for this object.
	 *
	 * Unlike buildCriteria() this method includes the primary key values regardless
	 * of whether or not they have been modified.
	 *
	 * @return     Criteria The Criteria object containing value(s) for primary key(s).
	 */
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(UserpreferencePeer::DATABASE_NAME);

		$criteria->add(UserpreferencePeer::PREFERENCEID, $this->preferenceid);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     int
	 */
	public function getPrimaryKey()
	{
		return $this->getPreferenceid();
	}

	/**
	 * Generic method to set the primary key (preferenceid column).
	 *
	 * @param      int $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setPreferenceid($key);
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of Userpreference (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false)
	{

		$copyObj->setUserid($this->userid);

		$copyObj->setLanguage($this->language);

		$copyObj->setOurupdates($this->ourupdates);

		$copyObj->setAdmincontact($this->admincontact);

		$copyObj->setAgreementversion($this->agreementversion);

		$copyObj->setThemeid($this->themeid);


		$copyObj->setNew(true);

		$copyObj->setPreferenceid(NULL); // this is a auto-increment column, so set to default value

	}

	/**
	 * Makes a copy of this object that will be inserted as a new row in table when saved.
	 * It creates a new object filling in the simple attributes, but skipping any primary
	 * keys that are defined for the table.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @return     Userpreference Clone of current object.
	 * @throws     PropelException
	 */
	public function copy($deepCopy = false)
	{
		// we use get_class(), because this might be a subclass
		$clazz = get_class($this);
		$copyObj = new $clazz();
		$this->copyInto($copyObj, $deepCopy);
		return $copyObj;
	}

	/**
	 * Returns a peer instance associated with this om.
	 *
	 * Since Peer classes are not to have any instance attributes, this method returns the
	 * same instance for all member of this class. The method could therefore
	 * be static, but this would prevent one from overriding the behavior.
	 *
	 * @return     UserpreferencePeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new UserpreferencePeer();
		}
		return self::$peer;
	}

	/**
	 * Resets all collections of referencing foreign keys.
	 *
	 * This method is a user-space workaround for PHP's inability to garbage collect objects
	 * with circular references.  This is currently necessary when using Propel in certain
	 * daemon or large-volumne/high-memory operations.
	 *
	 * @param      boolean $deep Whether to also clear the references on all associated objects.
	 */
	public function clearAllReferences($deep = false)
	{
		if ($deep) {
		} // if ($deep)

	}


  public function __call($method, $arguments)
  {
    if (!$callable = sfMixer::getCallable('BaseUserpreference:'.$method))
    {
      throw new sfException(sprintf('Call to undefined method BaseUserpreference::%s', $method));
    }

    array_unshift($arguments, $this);

    return call_user_func_array($callable, $arguments);
  }


} // BaseUserpreference
