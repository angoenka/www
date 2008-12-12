<?php

/*
 * This file is part of the symfony package.
 * (c) Fabien Potencier <fabien.potencier@symfony-project.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Marks a variable as being safe for output.
 *
 * @package    symfony
 * @subpackage view
 * @author     Fabien Potencier <fabien.potencier@symfony-project.com>
 * @version    SVN: $Id: sfOutputEscaperSafe.class.php 9047 2008-05-19 08:43:05Z FabianLange $
 */
class sfOutputEscaperSafe
{
  protected
    $value = null;

  /**
   * Constructor.
   *
   * @param mixed $value  The value to mark as safe
   */
  public function __construct($value)
  {
    $this->value = $value;
  }

  public function __toString()
  {
    return $this->value;
  }

  /**
   * Returns the embedded value.
   *
   * @return mixed The embedded value
   */
  public function getValue()
  {
    return $this->value;
  }
}
