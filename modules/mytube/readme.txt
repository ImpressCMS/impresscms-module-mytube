*****************************************************
**  THIS README IS NOT UPDATED FOR MYTUBE 1.06 YET **
*****************************************************


===============
  MYTUBE 1.05
===============


1. INSTALLING MYTUBE

Unzip/unrar the downloaded file.
Upload the folder 'mytube' to the folder 'modules' on your server.
Upload the folder 'xt_images' to the folder 'uploads' on your server and check that the folder including sub-folders are CHMOD 777.
Go to the admin panel, choose Modules -> Administration and install MyTube as any other Xoops module.


2. UPGRADING FROM XOOPSTUBE 1.03 TO MYTUBE 1.05

- Make a backup of the database tables: xoopstube_altcat, xoopstube_broken, xoopstube_cat, xoopstube_indexpage, xoopstube_mod, xoopstube_videos, xoopstube_votedata
- Make a backup of the module XoopsTube (../modules/xoopstube/)
- Make a note of your module settings (blocks and Preferences)
- Uninstall the module XoopsTube
- Copy the files from the folder 'mytube' to the folder 'xoopstube' on your server
- Rename the folder 'xoopstube' on your server to 'mytube'
- Install the module MyTube from the Module Administration
- Import the database tables
- Update the module from the Module Administration (!!!)
- Create the directories 'videos' and 'screenshots' in uploads/xt_images/  (uploads/xt_images/videos/,  uploads/xt_images/screenshots/)
- Setup the modules (Preferences, Permissions, blocks, etc.)


3. UPGRADING FROM MYTUBE 1.05 TO MYTUBE 1.06

- Delete the files listed under the topic 'Removed files' in the changelog from your server
- Login as administrator and go to the Module Administration
- Upload all files from MyTube 1.06 to the folder /modules/mytube/
- Now update the module from the Module Administration.
 

5. RENAMING MODULE FOLDER

When you have renamed the installation folder from 'mytube' in whatever you wish, you have to open the file ../include/plugin.tag.php
Find the line: function mytube_tag_iteminfo(&$items) {
In this line you have to change 'mytube' into the name gave to the module folder before.
Also for other plugins you might have to change 'mytube' into the new folder name.


6. TAGS

To use the tag feature with MyTube your installation needs the following:
- Frameworks library installed
    http://addons.impresscms.org/modules/wfdownloads/singlefile.php?lid=170
- Xoops Tag module installed and active, for example version 1.6. 
    http://addons.impresscms.org/modules/wfdownloads/singlefile.php?cid=8&lid=1333

Make sure that you use versions for Xoops 2.0.18 and not for Xoops 2.3!
If the Tag module is installed and active, an extra form for entering the tags will be visible in the submit forms.
For users the tag form can be enabled/disabled from the Preferences, for admins this form will always be visible.

Note: Do NOT use the blocks Top Tag and Tag Cloud when the Tag module is not installed. 


7. WAITING PLUGIN

Upload the folder 'plugins' and its content from the downloaded zip-file to the root of website.




    .::McDonald::.

