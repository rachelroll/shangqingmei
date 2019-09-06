<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $projects;

    public function __construct()
    {
        $projects = Project::limit(12)->get();
        $this->projects = $projects;
    }
}
