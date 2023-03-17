<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Validator;

class CreateUserCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:user';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create user';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        do {
            $email = $this->ask('E-Mail?');
            $email_validator = Validator::make(
                ['email' => $email],
              ['email' => [
                  'required', 'string', 'email', 'max:254', 'unique:users,email',
              ],
              ],
            );
            $this->outputErrors($email_validator);
        } while ($email_validator->fails());

        do {
            $name = $this->ask('Name?');
            $name_validator = Validator::make(
                ['name' => $name],
                [
                    'name' => ['required', 'string', 'max:254'],
                ],
            );
            $this->outputErrors($name_validator);
        } while ($name_validator->fails());

        do {
            $password = $this->ask('Password');
            $password_validator = Validator::make(
                ['name' => $name],
                [
                    'name' => ['required', 'string', 'min:6'],
                ],
            );
            $this->outputErrors($password_validator);
        } while ($password_validator->fails());

        User::create([
            'name' => $name,
            'email' => $email,
            'password' => bcrypt($password),
        ]);

        $this->info("The user $name with the email: $email, was successfully created.");
    }

    protected function outputErrors($validator)
    {
        foreach ($validator->errors()->all() as $error) {
            $this->info("$error");
        }
    }
}
