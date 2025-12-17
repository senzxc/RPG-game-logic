<?php

namespace App\Http\Controllers;

use App\Models\Character;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $char = Character::where('user_id', Auth::id())
                        ->first();

        return view('index', [
            'title' => 'Home'
        ], compact('char'));
    }

    public function charHome()
    {
        return view('charMaker', [
            'title' => 'Character Creation'
        ]);
    }

    public function charCreate(Request $request)
    {
        $data = $request->validate([
            'name' => 'required'
        ]);

        Character::create([
            'user_id' => Auth::id(),
            'name' => $data['name'],
            'hp' => '100',
            'atk' => '50',
            'coins' => '10',
            'stamina' => '100',
        ]);
        
        return redirect('/');
    }

    public function buy(Request $request)
    {
        $char = Character::where('user_id', Auth::id())
                        ->first();

        if ($request->item === 'atk')
        {
            if ($char->coins >= 5)
            {
                $char->atk += 5;
                $char->coins -= 5;
                $char->save();

                return back()->with('success', 'You bought an attack upgrade.');
            }
        }

        elseif ($request->item === 'hp') 
        {
            if ($char->coins >= 5)
            {
                $char->hp += 10;
                $char->coins -= 5;
                $char->save();

                return back()->with('success', 'You bought a health upgrade.');
            }
        }

        return back()->withErrors([
            'record' => 'Not enuf coins.'
        ]);

    }

    public function dungeon()
    {
        $char = Character::where('user_id', Auth::id())
                        ->first();

        if ($char->stamina >= 20)
        {
            $char->stamina -= 20;
            $char->coins += 20;
            $char->save();

            return back()->with('success', 'You explored the dungeon and earned 20 coins!');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
