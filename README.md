# Social Network Website

This is a simple social network website designed with core php and of course with the aid of the html, css and core javascript.
It supports the following functionalities:
* User registeration
* Creation of post with possibility of stamping a picture along with it
* Sending and recieving friend requests as well as accepting or ignoring them
* Viewing profiles and your relation with them
* Channging profile picture
* Simple search

Notes:
* Home shows all public posts. It doesn't show private posts except if the poster is on your friend list.
* Posts are displayed in chronological order from latest to oldest.
* Home also shows your own posts.

Website Layout and Interface Looks Like:

![alt text](https://imgur.com/QZeud9E.png)
![alt text](https://imgur.com/fy5FLIX.png)
![alt text](https://imgur.com/E6xmAgL.png)
![alt text](https://imgur.com/PaxbrHJ.png)

To do list:
* Download the specified font along with website as it is accessed to ensure layout consistency
* Ability of removing posts of a friend from friendlist
* Supporting post likes
* Real time notifications for post likes and friend requests
* Using search engine instead
* Full profile edit
* Using plugins to avoid redirection or refresh of pages when making requests
* Full protection of data from injections

To install this application:
* create a database from DDM.sql file which is found within database folder.
* For a simple data test, use DML.sql to create a simple instance of data (passwords of users are equivalent to the first names).
* copy all other files to your a new folder (folder name is of your choice that is the website name) inside htdocs folder and run.
