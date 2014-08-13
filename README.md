PrivDNS
=======
This is a little project for collecting public IP from my customers.

PrivDNS is a simple php script that stores public IP when a customer points to this script.

http://myserver/privdns.php?keydns=hash

When input hash is found on database,
it stores public IP retrieved with $_SERVER[REMOTE_ADDR]


Q. Why not using a service like dyndns or no-ip?
A. Because I wanted to play
