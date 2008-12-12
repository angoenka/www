<?php

/**
 * Base class that represents a row from the 'emailschedule' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.3.0-dev on:
 *
 * 12/12/08 17:41:59
 *
 * @package    lib.model.om
 */
abstract class BaseEmailschedule extends BaseObject  implements Persistent {


  const PEER = 'EmailschedulePeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        EmailschedulePeer
	 */
	protected static $peer;

	/**
	 * The value for the scdid field.
	 * @var        int
	 */
	protected $scdid;

	/**
	 * The value for the userid field.
	 * @var        int
	 */
	protected $userid;

	/**
	 * The value for the email field.
	 * @var        string
	 */
	protected $email;

	/**
	 * The value for the schedule field.
	 * @var        string
	 */
	protected $schedule;

	/**
	 * The value for the deleted field.
	 * @var        int
	 */
	protected $deleted;

	/**
	 * The value for the active field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $active;

	/**
	 * The value for the creationdate field.
	 * @var        string
	 */
	protected $creationdate;

	/**
	 * The value for the lastrundate field.
	 * @var        string
	 */
	protected $lastrundate;

	/**
	 * The value for the templateid field.
	 * @var        string
	 */
	protected $templateid;

	/**
	 * The value for the sortstring field.
	 * @var        string
	 */
	protected $sortstring;

