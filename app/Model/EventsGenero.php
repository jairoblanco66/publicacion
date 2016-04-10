<?php
App::uses('AppModel', 'Model');
/**
 * EventsGenero Model
 *
 * @property Genero $Genero
 */
class EventsGenero extends AppModel {


	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Genero' => array(
			'className' => 'Genero',
			'foreignKey' => 'genero_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
