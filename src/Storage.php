<?php

declare( strict_types= 1 );

namespace Datument\DB\MySQL;

use Datument\IStorage;

////////////////////////////////////////////////////////////////

class Storage extends APdoStorage  implements IStorage
{

	/**
	 * Method query
	 *
	 * @access public
	 *
	 * @param  Querier\Query $query
	 *
	 * @return ResultSet
	 */
	public function query( Querier\Query$query ):ResultSet
	{
		#
	}

}
