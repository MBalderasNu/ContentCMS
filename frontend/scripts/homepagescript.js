var pageData;
var request = new XMLHttpRequest();
 
loadData();
 
function loadData() {
  request.open('GET', 'http://localhost/lab3/ContentCMS/backend/getmainpagedata.php?id=1');
  request.onload = loadComplete;
  request.send();
}
 
function loadComplete(evt) {
  pageData = JSON.parse(request.responseText);
  console.log(pageData);
  document.getElementById("title0").innerHTML = pageData.title;
  document.getElementById("content0").innerHTML = pageData.content;
 
}
