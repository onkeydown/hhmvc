<?php

namespace hhmvc\app\controller\CategoriesController

class CategoriesController extends BaseController{

public function __construct(){
  parent::__construct();
 
 }

 public function index(){
 
  $cat = array(
'Charice','The Beatles','Elvis Presley', 'Nora Jones', 'James Brown','Rolling Stones','Bob Dylan','Chuck Berry','The Who','Led Zeppelin','Stevie Wonder','Jimi Hendrix','Ray Charles','The Beach Boys','Pink Floyd','Aretha Franklin','Little Richard','Marvin Gaye','Bruce Springsteen','David Bowie','Fats Domino','Black Sabbath','Queen','Buddy Holly','Bob Marley','Sam Cooke','Elton John','Neil Young','U2','Run-D.M.C.','Bo Diddley','Jerry Lee Lewis','B.B. King','Sly & The Family Stone','The Clash','Prince','The Grateful Dead','The Velvet Underground','Nirvana','Michael Jackson','The Supremes','The Temptations','Madonna','Public Enemy','The Kinks','Otis Redding','The Everly Brothers','Van Halen','Elvis Costello','Simon & Garfunkel','Cream','Frank Zappa','Roy Orbison','Eric Clapton','George Clinton & Parliament/Funkadelic','The Allman Brothers Band','Janis Joplin','The Ramones','Crosby, Stills, & Nash & Young','Fleetwood Mac','AC+DC','The Byrds','Joni Mitchell','The Eagles','Smokey Robinson & The Miracles','R.E.M.','Creedence Clearwater Revival','Johnny Cash','Van Morrison','Aerosmith','Curtis Mayfield & The Impressions','The Drifters','The Police','Metallica','Pearl Jam','Deep Purple','Bill Haley & His Comets','The Band','Santana','Yes','Jefferson Airplane','King Crimson','Al Green','The Isley Brothers','The Moody Blues','The Sex Pistols','N.W.A','Talking Heads','Tom Petty & The Heartbreakers','Billy Joel','The Bee Gees','The Yardbirds','The Four Tops','Radiohead','Patti Smith','Guns N Roses','Chicago','Rush','Bob Seger & The Silver Bullet Band','Rick Nelson','Earth Wind & Fire'
); sort($cat);
 
  $content = array(
     
     'sitepath'=>SITEPATH,
     'categoryHeader' => 'Music Video Categories',
     'cat'  => $cat
  );

  
  return $this->view->set_content($content,'categories.tpl');
 
 }
 
 }
