# Team Medjed
# Johnathan Burns, Ethan Spangler, Michael Xie
# Volhacks 2017

import boto3
import sys
import time
import requests
import json
import math
import datetime

class AsyncNotify:
	
	def CreateTopic(self, topic_id):
		self.topic = self.client.create_topic(Name=topic_id)
		self.topic_arn = self.topic['TopicArn']
	
	def SubToTopic(self, notification_destination):
		self.client.subscribe(
			TopicArn = self.topic_arn,
			Protocol = self.protocol,
			Endpoint = notification_destination
		)

	# Loops slowly until either the computer is available or timeout ocurred
	def AwaitComputerAvailability(self, computer_id, timeout):
		end_time = time.time() + timeout
		while not(self.CheckComputerStatus(computer_id)) and time.time() < end_time:
			#print "Waiting.."
			time.sleep(10)
		return time.time() < end_time
		
	#TODO
	# Checks to see if the computer is in use
	def CheckComputerStatus(self, computer_id):
		url = "http://ec2-54-86-220-26.compute-1.amazonaws.com/?query=SELECT%20computer_timestamp%20FROM%20computers%20WHERE%20computer_id='" + str(computer_id) + "'"
		response = requests.get(url)
		#print response.text
		extracted_timestamp = time.strptime(response.text[response.text.find("[[")+2:response.text.find("]]")], "%m/%d/%y %I:%M:%S %p")
		#print extracted_timestamp
		#print time.mktime(extracted_timestamp)
		#print time.time()
		# Returns true if the computer has not been used in the last 5 minutes
		t_diff = abs(time.mktime(extracted_timestamp) - (60 * 60) - time.time())
		#print t_diff
		return t_diff > (5 * 60)

	# Sends the message to the subscribed recipient
	def SendMessage(self, message):
		#print message
		self.client.publish(Message=message, TopicArn=self.topic_arn)
	
	def __init__(self, aws_secret_key, computer_id, notification_destination, timeout):
		self.client = boto3.client(
			"sns",
			aws_access_key_id="AKIAJIJ4RPDGEO5VAIMQ",
			aws_secret_access_key=aws_secret_key,
			region_name="us-east-1"
		)
		
		self.client.aws_secret_key = aws_secret_key
		self.computer_id = computer_id
		
		# Dynamically pick between sms and email
		if '@' not in notification_destination:
			self.protocol = 'sms'
		else:
			self.protocol = 'email'
		
		# Create the topic and have the device subscribe to it
		topic_id = "Update-Computer" + str(computer_id)
		self.CreateTopic(topic_id)
		self.SubToTopic(notification_destination)
		
		# Wait for the computer to become available for up to (timeout * 60) seconds
		if self.AwaitComputerAvailability(computer_id, int(timeout) * 60):
			self.message = "Your computer is now available!"
		else:
			self.message = "Sorry, the computer did not become available within " + str(timeout) + " minutes.\nPlease try again."

		self.SendMessage(self.message)
		
		#self.client.Unsubscribe(self.topic_arn)
		self.client.delete_topic(TopicArn=self.topic_arn)

if __name__ == "__main__":
	if len(sys.argv) != 5:
		print("Usage: notifyUser.py $aws_secret_key $computer_id $notification_destination $timeout")
		sys.exit(0)
	else:
		asyncNotify = AsyncNotify(sys.argv[1], sys.argv[2], sys.argv[3], sys.argv[4])
