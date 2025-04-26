<?php
namespace Bims\Modules\Employee\Controllers;

use Bims\Core\Controller;

class EmployeeController extends Controller
{
    public function profile()
    {
        $this->view('employee/Views/Snapshot', [
            'name' => 'Johnathan M. Johnson',
        ]);
    }
}
