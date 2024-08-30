1. This machine contains SQLi (in login path) & RCE (in an endpoint)

Details : 

*gallery666* / Matrix Escape -  ramangautamdoc/ctf-2-machine-updated:latest
	1. `SQLi` in login form --> 'admin'-- -' 
	2. `RCE` in uploads/shell.php?cmd=< cmd > 
	3. MYSQL - _gallery_user:passw0rd321_
	4. _TechnoFusion{c8447dfc67cc7b1b170c7664c9172234}_
#	5. http://13.201.55.140/

-->> setup the DB first (based on gallery666) room on THM.
-->> 2. Prerequisites :

    -> you have to set the DB , with a username admin with any password , 
    -> then only it will able to process SQLi Quaries like -> admin'-- -
:::

