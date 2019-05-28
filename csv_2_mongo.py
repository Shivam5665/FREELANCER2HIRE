import csv
import json
import pandas as pd
import sys, getopt, pprint
from pymongo import MongoClient

#CSV to JSON Conversion
csvfile = open(r'/var/www/html/Minor_SY/current-employee-names-salaries-and-position-titles.csv', 'r')
reader = csv.DictReader( csvfile )
mongo_client=MongoClient() 
db=mongo_client.Freelancers
db.employee.drop()
header= ["Name", "Job Titles", "Department", "Full or Part-Time", "Salary or Hourly", "Typical Hours", "Annual Salary", "Hourly Rate"]

pp = pprint.PrettyPrinter(indent=4)

for each in reader:
    row={}
    for field in header:
        if field in ["Name"]:
            row[field] = ' '.join(each[field].split(","))
        elif each[field] != '' and field == "Full or Part-Time":
            row["Full_or_Part_Time"] = each[field]
        elif each[field] != '' and field in ["Typical Hours", "Annual Salary", "Hourly Rate"]:
            row['_'.join(field.split())] = float(each[field])
        else:
            row['_'.join(field.split())]=each[field]
    db.employee.insert(row)
    #pp.pprint(row)
    