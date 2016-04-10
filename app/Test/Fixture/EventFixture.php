<?php
/**
 * Event Fixture
 */
class EventFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'titulo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1000, 'collate' => 'utf8_bin', 'charset' => 'utf8'),
		'fecha' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'lugar' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1000, 'collate' => 'utf8_bin', 'charset' => 'utf8'),
		'filename' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1000, 'collate' => 'utf8_bin', 'charset' => 'utf8'),
		'dir' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1000, 'collate' => 'utf8_bin', 'charset' => 'utf8'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_bin', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'titulo' => 'Lorem ipsum dolor sit amet',
			'fecha' => '2016-04-10 17:57:53',
			'lugar' => 'Lorem ipsum dolor sit amet',
			'filename' => 'Lorem ipsum dolor sit amet',
			'dir' => 'Lorem ipsum dolor sit amet',
			'user_id' => 1
		),
	);

}
