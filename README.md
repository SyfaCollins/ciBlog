# ciBlog

This Blog app was created by the codeigniter aimed at covering its basics and
majorly the performance of the CRUD operations.

Inside the application/controllers I created a "Users.php" file which carries
a Users class.

## The Users Controller

The Users class carries the following methods

###### show()

            This method tests the READ operation, it calls a function "get_users()"
        from the User_model inside the application/models and assigned to a results variable.
        Then loads a view "user_view.php" file from the application/views folder
        inorder to display the records from my db table "users_db".

###### insert()

            This method tests the CREATE operation, it contains two variables $username
        and $password which holds strings.
        Then calls a function "create_users()" from the User_model, this function
        passes in an array of my variables as a parameter.
        Finally loads a view "success.php" file that displays a success message.

###### update()

            This method tests the UPDATE operation, it contains three variables $id,
        $username and $password which holds a number and strings.
        Then calls a function "update_user()" from the User_model, this function
        passes in an array of my variables as a parameter inorder to change the data
        inside my db table.
        Finally loads a view "success.php" file that displays a success message.

###### delete()

            This method tests the DELETE operation, it passes in an $id variable
        that helps us to select specific data and calls the "delete_user()" function
        from the User_model class

## The Views

This folder holds a bunch of view php files

###### user_view.php

            I will only talk about this file. This carries out results from the
        Users controller and runs a loop through our db table "users_db" and then
        displays the results of all our data inside the table.

## The Models

The model folder carries mainly the "User_model.php" file. The file holds a User_model
class and helps us to communicate directly with our database.

The class contains four methods that I used lately in the Users controller.
Inorder to communcate with our database I used Query Builders inside the methods.

###### get_Users()

            This calls a db->get() query builder that helps us grab the table "users"
        and provides us with the data. After its assigned to a varible $query.
        Then return the variable.



###### create()

            This calls a db->insert() query builder that takes in t wo arguments, the table name and data to be inserted into the table.

###### update()

            This method contains two query builders.
            The db->where() which takes in an associative array conditional argument.
            The db-> insert which takes in the table and data to be update by the selected $id


###### delete()

            This method works exaclty as the "update()" method above.

## ROUTES

        localhost/ciBlog/index.php/users/show/

## Database

        The application/Database/ folder carries an export database file

IMPORTANT: I recommend to first import the database file into your localhost
to avoid unexpected errors.
