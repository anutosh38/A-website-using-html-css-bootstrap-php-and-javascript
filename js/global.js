var date = new Date();
document.getElementById('datetime').innerHTML=date;
(function(){
"use strict";
var dropzone = document.getElementById('drop-zone')

var startUpload = function(files){
  console.log(files);
}

// Standard Upload
document.getElementById('standard-upload').addEventListener('click',function(e){
    var standardUploadFiles =document.getElementById('standard-upload-files').files;  
//   e.preventDefault();
  startUpload()
}) 




// Drop functionality
dropZone.ondrop = function(e){
  e.preventDefault();
  this.className = 'upload-console-drop';
  startUpload(e.dataTransfer.files);
}

dropZone.ondragover = function (){
    this.lassName='upload-console-drop drop';
    return false;
}

dropZone.ondragleave = function(){
     this.className = 'upload-console-drop';
     return false;
}

}());


