1. create database wsdc_faculty_profile and import assets/sql/wsdc_faculty_profile.sql (Faculty profile)
2. create database wsdc_registration and import assets/sql/wsdc_registration.sql (Student registration data)
3. create database wsdc_feedback and import assets/sql/wsdc_feedback.sql (Academic feedback for faculty protal)
4. import assets/sql/nba.sql (Course Direct Feedback)
5. create database wsdc_elective and import assets/sql/wsdc_elective.sql (open Elective Admin)

**NOTE: In  \application\modules\registration\config\registration.cong.php 
			replace 
				$config['database']['faculty_profile'] =  "test_faculty_profile2"; 
			with 
				$config['database']['faculty_profile'] =  "wsdc_faculty_profile";

**NOTE: please rename applications/config/database.php.example to applications/config/database.php

---------Credentials---------

Admin: 
	username => test_admin
	password=> test_admin

HOD: 
	username => test_hod
	passsword => test_hod

Faculty:
	username => test_faculty
	password => test_faculty

---contact---
queries: awachat11vaibhav@gmail.com
phone number: 8801453511
------------