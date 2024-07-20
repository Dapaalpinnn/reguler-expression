import re

MobilePhone = open("PhoneNumber.txt", "r").read()
Regex = re.findall(r'((0|\+0|62|\+62)(8| |-)[0-9 -]{5,13})', MobilePhone)
for Phone in Regex:
    print(Phone[0])
    
