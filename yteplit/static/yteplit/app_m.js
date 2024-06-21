const express = require('express');
const app = express();
const path = require('path');
const router = express.Router();

//let nav_content=['materials','disciplines','teachers','video','students','abitur','science','contacts'];
//let n,i; 
//n=nav_content.length;

router.get('/',function(req,res){
  res.sendFile(path.join(__dirname+'/index.html'));
});


app.use('/', router);
app.use(express.static(__dirname + '/public'));
app.use('/node_modules/@dotlottie', express.static(__dirname + '/node_modules/@dotlottie'));
app.listen(process.env.port || 3000);
 
console.log('Running at Port 3000');