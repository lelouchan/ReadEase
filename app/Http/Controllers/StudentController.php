<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class StudentController extends Controller
{
    public function search(Request $request)
    {
        try {
            $searchTerm = $request->input('search');
            Log::info('Search term received: ' . $searchTerm);
            
            $student = Student::where('name', 'like', '%' . $searchTerm . '%')
                             ->where('section', 'Narra')
                             ->where('grade_level', 'Grade 7')
                             ->first();

            Log::info('Search result: ' . ($student ? $student->name : 'No student found'));
            
            return response()->json($student);
        } catch (\Exception $e) {
            Log::error('Search error: ' . $e->getMessage());
            return response()->json(['error' => 'An error occurred during the search'], 500);
        }
    }
}
