<?php
/*************************************************************************************/
/*      This file is part of the Thelia package.                                     */
/*                                                                                   */
/*      Copyright (c) OpenStudio                                                     */
/*      email : dev@thelia.net                                                       */
/*      web : http://www.thelia.net                                                  */
/*                                                                                   */
/*      For the full copyright and license information, please view the LICENSE.txt  */
/*      file that was distributed with this source code.                             */
/*************************************************************************************/

namespace Lengow\Event;

use Lengow\Event\Base\LengowExcludeProductEvents as BaseLengowExcludeProductEvents;

/**
 * Class LengowExcludeProductEvents
 * @package Lengow\Event
 */
class LengowExcludeProductEvents extends BaseLengowExcludeProductEvents
{
    const DELETE_ALL = LengowEvents::LENGOW_EXCLUDE_PRODUCT_DELETE_ALL;
}
