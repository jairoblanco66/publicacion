<?php
/**
 * Photo Fixture
 */
class PhotoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'filename' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1000, 'collate' => 'utf8_bin', 'charset' => 'utf8'),
		'dir' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1000, 'collate' => 'utf8_bin', 'charset' => 'utf8'),
		'comentario' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 2000, 'collate' => 'utf8_bin', 'charset' => 'utf8'),
		'event_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
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
			'filename' => 'Lorem ipsum dolor sit amet',
			'dir' => 'Lorem ipsum dolor sit amet',
			'comentario' => 'Lorem ipsum dolor sit amet',
			'event_id' => 1
		),
	);

}
