<?php

namespace App\Http\Controllers;
use App\User;

trait GetCredits {
    public function getCredits($id)
    {
            $credits = User::find($id)->jobs->where('completed', '=', 1)->count();

            return $credits;
    }
}