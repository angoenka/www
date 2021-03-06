<?php


/**
 * This class adds structure of 'user' table to 'propel' DatabaseMap object.
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
class UserMapBuilder implements MapBuilder {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.UserMapBuilder';

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
		$this->dbMap = Propel::getDatabaseMap(UserPeer::DATABASE_NAME);

		$tMap = $this->dbMap->addTable(UserPeer::TABLE_NAME);
		$tMap->setPhpName('User');
		$tMap->setClassname('User');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('USERID', 'Userid', 'INTEGER', true, 10);

		$tMap->addColumn('USERNAME', 'Username', 'VARCHAR', true, 100);

		$tMap->addColumn('MAINEMAIL', 'Mainemail', 'VARCHAR', true, 100);

		$tMap->addColumn('DELETED', 'Deleted', 'TINYINT', false, 1);

		$tMap->addColumn('ACTIVE', 'Active', 'TINYINT', true, 1);

		$tMap->addColumn('PASSWORD', 'Password', 'VARCHAR', true, 200);

		$tMap->addColumn('JOINDATE', 'Joindate', 'TIMESTAMP', true, null);

		$tMap->addColumn('ACTIVATIONCODE', 'Activationcode', 'VARCHAR', false, 100);

		$tMap->addColumn('ACTIVATIONREQUESTDATE', 'Activationrequestdate', 'TIMESTAMP', false, null);

		$tMap->addColumn('ACTIVEDATE', 'Activedate', 'TIMESTAMP', false, null);

		$tMap->addColumn('DELETEDATE', 'Deletedate', 'TIMESTAMP', false, null);

	} // doBuild()

} // UserMapBuilder
