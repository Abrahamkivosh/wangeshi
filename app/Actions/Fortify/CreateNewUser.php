<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'middle_name' => ['required', 'string', 'max:255'],
            'id_number' => ['required', 'string', 'max:255'],
            'dob' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
        ])->validate();

        // dd($input['first_name']);
        $user = new User();
        $user->first_name = $input['first_name'] ;
        $user->last_name = $input['last_name'] ;
        $user->middle_name = $input['middle_name'] ;
        $user->id_number = $input['id_number'] ;
        $user->dob = $input['dob'] ;
        $user->phone = $input['phone'] ;
        $user->email = $input['email'] ;
        $user->password = Hash::make($input['password']);
        $user->save();
        return $user ;


        // return User::create([
        //     'first_name' => $input['first_name'],
        //     'last_name' => $input['last_name'],
        //     'middle_name' => $input['middle_name'],
        //     'dob' => $input['dob'],
        //     'phone' => $input['phone'],
        //     'email' => $input['email'],
        //     'password' => Hash::make($input['password'])Hash::make($input['password']),
        // ]);
    }
}
