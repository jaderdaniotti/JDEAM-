<?php

namespace App\Actions\Fortify;

use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'password' => $this->passwordRules(),
            'image' => ['required', 'image', 'max:2048'],
        ])->validate();

        if (isset($input['image']) && $input['image'] instanceof \Illuminate\Http\UploadedFile) {
            $imagePath = $input['image']->store('covers', 'public');
        } else {
            throw new \InvalidArgumentException('Invalid image file provided.');
        }

        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'image' => $imagePath,
        ]);
    }
}
