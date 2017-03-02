<?php

/*

---------------------------------------
License Setup
---------------------------------------

Please add your license key, which you've received
via email after purchasing Kirby on http://getkirby.com/buy

It is not permitted to run a public website without a
valid license key. Please read the End User License Agreement
for more information: http://getkirby.com/license

*/

c::set('license', 'put your license key here');

/*

---------------------------------------
Kirby Configuration
---------------------------------------

By default you don't have to configure anything to
make Kirby work. For more fine-grained configuration
of the system, please check out http://getkirby.com/docs/advanced/options

*/

// multilocale
c::set('languages', array(
  array(
    'code'    => 'en',
    'name'    => 'English',
    'default' => true,
    'locale'  => 'en_US',
    'url'     => '/',
  ),
  array(
    'code'    => 'de',
    'name'    => 'Deutsch',
    'locale'  => 'de_DE',
    'url'     => '/de',
  ),
  array(
    'code'    => 'fr',
    'name'    => 'Francaise',
    'locale'  => 'fr_FR',
    'url'     => '/fr',
  ),
  array(
    'code'    => 'it',
    'name'    => 'Italiano',
    'locale'  => 'it_IT',
    'url'     => '/it',
  ),
  array(
    'code'    => 'de',
    'name'    => 'Deutsch',
    'locale'  => 'de_CH',
    'url'     => '/de',
  ),
  array(
    'code'    => 'fr',
    'name'    => 'Francaise',
    'locale'  => 'fr_CH',
    'url'     => '/fr',
  ),
  array(
    'code'    => 'it',
    'name'    => 'Italiano',
    'locale'  => 'it_CH',
    'url'     => '/it',
  )
));
// lang auto detect
c::set('language.detect', true);
// changed date handler for langs
c::set('date.handler', 'strftime');

// activated cache
c::set('cache', true);
