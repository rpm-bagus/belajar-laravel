<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class FriendController extends Controller
{
    public function all() {
      $followers = ['Andi', 'Bobi', 'Candra', 'Dedi'];
      $following = ['Amelia', 'Barbara', 'Cindy', 'Debora'];

      return view('pages.friend', compact('followers', 'following')
      );
    }
}
