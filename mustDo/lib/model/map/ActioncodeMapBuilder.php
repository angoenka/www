<?php


/**
 * This class adds structure of 'actioncode' table to 'propel' DatabaseMap object.
 *
 *
 * This class was autogenerated by Propel 1.3.0-dev on:
 *
 * 12/12/08 17:41:59
 *
 *
 * These statically-built map classes are used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    lib.model.map
 */
class ActioncodeMapBuilder implements MapBuilder {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.ActioncodeMapBuilder';

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
		$this->dbMap = Propel::getDatabaseMap(ActioncodePeer::DATABASE_NAME);

		$tMap = $this->dbMap->addTable(ActioncodePeer::TABLE_NAME);
		$tMap->setPhpName('Actioncode');
		$tMap->setClassname('Actioncode');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ACTIONCODE', 'Actioncode', 'INTEGER', true, 10);

		$tMap->addColumn('ACTIONNAME', 'Actionname', 'VARCHAR', true, 100);

		$tMap->addColumn('ACTIONDESC', 'Actiondesc', 'LONGVARCHAR', false, null);

	} // doBuild()

} // ActioncodeMapBuilder
