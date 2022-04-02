<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'fname' => 'Abinash ',
                'lname' => 'Bhatta',
                'mobile' => '8895274919',
                'gender' => NULL,
                'status' => 1,
                'username' => 'abinash889',
                'password' => '444333',
                'temp_password' => NULL,
                'email' => 'abinash889@gmail.com',
                'designation' => NULL,
                'signature' => '',
                'is_deleted' => 'N',
                'level_1' => NULL,
                'level_2' => NULL,
                'images' => NULL,
                'modified_at' => '2022-02-17 14:16:30',
                'modified_by' => 1,
                'created_by' => 1,
                'deleted_by' => NULL,
                'location_id' => 2,
                'role_id' => 1,
                'last_login' => '2022-02-13 04:32:48',
                'remember_token' => NULL,
                'created_at' => '2022-02-12 18:30:00',
                'updated_at' => '2022-03-28 07:07:12',
            ),
            1 => 
            array (
                'id' => 2,
                'fname' => 'Lucky',
                'lname' => 'Roma',
                'mobile' => '4455778899',
                'gender' => 'female',
                'status' => 1,
                'username' => NULL,
                'password' => '444333',
                'temp_password' => NULL,
                'email' => 'puspitapuspajyoti1@gmail.com',
                'designation' => 'Iure iste explicabo',
                'signature' => '<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p>Quia qui asperiores .</p>
</body>
</html>',
                'is_deleted' => 'N',
                'level_1' => '1',
                'level_2' => '1',
                'images' => '1646221376.jpg',
                'modified_at' => '2022-03-02 17:12:56',
                'modified_by' => NULL,
                'created_by' => NULL,
                'deleted_by' => NULL,
                'location_id' => 2,
                'role_id' => 1,
                'last_login' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-03-02 11:42:56',
                'updated_at' => '2022-03-28 11:51:55',
            ),
            2 => 
            array (
                'id' => 3,
                'fname' => 'Gyana',
                'lname' => 'Cardenas',
                'mobile' => '1234567890',
                'gender' => 'male',
                'status' => 1,
                'username' => NULL,
                'password' => NULL,
                'temp_password' => NULL,
                'email' => 'konimesygi@mailinator.com',
                'designation' => 'Quaerat atque ea ut',
                'signature' => '<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p>Eius laboriosam, adi.</p>
</body>
</html>',
                'is_deleted' => 'N',
                'level_1' => '1',
                'level_2' => '1',
                'images' => '1646221454.jpg',
                'modified_at' => '2022-03-02 17:14:15',
                'modified_by' => NULL,
                'created_by' => NULL,
                'deleted_by' => NULL,
                'location_id' => 1,
                'role_id' => 2,
                'last_login' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-03-02 11:44:15',
                'updated_at' => '2022-03-02 11:44:15',
            ),
            3 => 
            array (
                'id' => 4,
                'fname' => 'Veronica',
                'lname' => 'Gaines',
                'mobile' => '1122336655',
                'gender' => 'others',
                'status' => 2,
                'username' => NULL,
                'password' => NULL,
                'temp_password' => NULL,
                'email' => 'kebuvyxoqu@mailinator.com',
                'designation' => 'Expedita ut id volup',
                'signature' => '<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p>Doloremque veniam, d.</p>
</body>
</html>',
                'is_deleted' => 'N',
                'level_1' => '1',
                'level_2' => '1',
                'images' => '1646221513.jpg',
                'modified_at' => '2022-03-02 17:15:14',
                'modified_by' => NULL,
                'created_by' => NULL,
                'deleted_by' => NULL,
                'location_id' => 1,
                'role_id' => 5,
                'last_login' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-03-02 11:45:14',
                'updated_at' => '2022-03-02 11:45:14',
            ),
            4 => 
            array (
                'id' => 5,
                'fname' => 'sukesh',
                'lname' => 'biswal',
                'mobile' => '9583443395',
                'gender' => 'male',
                'status' => 1,
                'username' => NULL,
                'password' => NULL,
                'temp_password' => NULL,
                'email' => 'sukesh@gmail.com',
                'designation' => 'ggggggggg',
                'signature' => '<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p>sukesh</p>
</body>
</html>',
                'is_deleted' => 'N',
                'level_1' => '2',
                'level_2' => '2',
                'images' => '1647857456.jpg',
                'modified_at' => '2022-03-21 15:40:56',
                'modified_by' => NULL,
                'created_by' => NULL,
                'deleted_by' => NULL,
                'location_id' => 4,
                'role_id' => 1,
                'last_login' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-03-21 10:10:56',
                'updated_at' => '2022-03-21 10:10:56',
            ),
            5 => 
            array (
                'id' => 6,
                'fname' => 'Rosalin',
                'lname' => 'biswal',
                'mobile' => '8917546702',
                'gender' => 'female',
                'status' => 1,
                'username' => NULL,
                'password' => NULL,
                'temp_password' => NULL,
                'email' => 'rosi@gmail.com',
                'designation' => 'rrrrrrrrr',
                'signature' => '<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p>rosi</p>
</body>
</html>',
                'is_deleted' => 'N',
                'level_1' => '5',
                'level_2' => '5',
                'images' => '1647857594.jpg',
                'modified_at' => '2022-03-21 15:43:14',
                'modified_by' => NULL,
                'created_by' => NULL,
                'deleted_by' => NULL,
                'location_id' => 5,
                'role_id' => 2,
                'last_login' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-03-21 10:13:14',
                'updated_at' => '2022-03-21 10:13:14',
            ),
            6 => 
            array (
                'id' => 7,
                'fname' => 'Manas',
                'lname' => 'Samal',
                'mobile' => '8917540985',
                'gender' => 'male',
                'status' => 1,
                'username' => NULL,
                'password' => NULL,
                'temp_password' => NULL,
                'email' => 'Manas@gmail.com',
                'designation' => 'tttttttt',
                'signature' => '<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p>m4samal</p>
</body>
</html>',
                'is_deleted' => 'N',
                'level_1' => '5',
                'level_2' => '5',
                'images' => '1647857896.jpg',
                'modified_at' => '2022-03-21 15:48:16',
                'modified_by' => NULL,
                'created_by' => NULL,
                'deleted_by' => NULL,
                'location_id' => 6,
                'role_id' => 2,
                'last_login' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-03-21 10:18:16',
                'updated_at' => '2022-03-21 10:18:16',
            ),
            7 => 
            array (
                'id' => 8,
                'fname' => 'Akash',
                'lname' => 'Nayak',
                'mobile' => '7894567823',
                'gender' => 'male',
                'status' => 1,
                'username' => NULL,
                'password' => NULL,
                'temp_password' => NULL,
                'email' => 'A@gmail.com',
                'designation' => 'oooooooooo',
                'signature' => '<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p>akash</p>
</body>
</html>',
                'is_deleted' => 'N',
                'level_1' => '1',
                'level_2' => '1',
                'images' => '1647858121.jpg',
                'modified_at' => '2022-03-21 15:52:01',
                'modified_by' => NULL,
                'created_by' => NULL,
                'deleted_by' => NULL,
                'location_id' => 6,
                'role_id' => 3,
                'last_login' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-03-21 10:22:01',
                'updated_at' => '2022-03-21 10:22:01',
            ),
            8 => 
            array (
                'id' => 9,
                'fname' => 'Aryanaaaa',
                'lname' => 'Nayak',
                'mobile' => '7654395689',
                'gender' => 'male',
                'status' => 1,
                'username' => NULL,
                'password' => NULL,
                'temp_password' => NULL,
                'email' => 'Aryan@gmail.com',
                'designation' => 'fffgggg',
                'signature' => '<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p>aryan</p>
</body>
</html>',
                'is_deleted' => 'N',
                'level_1' => '5',
                'level_2' => '5',
                'images' => '1647929275.jpg',
                'modified_at' => '2022-03-22 11:18:46',
                'modified_by' => 1,
                'created_by' => 1,
                'deleted_by' => NULL,
                'location_id' => 7,
                'role_id' => 6,
                'last_login' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-03-22 05:48:46',
                'updated_at' => '2022-03-22 06:07:55',
            ),
            9 => 
            array (
                'id' => 10,
                'fname' => 'arpita',
                'lname' => 'biswal',
                'mobile' => '8945678902',
                'gender' => 'female',
                'status' => 1,
                'username' => NULL,
                'password' => NULL,
                'temp_password' => NULL,
                'email' => 'arpita@gmail.com',
                'designation' => 'xyz',
                'signature' => '<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p>arpita</p>
</body>
</html>',
                'is_deleted' => 'N',
                'level_1' => '5',
                'level_2' => '5',
                'images' => '1648811650.jpg',
                'modified_at' => '2022-04-01 16:44:10',
                'modified_by' => NULL,
                'created_by' => NULL,
                'deleted_by' => NULL,
                'location_id' => 5,
                'role_id' => 8,
                'last_login' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-04-01 11:14:10',
                'updated_at' => '2022-04-01 11:14:10',
            ),
            10 => 
            array (
                'id' => 11,
                'fname' => 'banashree',
                'lname' => 'nayak',
                'mobile' => '8945674389',
                'gender' => 'female',
                'status' => 1,
                'username' => NULL,
                'password' => NULL,
                'temp_password' => NULL,
                'email' => 'bana@gmail.com',
                'designation' => 'sssss',
                'signature' => '<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p>bana</p>
</body>
</html>',
                'is_deleted' => 'N',
                'level_1' => '1',
                'level_2' => '1',
                'images' => '1648811750.jpg',
                'modified_at' => '2022-04-01 16:45:50',
                'modified_by' => NULL,
                'created_by' => NULL,
                'deleted_by' => NULL,
                'location_id' => 5,
                'role_id' => 8,
                'last_login' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-04-01 11:15:50',
                'updated_at' => '2022-04-01 11:15:50',
            ),
        ));
        
        
    }
}