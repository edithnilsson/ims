# Code Grading - Answers
Orientation questions

### Create table.sql
What do you think that this file does? What columns are created? What data types are stored in our columns? And which size is the data allowed to be? Which column holds the primary key (and why?) What do you think AUTO INCREMENT does?
- It creates a table called “animals”. The columns “ID”, “name”, “domain” and “propulsion”. The data types are INT and VARCHAR(255). “ID” holds the primary key because we need to have the primary key as a unique value, the other columns might not be unique. AUTO INCREMENT increments the integer automatically for the ID column. 

### Get data.php
Observe on line 1 and 28 that we need to open and close a .php file. Write down the syntax to do so.
open: <?php
close: ?>
Observe on line 2-5 that we are creating variables. Write down the syntax to create a variable in php.
$variablename = "name";
For each of the variables on line 2-5, describe what they are. What values should they hold in your case? (don’t write this down, as this can be a threat to your IMS security)
This can be found on the webpage for MAMP. 
$servername - specifies location of database server
$username - database user account
$password - database user password
$dbname - name of db
Line 8: what variable is created here, and why? What do you think is the purpose of line 10-12, why do we need this?
$link - connecting to the database with the variables above
If it doesn’t succeed, the lines 10-12 will produce an error message and close it down.
Line 14: What does echo do? What would you call this statement in other programming languages you know?
echo prints out the text between the quotation marks
In python we would call it a print statement
Line 14: you can see HTML code here. What do you think this echo statement returns?
The column names (they are manually specified) as a table header.
Line 17: here we are calling our $link variable. Why do you think that is? Here we introduce a new operator: “->”. Why do you think this operator is useful? Here we introduce a new method, query. What do you think this method does, and which parameter do we use?
The $link variable is used to connect back to the database it was connected to earlier.
“->” applies the query on the database that was specified on the line above. It is very useful as you can write your queries in SQL but still put them in the PHP code.
On line 19: we observe that num_rows is not coloured yellow like our methods. At the same time, it is not a variable either, since it does not start with $. We call this a property access. What are we accessing, and from where?
We’re accessing the table (and the number of rows) that is stored in $result. In this case it is the whole table called animals. This was created from the SQL query. 
Line 19 - 25: a conditional loop is introduced. Can you guess what the output is of this code? Under which conditions?
The output is the information stored about the animals in the database.
In the loop, it continues to print info as long as there are more rows.

### Index.php
Can you guess what the purpose is of this file? Hint: Think about your IMS. If the user is on the index page, where would they be?
This is the home page. The purpose of this file is to be a starting page that we could start working from.

### Insert_data.html
What do you think a form is in HTML?
A form is a way to import specific data from the user into the database.
Take note of the post method, we will see it come back in the next file

### Insertdata.php
New concept: In PHP, variables that start with $_are superglobals. Superglobals are special built-in arrays that PHP automatically creates and fills with data about the request, the server, the environment, etc.
Line 16-21. What do you think the $_POST superglobal does?
$_POST retrieves the information manually put in, in the HTML form with the same name. 
ex row from HTML form: Name:<input type="text" name="name"><br>
$name = $_POST['name'];
Line 23: here we prepare a SQL query. Why do you think the values are left blank for now? (?,?,?)
They act as a placeholder for the data that is given by the user before it is added to the database. With this, the input can vary. 

New concept: bind_param -> Bind variables for the parameter markers in the SQL statement prepared by mysqli_prepare() or mysqli_stmt_prepare().

This method takes two parameters: a type definition string:
s = string
i = integer
d = double/float
b = blob (binary data)

And PHP variables to bind the placeholder values to.
Line 27: Even though we have $_POST[‘id’] data, we do not enter this into our database! Why is that? Think about our first file, create_table.sql
Because we want “id” to be unique in our database and since we specified that it will be increased automatically there is no need to specify an id.
Line 36: Close db connection. This is the first time we see this. Why does it occur here?
Because now we’re done using the database, and for security reasons, the connection does not always have to be active.

