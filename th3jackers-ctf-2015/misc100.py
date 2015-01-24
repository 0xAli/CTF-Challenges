import StringIO
charset = "abcdefghijklmnopqrstuvwxyz"
#Use this to convert 1 into a, and 2 to b
chall = """
______
____________
_
_______
{
_______
1
______________________
3
-
_____________
3
-
____________________
________
4
-
______
____________
_
_______
}"""
parse = StringIO.StringIO(chall)
lines = parse.readlines() #Read the lines
flag  = ''
for line in lines:
	if(line[:1] == '_'): #If it starts with _ then it's the crypted line
		flag = flag +  charset[len(line.strip())- 1] #Remove the new line separator, and get 1 to match charset[0]
	else:
		flag = flag + line.strip() #Else, then it's "-" or number
print flag
