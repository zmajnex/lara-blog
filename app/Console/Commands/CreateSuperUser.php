<?php

namespace App\Console\Commands;

use App\Models\Role;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class CreateSuperUser extends Command

{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */

    protected $signature = 'user:create ';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create new user';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        $this->checkIfAdminExists();
        $name = $this->ask('What is your name?');
        $email = $this->ask('What is your email?');
        $password = $this->secret('What is the password?');
        $role = $this->choice( 'Choose a role for user', $this->getRoles());
        // validate email
        $validator = Validator::make(['email' => $email],
            ['email' => [ 'unique:users,email'],
                'email' => ['required', 'email']
            ]);
        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $error) {
                $this->error($error);
            }
            return 1;
        };
        User::create([
            'name'=>$name,
            'email'=>$email,
            'role_id'=>$this->getRoleId($role),
            'password'=>bcrypt($password),
            'remember_token' => Str::random(10)
        ]);

        $this->info('Super user successfully created!');
    }

    /**
     * Get roles from the table
     * @return array
     */
    public function getRoles() {
        $data =[];
        foreach (Role::all() as $role){
            $data [] = $role->role_name;
        }
        return $data;
    }

    /**
     * @return mixed
     */
    public function getRoleId($role)
    {
        return Role::where('role_name', $role)->first()->id;
    }

    /**
     * Check if admin exists if not create one in roles table
     */
    public function checkIfAdminExists(): void
    {
        if (!(Role::where('role_name', 'admin')->first())) {
            Role::create([
                'role_name' => 'admin'
            ]);
        }
    }
}
