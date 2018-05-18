Extract and Save Car Parking and Bike Sharing Data
==================================================

Description
-----------
The exercise requires to create a service in PHP to periodically get parking and bike sharing data from given URLs and save in a MySQL database.
Data provided in the URLs are in XML and JSON format, so the service should be able to parse XML and JSON data and extract the information to dave in the database.
The exercise also requires analyzing source data and define the database schema.

Tasks
-----

  * Analyze data provided by the URLs: for [parking data from Torino](http://opendata.5t.torino.it/get_pk) and for [ bike sharing data Trento](https://os.smartcommunitylab.it/core.mobility/bikesharing/trento).
  * Define database schema to save data from the source URL
  * Create MySQL database tables to store both parking and bike sharing data
  * Install PHP and MySQL server (XAMPP can be used as the application suite of servers)
  * Create a service in PHP that periodically (in every 10 minutes for example, should be
configurable) fetch both XML and JSON data from the provided URL
  * Build two parser (XML and JSON) to extract data fetched from the URLs
  * Save extracted data into the database

Submission
----------  
Students are requested to submit their code on a github repository with clear instruction on how to
run the code. As part of the final rep ort they have to send the repository link by email to the person
responsible for the exercise. 
