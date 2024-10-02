<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Transaction;
use App\Models\Sale;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $customer = Customer::where('user_id', $user->id)->first();
        return view('user.home.index', compact(
                'customer'
        ));
    }
    public function all_users()
    {
        $customers = Customer::with(['user'])->get();

        return view ('super-admin.users.index', compact('customers'));
    }


    public function customers()
    {
        $role = 'user'; // Role for which customers should be fetched

        // Fetch customers where the associated user has the specified role
        $customers = Customer::whereHas('user', function($query) use ($role) {
            $query->whereHas('roles', function($query) use ($role) {
                $query->where('name', $role); // Check the role name
            });
        })->with('user')->get();

        return view ('super-admin.users.index', compact('customers'));
    }

    public function agents()
    {
        $role = 'agent'; // Role for which customers should be fetched

        // Fetch customers where the associated user has the specified role
        $customers = Customer::whereHas('user', function($query) use ($role) {
            $query->whereHas('roles', function($query) use ($role) {
                $query->where('name', $role); // Check the role name
            });
        })->with('user')->get();

        return view ('super-admin.users.index', compact('customers'));
    }


    public function showGenerations()
    {
        if (auth()->user()->hasRole('user')) {
            $id = auth()->user()->id;

            $user = Customer::findOrFail($id);
            $generations = $user->getGenerations();

            $tableData = [];
            $sl = 1;

            foreach ($generations as $generation => $userIds) {
                $tableData[] = [
                    'SL' => $sl++,
                    'Generation' => $generation,
                    'TotalUsers' => count($userIds),
                    'UserIDs' => implode(', ', $userIds),
                ];
            }
            return view('generations.user_generations_table', ['tableData' => $tableData]);
        }else{
            return redirect()->back()->with('error', 'Unauthorized');
        }

    }

    public function showGenerationsTree()
    {
        if (auth()->user()->hasRole('user')) {
            $id = auth()->user()->id;

            $user = Customer::findOrFail($id);
            $generationsTree = $user->getGenerationsTree();

            return view('generations.generations_tree', ['generationsTree' => $generationsTree]);
        }else{
            return redirect()->back()->with('error', 'Unauthorized');
        }

    }


}
