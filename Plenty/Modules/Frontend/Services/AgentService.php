<?php
namespace Plenty\Modules\Frontend\Services;

use Jenssegers\Agent\Agent;

/**
 * Frontend-Service for agent information
 */
abstract class AgentService 
{

	const DETECTION_TYPE_MOBILE = 'mobile';

	const DETECTION_TYPE_EXTENDED = 'extended';

	const VER = '([\w._\+]+)';

	const MOBILE_GRADE_A = 'A';

	const MOBILE_GRADE_B = 'B';

	const MOBILE_GRADE_C = 'C';

	const VERSION = '2.8.25';

	const VERSION_TYPE_STRING = 'text';

	const VERSION_TYPE_FLOAT = 'float';

	abstract public function getLanguages(
	):array;

	abstract public function getBrowser(
	):string;

	abstract public function getPlatform(
	):string;

	abstract public function getDevice(
	):string;

	abstract public function getIsDesktop(
	):bool;

	abstract public function getRobotName(
	):string;

	abstract public function getIsRobot(
	):bool;

	abstract public function getHttpHeaders(
	):array;

	abstract public function getIsMobile(
	):bool;

	abstract public function getIsTablet(
	):bool;

}