	/**
	 * The value for the subject field.
	 * Note: this column has a database default value of: 'REMINDER'
	 * @var        string
	 */
	protected $subject;

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
	 * Initializes internal state of BaseEmailschedule object.
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
		$this->active = 0;
		$this->subject = 'REMINDER';
	}

	/**
	 * Get the [scdid] column value.
	 * 
	 * @return     int
	 */
	public function getScdid()
	{
		return $this->scdid;
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
	 * Get the [email] column value.
	 * 
	 * @return     string
	 */
	public function getEmail()
	{
		return $this->email;
	}

	/**
	 * Get the [schedule] column value.
	 * 
	 * @return     string
	 */
	public function getSchedule()
	{
		return $this->schedule;
	}

	/**
	 * Get the [deleted] column value.
	 * 
	 * @return     int
	 */
	public function getDeleted()
	{
		return $this->deleted;
	}

	/**
	 * Get the [active] column value.
	 * 
	 * @return     int
	 */
	public function getActive()
	{
		return $this->active;
	}

	/**
	 * Get the [optionally formatted] temporal [creationdate] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getCreationdate($format = 'Y-m-d H:i:s')
	{
		if ($this->creationdate === null) {
			return null;
		}


		if ($this->creationdate === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->creationdate);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->creationdate, true), $x);
			}
		}

		if ($format === null) {
			// Because propel.useDateTimeClass is TRUE, we return a DateTime object.
			return $dt;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $dt->format('U'));
		} else {
			return $dt->format($format);
		}
	}

	/**
	 * Get the [optionally formatted] temporal [lastrundate] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getLastrundate($format = 'Y-m-d H:i:s')
	{
		if ($this->lastrundate === null) {
			return null;
		}


		if ($this->lastrundate === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->lastrundate);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->lastrundate, true), $x);
			}
		}

		if ($format === null) {
			// Because propel.useDateTimeClass is TRUE, we return a DateTime object.
			return $dt;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $dt->format('U'));
		} else {
			return $dt->format($format);
		}
	}

	/**
	 * Get the [templateid] column value.
	 * 
	 * @return     string
	 */
	public function getTemplateid()
	{
		return $this->templateid;
	}

	/**
	 * Get the [sortstring] column value.
	 * 
	 * @return     string
	 */
	public function getSortstring()
	{
		return $this->sortstring;
	}

	/**
	 * Get the [subject] column value.
	 * 
	 * @return     string
	 */
	public function getSubject()
	{
		return $this->subject;
	}

	/**
	 * Set the value of [scdid] column.
	 * 
	 * @param      int $v new value
	 * @return     Emailschedule The current object (for fluent API support)
	 */
	public function setScdid($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->scdid !== $v) {
			$this->scdid = $v;
			$this->modifiedColumns[] = EmailschedulePeer::SCDID;
		}

		return $this;
	} // setScdid()

	/**
	 * Set the value of [userid] column.
	 * 
	 * @param      int $v new value
	 * @return     Emailschedule The current object (for fluent API support)
	 */
	public function setUserid($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->userid !== $v) {
			$this->userid = $v;
			$this->modifiedColumns[] = EmailschedulePeer::USERID;
		}

		return $this;
	} // setUserid()

	/**
	 * Set the value of [email] column.
	 * 
	 * @param      string $v new value
	 * @return     Emailschedule The current object (for fluent API support)
	 */
	public function setEmail($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->email !== $v) {
			$this->email = $v;
			$this->modifiedColumns[] = EmailschedulePeer::EMAIL;
		}

		return $this;
	} // setEmail()

	/**
	 * Set the value of [schedule] column.
	 * 
	 * @param      string $v new value
	 * @return     Emailschedule The current object (for fluent API support)
	 */
	public function setSchedule($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->schedule !== $v) {
			$this->schedule = $v;
			$this->modifiedColumns[] = EmailschedulePeer::SCHEDULE;
		}

		return $this;
	} // setSchedule()

	/**
	 * Set the value of [deleted] column.
	 * 
	 * @param      int $v new value
	 * @return     Emailschedule The current object (for fluent API support)
	 */
	public function setDeleted($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->deleted !== $v) {
			$this->deleted = $v;
			$this->modifiedColumns[] = EmailschedulePeer::DELETED;
		}

		return $this;
	} // setDeleted()

	/**
	 * Set the value of [active] column.
	 * 
	 * @param      int $v new value
	 * @return     Emailschedule The current object (for fluent API support)
	 */
	public function setActive($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->active !== $v || $v === 0) {
			$this->active = $v;
			$this->modifiedColumns[] = EmailschedulePeer::ACTIVE;
		}

		return $this;
	} // setActive()

	/**
	 * Sets the value of [creationdate] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     Emailschedule The current object (for fluent API support)
	 */
	public function setCreationdate($v)
	{
		// we treat '' as NULL for temporal objects because DateTime('') == DateTime('now')
		// -- which is unexpected, to say the least.
		if ($v === null || $v === '') {
			$dt = null;
		} elseif ($v instanceof DateTime) {
			$dt = $v;
		} else {
			// some string/numeric value passed; we normalize that so that we can
			// validate it.
			try {
				if (is_numeric($v)) { // if it's a unix timestamp
					$dt = new DateTime('@'.$v, new DateTimeZone('UTC'));
					// We have to explicitly specify and then change the time zone because of a
					// DateTime bug: http://bugs.php.net/bug.php?id=43003
					$dt->setTimeZone(new DateTimeZone(date_default_timezone_get()));
				} else {
					$dt = new DateTime($v);
				}
			} catch (Exception $x) {
				throw new PropelException('Error parsing date/time value: ' . var_export($v, true), $x);
			}
		}

		if ( $this->creationdate !== null || $dt !== null ) {
			// (nested ifs are a little easier to read in this case)

			$currNorm = ($this->creationdate !== null && $tmpDt = new DateTime($this->creationdate)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newNorm = ($dt !== null) ? $dt->format('Y-m-d H:i:s') : null;

			if ( ($currNorm !== $newNorm) // normalized values don't match 
					)
			{
				$this->creationdate = ($dt ? $dt->format('Y-m-d H:i:s') : null);
				$this->modifiedColumns[] = EmailschedulePeer::CREATIONDATE;
			}
		} // if either are not null

		return $this;
	} // setCreationdate()

	/**
	 * Sets the value of [lastrundate] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     Emailschedule The current object (for fluent API support)
	 */
	public function setLastrundate($v)
	{
		// we treat '' as NULL for temporal objects because DateTime('') == DateTime('now')
		// -- which is unexpected, to say the least.
		if ($v === null || $v === '') {
			$dt = null;
		} elseif ($v instanceof DateTime) {
			$dt = $v;
		} else {
			// some string/numeric value passed; we normalize that so that we can
			// validate it.
			try {
				if (is_numeric($v)) { // if it's a unix timestamp
					$dt = new DateTime('@'.$v, new DateTimeZone('UTC'));
					// We have to explicitly specify and then change the time zone because of a
					// DateTime bug: http://bugs.php.net/bug.php?id=43003
					$dt->setTimeZone(new DateTimeZone(date_default_timezone_get()));
				} else {
					$dt = new DateTime($v);
				}
			} catch (Exception $x) {
				throw new PropelException('Error parsing date/time value: ' . var_export($v, true), $x);
			}
		}

		if ( $this->lastrundate !== null || $dt !== null ) {
			// (nested ifs are a little easier to read in this case)

			$currNorm = ($this->lastrundate !== null && $tmpDt = new DateTime($this->lastrundate)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newNorm = ($dt !== null) ? $dt->format('Y-m-d H:i:s') : null;

			if ( ($currNorm !== $newNorm) // normalized values don't match 
					)
			{
				$this->lastrundate = ($dt ? $dt->format('Y-m-d H:i:s') : null);
				$this->modifiedColumns[] = EmailschedulePeer::LASTRUNDATE;
			}
		} // if either are not null

		return $this;
	} // setLastrundate()

	/**
	 * Set the value of [templateid] column.
	 * 
	 * @param      string $v new value
	 * @return     Emailschedule The current object (for fluent API support)
	 */
	public function setTemplateid($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->templateid !== $v) {
			$this->templateid = $v;
			$this->modifiedColumns[] = EmailschedulePeer::TEMPLATEID;
		}

		return $this;
	} // setTemplateid()

	/**
	 * Set the value of [sortstring] column.
	 * 
	 * @param      string $v new value
	 * @return     Emailschedule The current object (for fluent API support)
	 */
	public function setSortstring($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->sortstring !== $v) {
			$this->sortstring = $v;
			$this->modifiedColumns[] = EmailschedulePeer::SORTSTRING;
		}

		return $this;
	} // setSortstring()

	/**
	 * Set the value of [subject] column.
	 * 
	 * @param      string $v new value
	 * @return     Emailschedule The current object (for fluent API support)
	 */
	public function setSubject($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->subject !== $v || $v === 'REMINDER') {
			$this->subject = $v;
			$this->modifiedColumns[] = EmailschedulePeer::SUBJECT;
		}

		return $this;
	} // setSubject()

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
			if (array_diff($this->modifiedColumns, array(EmailschedulePeer::ACTIVE,EmailschedulePeer::SUBJECT))) {
				return false;
			}

			if ($this->active !== 0) {
				return false;
			}

			if ($this->subject !== 'REMINDER') {
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

			$this->scdid = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->userid = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
			$this->email = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->schedule = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->deleted = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
			$this->active = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
			$this->creationdate = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
			$this->lastrundate = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
			$this->templateid = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
			$this->sortstring = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
			$this->subject = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			// FIXME - using NUM_COLUMNS may be clearer.
			return $startcol + 11; // 11 = EmailschedulePeer::NUM_COLUMNS - EmailschedulePeer::NUM_LAZY_LOAD_COLUMNS).

		} catch (Exception $e) {
			throw new PropelException("Error populating Emailschedule object", $e);
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
			$con = Propel::getConnection(EmailschedulePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = EmailschedulePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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

    foreach (sfMixer::getCallables('BaseEmailschedule:delete:pre') as $callable)
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
			$con = Propel::getConnection(EmailschedulePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		
		$con->beginTransaction();
		try {
			EmailschedulePeer::doDelete($this, $con);
			$this->setDeleted(true);
			$con->commit();
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	

    foreach (sfMixer::getCallables('BaseEmailschedule:delete:post') as $callable)
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

    foreach (sfMixer::getCallables('BaseEmailschedule:save:pre') as $callable)
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
			$con = Propel::getConnection(EmailschedulePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		
		$con->beginTransaction();
		try {
			$affectedRows = $this->doSave($con);
			$con->commit();
    foreach (sfMixer::getCallables('BaseEmailschedule:save:post') as $callable)
    {
      call_user_func($callable, $this, $con, $affectedRows);
    }

			EmailschedulePeer::addInstanceToPool($this);
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
				$this->modifiedColumns[] = EmailschedulePeer::SCDID;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = EmailschedulePeer::doInsert($this, $con);
					$affectedRows += 1; // we are assuming that there is only 1 row per doInsert() which
										 // should always be true here (even though technically
										 // BasePeer::doInsert() can insert multiple rows).

					$this->setScdid($pk);  //[IMV] update autoincrement primary key

					$this->setNew(false);
				} else {
					$affectedRows += EmailschedulePeer::doUpdate($this, $con);
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


			if (($retval = EmailschedulePeer::doValidate($this, $columns)) !== true) {
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
		$pos = EmailschedulePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getScdid();
				break;
			case 1:
				return $this->getUserid();
				break;
			case 2:
				return $this->getEmail();
				break;
			case 3:
				return $this->getSchedule();
				break;
			case 4:
				return $this->getDeleted();
				break;
			case 5:
				return $this->getActive();
				break;
			case 6:
				return $this->getCreationdate();
				break;
			case 7:
				return $this->getLastrundate();
				break;
			case 8:
				return $this->getTemplateid();
				break;
			case 9:
				return $this->getSortstring();
				break;
			case 10:
				return $this->getSubject();
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
		$keys = EmailschedulePeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getScdid(),
			$keys[1] => $this->getUserid(),
			$keys[2] => $this->getEmail(),
			$keys[3] => $this->getSchedule(),
			$keys[4] => $this->getDeleted(),
			$keys[5] => $this->getActive(),
			$keys[6] => $this->getCreationdate(),
			$keys[7] => $this->getLastrundate(),
			$keys[8] => $this->getTemplateid(),
			$keys[9] => $this->getSortstring(),
			$keys[10] => $this->getSubject(),
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
		$pos = EmailschedulePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setScdid($value);
				break;
			case 1:
				$this->setUserid($value);
				break;
			case 2:
				$this->setEmail($value);
				break;
			case 3:
				$this->setSchedule($value);
				break;
			case 4:
				$this->setDeleted($value);
				break;
			case 5:
				$this->setActive($value);
				break;
			case 6:
				$this->setCreationdate($value);
				break;
			case 7:
				$this->setLastrundate($value);
				break;
			case 8:
				$this->setTemplateid($value);
				break;
			case 9:
				$this->setSortstring($value);
				break;
			case 10:
				$this->setSubject($value);
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
		$keys = EmailschedulePeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setScdid($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setUserid($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setEmail($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setSchedule($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setDeleted($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setActive($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setCreationdate($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setLastrundate($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setTemplateid($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setSortstring($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setSubject($arr[$keys[10]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(EmailschedulePeer::DATABASE_NAME);

		if ($this->isColumnModified(EmailschedulePeer::SCDID)) $criteria->add(EmailschedulePeer::SCDID, $this->scdid);
		if ($this->isColumnModified(EmailschedulePeer::USERID)) $criteria->add(EmailschedulePeer::USERID, $this->userid);
		if ($this->isColumnModified(EmailschedulePeer::EMAIL)) $criteria->add(EmailschedulePeer::EMAIL, $this->email);
		if ($this->isColumnModified(EmailschedulePeer::SCHEDULE)) $criteria->add(EmailschedulePeer::SCHEDULE, $this->schedule);
		if ($this->isColumnModified(EmailschedulePeer::DELETED)) $criteria->add(EmailschedulePeer::DELETED, $this->deleted);
		if ($this->isColumnModified(EmailschedulePeer::ACTIVE)) $criteria->add(EmailschedulePeer::ACTIVE, $this->active);
		if ($this->isColumnModified(EmailschedulePeer::CREATIONDATE)) $criteria->add(EmailschedulePeer::CREATIONDATE, $this->creationdate);
		if ($this->isColumnModified(EmailschedulePeer::LASTRUNDATE)) $criteria->add(EmailschedulePeer::LASTRUNDATE, $this->lastrundate);
		if ($this->isColumnModified(EmailschedulePeer::TEMPLATEID)) $criteria->add(EmailschedulePeer::TEMPLATEID, $this->templateid);
		if ($this->isColumnModified(EmailschedulePeer::SORTSTRING)) $criteria->add(EmailschedulePeer::SORTSTRING, $this->sortstring);
		if ($this->isColumnModified(EmailschedulePeer::SUBJECT)) $criteria->add(EmailschedulePeer::SUBJECT, $this->subject);

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
		$criteria = new Criteria(EmailschedulePeer::DATABASE_NAME);

		$criteria->add(EmailschedulePeer::SCDID, $this->scdid);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     int
	 */
	public function getPrimaryKey()
	{
		return $this->getScdid();
	}

	/**
	 * Generic method to set the primary key (scdid column).
	 *
	 * @param      int $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setScdid($key);
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of Emailschedule (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false)
	{

		$copyObj->setUserid($this->userid);

		$copyObj->setEmail($this->email);

		$copyObj->setSchedule($this->schedule);

		$copyObj->setDeleted($this->deleted);

		$copyObj->setActive($this->active);

		$copyObj->setCreationdate($this->creationdate);

		$copyObj->setLastrundate($this->lastrundate);

		$copyObj->setTemplateid($this->templateid);

		$copyObj->setSortstring($this->sortstring);

		$copyObj->setSubject($this->subject);


		$copyObj->setNew(true);

		$copyObj->setScdid(NULL); // this is a auto-increment column, so set to default value

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
	 * @return     Emailschedule Clone of current object.
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
	 * @return     EmailschedulePeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new EmailschedulePeer();
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
    if (!$callable = sfMixer::getCallable('BaseEmailschedule:'.$method))
    {
      throw new sfException(sprintf('Call to undefined method BaseEmailschedule::%s', $method));
    }

    array_unshift($arguments, $this);

    return call_user_func_array($callable, $arguments);
  }


} // BaseEmailschedule
