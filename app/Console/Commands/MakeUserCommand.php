<?php
 
namespace App\Console\Commands;
 
use App\Models\User;
use Illuminate\Console\Command;
use function Laravel\Prompts\text;
use function Laravel\Prompts\password;
 
class MakeUserCommand extends Command
{
    protected $signature = 'make:user';
    protected $description = 'Create a new user';
 
    public function handle(): void
    {
        $name = text(
            label: 'What is your name?',
            required: 'Your name is required.'
        );
        $email = text(
            label: 'What is your email?',
            required: 'Your email is required.'
        );
        $password = password(
            label: 'What is your password?',
            required: true
        );
 
        $user = User::create([
            'name' => $name,
            'email' => $email,
            'password' => bcrypt($password),
            'email_verified_at' => now(),
        ]);
 
        $this->info("User #$user->id created successfully.");
    }
}