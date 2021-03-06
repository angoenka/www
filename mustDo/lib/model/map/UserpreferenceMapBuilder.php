<?php


/**
 * This class adds structure of 'userpreference' table to 'propel' DatabaseMap object.
 *
 *
 * This class was autogenerated by Propel 1.3.0-dev on:
 *
 * 12/12/08 17:42:00
 *
 *
 * These statically-built map classes are used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    lib.model.map
 */
class UserpreferenceMapBuilder implements MapBuilder {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.UserpreferenceMapBuilder';

	/**
	 * The database map.
	 */
	private $dbMap;

	/**
	 * Tells us if this DatabaseMapBuilder is built so that we
	 * don't have to re-build it every time.
	 *
	 * @return     boolean true if this DatabaseMapBuilder is built, false otherwise.
	 */
	public function isBuilt()
	{
		return ($this->dbMap !== null);
	}

	/**
	 * Gets the databasemap this map builder built.
	 *
	 * @return     the databasemap
	 */
	public function getDatabaseMap()
	{
		return $this->dbMap;
	}

	/**
	 * The doBuild() method builds the DatabaseMap
	 *
	 * @return     void
	 * @throws     PropelException
	 */
	public function doBuild()
	{
		$this->dbMap = Propel::getDatabaseMap(UserpreferencePeer::DATABASE_NAME);

		$tMap = $this->dbMap->addTable(UserpreferencePeer::TABLE_NAME);
		$tMap->setPhpName('Userpreference');
		$tMap->setClassname('Userpreference');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('PREFERENCEID', 'Preferenceid', 'INTEGER', true, 10);

		$tMap->addColumn('USERID', 'Userid', 'INTEGER', true, 11);

		$tMap->addColumn('LANGUAGE', 'Language', 'VARCHAR', true, 45);

		$tMap->addColumn('OURUPDATES', 'Ourupdates', 'TINYINT', true, 1);

		$tMap->addColumn('ADMINCONTACT', 'Admincontact', 'TINYINT', true, 1);

		$tMap->addColumn('AGREEMENTVERSION', 'Agreementversion', 'VARCHAR', true, 45);

		$tMap->addColumn('THEMEID', 'Themeid', 'VARCHAR', true, 45);

	} // doBuild()

} // UserpreferenceMapBuilder
