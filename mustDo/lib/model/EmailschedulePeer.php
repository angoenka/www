<?php

class EmailschedulePeer extends BaseEmailschedulePeer
{
	/**
	 * Retrieve a single object by pkey.
	 *
	 * @param      String $userId UserID of the user.
	 * @param      String $scId ScheduleID 
	 * @return     Emailschedule
	 */
	public static function retrieveByScheduleIdAndUserId($userId, $scdId){
		$c = new Criteria();
		$c->add(EmailschedulePeer::USERID, $userId);
		$c->add(EmailschedulePeer::SCDID, $scdId);
		$result = self::doSelect($c);
		return $result[0];
	}
}
