<?php
   // connect to mongodb
   //$m = new MongoClient('mongodb://hieuvyc:123456@ds147975.mlab.com:47975/vyctravel');
   $m = new MongoClient('mongodb://hieuvyc:123456@ds011495.mlab.com:11495/heroku_cvk26xnv');
   // select a database
   //$db = $m->vyctravel;
   $db = $m->heroku_cvk26xnv;
?>