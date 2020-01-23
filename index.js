var express = require('express');
require('dotenv').config()

try {
  global.client = new pg.Client(`${process.env.DATABASE_URL}?ssl=true`);
  client.connect();

} catch (err) {
  console.log(`ERROR::: app.js >>> 16 >>> err `, err);
}

router.post('/createRec', function(req, res, next) {
  try{
  if(req.body.firstname!=undefined && req.body.lastname!=undefined){
      client.query(`INSERT INTO public."user_rec" (first_name,last_name) VALUES ($'{req.body.firstname}','${req.body.lastname}';`,function(err,response){
        if(err){
          console.log('Error::::: err >> ', err);

          res.redirect('/');

        }else{
        }
      });
  }
}
catch (e){
console.log('error occured in login page',e);
res.redirect('/');
}
