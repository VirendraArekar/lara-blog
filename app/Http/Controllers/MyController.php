<?php

namespace App\Http\Controllers;
use App\Services\FaceService;

use Illuminate\Http\Request;

class MyController extends Controller
{
  protected $userRepository;
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }
    public function show($id)
    {
        $user = $this->userRepository->find($id);
        return view('user.profile', ['user' => $user]);
    }
}
