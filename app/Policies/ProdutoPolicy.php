<?php
 
namespace App\Policies;

use App\Models\Produto;
use App\Models\User;
 
class ProdutoPolicy
{
    public function create(?User $user, Produto $produtos): bool
    {
        return !is_null($user);
    }


    public function delete(?User $user, Produto $produtos): bool
    {
        return !is_null($user);
    }


    /**
     * Determine if the given post can be updated by the user.
     */
    public function update(?User $user, Produto $produtos): bool
    {
        return !is_null($user);
    }
}

