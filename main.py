#!/usr/bin/env python3
# an alternative implementation i guess?

import webbrowser
import json
import datetime
import time


def getCurrentTime():
    cT = datetime.datetime.now()
    fcT = str(f"{cT.hour:02}:{cT.minute:02}")
    return fcT


def openLink(link):
    l = webbrowser.open(link)
    if l:
        return True
    else:
        return False


def checkTime(first, second, link):
    hasRan = False
    if not hasRan and first == second:
        k = openLink(link)
        if k:
            hasRan = True
            return True


def openJson(file):
    f = open(file)
    return json.load(f)


def loop():
    mainResponseObject = openJson("monday.json")
    print(f"Starting Autozoom for 10 slots of links.")
    for i in range(10):
        # get time from current slot
        slotTime = mainResponseObject[f"{i}"]["time"]
        slotLink = mainResponseObject[f"{i}"]["link"]
        slotTitle = mainResponseObject[f"{i}"]["title"]
        # start loop
        running = True
        while running:
            currentTime = getCurrentTime()
            p = checkTime(currentTime, slotTime, slotLink)
            if p:
                i += i
                print(
                    f"Current object of the current slot({i}) is: {slotTitle}.")
                running = False
                # or have your cpu fan spin forever. Your choice.
                time.sleep(30)


def main():
    mainRunning = True
    while mainRunning:
        try:
            loop()
        except KeyboardInterrupt or Exception as e:
            if KeyboardInterrupt:
                print("\nExit")
                mainRunning = False
            else:
                print(e)


if __name__ == "__main__":
    main()
