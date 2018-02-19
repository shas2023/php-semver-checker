<?php

namespace PHPSemVerChecker\Operation;

use PhpParser\Node\Stmt\Class_;
use PHPSemVerChecker\Node\Statement\Class_ as PClass;

class ClassRenamedCaseOnly extends ClassOperationDelta {
	/**
	 * @var string
	 */
	protected $code = 'V154';
	/**
	 * @var string
	 */
	protected $reason = 'Class was renamed (case only).';
	/**
	 * @var string
	 */
	protected $fileAfter;
	/**
	 * @var \PhpParser\Node\Stmt\Class_
	 */
	protected $classAfter;
}
