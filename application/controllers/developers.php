<?php

class Developers extends Control {

	protected function index(){

		$super = array(
			'name'     => 'Valerio Proietti',
			'nick'     => 'kamicane',
			'web'      => '<a href="http://mad4milk.net">mad4milk.net</a>',
			'location' => 'Roma, Italia',
			'avatar'   => '/assets/images/avatars/Valerio.png',
			'twitter'  => 'kamicane',
			'github'   => 'kamicane',
		);
		
		$devs = array(
			array(
				'name'     => 'Tim Wienk',
				'nick'     => 'FunFactor',
				'web'      => '<a href="http://github.com/timwienk">tim@github</a>',
				'location' => 'Hengelo, Ov, Netherlands',
				'avatar'   => '/assets/images/avatars/tim.png',
				'twitter'  => 'timwienk',
				'github'   => 'timwienk',
			),
			array(
				'name'     => 'Arian Stolwijk',
				'nick'     => 'arian',
				'web'      => '<a href="http://aryweb.nl">aryweb</a>',
				'location' => 'Groningen/Delft, The Netherlands',
				'avatar'   => '/assets/images/avatars/arian.png',
				'twitter'  => 'astolwijk',
				'github'   => 'arian',
			),
			array(
				'name'     => 'Darren Waddell',
				'nick'     => 'fakedarren',
				'web'      => '<a href="http://blog.fakedarren.com">blog.fakedarren.com</a>',
				'location' => 'London, England',
				'avatar'   => '/assets/images/avatars/darren.png',
				'twitter'  => 'fakedarren',
				'github'   => 'fakedarren',
			),
			array(
				'name'     => 'Sebastian Markb�ge',
				'nick'     => 'sebmarkbage',
				'web'      => '<a href="http://calyptus.eu">calyptus.eu</a>',
				'location' => 'Sweden',
				'avatar'   => '/assets/images/avatars/sebastian.png',
				'twitter'  => 'sebmarkbage',
				'github'   => 'calyptus',
			),
			array(
				'name'     => 'Guillermo Rauch',
				'nick'     => 'guillermo',
				'web'      => '<a href="http://devthought.com">devthought.com</a>',
				'location' => 'Buenos Aires, Argentina',
				'avatar'   => '/assets/images/avatars/guillermo.png',
				'twitter'  => 'rauchg',
				'github'   => 'guille',
			),
			array(
				'name'     => 'Christoph Pojer',
				'nick'     => 'cpojer',
				'web'      => '<a href="http://cpojer.net/">cpojer.net</a>',
				'location' => 'Graz, Austria',
				'avatar'   => '/assets/images/avatars/christoph.png',
				'twitter'  => 'cpojer',
				'github'   => 'cpojer',
			),
			array(
				'name'     => 'Aaron Newton',
				'nick'     => 'anutron',
				'web'      => '<a href="http://clientcide.com">clientcide.com</a>, <a href="http://iminta.com">iminta.com</a>',
				'location' => 'SF, CA, USA',
				'avatar'   => '/assets/images/avatars/aaron.png',
				'twitter'  => 'anutron',
				'github'   => 'anutron',
			),
			array(
				'name'     => 'Djamil Legato',
				'nick'     => 'w00fz',
				'web'      => '<a href="http://djamil.it">djamil.it</a>',
				'location' => 'Torino, Italia',
				'avatar'   => '/assets/images/avatars/djamil.png',
				'twitter'  => 'w00fz',
				'github'   => 'w00fz'
			),
			array(
				'name'     => 'F�bio Miranda Costa',
				'nick'     => 'fabiomcosta',
				'web'      => '<a href="http://meiocodigo.com">meiocodigo.com</a>, <a href="http://solucione.info">solucione.info</a>',
				'location' => 'Natal/RN, Brazil',
				'avatar'   => 'http://en.gravatar.com/userimage/1172608/bb22718dff80dbe7d1ea5c4db4f12800.jpg?size=65',
				'twitter'  => 'fabiomiranda',
				'github'   => 'fabiomcosta'
			),
			array(
				'name'     => 'Thomas Aylott',
				'nick'     => 'SubtleGradient',
				'web'      => '<a href="http://subtlegradient.com">SubtleGradient.com</a>',
				'location' => 'Western North Carolina, USA',
				'avatar'   => 'http://tripledoubleyou.subtlegradient.com/i/Thomas-Aylott-65.png',
				'twitter'  => 'SubtleGradient',
				'github'   => 'subtleGradient',
			),
			array(
				'name'     => 'Jan Kassens',
				'nick'     => 'kassens',
				'web'      => '<a href="http://mootools.kassens.net/">kassens.net</a>',
				'location' => 'Darmstadt, Germany',
				'avatar'   => '/assets/images/avatars/jan.png',
				'twitter'  => 'kassens',
				'github'   => 'kassens'
			),
			array(
				'name'     => 'Olmo Maldonado',
				'nick'     => 'ibolmo',
				'web'      => '<a href="http://ibolmo.com/">ibolmo.com</a>',
				'location' => 'Los Angeles, CA, USA',
				'avatar'   => '/assets/images/avatars/olmo.png',
				'github'   => 'ibolmo',
			),
			array(
				'name'     => 'David Walsh',
				'nick'     => 'davidwalsh',
				'web'      => '<a href="http://davidwalsh.name">davidwalsh.name</a>',
				'location' => 'Madison, WI, USA',
				'avatar'   => '/assets/images/avatars/david.png',
				'twitter'  => 'davidwalshblog',
				'github'   => 'darkwing',
			),
			array(
				'name'     => 'Scott Kyle',
				'nick'     => 'appden',
				'web'      => '<a href="http://appden.com">appden.com</a>',
				'location' => 'New York City, New York, USA',
				'avatar'   => '/assets/images/avatars/scott.png',
				'twitter'  => 'appden',
				'github'   => 'appden',
			)
		)
;
		
		$past = array(
			array(
				'name'     => 'Christophe Beyls',
				'nick'     => 'Chris',
				'web'      => '<a href="http://www.digitalia.be/">www.digitalia.be</a>',
				'location' => 'Brussels, Belgium',
				'avatar'   => '/assets/images/avatars/chris.png',
				// 'github'   => '',
			),
			array(
				'name'     => 'Harald Kirschner',
				'nick'     => 'digitarald',
				'web'      => '<a href="http://digitarald.de">digitarald.de</a>',
				'location' => 'Lausanne, Switzerland',
				'avatar'   => 'http://digitarald.de/images/harald-k-100.jpg',
				'github'   => 'digitarald',
				'twitter'   => 'digitarald',
			),
			array(
				'name'     => 'Yaroslaff Fedin',
				'nick'     => 'inviz',
				'web'      => '<a href="http://inviz.ru">inviz.ru</a>',
				'location' => 'Somewhere in Siberia, Russia',
				'avatar'   => 'http://www.gravatar.com/avatar/ba36762da1f7e8d0758bbb352dd2f3f3?s=100',
				'github'   => 'inviz',
				'twitter'   => 'inviz',
			),
			array(
				'name'     => 'Tom Occhino',
				'nick'     => 'tomocchino',
				'web'      => '<a href="http://tomocchino.com">tomocchino.com</a>',
				'location' => 'CA, USA',
				'avatar'   => '/assets/images/avatars/tom.png',
				'github'   => 'tomocchino',
			),
			array(
				'name'     => 'Michelle Steigerwalt',
				'nick'     => 'Yuffster',
				'web'      => '<a href="http://msteigerwalt.com">msteigerwalt.com</a>',
				'location' => 'USA',
				'avatar'   => '/assets/images/avatars/michelle.png',
				'twitter'  => 'Yuffster',
				'github'   => 'Yuffster',
			)
		);
		
		shuffle($devs);
		shuffle($past);
		
		$this->data['super-dev'] = $super;
		$this->data['devs'] = $devs;
		$this->data['past-devs'] = $past;
		
		$this->render();
	}

}

?>