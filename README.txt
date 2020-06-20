6G5Z2107 - 1CWK50 - 2020/21
<Wahab Rehman>
<17068255>

SETUP:
...
STEP 1:
OPEN XAMP

START APACHE AND MYSQL

STEP 2:

Go on to my phpadmin and create a table called games-reviewDB

STEP 3:

IMPORT a database in to phpadmin. The file used to import the database will be found in application/SQL/web-design-skeleton.sql

STEP 4:

Type in the url, the baseurl you are currently using and then games-review/index.php/home. There you will be taken to the home page
and able to interactive with the website

DOCUMENTATION:
This website is essentially is a clone website of IGN. Users are able to go on to the site look at reviews of specific games.

Users can click on a individual game, which will take them to a specific review page for that game.
Users are able login in to the site. There is also a page where users can manage their own account ie they can change their TYPE of user status (ADMIN USER OR BASIC USER)

All the games are displayed in a grid method using boostrap, and below each game there will be a find more button. When user clicks on this button it will take the user
to the specific page of the game.

There is no sign up feature to the current site, user can only log in to the site. If you could like to login in to the site, you can
find the user login details provided in my phpadmin when you import the database or the actual sql file.

There is a search feature located within the navbar, where users can search for a specific game.

Furthermore one of my favourite features of the site is a fully featured comment system. Users are able to add comments dynamically using the
JavaScript framework Vue.JS

If a user is not logged in and they enter a comment, it will display their user name as Anoynamous user. Where as if they were logged in it will display
their user name as well as their comment.

The final feature is a fully featured chat system, nice little interface giving the user the ability to chat between different browsers. Chat server must
be turned on if you want to use the chat service



CHAT SET UP:

When using the chat system, there is a couple of steps

STEP 1:

Have node.js installed

STEP 2: 

cd in to the application/scripts directory using the terminal. Once you are inside that directory using the terminal, type in npm install socket.io
to install the chat library

STEP 3:

Assuming everything is done, active the server by typing in node app.js INSIDE THE DIRECTORY OF YOUR SCRIPTS FILE

Features
- Interlinking pages
- Chat system
- Search feature
- Login feature
- Comments feature (Able to add comments dynamically)
- Account management

Future updates

Currently my chat bot is very limited. In the future I would like to have the functionality of having different chat rooms.
I would also want my chat bot to distinguise between whose talking to who, so display the user names of the users while talking
..
Theres a little error with the account management that i need to fix, once a user updates its TYPE they will be taken to a blank screen rather being redirected to the account page.
However despite this bug, the user type still gets updated
..
In the future Id probably add more games on the site. The search bar seems kinda redundant considering there is only 6 games avaliable on the site
..
I would like to add some more functionality to the comments combined with account management. For instance giving the user to delete their own comments for their
specific games. The way it would work is having a list of the users comments in the users account page. They would then be able click a X 
icon next to the comment, which will delete that specific comment.