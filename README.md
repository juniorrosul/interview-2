# interview-2

Here is a short description for running the app using a vagrant machine:

1. With a CLI navigate to `[project_folder]\homestead`;
2. Run this code:
```c
// Mac / Linux...
$ bash init.sh

// Windows...
init.bat
```
3. Edit `Homestead.yaml` to attend your configurations;
    - For windows user, home directory can be: `/Users/[user_name]`
4. Run `vagrant up`;
5. Run `vagrant ssh`;
6. Navigate to your project folder in virtual machine;
7. Run `$ composer install`;
8. Run `$ npm install`;
