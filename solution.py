import sys,math

fh = open(sys.argv[1],"r")
results = {}
nCount = fh.readline() # First line is the number of test cases..we dont really need it though.

for line in fh.readlines():
	number = int(line.strip())
	# Check if we already analyzed this number
	if(number in results):
		print results[number]
		continue
	x = int(math.floor(math.sqrt(number)))
	y = 0
	x_squared = x ** 2
	y_squared = 0
	results[number] = 0

	while(x >= y):
		trialSum = x_squared + y_squared
		if(trialSum < number):
			y += 1;
			y_squared = y ** 2
		elif(trialSum > number):
			x -= 1;
			x_squared = x ** 2
		else:
			results[number] += 1
			x -= 1;
			y += 1;
			x_squared = x ** 2
			y_squared = y ** 2
	print results[number]

fh.close()