import datetime
import random
import socket
import copy

origindeck = [
	"Birds of Paradise1",
	"Birds of Paradise2",
	"Birds of Paradise3",
	"Birds of Paradise4",
	"Eternal Witness1",
	"Kitchen Finks1",
	"Kitchen Finks2",
	"Kitchen Finks3",
	"Linvala, Keeper of Silence1",
	"Murderous Redcap1",
	"Noble Hierarch1",
	"Noble Hierarch2",
	"Orzhov Pontiff1",
	"Reclamation Sage1",
	"Restoration Angel1",
	"Restoration Angel2",
	"Reveillark1",
	"Scavenging Ooze1",
	"Shriekmaw1",
	"Siege Rhino1",
	"Siege Rhino2",
	"Sin Collector1",
	"Spellskite1",
	"Voice of Resurgence1",
	"Voice of Resurgence2",
	"Voice of Resurgence1",
	"Wall of Roots1",
	"Wall of Roots2",
	"Abrupt Decay1",
	"Abrupt Decay2",
	"Abrupt Decay1",
	"Birthing Pod1",
	"Birthing Pod2",
	"Birthing Pod1",
	"Birthing Pod2",
	"Thoughtseize1",
	"Thoughtseize2",
	"Forest1",
	"Forest2",
	"Forest3",
	"Gavony Township1",
	"Gavony Township2",
	"Godless Shrine1",
	"Marsh Flats1",
	"Overgrown Tomb1",
	"Overgrown Tomb2",
	"Plains1",
	"Razorverge Thicket1",
	"Razorverge Thicket2",
	"Razorverge Thicket1",
	"Swamp1",
	"Temple Garden1",
	"Verdant Catacombs1",
	"Verdant Catacombs2",
	"Verdant Catacombs1",
	"Verdant Catacombs2",
	"Windswept Heath1",
	"Windswept Heath2",
	"Windswept Heath3",
	"Windswept Heath4",
]

class sock:
	def sendall(self, data):
		print data
	def recv(self,l):
		return raw_input()

def shuffle(deck):
	for i in xrange(len(deck)):
		s = random.randint(0, len(deck)-1)
		t = deck[s]
		deck[s] = deck[i]
		deck[i] = t
	return deck

def my_game(dek,sock,seeds):
	# If we got a winning deck use that deck
	# Becuase it's shuffled in the right order, and the server uses the shuffled deck after every try
	if(dek != ''):
		basedeck = list(dek)
	else:
		basedeck = list(origindeck)
	random.seed(seeds)
	deck = shuffle(basedeck)
	return deck
	
wdeck = '' # Initialize the winning deck
while True:
	inputt = raw_input("Enter input: ")
	s   = sock()
	i = 0  # We will use that to go back in time (microseconds)
	now = datetime.datetime.now() # Always start using the time we get after the input
	while True:
		i  += 1 # i++
		shiftms = i*10000
		thetime = now -  datetime.timedelta(microseconds=shiftms) # Go back in time
		tdeck = my_game(wdeck,s, thetime.isoformat()[:-4])
		# Start the game with the winning deck if this is not the first try
		# And use thetime which is in the past
		exec("ddeck = "+inputt) # get the input deck as a list
		if tdeck[:7] == ddeck[:7]: # If we get the right seed, the input should match the first cards in the deck
			wdeck = list(tdeck)    # We have a winner, use that deck in the next game
			print "Got winning"
			print ','.join(tdeck[7:20]) # Return the solution for that game
			break
			
