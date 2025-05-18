# Content Management System (CMS)

This is a **Content Management System (CMS)** developed in **PHP**, with a structured backend and frontend that allows for easy management of website content. It includes CRUD (Create, Read, Update, Delete) functionalities for main pages and subpages, with admin access for full control. The system is connected to a MySQL database for data persistence.

---

## Technologies Used
- **Frontend:** HTML, CSS (Themes), JavaScript
- **Backend:** PHP
- **Database:** MySQL
- **Scripts:** Vanilla JavaScript for client-side interactivity
- **Hosting:** Raspberry Pi (configured with Apache and MySQL)

---

## Project Structure
```
ContentCMS-master/
    ├── backend/
    │   ├── addmainpage.php             # Add a new main page
    │   ├── addsubpage.php              # Add a new subpage
    │   ├── admindata.php               # Manage admin data
    │   ├── adminmenu.php               # Admin dashboard
    │   ├── content_data.sql            # SQL dump for database setup
    │   ├── dbconfig.php                # Database configuration
    │   ├── deletemainpage.php          # Delete a main page
    │   ├── deletesubpage.php           # Delete a subpage
    │   ├── editmainpage.php            # Edit main page details
    │   ├── editsubpage.php             # Edit subpage details
    │   ├── getmainpagedata.php         # Fetch main page data
    │   ├── getsubpagedata.php          # Fetch subpage data
    │   ├── index.php                   # Backend entry point
    │   ├── logout.php                  # Logout functionality
    │   ├── updatemainpage.php          # Update main page
    │   └── updatesubpage.php           # Update subpage
    ├── frontend/
    │   ├── about.php                   # About page
    │   ├── contact.php                 # Contact page
    │   ├── email.php                   # Email page
    │   ├── history.php                 # History page
    │   ├── home.php                    # Home page
    │   ├── locations.php               # Locations page
    │   ├── mission.php                 # Mission page
    │   ├── scripts/
    │   │   ├── aboutpagescript.js
    │   │   ├── contactpagescript.js
    │   │   ├── emailpagescript.js
    │   │   ├── historypagescript.js
    │   │   ├── homepagescript.js
    │   │   ├── locationspagescript.js
    │   │   └── missionpagescript.js
    │   └── styles/
    │       ├── theme1.css
    │       ├── theme2.css
    │       └── theme3.css
```

---

## Installation & Setup
1. **Clone the repository:**
   ```bash
   git clone https://github.com/YourUsername/ContentCMS.git
   ```

2. **Setup Raspberry Pi:**  
   - Install Apache and PHP:
     ```bash
     sudo apt-get update
     sudo apt-get install apache2 php libapache2-mod-php
     ```
   - Install MySQL:
     ```bash
     sudo apt-get install mysql-server
     sudo mysql_secure_installation
     ```

3. **Database Configuration:**
   - Open **phpMyAdmin** (or MySQL CLI).
   - Import the `content_data.sql` located in `/backend`.
   - Configure database in `backend/dbconfig.php`:
     ```php
     $db_host = "localhost";
     $db_user = "root";
     $db_pass = "yourpassword";
     $db_name = "content_cms";
     ```

4. **Deploy to Raspberry Pi Web Server:**
   - Move the project files to the web root:
     ```bash
     sudo cp -r ContentCMS-master/* /var/www/html/
     ```
   - Restart Apache:
     ```bash
     sudo systemctl restart apache2
     ```

5. **Access the Application:**  
   - Open a browser and navigate to:
     ```
     http://<RaspberryPi-IP>/home.php
     ```
   - Replace `<RaspberryPi-IP>` with your Raspberry Pi's IP address.

---

## Features
- Admin Dashboard for content management
- CRUD operations for main pages and subpages
- Multiple themes for styling
- Secure admin login and session management
- Responsive frontend pages

---

## License
This project is licensed under the MIT License.
