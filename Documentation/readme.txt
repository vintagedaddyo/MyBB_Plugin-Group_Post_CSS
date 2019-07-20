Group Post CSS
Allows you to add custom CSS for each groups posts.

When you edit the group, under the miscellaneous tab there will be an option to set the Postbit Info CSS (The user information at left in classic, top in regular) and message (the rest of the post). You can set CSS for the usergroup to have their posts displayed differently (E.G. background: #ffffff !important; ) *you must use ( !important; to overwrite any existing styling). All posts by this usergroup will be displayed with this css.

Previously for MyBB 1.2.x & MyBB 1.4.x

Version: 2.1
Author: Jammerx2
Submitted: 2nd January 2010

Now updated to work with MyBB 1.8.x by: Vintagedaddyo!

Version: 2.2
Author: Vintagedaddyo
Submitted: 7th March 2018

Version: 2.3
Author: Vintagedaddyo
Submitted: 20th July 2019

- added border color option

current localization:

-english
-spanish
-french
-italian



Example usage:

For Administrators:

Postbit Author Info CSS
The CSS that will be used for the Author information part of the postbit.

background: #b1f279 !important;

Postbit Message CSS
The CSS that will be used for the message part of the postbit.

background: #e5fcd1 !important;
color: #318000 !important;


Postbit Bottom Menu CSS
The CSS that will be used for the bottom part of the postbit.

background: #b1f279 !important;


Postbit Bottom Menu CSS (Classic Postbit Only)
The CSS that will be used for the bottom part of the classic postbit.

background: #b1f279 !important;


Postbit Message CSS (Classic Postbit Only)
The CSS that will be used for the message part of the classic postbit.

background: #e5fcd1 !important;
color: #318000 !important;



Example usage:

For Super Moderators & Moderators:

Postbit Author Info CSS
The CSS that will be used for the Author information part of the postbit.

background: #ffd6fc !important;


Postbit Message CSS
The CSS that will be used for the message part of the postbit.

background: #f9e3f8 !important;
color: #CC00CC !important;


Postbit Bottom Menu CSS
The CSS that will be used for the bottom part of the postbit.

background: #ffd6fc !important;


Postbit Bottom Menu CSS (Classic Postbit Only)
The CSS that will be used for the bottom part of the classic postbit.

background: #ffd6fc !important;


Postbit Message CSS (Classic Postbit Only)
The CSS that will be used for the message part of the classic postbit.

background: #f9e3f8 !important;
color: #CC00CC !important;


Example usage:

For Registered Users:

Postbit Author Info CSS
The CSS that will be used for the Author information part of the postbit.

background: #aeddfc !important;


Postbit Message CSS
The CSS that will be used for the message part of the postbit.

background: #cfeafc !important;
color: #0072BC !important;


Postbit Bottom Menu CSS
The CSS that will be used for the bottom part of the postbit.

background: #aeddfc !important;


Postbit Bottom Menu CSS (Classic Postbit Only)
The CSS that will be used for the bottom part of the classic postbit.

background: #aeddfc !important;


Postbit Message CSS (Classic Postbit Only)
The CSS that will be used for the message part of the classic postbit.

background: #cfeafc !important;
color: #0072BC !important;


Postbit Border:


Postbit Post Border CSS:
The CSS that will be used for the border part of the postbit.

&

Postbit Post Border CSS (Classic Postbit Only):
The CSS that will be used for the border part of the classic postbit.


Example CSS:

Administrators:

margin-top: 6px;
margin-left: 4px;
margin-right: 4px;	 
margin-bottom: 6px;
border: 1px solid #008000;
-webkit-box-shadow: inset 0 1px 1px rgb(0,128,0), 0 0 8px rgba(0,128,0, 0.8);
box-shadow: inset 0 1px 1px rgba(0,128,0, 0.8), 0 0 8px rgba(0,128,0, 0.8);


Super Moderators:

margin-top: 6px;
margin-left: 4px;
margin-right: 4px;	 
margin-bottom: 6px;
border: 1px solid #CC00CC;
-webkit-box-shadow: inset 0 1px 1px rgb(204,0,204), 0 0 8px rgba(204,0,204, 0.8);
box-shadow: inset 0 1px 1px rgba(204,0,204, 0.8), 0 0 8px rgba(204,0,204, 0.8);


Moderators:

margin-top: 6px;
margin-left: 4px;
margin-right: 4px;	 
margin-bottom: 6px;
border: 1px solid #CC00CC;
-webkit-box-shadow: inset 0 1px 1px rgb(204,0,204), 0 0 8px rgba(204,0,204, 0.8);
box-shadow: inset 0 1px 1px rgba(204,0,204, 0.8), 0 0 8px rgba(204,0,204, 0.8);


Registered:

margin-top: 6px;
margin-left: 4px;
margin-right: 4px;	 
margin-bottom: 6px;
border: 1px solid #0072BF;
-webkit-box-shadow: inset 0 1px 1px rgb(0,114,191), 0 0 8px rgba(0,114,191, 0.8);
box-shadow: inset 0 1px 1px rgba(0,114,191, 0.8), 0 0 8px rgba(0,114,191, 0.8);