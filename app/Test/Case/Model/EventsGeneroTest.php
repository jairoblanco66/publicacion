<?php
App::uses('EventsGenero', 'Model');

/**
 * EventsGenero Test Case
 */
class EventsGeneroTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.events_genero',
		'app.genero',
		'app.event',
		'app.user',
		'app.photo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->EventsGenero = ClassRegistry::init('EventsGenero');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->EventsGenero);

		parent::tearDown();
	}

}
