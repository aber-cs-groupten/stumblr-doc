#! /usr/bin/env python
# Run this every time you add minutes

import os

minutes_list = ["List of minutes for Group 10\n", "---------------------------\n"]
minutes_number = 0
for filename in sorted(os.listdir("./Minutes")):
    if os.path.isdir(filename):
        continue

    minutes_number += 1
    line = ("  * [Meeting {0}]({1})\n".format(minutes_number, filename))
    minutes_list.append(line)

with open("minute_list.md", 'w') as f:
    for line in minutes_list:
        print line
        f.write(line)

print "Minute list generated."
