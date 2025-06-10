<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class DashboardController extends Controller
{
    //Function for randomly displaying mentors
    public function index()
    {
        $response = Http::withoutVerifying()->get('https://app.milmentor.com/api/mentors?token=SbYMeCHoQLEQP2gw2CUErCmqtaVUyTDjZanzZwx4luiaYDi7Aday7MwEMe55pAnt');
        $mentorsData = $response->json();

        $allMentors = $mentorsData['data'];

        $randomMentors = collect($allMentors)->shuffle()->take(6)->map(function ($mentor) {
            return [
                'id' => $mentor['id'],
                'img' => $mentor['avatar'],
                'name' => $mentor['name'],
                'company' => $mentor['experience'][0]['company'] ?? 'N/A',
                'role' => $mentor['experience'][0]['title'] ?? 'N/A',
                'industry' => $mentor['industry'] ?? 'N/A',
            ];
        });

        $json = file_get_contents(resource_path('data/careers.json'));
        $careerData = json_decode($json, true);


        $allCareers = $careerData['data'];

        $randomCareers = collect($allCareers)->shuffle()->take(6)->map(function ($career) {
            return [
                'img' => $career['img'],
                'title' => $career['title'],
                'company' => $career['company'],
                'salary' => $career['salary'],
                'location' => $career['location'],
                'job-site' => $career['job-site'],
            ];
        });

        return view('welcome', ['mentors' => $randomMentors, 'careers' => $randomCareers, ]);
    }
}
