# Advent Calender

1. Setup a Virtual Environment
    - CD over the Project Folder
    
    - Create a Virtual Environment  
    ```commandline
      $ virtualenv venv
    ```
    - Activate Virtual Environment
    ```commandline
       $ source venv/bin/activate
    ```

2. PIP Install Flask
    ```commandline
      $ pip install flask
    ```
    
3. Export the App
    ```commandline
      $ export FLASK_APP=AdventCalendarApp
      $ export FLASK_DEBUG=1
    ```

4. To bring up the Development Server
   ```commandline
      $ flask run
   ```
